<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<section class="relative w-full h-[50vh] min-h-[400px] overflow-hidden bg-sb-black">
    <div class="absolute inset-0 bg-gradient-to-b from-sb-black/45 via-sb-black/65 to-sb-black/95 z-10"></div>
    <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1497366754035-f200968a6e72?w=1920&h=1080&fit=crop')] bg-cover bg-center"></div>
    <div class="relative z-20 h-full flex items-center">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 w-full">
            <p class="text-sb-gold uppercase tracking-[0.3em] text-sm font-semibold mb-4">FAQs</p>
            <h1 class="font-playfair text-5xl md:text-6xl lg:text-7xl font-bold text-white leading-tight">Frequently Asked Questions</h1>
        </div>
    </div>
</section>

<section class="py-24 lg:py-32 bg-sb-cream">
    <div class="max-w-4xl mx-auto px-6 lg:px-8 space-y-6">
        <?php
        $faqs = [
            ['Do you handle complete turnkey interiors?', 'Yes. We manage design, planning, procurement, civil work, MEP coordination, modular furniture, finishes, and handover.'],
            ['Which areas do you serve?', 'We serve Delhi NCR, including Delhi, Noida, Ghaziabad, Gurugram, and Faridabad.'],
            ['Do you work on both homes and offices?', 'Yes. We handle residential interiors, commercial offices, showrooms, renovations, and corporate fit-outs.'],
            ['How does a project start?', 'It starts with a consultation and site evaluation, followed by scope definition, layout planning, budget direction, and execution planning.'],
            ['Can you renovate an existing space?', 'Yes. We handle renovation work including repairs, service upgrades, flooring, wall finishes, modular replacements, and final detailing.']
        ];
        foreach ($faqs as $faq):
        ?>
            <div class="bg-white p-8 shadow-lg border border-gray-100 scroll-reveal">
                <h2 class="font-playfair text-2xl font-bold text-sb-charcoal mb-3"><?php echo $faq[0]; ?></h2>
                <p class="text-gray-600 leading-relaxed"><?php echo $faq[1]; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
