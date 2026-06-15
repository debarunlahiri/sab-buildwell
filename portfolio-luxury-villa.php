<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<!-- Hero Section -->
<section class="relative w-full h-[70vh] min-h-[600px] overflow-hidden bg-sb-black">
    <div class="absolute inset-0 bg-gradient-to-b from-sb-black/30 via-sb-black/50 to-sb-black/95 z-10"></div>
    <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?w=1920&h=1080&fit=crop')] bg-cover bg-center"></div>
    
    <div class="relative z-20 h-full flex items-end pb-20">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 w-full">
            <div class="max-w-4xl">
                <div class="flex items-center gap-3 mb-6">
                    <span class="px-4 py-1 bg-sb-gold text-sb-black text-xs font-bold uppercase tracking-widest">Residential</span>
                    <span class="text-gray-400 text-sm">Ghaziabad, UP</span>
                </div>
                <h1 class="font-playfair text-5xl md:text-6xl lg:text-7xl font-bold text-white leading-tight mb-6">
                    Luxury Villa <br><span class="text-sb-gold">Interior</span> Transformation
                </h1>
                <p class="text-gray-300 text-lg max-w-2xl">
                    A complete luxury interior transformation featuring bespoke living spaces, modular kitchens, and master bedrooms designed for elite modern living.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Project Overview -->
<section class="py-20 bg-sb-black text-white relative overflow-hidden">
    <div class="absolute inset-0 opacity-10 grid-pattern"></div>
    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <div class="text-center p-6 border border-white/10 bg-white/5 backdrop-blur-sm">
                <i data-lucide="calendar" class="w-6 h-6 text-sb-gold mx-auto mb-3"></i>
                <p class="text-gray-400 text-sm mb-1">Year</p>
                <p class="font-playfair text-xl font-bold">2024</p>
            </div>
            <div class="text-center p-6 border border-white/10 bg-white/5 backdrop-blur-sm">
                <i data-lucide="map-pin" class="w-6 h-6 text-sb-gold mx-auto mb-3"></i>
                <p class="text-gray-400 text-sm mb-1">Location</p>
                <p class="font-playfair text-xl font-bold">Ghaziabad</p>
            </div>
            <div class="text-center p-6 border border-white/10 bg-white/5 backdrop-blur-sm">
                <i data-lucide="maximize" class="w-6 h-6 text-sb-gold mx-auto mb-3"></i>
                <p class="text-gray-400 text-sm mb-1">Area</p>
                <p class="font-playfair text-xl font-bold">4,500 sqft</p>
            </div>
            <div class="text-center p-6 border border-white/10 bg-white/5 backdrop-blur-sm">
                <i data-lucide="clock" class="w-6 h-6 text-sb-gold mx-auto mb-3"></i>
                <p class="text-gray-400 text-sm mb-1">Duration</p>
                <p class="font-playfair text-xl font-bold">6 Months</p>
            </div>
        </div>
    </div>
</section>

