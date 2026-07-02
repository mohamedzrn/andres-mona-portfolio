<header class="site-header">
    <div class="nav-wrap">
        <a class="brand" href="/index.php"><?= htmlspecialchars($site['name']) ?></a>
        <button class="nav-toggle" id="navToggle" aria-label="Toggle navigation" aria-expanded="false" aria-controls="siteNav">
            <span></span><span></span><span></span>
        </button>
        <nav class="site-nav" id="siteNav">
            <ul>
                <?php foreach ($nav as $href => $label): ?>
                <li>
                    <a href="/<?= htmlspecialchars($href) ?>" class="<?= $currentPage === $href ? 'active' : '' ?>">
                        <?= htmlspecialchars($label) ?>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </div>
</header>
