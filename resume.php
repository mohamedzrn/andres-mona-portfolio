<?php
$pageTitle = 'Resume';
include __DIR__ . '/includes/header.php';
?>

<section>
    <div class="container">
        <div class="section-head fade-in">
            <p class="hero-eyebrow">Resume &amp; Cover Letter</p>
            <h1>Resume</h1>
        </div>

        <div class="doc-actions fade-in">
            <a class="btn btn-solid" href="/assets/files/andres-mona-resume.pdf" download>Download Resume (PDF)</a>
            <a class="btn" href="/assets/files/cover-letter-community-engagement-outreach-coordinator.pdf" download>Download Cover Letter Sample (PDF)</a>
        </div>

        <div class="fade-in stack-block">
            <h3>Resume</h3>
            <embed class="resume-embed" src="/assets/files/andres-mona-resume.pdf" type="application/pdf">
        </div>

        <div class="fade-in">
            <h3>Cover Letter Sample</h3>
            <embed class="resume-embed" src="/assets/files/cover-letter-community-engagement-outreach-coordinator.pdf" type="application/pdf">
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
