<?php
/**
 * Reusable location page template.
 *
 * Include this file after defining a `$location` array with:
 * city, title, intro, image, and cards.
 */
?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<section class="relative w-full h-[54vh] min-h-[430px] overflow-hidden bg-sb-black">
    <div class="absolute inset-0 bg-gradient-to-b from-sb-black/45 via-sb-black/65 to-sb-black/95 z-10"></div>
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('<?php echo $location['image']; ?>');"></div>
    <div class="relative z-20 h-full flex items-center">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 w-full">
            <div class="max-w-3xl">
                <p class="text-sb-gold uppercase tracking-[0.3em] text-sm font-semibold mb-4">Locations</p>
                <h1 class="font-playfair text-5xl md:text-6xl lg:text-7xl font-bold text-white leading-tight mb-6"><?php echo $location['title']; ?></h1>
                <p class="text-gray-300 text-lg max-w-xl"><?php echo $location['intro']; ?></p>
            </div>
        </div>
    </div>
</section>

<section class="py-24 lg:py-32 bg-sb-cream">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid lg:grid-cols-3 gap-8">
            <?php foreach ($location['cards'] as $card): ?>
                <div class="bg-white p-8 shadow-xl border border-gray-100 scroll-reveal">
                    <div class="w-14 h-14 rounded-full bg-sb-gold/10 border border-sb-gold flex items-center justify-center mb-6">
                        <i data-lucide="<?php echo $card['icon']; ?>" class="w-6 h-6 text-sb-gold"></i>
                    </div>
                    <h2 class="font-playfair text-2xl font-bold text-sb-charcoal mb-4"><?php echo $card['title']; ?></h2>
                    <p class="text-gray-600 leading-relaxed"><?php echo $card['text']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="py-20 bg-sb-black text-white">
    <div class="max-w-5xl mx-auto px-6 lg:px-8 text-center">
        <h2 class="font-playfair text-4xl md:text-5xl font-bold mb-6">Start a Project in <?php echo $location['city']; ?></h2>
        <p class="text-gray-400 text-lg mb-10">Our Delhi NCR team can visit your site, review your brief, and prepare a turnkey execution path.</p>
        <a href="contact.php" class="inline-flex items-center gap-2 px-8 py-4 bg-sb-gold text-sb-black font-semibold uppercase tracking-widest text-sm hover:bg-sb-gold-light transition-all">
            <span>Contact Us</span>
            <i data-lucide="arrow-right" class="w-4 h-4"></i>
        </a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
