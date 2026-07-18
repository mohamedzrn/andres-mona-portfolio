# Andres Mona Portfolio

Personal portfolio site for Andres Mona (communications strategist, public affairs representative, and research associate).

## Running locally

Requires PHP 8+. From the project root:

```
php -S localhost:8000
```

Then visit `http://localhost:8000`.

## Structure

```
index.php                 Home
about.php                 Biography
gallery.php                Photo gallery (filter + lightbox)
multimedia.php             Multimedia projects
published-works.php        Published works & comms materials
resume.php                 Resume / cover letter
contact.php                 Contact form
contact-handler.php        PHP handler for the contact form (validation, honeypot, SMTP/mail())

includes/                  Shared header, nav, footer, and a reusable CTA partial
config/site-data.php       Central site data: nav, org list, gallery items/categories
assets/                    CSS, JS, images, and downloadable files (resume/cover letter PDFs)
```

Gallery, org list, and other site content live in `config/site-data.php` so new items can be
added without touching page templates.

## Contact form email

The contact form sends via SMTP when configured, falls back to PHP `mail()` otherwise, and
always archives every submission to `storage/messages/` (gitignored; created by the
Dockerfile with `www-data` ownership) so a mail failure never loses a message.

SMTP is configured through environment variables (set them on the deploy target, e.g. the
Docker container):

| Variable | Meaning |
|---|---|
| `SMTP_HOST` | SMTP server, e.g. `smtp.gmail.com`. Unset = fall back to `mail()` |
| `SMTP_PORT` | `587` (STARTTLS, default) or `465` (implicit TLS) |
| `SMTP_USER` | Account username (e.g. the Gmail address) |
| `SMTP_PASS` | Password / app password |
| `SMTP_FROM` | From address (defaults to `SMTP_USER`) |

## Content policy

No AI-generated or AI-edited content (copy or photos) in the final product — this is a hard
constraint from Andres. Biography and all personal copy are his own writing, used verbatim.
Contributors should only touch structure, layout, and code, not write replacement copy or
alter photos.

## Known gaps

- A July 2026 content sync from Drive is in progress — see `DRIVE-SYNC-PLAN.md` for the
  full worklist (new gallery photos, new multimedia sections, article/comms additions, and
  video conversions still pending asset downloads).
- The Videos "Civilian & Non-Profit" subsection renders Coming Soon until the incoming
  video files (Middlesex Trails / London Foodbank stories) are converted and added.
- The contact form's SMTP path (see "Contact form email" above) has not yet been exercised
  against a real SMTP account — verify an end-to-end send before launch. The `mail()`
  fallback still needs a working MTA on the deploy target.
