<?php
$pageTitle = 'Contact';
include __DIR__ . '/includes/header.php';
?>

<section>
    <div class="container">
        <div class="section-head fade-in">
            <p class="hero-eyebrow">Get In Touch</p>
            <h1>Contact</h1>
        </div>

        <div class="contact-grid fade-in">
            <form id="contactForm" action="/contact-handler.php" method="POST" novalidate>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                <!-- honeypot: hidden from real visitors, bots tend to fill every field -->
                <div class="form-group form-honeypot" aria-hidden="true">
                    <label for="company">Company</label>
                    <input type="text" id="company" name="company" tabindex="-1" autocomplete="off">
                </div>
                <button type="submit" class="btn btn-solid">Send Message</button>
                <div class="form-status" id="formStatus"></div>
            </form>

            <div>
                <ul class="contact-info-list">
                    <li>
                        <span>Email</span>
                        <a href="mailto:<?= htmlspecialchars($site['socials']['email_primary']) ?>"><?= htmlspecialchars($site['socials']['email_primary']) ?></a>
                    </li>
                    <li>
                        <span>Work Email</span>
                        <a href="mailto:<?= htmlspecialchars($site['socials']['email_secondary']) ?>"><?= htmlspecialchars($site['socials']['email_secondary']) ?></a>
                    </li>
                    <li>
                        <span>LinkedIn</span>
                        <a href="<?= htmlspecialchars($site['socials']['linkedin']) ?>" target="_blank" rel="noopener">Andres Mona</a>
                    </li>
                    <li>
                        <span>The Org</span>
                        <a href="<?= htmlspecialchars($site['socials']['the_org']) ?>" target="_blank" rel="noopener">View Profile</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
