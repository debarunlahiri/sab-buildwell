<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<section class="relative w-full h-[52vh] min-h-[430px] overflow-hidden bg-sb-black">
    <div class="absolute inset-0 bg-gradient-to-b from-sb-black/45 via-sb-black/65 to-sb-black/95 z-10"></div>
    <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1497366216548-37526070297c?w=1920&h=1080&fit=crop')] bg-cover bg-center"></div>
    <div class="relative z-20 h-full flex items-center">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 w-full">
            <p class="text-sb-gold uppercase tracking-[0.3em] text-sm font-semibold mb-4">Projects</p>
            <h1 class="font-playfair text-5xl md:text-6xl lg:text-7xl font-bold text-white leading-tight mb-6">Project Capabilities</h1>
            <p class="text-gray-300 text-lg max-w-2xl">From site survey to final handover, our work covers residential, commercial, renovation, and turnkey execution requirements.</p>
        </div>
    </div>
</section>

<section class="py-24 lg:py-32 bg-sb-cream">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 grid md:grid-cols-2 lg:grid-cols-4 gap-8">
        <?php
        $projects = [
            ['Home Interiors', 'Full-home planning, modular storage, lighting, decor, and execution.', 'home'],
            ['Commercial Offices', 'Cabins, boardrooms, reception areas, workstations, MEP, and compliance coordination.', 'building-2'],
            ['Renovations', 'Upgrade existing spaces with controlled demolition, repairs, services, and finishing.', 'hammer'],
            ['Turnkey Fit-Outs', 'Single-team delivery across design, procurement, execution, and handover.', 'hard-hat']
        ];
        foreach ($projects as $project):
        ?>
            <div class="bg-white p-8 shadow-xl border border-gray-100 scroll-reveal">
                <div class="w-14 h-14 rounded-full bg-sb-gold/10 border border-sb-gold flex items-center justify-center mb-6">
                    <i data-lucide="<?php echo $project[2]; ?>" class="w-6 h-6 text-sb-gold"></i>
                </div>
                <h2 class="font-playfair text-2xl font-bold text-sb-charcoal mb-4"><?php echo $project[0]; ?></h2>
                <p class="text-gray-600 leading-relaxed"><?php echo $project[1]; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
