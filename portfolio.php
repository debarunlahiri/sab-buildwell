<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<!-- Hero Section -->
<section class="relative w-full h-[60vh] min-h-[500px] overflow-hidden bg-sb-black">
    <div class="absolute inset-0 bg-gradient-to-b from-sb-black/40 via-sb-black/60 to-sb-black/90 z-10"></div>
    <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=1920&h=1080&fit=crop')] bg-cover bg-center"></div>
    
    <div class="relative z-20 h-full flex items-center">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 w-full">
            <div class="max-w-3xl">
                <p class="text-sb-gold uppercase tracking-[0.3em] text-sm font-semibold mb-4">Portfolio</p>
                <h1 class="font-playfair text-5xl md:text-6xl lg:text-7xl font-bold text-white leading-tight mb-6">
                    Our <span class="text-sb-gold">Projects</span>
                </h1>
                <p class="text-gray-300 text-lg max-w-xl">
                    Explore our complete portfolio of residential and commercial transformations across Delhi NCR.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Filter Section -->
<section class="py-12 bg-sb-black text-white border-b border-white/10">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="flex flex-wrap justify-center gap-4">
            <button class="portfolio-filter-btn active px-6 py-2 bg-sb-gold text-sb-black text-sm font-semibold uppercase tracking-widest" data-filter="all">All Projects</button>
            <button class="portfolio-filter-btn px-6 py-2 text-white text-sm font-semibold uppercase tracking-widest border border-white/30 hover:border-sb-gold" data-filter="residential">Residential</button>
            <button class="portfolio-filter-btn px-6 py-2 text-white text-sm font-semibold uppercase tracking-widest border border-white/30 hover:border-sb-gold" data-filter="commercial">Commercial</button>
        </div>
    </div>
</section>

