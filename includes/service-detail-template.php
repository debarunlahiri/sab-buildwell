<?php
/**
 * Reusable service page template.
 *
 * Include this file after defining a `$service` array with:
 * title, intro, eyebrow, heading, image, body, features, and cta_subject.
 */
?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<section class="relative w-full h-[58vh] min-h-[460px] overflow-hidden bg-sb-black">
    <div class="absolute inset-0 bg-gradient-to-b from-sb-black/45 via-sb-black/65 to-sb-black/95 z-10"></div>
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('<?php echo $service['image']; ?>');"></div>
    <div class="relative z-20 h-full flex items-center">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 w-full">
            <div class="max-w-3xl">
                <p class="text-sb-gold uppercase tracking-[0.3em] text-sm font-semibold mb-4">Services</p>
                <h1 class="font-playfair text-5xl md:text-6xl lg:text-7xl font-bold text-white leading-tight mb-6"><?php echo $service['title']; ?></h1>
                <p class="text-gray-300 text-lg max-w-xl"><?php echo $service['intro']; ?></p>
            </div>
        </div>
    </div>
</section>

<section class="py-24 lg:py-32 bg-sb-cream">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid lg:grid-cols-[1.1fr_0.9fr] gap-14 items-start">
            <div class="scroll-reveal">
                <p class="text-sb-gold uppercase tracking-[0.3em] text-sm font-semibold mb-4"><?php echo $service['eyebrow']; ?></p>
                <h2 class="font-playfair text-4xl md:text-5xl font-bold text-sb-charcoal mb-8"><?php echo $service['heading']; ?></h2>
                <div class="space-y-6 text-gray-600 text-lg leading-relaxed">
                    <?php foreach ($service['body'] as $paragraph): ?>
                        <p><?php echo $paragraph; ?></p>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="bg-white shadow-xl border border-gray-100 p-8 scroll-reveal">
                <h3 class="font-playfair text-2xl font-bold text-sb-charcoal mb-6">What We Cover</h3>
                <ul class="space-y-4">
                    <?php foreach ($service['features'] as $feature): ?>
                        <li class="flex items-start gap-3 text-gray-600">
                            <i data-lucide="check" class="w-5 h-5 text-sb-gold flex-shrink-0 mt-0.5"></i>
                            <span><?php echo $feature; ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-sb-black text-white">
    <div class="max-w-5xl mx-auto px-6 lg:px-8 text-center">
        <h2 class="font-playfair text-4xl md:text-5xl font-bold mb-6">Plan Your <?php echo $service['cta_subject']; ?></h2>
        <p class="text-gray-400 text-lg mb-10">Share your site details and our team will guide you with scope, layout, materials, and execution planning.</p>
        <a href="contact.php" class="inline-flex items-center gap-2 px-8 py-4 bg-sb-gold text-sb-black font-semibold uppercase tracking-widest text-sm hover:bg-sb-gold-light transition-all">
            <span>Book Consultation</span>
            <i data-lucide="arrow-right" class="w-4 h-4"></i>
        </a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
