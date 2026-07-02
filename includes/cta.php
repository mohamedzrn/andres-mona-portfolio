<?php
/**
 * Reusable closing call-to-action. Include after a page's main content,
 * before includes/footer.php. Override $ctaHeading / $ctaText / $ctaHref /
 * $ctaLabel before the include to customize; otherwise falls back to a
 * generic "get in touch" prompt.
 */
$ctaHeading = $ctaHeading ?? 'Let\'s Connect';
$ctaText = $ctaText ?? 'Interested in this work or want to get in touch?';
$ctaHref = $ctaHref ?? '/contact.php';
$ctaLabel = $ctaLabel ?? 'Get In Touch';
?>
<section class="section-alt cta-section fade-in">
    <div class="container">
        <div class="section-head">
            <h2><?= htmlspecialchars($ctaHeading) ?></h2>
            <p><?= htmlspecialchars($ctaText) ?></p>
        </div>
        <a class="btn btn-solid" href="<?= htmlspecialchars($ctaHref) ?>"><?= htmlspecialchars($ctaLabel) ?></a>
    </div>
</section>
<?php
unset($ctaHeading, $ctaText, $ctaHref, $ctaLabel);
