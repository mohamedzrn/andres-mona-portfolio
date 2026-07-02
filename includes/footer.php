</main>
<footer class="site-footer">
    <div class="footer-wrap">
        <div class="footer-name">
            <strong><?= htmlspecialchars($site['name']) ?></strong>
            <span><?= htmlspecialchars(implode(' · ', $site['titles'])) ?></span>
        </div>
        <ul class="footer-links">
            <li><a href="<?= htmlspecialchars($site['socials']['linkedin']) ?>" target="_blank" rel="noopener">LinkedIn</a></li>
            <li><a href="mailto:<?= htmlspecialchars($site['socials']['email_primary']) ?>"><?= htmlspecialchars($site['socials']['email_primary']) ?></a></li>
            <li><a href="<?= htmlspecialchars($site['socials']['the_org']) ?>" target="_blank" rel="noopener">The Org</a></li>
        </ul>
        <p class="footer-copy">&copy; <?= date('Y') ?> <?= htmlspecialchars($site['name']) ?>. All rights reserved.</p>
    </div>
</footer>
<script src="/assets/js/main.js"></script>
</body>
</html>
