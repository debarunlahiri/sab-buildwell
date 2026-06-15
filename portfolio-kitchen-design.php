<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<!-- Hero Section -->
<section class="relative w-full h-[70vh] min-h-[600px] overflow-hidden bg-sb-black">
    <div class="absolute inset-0 bg-gradient-to-b from-sb-black/30 via-sb-black/50 to-sb-black/95 z-10"></div>
    <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?w=1920&h=1080&fit=crop')] bg-cover bg-center"></div>
    <div class="relative z-20 h-full flex items-end pb-20">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 w-full">
            <div class="max-w-4xl">
                <div class="flex items-center gap-3 mb-6">
                    <span class="px-4 py-1 bg-sb-gold text-sb-black text-xs font-bold uppercase tracking-widest">Residential</span>
                    <span class="text-gray-400 text-sm">Noida, UP</span>
                </div>
                <h1 class="font-playfair text-5xl md:text-6xl lg:text-7xl font-bold text-white leading-tight mb-6">
                    Modern <span class="text-sb-gold">Kitchen</span> Design
                </h1>
                <p class="text-gray-300 text-lg max-w-2xl">A state-of-the-art modular kitchen featuring premium fittings, smart storage, and contemporary aesthetics for a modern family home.</p>
            </div>
        </div>
    </div>
</section>

<!-- Project Overview -->
<section class="py-20 bg-sb-black text-white relative overflow-hidden">
    <div class="absolute inset-0 opacity-10 grid-pattern"></div>
    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <div class="text-center p-6 border border-white/10 bg-white/5 backdrop-blur-sm"><i data-lucide="calendar" class="w-6 h-6 text-sb-gold mx-auto mb-3"></i><p class="text-gray-400 text-sm mb-1">Year</p><p class="font-playfair text-xl font-bold">2024</p></div>
            <div class="text-center p-6 border border-white/10 bg-white/5 backdrop-blur-sm"><i data-lucide="map-pin" class="w-6 h-6 text-sb-gold mx-auto mb-3"></i><p class="text-gray-400 text-sm mb-1">Location</p><p class="font-playfair text-xl font-bold">Noida</p></div>
            <div class="text-center p-6 border border-white/10 bg-white/5 backdrop-blur-sm"><i data-lucide="maximize" class="w-6 h-6 text-sb-gold mx-auto mb-3"></i><p class="text-gray-400 text-sm mb-1">Area</p><p class="font-playfair text-xl font-bold">350 sqft</p></div>
            <div class="text-center p-6 border border-white/10 bg-white/5 backdrop-blur-sm"><i data-lucide="clock" class="w-6 h-6 text-sb-gold mx-auto mb-3"></i><p class="text-gray-400 text-sm mb-1">Duration</p><p class="font-playfair text-xl font-bold">3 Weeks</p></div>
        </div>
    </div>
</section>

<!-- Project Gallery -->
<section class="py-24 lg:py-32 bg-sb-cream relative">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-16 scroll-reveal"><p class="text-sb-gold uppercase tracking-[0.3em] text-sm font-semibold mb-4">Project Gallery</p><h2 class="font-playfair text-4xl md:text-5xl font-bold text-sb-charcoal">Kitchen Spaces</h2></div>
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12 scroll-reveal">
                <div class="relative overflow-hidden group h-full min-h-[400px] lg:min-h-[500px]">
                    <img src="https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?w=1200&h=800&fit=crop" alt="Kitchen Main" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute bottom-6 left-6 opacity-0 group-hover:opacity-100 transition-opacity"><p class="text-sb-gold uppercase tracking-widest text-xs font-semibold">Main Kitchen View</p></div>
                </div>
            </div>
            <div class="col-span-12 md:col-span-6 lg:col-span-4 scroll-reveal">
                <div class="relative overflow-hidden group h-64">
                    <img src="https://images.unsplash.com/photo-1600585154526-990dced4db0d?w=600&h=400&fit=crop" alt="Counter" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute bottom-4 left-4 opacity-0 group-hover:opacity-100 transition-opacity"><p class="text-sb-gold uppercase tracking-widest text-xs font-semibold">Quartz Countertop</p></div>
                </div>
            </div>
            <div class="col-span-12 md:col-span-6 lg:col-span-4 scroll-reveal">
                <div class="relative overflow-hidden group h-64">
                    <img src="https://images.unsplash.com/photo-1600566753086-00f18fb6b3ea?w=600&h=400&fit=crop" alt="Storage" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute bottom-4 left-4 opacity-0 group-hover:opacity-100 transition-opacity"><p class="text-sb-gold uppercase tracking-widest text-xs font-semibold">Smart Storage</p></div>
                </div>
            </div>
            <div class="col-span-12 md:col-span-6 lg:col-span-4 scroll-reveal">
                <div class="relative overflow-hidden group h-64">
                    <img src="https://images.unsplash.com/photo-1600210491898-7e67f8d3b3e3?w=600&h=400&fit=crop" alt="Appliances" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute bottom-4 left-4 opacity-0 group-hover:opacity-100 transition-opacity"><p class="text-sb-gold uppercase tracking-widest text-xs font-semibold">Built-in Appliances</p></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Project Details -->
