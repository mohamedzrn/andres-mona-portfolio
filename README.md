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

- Multimedia Projects still renders a "Coming Soon" state in the site, but its Drive source
  folders are no longer empty — Andres has since added real content (2 videos in `Videos`;
  a media advisory + 2 flyers in `Boys and Girls Club London (BGC)`; a full magazine draft,
  cover pages, AO maps, infographics, and brand guide in `31 Canadian Brigade Group - Magazine
  Sample`, credited to him as author/editor/translator). None of this has been pulled into
  `config/site-data.php`/`multimedia.php` yet.
- Published Works: the Articles subsection is populated. Comms Materials is still intentionally
  empty — the files there list other officers as media contact and one is marked "adapted for
  training purposes," so it was held pending confirmation from Andres rather than published as
  his own work.
- `contact-handler.php` uses PHP's `mail()`, which needs a working MTA on the deploy target.
  Verify it actually sends before launch, or swap in SMTP/PHPMailer.
