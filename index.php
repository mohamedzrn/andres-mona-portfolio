<?php
$pageTitle = 'Home';
include __DIR__ . '/includes/header.php';
?>

<section class="hero">
    <div class="hero-copy fade-in">
        <p class="hero-eyebrow">Storyteller &middot; Strategist &middot; Public Affairs</p>
        <h1><?= htmlspecialchars($site['name']) ?></h1>
        <ul class="hero-titles">
            <?php foreach ($site['titles'] as $title): ?>
            <li><?= htmlspecialchars($title) ?></li>
            <?php endforeach; ?>
        </ul>
        <p>Welcome. This space brings together the work, the operations, and the storytelling behind a career built on strategic communications, public affairs, and research in strategy and sustainability.</p>
        <div class="doc-actions">
            <a class="btn btn-solid" href="/about.php">Read the Biography</a>
            <a class="btn" href="/gallery.php">View the Gallery</a>
        </div>
    </div>
    <div class="hero-photo bracket-frame fade-in">
        <span class="corner corner-tl" aria-hidden="true"></span>
        <span class="corner corner-tr" aria-hidden="true"></span>
        <span class="corner corner-bl" aria-hidden="true"></span>
        <span class="corner corner-br" aria-hidden="true"></span>
        <img src="/assets/img/headshots/headshot-1.jpg" alt="<?= htmlspecialchars($site['name']) ?> headshot">
    </div>
</section>

<section>
    <div class="container">
        <div class="section-head fade-in">
            <p class="hero-eyebrow">From The Field</p>
            <h2>Featured Work</h2>
            <p>A sample from the General Photo Gallery: operations, ceremony, training, and community work.</p>
        </div>
        <div class="gallery-grid fade-in">
            <?php foreach (array_slice($galleryItems, 0, 6) as $item): ?>
            <a class="gallery-item" href="/gallery.php">
                <img src="/<?= htmlspecialchars($item['src']) ?>" alt="<?= htmlspecialchars($item['caption'] ?: $item['category']) ?>" loading="lazy">
                <span class="cat-tag"><?= htmlspecialchars($item['category']) ?></span>
            </a>
            <?php endforeach; ?>
        </div>
        <div class="doc-actions">
            <a class="btn" href="/gallery.php">View Full Gallery</a>
        </div>
    </div>
</section>

<section class="section-alt">
    <div class="container">
        <div class="section-head fade-in">
            <h2>Where He Works</h2>
            <p>A career spanning military public affairs, academic research, education, and community advocacy.</p>
        </div>
        <ul class="org-grid fade-in">
            <?php foreach ($site['organizations'] as $org): ?>
            <li><?= htmlspecialchars($org) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>

<?php
$ctaHeading = 'Let\'s Connect';
$ctaText = 'Reach out to talk strategy, storytelling, or collaboration.';
include __DIR__ . '/includes/cta.php';
include __DIR__ . '/includes/footer.php';
?>
