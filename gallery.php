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

<?php include __DIR__ . '/includes/lightbox.php'; ?>

<?php include __DIR__ . '/includes/cta.php'; ?>

<?php include __DIR__ . '/includes/footer.php'; ?>
