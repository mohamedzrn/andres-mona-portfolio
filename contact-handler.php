<?php
require_once __DIR__ . '/config/site-data.php';

header('Content-Type: application/json');

function respond(bool $success, string $message, int $code = 200): void {
    http_response_code($code);
    echo json_encode(['success' => $success, 'message' => $message]);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    respond(false, 'Invalid request method.', 405);
}

// Honeypot: real visitors never see or fill this field.
if (!empty($_POST['company'])) {
    respond(true, 'Message sent. Thank you.');
}

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$message = trim($_POST['message'] ?? '');

if ($name === '' || $email === '' || $message === '') {
    respond(false, 'Please fill in all fields.', 422);
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    respond(false, 'Please enter a valid email address.', 422);
}

if (mb_strlen($name) > 200 || mb_strlen($message) > 5000) {
    respond(false, 'Submission is too long.', 422);
}

$safeReplyName = str_replace(["\r", "\n"], '', $name);

$to = $site['socials']['email_primary'];
$subject = 'Portfolio Contact Form: ' . $safeReplyName;
$body = "Name: {$name}\nEmail: {$email}\n\nMessage:\n{$message}\n";

$headers = [
    'From: Portfolio Site <no-reply@' . ($_SERVER['SERVER_NAME'] ?? 'localhost') . '>',
    'Reply-To: ' . $safeReplyName . ' <' . $email . '>',
    'Content-Type: text/plain; charset=UTF-8',
];

$sent = mail($to, $subject, $body, implode("\r\n", $headers));

if ($sent) {
    respond(true, 'Message sent. Andres will get back to you soon.');
}

respond(false, 'Something went wrong sending your message. Please try again later.', 500);
