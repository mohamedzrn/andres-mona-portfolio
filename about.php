<?php
$pageTitle = 'About';
include __DIR__ . '/includes/header.php';
?>

<section>
    <div class="container">
        <div class="section-head fade-in">
            <p class="hero-eyebrow">Biography</p>
            <h1><?= htmlspecialchars($site['full_name']) ?></h1>
        </div>

        <div class="bio-copy fade-in">
            <blockquote>
                <p><em>&ldquo;We declare that the splendor of the world has been enriched by a new beauty: the beauty of speed. A racing automobile with its bonnet adorned with great tubes like serpents with explosive breath...a roaring motor car which seems to run on machine-gun fire, is more beautiful than the Victory of Samothrace.&rdquo;</em></p>
                <p>&mdash; F. T. Marinetti</p>
            </blockquote>

            <p>My name is Andres Mona, and at my core, I am a storyteller&hellip; someone who looks at the chaotic and equally sublime world we inhabit to find the narrative threads that bring it all into focus on the inimitable human experience. Our world, increasingly driven and unrelentingly pushed by automation and fanciful technology, raises the looming question of humanity&rsquo;s future, especially in the arts and fields of creativity; a question that grows ever louder with the passing of time. I champion the belief that our unique power lies in our ability to craft meaning from nothing, to generate order from pandemonium and ultimately move people to passion with the written and spoken word. Marinetti&rsquo;s quote aptly expresses the notions we contend with as creators: the rejection of the ancient beauty of the human creative spirit, imperfect, janky and often awkward in its expression. In our haste, we have sold ourselves to the machine of convenience and chosen to worship a &ldquo;god&rdquo; of quick and easy solutions. Therefore, it is the absolute imperative of the storyteller to remind humanity of the texture of our own existence, the unremitting doubts and the profound triumphs that a machine can simulate but never truly possess. Real storytelling does not exist to optimize or accelerate; it exists to ground us.</p>

            <p>Born in the United States to a Colombian family who fled the violence of the guerrilla conflict as refugees, my very existence was shaped by displacement and the necessity for resilience found in the human spirit. Growing up within the hyphen of these identities, I learned early on that stories are like life rafts; they are our saving graces. They are how we preserve our heritage, reconcile our trauma and how we rebuild an often-fractured sense of belonging. This instilled in me an intrinsic curiosity for culture and a passion for language, leading me to operate fluidly across distinct worlds. I am trilingual and fluent in English, French and Spanish, with the ability to read and understand both Portuguese and Catalan.</p>

            <p>My desire to bridge these cultural anecdotes into a deliberate craft would eventually guide me along my academic journey at Western University. There, I immersed myself in the power of language, earning a Bachelor&rsquo;s degree with a double major in English and French, followed by two Master&rsquo;s degrees: one in English Studies and Literature and the other in Communications and Journalism. Parallel to my academic journey, I joined the Canadian Army, serving as an infantry soldier and quickly rising through the ranks to become an instructor and, eventually, a Public Affairs Representative. Beyond those spaces, I have been blessed to partner with diverse non-profits both in the city of London, Ontario and the Greater Toronto area, with whom I provided strategic communications consultation and advice. Presently, I have retired from the Canadian Military and currently conduct international research with Ivey Business School at Western University as a Research Associate. There, I work alongside academic partners at the University of S&atilde;o Paulo and UNAM within the field of Indigenous Management and Organization studies.</p>

            <p>I have built this portfolio as a testament to my mission that now more than ever, amid rapid advances in technology and within this landscape of uncertainty, the necessity for writers, communicators, scholars and storytellers becomes more vital than ever. &ldquo;As far as we can discern, the sole purpose of human existence is to kindle a light of meaning in the darkness of mere being.&rdquo; &mdash; Carl Jung</p>
        </div>
    </div>
</section>

<section class="section-alt">
    <div class="container">
        <div class="section-head fade-in">
            <h2>Organizations</h2>
        </div>
        <ul class="org-grid fade-in">
            <?php foreach ($site['organizations'] as $org): ?>
            <li><?= htmlspecialchars($org) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>

<?php
$ctaHeading = 'See The Work';
$ctaText = 'Browse the field photography behind this career.';
$ctaHref = '/gallery.php';
$ctaLabel = 'View The Gallery';
include __DIR__ . '/includes/cta.php';
include __DIR__ . '/includes/footer.php';
?>