<!-- Project Gallery -->
<section class="py-24 lg:py-32 bg-sb-cream relative">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-16 scroll-reveal">
            <p class="text-sb-gold uppercase tracking-[0.3em] text-sm font-semibold mb-4">Project Gallery</p>
            <h2 class="font-playfair text-4xl md:text-5xl font-bold text-sb-charcoal">Visual Journey</h2>
        </div>
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12 lg:col-span-8 scroll-reveal">
                <div class="relative overflow-hidden group h-full min-h-[400px] lg:min-h-[600px]">
                    <img src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?w=1200&h=800&fit=crop" alt="Living Room" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-sb-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="absolute bottom-6 left-6 opacity-0 group-hover:opacity-100 transition-opacity">
                        <p class="text-sb-gold uppercase tracking-widest text-xs font-semibold">Main Living Area</p>
                    </div>
                </div>
            </div>
            <div class="col-span-12 lg:col-span-4 flex flex-col gap-4">
                <div class="relative overflow-hidden group h-full min-h-[200px] lg:min-h-[290px] scroll-reveal">
                    <img src="https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?w=600&h=400&fit=crop" alt="Kitchen" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute bottom-4 left-4 opacity-0 group-hover:opacity-100 transition-opacity">
                        <p class="text-sb-gold uppercase tracking-widest text-xs font-semibold">Kitchen</p>
                    </div>
                </div>
                <div class="relative overflow-hidden group h-full min-h-[200px] lg:min-h-[290px] scroll-reveal">
                    <img src="https://images.unsplash.com/photo-1505693416388-1295fceeeb88?w=600&h=400&fit=crop" alt="Bedroom" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute bottom-4 left-4 opacity-0 group-hover:opacity-100 transition-opacity">
                        <p class="text-sb-gold uppercase tracking-widest text-xs font-semibold">Master Bedroom</p>
                    </div>
                </div>
            </div>
            <div class="col-span-12 md:col-span-6 lg:col-span-4 scroll-reveal">
                <div class="relative overflow-hidden group h-64">
                    <img src="https://images.unsplash.com/photo-1600585154526-990dced4db0d?w=600&h=400&fit=crop" alt="Bathroom" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute bottom-4 left-4 opacity-0 group-hover:opacity-100 transition-opacity">
                        <p class="text-sb-gold uppercase tracking-widest text-xs font-semibold">Bathroom</p>
                    </div>
                </div>
            </div>
            <div class="col-span-12 md:col-span-6 lg:col-span-4 scroll-reveal">
                <div class="relative overflow-hidden group h-64">
                    <img src="https://images.unsplash.com/photo-1600566753086-00f18fb6b3ea?w=600&h=400&fit=crop" alt="Dining" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute bottom-4 left-4 opacity-0 group-hover:opacity-100 transition-opacity">
                        <p class="text-sb-gold uppercase tracking-widest text-xs font-semibold">Dining Area</p>
                    </div>
                </div>
            </div>
            <div class="col-span-12 md:col-span-6 lg:col-span-4 scroll-reveal">
                <div class="relative overflow-hidden group h-64">
                    <img src="https://images.unsplash.com/photo-1600210491898-7e67f8d3b3e3?w=600&h=400&fit=crop" alt="Study" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute bottom-4 left-4 opacity-0 group-hover:opacity-100 transition-opacity">
                        <p class="text-sb-gold uppercase tracking-widest text-xs font-semibold">Home Study</p>
                    </div>
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
                <h2 class="font-playfair text-4xl font-bold text-sb-charcoal mb-8">Luxury Villa Interior Transformation</h2>
                <div class="space-y-6 text-gray-600 leading-relaxed text-lg">
                    <p>This ambitious project involved the complete interior transformation of a 4,500 sqft luxury villa in Ghaziabad. The client envisioned a modern, sophisticated living space that combined comfort with elegance.</p>
                    <p>Our team began with an in-depth consultation to understand the client's lifestyle and preferences. We then created detailed 3D renders and spatial blueprints to visualize the final outcome before execution began.</p>
                    <p>The project encompassed living room design, modular kitchen installation, master bedroom renovation, bathroom upgrades, and custom joinery throughout. Every element was carefully curated to maintain a cohesive design language.</p>
                </div>
            </div>
            <div class="scroll-reveal">
                <div class="bg-sb-cream p-10 border border-gray-100">
                    <h3 class="font-playfair text-2xl font-bold text-sb-charcoal mb-6">Scope of Work</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-4"><div class="w-8 h-8 rounded-full bg-sb-gold/20 flex items-center justify-center flex-shrink-0 mt-1"><i data-lucide="check" class="w-4 h-4 text-sb-gold"></i></div><div><h4 class="font-semibold text-sb-charcoal">Interior Design</h4><p class="text-gray-500 text-sm">Complete space planning, 3D visualization, and material selection</p></div></li>
                        <li class="flex items-start gap-4"><div class="w-8 h-8 rounded-full bg-sb-gold/20 flex items-center justify-center flex-shrink-0 mt-1"><i data-lucide="check" class="w-4 h-4 text-sb-gold"></i></div><div><h4 class="font-semibold text-sb-charcoal">Modular Kitchen</h4><p class="text-gray-500 text-sm">State-of-the-art kitchen with premium fittings and appliances</p></div></li>
                        <li class="flex items-start gap-4"><div class="w-8 h-8 rounded-full bg-sb-gold/20 flex items-center justify-center flex-shrink-0 mt-1"><i data-lucide="check" class="w-4 h-4 text-sb-gold"></i></div><div><h4 class="font-semibold text-sb-charcoal">Master Bedroom</h4><p class="text-gray-500 text-sm">Bespoke wardrobe, false ceiling, and luxury furnishings</p></div></li>
                        <li class="flex items-start gap-4"><div class="w-8 h-8 rounded-full bg-sb-gold/20 flex items-center justify-center flex-shrink-0 mt-1"><i data-lucide="check" class="w-4 h-4 text-sb-gold"></i></div><div><h4 class="font-semibold text-sb-charcoal">MEP Integration</h4><p class="text-gray-500 text-sm">Electrical layout, lighting design, and AC ducting</p></div></li>
                        <li class="flex items-start gap-4"><div class="w-8 h-8 rounded-full bg-sb-gold/20 flex items-center justify-center flex-shrink-0 mt-1"><i data-lucide="check" class="w-4 h-4 text-sb-gold"></i></div><div><h4 class="font-semibold text-sb-charcoal">Surface Treatments</h4><p class="text-gray-500 text-sm">Wall paneling, flooring, and decorative finishes</p></div></li>
                        <li class="flex items-start gap-4"><div class="w-8 h-8 rounded-full bg-sb-gold/20 flex items-center justify-center flex-shrink-0 mt-1"><i data-lucide="check" class="w-4 h-4 text-sb-gold"></i></div><div><h4 class="font-semibold text-sb-charcoal">Custom Joinery</h4><p class="text-gray-500 text-sm">Premium carpentry, TV units, and storage solutions</p></div></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Before/After -->