<!-- Portfolio Grid -->
<section class="py-24 lg:py-32 bg-sb-cream relative">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Project 1 - Residential -->
            <div class="portfolio-item group bg-white shadow-lg overflow-hidden scroll-reveal" data-category="residential">
                <div class="relative overflow-hidden aspect-[4/3]">
                    <img src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?w=800&h=600&fit=crop" alt="Luxury Living Room" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-sb-black/90 via-sb-black/30 to-transparent opacity-80 group-hover:opacity-90 transition-opacity"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6">
                        <p class="text-sb-gold uppercase tracking-widest text-[10px] font-semibold mb-2">Residential</p>
                        <h3 class="font-playfair text-xl font-bold text-white">Luxury Villa Transformation</h3>
                    </div>
                    <div class="absolute top-4 right-4 opacity-0 group-hover:opacity-100 transition-all">
                        <a href="portfolio-luxury-villa.php" class="w-12 h-12 bg-sb-gold rounded-full flex items-center justify-center hover:scale-110 transition-transform">
                            <i data-lucide="arrow-up-right" class="w-5 h-5 text-sb-black"></i>
                        </a>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-gray-500 text-sm mb-4">Complete interior transformation of a 4,500 sqft luxury villa in Ghaziabad.</p>
                    <div class="flex items-center justify-between">
                        <span class="text-sb-gold text-sm font-semibold">Ghaziabad, UP</span>
                        <a href="portfolio-luxury-villa.php" class="text-sb-charcoal text-sm font-semibold hover:text-sb-gold transition-colors flex items-center gap-1">
                            View Details <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Project 2 - Commercial -->
            <div class="portfolio-item group bg-white shadow-lg overflow-hidden scroll-reveal" data-category="commercial">
                <div class="relative overflow-hidden aspect-[4/3]">
                    <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?w=800&h=600&fit=crop" alt="Corporate Boardroom" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-sb-black/90 via-sb-black/30 to-transparent opacity-80 group-hover:opacity-90 transition-opacity"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6">
                        <p class="text-sb-gold uppercase tracking-widest text-[10px] font-semibold mb-2">Commercial</p>
                        <h3 class="font-playfair text-xl font-bold text-white">Corporate HQ Fit-out</h3>
                    </div>
                    <div class="absolute top-4 right-4 opacity-0 group-hover:opacity-100 transition-all">
                        <a href="portfolio-corporate-hq.php" class="w-12 h-12 bg-sb-gold rounded-full flex items-center justify-center hover:scale-110 transition-transform">
                            <i data-lucide="arrow-up-right" class="w-5 h-5 text-sb-black"></i>
                        </a>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-gray-500 text-sm mb-4">Premium office fit-out for a multinational corporate headquarters in Delhi.</p>
                    <div class="flex items-center justify-between">
                        <span class="text-sb-gold text-sm font-semibold">New Delhi</span>
                        <a href="portfolio-corporate-hq.php" class="text-sb-charcoal text-sm font-semibold hover:text-sb-gold transition-colors flex items-center gap-1">
                            View Details <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Project 3 - Residential -->
            <div class="portfolio-item group bg-white shadow-lg overflow-hidden scroll-reveal" data-category="residential">
                <div class="relative overflow-hidden aspect-[4/3]">
                    <img src="https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?w=800&h=600&fit=crop" alt="Modular Kitchen" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-sb-black/90 via-sb-black/30 to-transparent opacity-80 group-hover:opacity-90 transition-opacity"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6">
                        <p class="text-sb-gold uppercase tracking-widest text-[10px] font-semibold mb-2">Residential</p>
                        <h3 class="font-playfair text-xl font-bold text-white">Modern Kitchen Design</h3>
                    </div>
                    <div class="absolute top-4 right-4 opacity-0 group-hover:opacity-100 transition-all">
                        <a href="portfolio-kitchen-design.php" class="w-12 h-12 bg-sb-gold rounded-full flex items-center justify-center hover:scale-110 transition-transform">
                            <i data-lucide="arrow-up-right" class="w-5 h-5 text-sb-black"></i>
                        </a>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-gray-500 text-sm mb-4">State-of-the-art modular kitchen with premium fittings and smart storage.</p>
                    <div class="flex items-center justify-between">
                        <span class="text-sb-gold text-sm font-semibold">Noida, UP</span>
                        <a href="portfolio-kitchen-design.php" class="text-sb-charcoal text-sm font-semibold hover:text-sb-gold transition-colors flex items-center gap-1">
                            View Details <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Project 4 - Commercial -->
            <div class="portfolio-item group bg-white shadow-lg overflow-hidden scroll-reveal" data-category="commercial">
                <div class="relative overflow-hidden aspect-[4/3]">
                    <img src="https://images.unsplash.com/photo-1604328698692-f76ea9498e76?w=800&h=600&fit=crop" alt="Client Lounge" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-sb-black/90 via-sb-black/30 to-transparent opacity-80 group-hover:opacity-90 transition-opacity"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6">
                        <p class="text-sb-gold uppercase tracking-widest text-[10px] font-semibold mb-2">Commercial</p>
                        <h3 class="font-playfair text-xl font-bold text-white">Premium Reception Lounge</h3>
                    </div>
                    <div class="absolute top-4 right-4 opacity-0 group-hover:opacity-100 transition-all">
                        <a href="portfolio-reception-lounge.php" class="w-12 h-12 bg-sb-gold rounded-full flex items-center justify-center hover:scale-110 transition-transform">
                            <i data-lucide="arrow-up-right" class="w-5 h-5 text-sb-black"></i>
                        </a>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-gray-500 text-sm mb-4">Luxurious client reception area with bespoke furnishings and branding.</p>
                    <div class="flex items-center justify-between">
                        <span class="text-sb-gold text-sm font-semibold">Gurugram</span>
                        <a href="portfolio-reception-lounge.php" class="text-sb-charcoal text-sm font-semibold hover:text-sb-gold transition-colors flex items-center gap-1">
                            View Details <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Project 5 - Residential -->
            <div class="portfolio-item group bg-white shadow-lg overflow-hidden scroll-reveal" data-category="residential">
                <div class="relative overflow-hidden aspect-[4/3]">
                    <img src="https://images.unsplash.com/photo-1505693416388-1295fceeeb88?w=800&h=600&fit=crop" alt="Master Bedroom" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-sb-black/90 via-sb-black/30 to-transparent opacity-80 group-hover:opacity-90 transition-opacity"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6">
                        <p class="text-sb-gold uppercase tracking-widest text-[10px] font-semibold mb-2">Residential</p>
                        <h3 class="font-playfair text-xl font-bold text-white">Master Bedroom Suite</h3>
                    </div>
                    <div class="absolute top-4 right-4 opacity-0 group-hover:opacity-100 transition-all">
                        <a href="portfolio-bedroom-suite.php" class="w-12 h-12 bg-sb-gold rounded-full flex items-center justify-center hover:scale-110 transition-transform">
                            <i data-lucide="arrow-up-right" class="w-5 h-5 text-sb-black"></i>
                        </a>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-gray-500 text-sm mb-4">Bespoke master bedroom with walk-in wardrobe and luxury ensuite.</p>
                    <div class="flex items-center justify-between">
                        <span class="text-sb-gold text-sm font-semibold">Ghaziabad, UP</span>
                        <a href="portfolio-bedroom-suite.php" class="text-sb-charcoal text-sm font-semibold hover:text-sb-gold transition-colors flex items-center gap-1">
                            View Details <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Project 6 - Commercial -->
            <div class="portfolio-item group bg-white shadow-lg overflow-hidden scroll-reveal" data-category="commercial">
                <div class="relative overflow-hidden aspect-[4/3]">
                    <img src="https://images.unsplash.com/photo-1524758631624-e2822e304c36?w=800&h=600&fit=crop" alt="Tech Hub" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-sb-black/90 via-sb-black/30 to-transparent opacity-80 group-hover:opacity-90 transition-opacity"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6">
                        <p class="text-sb-gold uppercase tracking-widest text-[10px] font-semibold mb-2">Commercial</p>
                        <h3 class="font-playfair text-xl font-bold text-white">Tech Hub Workspace</h3>
                    </div>
                    <div class="absolute top-4 right-4 opacity-0 group-hover:opacity-100 transition-all">
                        <a href="portfolio-tech-hub.php" class="w-12 h-12 bg-sb-gold rounded-full flex items-center justify-center hover:scale-110 transition-transform">
                            <i data-lucide="arrow-up-right" class="w-5 h-5 text-sb-black"></i>
                        </a>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-gray-500 text-sm mb-4">Collaborative workspace for a tech startup with modern amenities.</p>
                    <div class="flex items-center justify-between">
                        <span class="text-sb-gold text-sm font-semibold">Noida, UP</span>
                        <a href="portfolio-tech-hub.php" class="text-sb-charcoal text-sm font-semibold hover:text-sb-gold transition-colors flex items-center gap-1">
                            View Details <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-24 bg-sb-black text-white relative overflow-hidden">
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-sb-gold/10 rounded-full blur-3xl translate-x-1/2 translate-y-1/2"></div>
    <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center relative z-10">
        <h2 class="font-playfair text-4xl md:text-5xl font-bold mb-6">Have a Project in Mind?</h2>
        <p class="text-gray-400 text-lg mb-10">Let's discuss your vision and bring it to life.</p>
        <a href="contact.php" class="px-8 py-4 bg-sb-gold text-sb-black font-semibold uppercase tracking-widest text-sm hover:bg-sb-gold-light transition-all inline-flex items-center space-x-2">
            <span>Start a Project</span>
            <i data-lucide="arrow-right" class="w-4 h-4"></i>
        </a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
