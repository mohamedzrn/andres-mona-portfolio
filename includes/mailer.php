<?php
/**
 * Minimal SMTP mailer (no dependencies). Used by contact-handler.php.
 *
 * Configure via environment variables (e.g. in the Docker deploy):
 *   SMTP_HOST   smtp.gmail.com
 *   SMTP_PORT   587 (STARTTLS) or 465 (implicit TLS)
 *   SMTP_USER   account username (e.g. the Gmail address)
 *   SMTP_PASS   password / app password
 *   SMTP_FROM   From address (defaults to SMTP_USER)
 *
 * If SMTP_HOST is not set, smtp_is_configured() returns false and the
 * caller falls back to PHP mail().
 */

function smtp_is_configured(): bool {
    return getenv('SMTP_HOST') !== false && getenv('SMTP_USER') !== false && getenv('SMTP_PASS') !== false;
}

function smtp_send(string $to, string $subject, string $body, string $replyToName, string $replyToEmail, ?string &$error = null): bool {
    $host = getenv('SMTP_HOST');
    $port = (int) (getenv('SMTP_PORT') ?: 587);
    $user = getenv('SMTP_USER');
    $pass = getenv('SMTP_PASS');
    $from = getenv('SMTP_FROM') ?: $user;

    $implicitTls = ($port === 465);
    $remote = ($implicitTls ? 'ssl://' : 'tcp://') . $host . ':' . $port;
    $fp = @stream_socket_client($remote, $errno, $errstr, 15);
    if (!$fp) {
        $error = "connect failed: $errstr";
        return false;
    }
    stream_set_timeout($fp, 15);

    $read = function () use ($fp): string {
        $data = '';
        while (($line = fgets($fp, 515)) !== false) {
            $data .= $line;
            if (isset($line[3]) && $line[3] === ' ') {
                break;
            }
        }
        return $data;
    };
    $cmd = function (string $c, array $expect) use ($fp, $read, &$error): bool {
        fwrite($fp, $c . "\r\n");
        $resp = $read();
        $code = (int) substr($resp, 0, 3);
        if (!in_array($code, $expect, true)) {
            $error = "unexpected reply to " . strtok($c, ' ') . ": " . trim($resp);
            return false;
        }
        return true;
    };

    $banner = $read();
    if ((int) substr($banner, 0, 3) !== 220) {
        $error = 'bad banner: ' . trim($banner);
        fclose($fp);
        return false;
    }

    $hostname = gethostname() ?: 'localhost';
    if (!$cmd("EHLO $hostname", [250])) { fclose($fp); return false; }

    if (!$implicitTls) {
        if (!$cmd('STARTTLS', [220])) { fclose($fp); return false; }
        if (!stream_socket_enable_crypto($fp, true, STREAM_CRYPTO_METHOD_TLS_CLIENT)) {
            $error = 'TLS negotiation failed';
            fclose($fp);
            return false;
        }
        if (!$cmd("EHLO $hostname", [250])) { fclose($fp); return false; }
    }

    if (!$cmd('AUTH LOGIN', [334])
        || !$cmd(base64_encode($user), [334])
        || !$cmd(base64_encode($pass), [235])) {
        fclose($fp);
        return false;
    }

    if (!$cmd("MAIL FROM:<$from>", [250]) || !$cmd("RCPT TO:<$to>", [250, 251]) || !$cmd('DATA', [354])) {
        fclose($fp);
        return false;
    }

    $headers = [
        'From: Portfolio Site <' . $from . '>',
        'To: <' . $to . '>',
        'Reply-To: ' . $replyToName . ' <' . $replyToEmail . '>',
        'Subject: ' . $subject,
        'Date: ' . date(DATE_RFC2822),
        'MIME-Version: 1.0',
        'Content-Type: text/plain; charset=UTF-8',
        'Content-Transfer-Encoding: 8bit',
    ];
    // Dot-stuff lines starting with "." per RFC 5321.
    $data = implode("\r\n", $headers) . "\r\n\r\n" . preg_replace('/^\./m', '..', $body);
    fwrite($fp, $data . "\r\n.\r\n");
    $resp = $read();
    $ok = (int) substr($resp, 0, 3) === 250;
    if (!$ok) {
        $error = 'message rejected: ' . trim($resp);
    }
    $cmd('QUIT', [221]);
    fclose($fp);
    return $ok;
}
