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
contact-handler.php        PHP handler for the contact form (validation, honeypot, mail())

includes/                  Shared header, nav, footer, and a reusable CTA partial
config/site-data.php       Central site data: nav, org list, gallery items/categories
assets/                    CSS, JS, images, and downloadable files (resume/cover letter PDFs)
```

Gallery, org list, and other site content live in `config/site-data.php` so new items can be
added without touching page templates.

## Content policy

No AI-generated or AI-edited content (copy or photos) in the final product — this is a hard
constraint from Andres. Biography and all personal copy are his own writing, used verbatim.
Contributors should only touch structure, layout, and code, not write replacement copy or
alter photos.

## Known gaps

- Multimedia Projects and Published Works & Comms Materials currently render a "Coming Soon"
  state — their Drive source folders are empty pending content from Andres.
- `contact-handler.php` uses PHP's `mail()`, which needs a working MTA on the deploy target.
  Verify it actually sends before launch, or swap in SMTP/PHPMailer.