<section class="py-24 lg:py-32 bg-white relative">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16">
            <div class="scroll-reveal">
                <p class="text-sb-gold uppercase tracking-[0.3em] text-sm font-semibold mb-4">About the Project</p>
                <h2 class="font-playfair text-4xl font-bold text-sb-charcoal mb-8">Modern Modular Kitchen</h2>
                <div class="space-y-6 text-gray-600 leading-relaxed text-lg">
                    <p>This kitchen renovation project in Noida transformed a cramped, outdated cooking space into a modern, efficient modular kitchen. The client wanted a contemporary design with maximum storage and premium finishes.</p>
                    <p>We installed a U-shaped modular cabinet system with soft-close drawers, pull-out pantry units, and corner carousels. The countertop features premium quartz with an undermount sink and waterfall edges.</p>
                    <p>Appliances include a built-in oven, microwave, chimney, and dishwasher — all integrated seamlessly into the cabinetry. The backsplash features designer tiles with LED under-cabinet lighting.</p>
                </div>
            </div>
            <div class="scroll-reveal">
                <div class="bg-sb-cream p-10 border border-gray-100">
                    <h3 class="font-playfair text-2xl font-bold text-sb-charcoal mb-6">Features & Specifications</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-4"><div class="w-8 h-8 rounded-full bg-sb-gold/20 flex items-center justify-center flex-shrink-0 mt-1"><i data-lucide="check" class="w-4 h-4 text-sb-gold"></i></div><div><h4 class="font-semibold text-sb-charcoal">Modular Cabinets</h4><p class="text-gray-500 text-sm">Waterproof plywood with acrylic finish and soft-close hinges</p></div></li>
                        <li class="flex items-start gap-4"><div class="w-8 h-8 rounded-full bg-sb-gold/20 flex items-center justify-center flex-shrink-0 mt-1"><i data-lucide="check" class="w-4 h-4 text-sb-gold"></i></div><div><h4 class="font-semibold text-sb-charcoal">Quartz Countertop</h4><p class="text-gray-500 text-sm">20mm premium quartz with waterfall edge and undermount sink</p></div></li>
                        <li class="flex items-start gap-4"><div class="w-8 h-8 rounded-full bg-sb-gold/20 flex items-center justify-center flex-shrink-0 mt-1"><i data-lucide="check" class="w-4 h-4 text-sb-gold"></i></div><div><h4 class="font-semibold text-sb-charcoal">Smart Storage</h4><p class="text-gray-500 text-sm">Pull-out pantry, corner carousel, and drawer organizers</p></div></li>
                        <li class="flex items-start gap-4"><div class="w-8 h-8 rounded-full bg-sb-gold/20 flex items-center justify-center flex-shrink-0 mt-1"><i data-lucide="check" class="w-4 h-4 text-sb-gold"></i></div><div><h4 class="font-semibold text-sb-charcoal">Built-in Appliances</h4><p class="text-gray-500 text-sm">Oven, microwave, chimney, dishwasher, and refrigerator</p></div></li>
                        <li class="flex items-start gap-4"><div class="w-8 h-8 rounded-full bg-sb-gold/20 flex items-center justify-center flex-shrink-0 mt-1"><i data-lucide="check" class="w-4 h-4 text-sb-gold"></i></div><div><h4 class="font-semibold text-sb-charcoal">LED Lighting</h4><p class="text-gray-500 text-sm">Under-cabinet LED strips and pendant lights over island</p></div></li>
                        <li class="flex items-start gap-4"><div class="w-8 h-8 rounded-full bg-sb-gold/20 flex items-center justify-center flex-shrink-0 mt-1"><i data-lucide="check" class="w-4 h-4 text-sb-gold"></i></div><div><h4 class="font-semibold text-sb-charcoal">Designer Backsplash</h4><p class="text-gray-500 text-sm">Imported tiles with geometric patterns in gold accents</p></div></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonial -->
<section class="py-24 lg:py-32 bg-sb-cream relative">
    <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center scroll-reveal">
        <div class="w-20 h-20 rounded-full bg-sb-gold/10 border border-sb-gold flex items-center justify-center mx-auto mb-8">
            <i data-lucide="quote" class="w-8 h-8 text-sb-gold"></i>
        </div>
        <blockquote class="font-playfair text-2xl md:text-3xl text-sb-charcoal italic leading-relaxed mb-8">
            "Our kitchen is now the heart of our home. SAB Buildwell understood exactly what we needed and delivered a space that's both beautiful and highly functional. Cooking is now a joy!"
        </blockquote>
        <div class="flex items-center justify-center gap-4">
            <div class="w-12 h-12 rounded-full bg-gray-200 overflow-hidden">
                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=100&h=100&fit=crop&crop=face" alt="Client" class="w-full h-full object-cover">
            </div>
            <div class="text-left">
                <p class="font-semibold text-sb-charcoal">Mrs. Priya Gupta</p>
                <p class="text-gray-500 text-sm">Homeowner, Noida</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-24 bg-sb-gold relative overflow-hidden">
    <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center relative z-10">
        <h2 class="font-playfair text-4xl md:text-5xl font-bold text-sb-black mb-6">Dreaming of a New Kitchen?</h2>
        <p class="text-sb-black/80 text-lg mb-10">Let's design the kitchen you've always wanted.</p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="contact.php" class="px-8 py-4 bg-sb-black text-white font-semibold uppercase tracking-widest text-sm hover:bg-sb-charcoal transition-all inline-flex items-center space-x-2">
                <span>Get a Quote</span><i data-lucide="arrow-right" class="w-4 h-4"></i>
            </a>
            <a href="portfolio.php" class="px-8 py-4 border-2 border-sb-black text-sb-black font-semibold uppercase tracking-widest text-sm hover:bg-sb-black hover:text-white transition-all">More Projects</a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