<section class="py-24 lg:py-32 bg-sb-black text-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-16 scroll-reveal">
            <p class="text-sb-gold uppercase tracking-[0.3em] text-sm font-semibold mb-4">Transformation</p>
            <h2 class="font-playfair text-4xl md:text-5xl font-bold mb-4">Before & After</h2>
            <p class="text-gray-400 max-w-2xl mx-auto">Drag the slider to see the dramatic transformation</p>
        </div>
        <div class="max-w-4xl mx-auto scroll-reveal">
            <div class="before-after-container aspect-[16/9] rounded-lg overflow-hidden">
                <img src="assets/before_image.png" alt="Before" class="before-image">
                <img src="assets/after_image.png" alt="After" class="after-image">
                <div class="before-after-slider"></div>
                <div class="slider-handle"><i data-lucide="move-horizontal" class="w-5 h-5"></i></div>
                <div class="before-label">Before</div>
                <div class="after-label">After</div>
            </div>
            <p class="text-center text-gray-400 text-sm mt-4 italic">Living Room Transformation</p>
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
            "SAB Buildwell transformed our house into a dream home. Their attention to detail and commitment to quality exceeded our expectations. The team's professionalism throughout the 6-month project was remarkable."
        </blockquote>
        <div class="flex items-center justify-center gap-4">
            <div class="w-12 h-12 rounded-full bg-gray-200 overflow-hidden">
                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=100&h=100&fit=crop&crop=face" alt="Client" class="w-full h-full object-cover">
            </div>
            <div class="text-left">
                <p class="font-semibold text-sb-charcoal">Mr. Rahul Sharma</p>
                <p class="text-gray-500 text-sm">Homeowner, Ghaziabad</p>
            </div>
        </div>
    </div>
</section>

<!-- Related Projects -->
<section class="py-24 lg:py-32 bg-white relative">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-16 scroll-reveal">
            <p class="text-sb-gold uppercase tracking-[0.3em] text-sm font-semibold mb-4">More Projects</p>
            <h2 class="font-playfair text-4xl md:text-5xl font-bold text-sb-charcoal">Related Projects</h2>
        </div>
        <div class="grid md:grid-cols-3 gap-6">
            <div class="group relative overflow-hidden scroll-reveal bg-sb-cream shadow-lg">
                <div class="aspect-[4/3] overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=800&h=600&fit=crop" alt="Project" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-sb-black/90 via-sb-black/50 to-transparent opacity-80 group-hover:opacity-90 transition-opacity"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6">
                    <p class="text-sb-gold uppercase tracking-widest text-[10px] font-semibold mb-2">Residential</p>
                    <h3 class="font-playfair text-lg font-bold text-white">Modern Apartment Design</h3>
                </div>
            </div>
            <div class="group relative overflow-hidden scroll-reveal bg-sb-cream shadow-lg">
                <div class="aspect-[4/3] overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1600566753086-00f18fb6b3ea?w=800&h=600&fit=crop" alt="Project" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-sb-black/90 via-sb-black/50 to-transparent opacity-80 group-hover:opacity-90 transition-opacity"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6">
                    <p class="text-sb-gold uppercase tracking-widest text-[10px] font-semibold mb-2">Residential</p>
                    <h3 class="font-playfair text-lg font-bold text-white">Penthouse Suite</h3>
                </div>
            </div>
            <div class="group relative overflow-hidden scroll-reveal bg-sb-cream shadow-lg">
                <div class="aspect-[4/3] overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=800&h=600&fit=crop" alt="Project" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-sb-black/90 via-sb-black/50 to-transparent opacity-80 group-hover:opacity-90 transition-opacity"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6">
                    <p class="text-sb-gold uppercase tracking-widest text-[10px] font-semibold mb-2">Residential</p>
                    <h3 class="font-playfair text-lg font-bold text-white">Family Home Renovation</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-24 bg-sb-gold relative overflow-hidden">
    <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center relative z-10">
        <h2 class="font-playfair text-4xl md:text-5xl font-bold text-sb-black mb-6">Like What You See?</h2>
        <p class="text-sb-black/80 text-lg mb-10">Let's create something beautiful for your space.</p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="contact.php" class="px-8 py-4 bg-sb-black text-white font-semibold uppercase tracking-widest text-sm hover:bg-sb-charcoal transition-all inline-flex items-center space-x-2">
                <span>Start Your Project</span><i data-lucide="arrow-right" class="w-4 h-4"></i>
            </a>
            <a href="portfolio.php" class="px-8 py-4 border-2 border-sb-black text-sb-black font-semibold uppercase tracking-widest text-sm hover:bg-sb-black hover:text-white transition-all">View All Projects</a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
