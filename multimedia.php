<?php
$pageTitle = 'Multimedia Projects';
include __DIR__ . '/includes/header.php';

$multimediaSections = [
    'Videos - Army' => 'Field footage and video projects produced with the Canadian Army.',
    'Videos - Civilian & Non-Profit' => 'Video stories produced for community and non-profit organizations.',
    'Boys and Girls Club London (BGC)' => 'Multimedia work produced in support of BGC London.',
    'Canadian Army: 31 Canadian Brigade Group' => 'A magazine produced for the Canadian Army, 31 CBG.',
    'London InterCommunity Health Centre' => 'Integrated Media Project produced for the London InterCommunity Health Centre (December 2023).',
    'Middlesex County (Middlesex Trails)' => 'Trail guide and map materials produced for Middlesex County.',
];
?>

<section>
    <div class="container">
        <div class="section-head fade-in">
            <p class="hero-eyebrow">Multimedia Projects</p>
            <h1>Multimedia</h1>
            <p>Video and multimedia work completed across military, community, and academic projects.</p>
        </div>

        <?php foreach ($multimediaSections as $title => $blurb): ?>
        <div class="fade-in stack-block">
            <h3><?= htmlspecialchars($title) ?></h3>
            <?php if (!empty($multimediaProjects[$title])): ?>
                <div class="gallery-grid">
                    <?php foreach ($multimediaProjects[$title] as $project): ?>
                    <?php if (($project['type'] ?? 'image') === 'pdf'): ?>
                    <a class="gallery-item doc-item" href="/<?= htmlspecialchars($project['url']) ?>" target="_blank" rel="noopener">
                        <span class="doc-item-icon">PDF</span>
                        <span class="cat-tag"><?= htmlspecialchars($project['title']) ?></span>
                    </a>
                    <?php elseif (($project['type'] ?? 'image') === 'link'): ?>
                    <a class="gallery-item doc-item" href="<?= htmlspecialchars($project['url']) ?>" target="_blank" rel="noopener">
                        <span class="doc-item-icon">WEB</span>
                        <span class="cat-tag"><?= htmlspecialchars($project['title']) ?></span>
                    </a>
                    <?php elseif (($project['type'] ?? 'image') === 'video'): ?>
                    <div class="gallery-item video-item">
                        <video controls preload="metadata" src="/<?= htmlspecialchars($project['src']) ?>"></video>
                        <span class="cat-tag"><?= htmlspecialchars($project['title']) ?></span>
                    </div>
                    <?php else: ?>
                    <div class="gallery-item" data-full="/<?= htmlspecialchars($project['thumb']) ?>" data-caption="<?= htmlspecialchars($project['title']) ?>">
                        <img src="/<?= htmlspecialchars($project['thumb']) ?>" alt="<?= htmlspecialchars($project['title']) ?>">
                        <span class="cat-tag"><?= htmlspecialchars($project['title']) ?></span>
                    </div>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </div>
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

<?php include __DIR__ . '/includes/lightbox.php'; ?>

<?php
$ctaHeading = 'Have A Project In Mind?';
$ctaText = 'Get in touch to discuss multimedia and communications work.';
include __DIR__ . '/includes/cta.php';
include __DIR__ . '/includes/footer.php';
?>
