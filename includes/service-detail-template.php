<?php
/**
 * Reusable service detail layout.
 *
 * SEO editors can update each service page's $service array without changing
 * this template. Expected keys: title, intro, eyebrow, heading, image, body,
 * features, cta_subject, and gallery.
 */
$escape = static fn ($value) => htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
$gallery = $service['gallery'] ?? [$service['image']];
?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<!-- Top image / hero -->
<section class="service-detail-hero relative w-full min-h-[520px] overflow-hidden bg-sb-black">
    <img src="<?php echo $escape($service['image']); ?>" alt="<?php echo $escape($service['title']); ?>" class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-gradient-to-r from-sb-black/90 via-sb-black/55 to-sb-black/25 z-10"></div>
    <div class="absolute inset-0 bg-gradient-to-t from-sb-black/80 via-transparent to-sb-black/30 z-10"></div>
    <div class="relative z-20 min-h-[520px] flex items-end">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 w-full pb-16 lg:pb-20">
            <div class="max-w-3xl">
                <p class="text-sb-gold uppercase tracking-[0.3em] text-sm font-semibold mb-4">Our Services</p>
                <h1 class="font-playfair text-5xl md:text-6xl lg:text-7xl font-bold text-white leading-tight mb-5"><?php echo $escape($service['title']); ?></h1>
                <p class="text-gray-200 text-lg md:text-xl max-w-2xl leading-relaxed"><?php echo $escape($service['intro']); ?></p>
            </div>
        </div>
    </div>
</section>

<!-- SEO-ready content and subject-specific inquiry form -->
<section class="py-20 lg:py-28 bg-sb-cream">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid lg:grid-cols-[minmax(0,7fr)_minmax(300px,3fr)] gap-10 lg:gap-14 items-start">
            <article class="scroll-reveal">
                <p class="text-sb-gold uppercase tracking-[0.3em] text-sm font-semibold mb-4"><?php echo $escape($service['eyebrow']); ?></p>
                <h2 class="font-playfair text-4xl md:text-5xl font-bold text-sb-charcoal leading-tight mb-8"><?php echo $escape($service['heading']); ?></h2>

                <div class="service-copy space-y-5 text-gray-600 text-base md:text-lg leading-8">
                    <?php foreach ($service['body'] as $paragraph): ?>
                        <p><?php echo $escape($paragraph); ?></p>
                    <?php endforeach; ?>
                </div>

                <div class="mt-10 grid sm:grid-cols-2 gap-4">
                    <?php foreach ($service['features'] as $feature): ?>
                        <div class="flex items-start gap-3 bg-white border border-gray-200 p-4">
                            <i data-lucide="check" class="w-5 h-5 text-sb-gold flex-shrink-0 mt-0.5"></i>
                            <span class="text-gray-600 text-sm leading-relaxed"><?php echo $escape($feature); ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </article>

            <aside class="service-inquiry-card bg-sb-charcoal text-white p-7 lg:p-8 shadow-2xl scroll-reveal lg:sticky lg:top-28">
                <p class="text-sb-gold uppercase tracking-[0.24em] text-xs font-semibold mb-3">Quick Enquiry</p>
                <h2 class="font-playfair text-2xl lg:text-3xl font-bold mb-3">Send Inquiry for <?php echo $escape($service['cta_subject']); ?></h2>
                <p class="text-gray-400 text-sm leading-relaxed mb-7">Share your requirements and our team will contact you to discuss the space, budget, and next steps.</p>

                <form action="contact.php" method="POST" class="space-y-4">
                    <input type="hidden" name="project_type" value="<?php echo $escape($service['cta_subject']); ?>">
                    <div>
                        <label class="block text-xs text-gray-300 uppercase tracking-wider mb-2">Name *</label>
                        <input type="text" name="firstname" required autocomplete="name" class="w-full bg-white/5 border border-white/15 px-4 py-3 text-white placeholder:text-gray-500 focus:outline-none focus:border-sb-gold transition-colors" placeholder="Your name">
                    </div>
                    <div>
                        <label class="block text-xs text-gray-300 uppercase tracking-wider mb-2">Phone *</label>
                        <input type="tel" name="phone" required autocomplete="tel" class="w-full bg-white/5 border border-white/15 px-4 py-3 text-white placeholder:text-gray-500 focus:outline-none focus:border-sb-gold transition-colors" placeholder="+91 98765 43210">
                    </div>
                    <div>
                        <label class="block text-xs text-gray-300 uppercase tracking-wider mb-2">Email</label>
                        <input type="email" name="email" autocomplete="email" class="w-full bg-white/5 border border-white/15 px-4 py-3 text-white placeholder:text-gray-500 focus:outline-none focus:border-sb-gold transition-colors" placeholder="you@example.com">
                    </div>
                    <div>
                        <label class="block text-xs text-gray-300 uppercase tracking-wider mb-2">Message</label>
                        <textarea name="message" rows="4" class="w-full bg-white/5 border border-white/15 px-4 py-3 text-white placeholder:text-gray-500 focus:outline-none focus:border-sb-gold transition-colors resize-none" placeholder="Tell us about your space"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-sb-gold text-sb-black py-4 px-5 font-semibold uppercase tracking-widest text-sm hover:bg-sb-gold-light transition-colors flex items-center justify-center gap-2">
                        <span>Send Inquiry</span>
                        <i data-lucide="send" class="w-4 h-4"></i>
                    </button>
                </form>
            </aside>
        </div>
    </div>
</section>

<!-- Compact themed image marquee -->
<section class="py-20 lg:py-24 bg-sb-black text-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 mb-10">
        <p class="text-sb-gold uppercase tracking-[0.3em] text-sm font-semibold mb-3">Design Inspiration</p>
        <h2 class="font-playfair text-3xl md:text-4xl font-bold"><?php echo $escape($service['title']); ?> Gallery</h2>
    </div>

    <div class="service-marquee" aria-label="<?php echo $escape($service['title']); ?> image gallery">
        <div class="service-marquee-track">
            <?php for ($set = 0; $set < 2; $set++): ?>
                <?php foreach ($gallery as $index => $image): ?>
                    <figure class="service-marquee-card" <?php echo $set === 1 ? 'aria-hidden="true"' : ''; ?>>
                        <img src="<?php echo $escape($image); ?>" alt="<?php echo $escape($service['title']); ?> inspiration <?php echo $index + 1; ?>" loading="lazy">
                    </figure>
                <?php endforeach; ?>
            <?php endfor; ?>
        </div>
    </div>
</section>

<!-- Bottom conversion section -->
<section class="py-16 lg:py-20 bg-sb-gold">
    <div class="max-w-5xl mx-auto px-6 lg:px-8 flex flex-col md:flex-row items-center justify-between gap-8 text-center md:text-left">
        <div>
            <p class="uppercase tracking-[0.25em] text-xs font-semibold text-sb-black/70 mb-2">Start Planning</p>
            <h2 class="font-playfair text-3xl md:text-4xl font-bold text-sb-black">Ready to discuss your <?php echo $escape(strtolower($service['cta_subject'])); ?> project?</h2>
        </div>
        <a href="contact.php" class="shrink-0 inline-flex items-center gap-2 px-7 py-4 bg-sb-black text-white font-semibold uppercase tracking-widest text-sm hover:bg-sb-charcoal transition-colors">
            <span>Contact Our Team</span>
            <i data-lucide="arrow-right" class="w-4 h-4"></i>
        </a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
