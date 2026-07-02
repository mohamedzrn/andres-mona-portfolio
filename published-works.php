<?php
$pageTitle = 'Published Works';
include __DIR__ . '/includes/header.php';

$publishedSections = [
    'Articles and Published Works' => 'Published articles and short stories.',
    'Comms Materials' => 'Strategic communications plans and other publications.',
];
?>

<section>
    <div class="container">
        <div class="section-head fade-in">
            <p class="hero-eyebrow">Published Works &amp; Comms Materials</p>
            <h1>Published Works</h1>
            <p>Articles, short stories, and strategic communications materials.</p>
        </div>

        <?php foreach ($publishedSections as $title => $blurb): ?>
        <div class="fade-in stack-block">
            <h3><?= htmlspecialchars($title) ?></h3>
            <?php if (!empty($publishedWorks[$title])): ?>
                <ul class="contact-info-list">
                    <?php foreach ($publishedWorks[$title] as $work): ?>
                    <li>
                        <span><?= htmlspecialchars($work['date'] ?? '') ?></span>
                        <a href="<?= htmlspecialchars($work['url']) ?>" target="_blank" rel="noopener"><?= htmlspecialchars($work['title']) ?></a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <div class="coming-soon">
                    <h3>Coming Soon</h3>
                    <p><?= htmlspecialchars($blurb) ?> Content for this section is being finalized.</p>
                </div>
            <?php endif; ?>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<?php
$ctaHeading = 'Read More Of The Work';
$ctaText = 'Get in touch for writing samples, comms plans, or collaboration.';
include __DIR__ . '/includes/cta.php';
include __DIR__ . '/includes/footer.php';
?>
