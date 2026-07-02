<?php
$pageTitle = 'Photo Gallery';
include __DIR__ . '/includes/header.php';

$usedCategories = array_unique(array_column($galleryItems, 'category'));
?>

<section>
    <div class="container">
        <div class="section-head fade-in">
            <p class="hero-eyebrow">General Photo Gallery</p>
            <h1>Photo Gallery</h1>
            <p>A field record of operations, training, ceremony, and community work.</p>
        </div>

        <div class="gallery-filters fade-in">
            <button class="filter-btn active" data-category="all">All</button>
            <?php foreach ($galleryCategories as $key => $label): ?>
                <?php if ($key === 'all' || !in_array($key, $usedCategories, true)) continue; ?>
                <button class="filter-btn" data-category="<?= htmlspecialchars($key) ?>"><?= htmlspecialchars($label) ?></button>
            <?php endforeach; ?>
        </div>

        <div class="gallery-grid fade-in">
            <?php foreach ($galleryItems as $item): ?>
            <div class="gallery-item" data-category="<?= htmlspecialchars($item['category']) ?>" data-full="/<?= htmlspecialchars($item['src']) ?>" data-caption="<?= htmlspecialchars($item['caption']) ?>">
                <img src="/<?= htmlspecialchars($item['src']) ?>" alt="<?= htmlspecialchars($item['caption'] ?: $item['category']) ?>" loading="lazy">
                <span class="cat-tag"><?= htmlspecialchars($item['category']) ?></span>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<div class="lightbox" id="lightbox">
    <button class="lightbox-close" aria-label="Close">&times;</button>
    <button class="lightbox-nav lightbox-prev" aria-label="Previous">&larr;</button>
    <div class="lightbox-inner bracket-frame">
        <span class="corner corner-tl" aria-hidden="true"></span>
        <span class="corner corner-tr" aria-hidden="true"></span>
        <span class="corner corner-bl" aria-hidden="true"></span>
        <span class="corner corner-br" aria-hidden="true"></span>
        <img src="" alt="">
        <p class="lightbox-caption"></p>
    </div>
    <button class="lightbox-nav lightbox-next" aria-label="Next">&rarr;</button>
</div>

<?php include __DIR__ . '/includes/cta.php'; ?>

<?php include __DIR__ . '/includes/footer.php'; ?>
