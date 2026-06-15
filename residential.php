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
                    Luxury <span class="text-sb-gold">Residential</span>
                </h1>
                <p class="text-gray-300 text-lg max-w-xl">
                    Bespoke high-end custom homes engineered for elite modern living. Intimate personal sanctuaries crafted with precision.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Projects Grid -->
<section class="py-24 lg:py-32 bg-sb-cream relative">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-16 scroll-reveal">
            <p class="text-sb-gold uppercase tracking-[0.3em] text-sm font-semibold mb-4">Luxury Living</p>
            <h2 class="font-playfair text-4xl md:text-5xl font-bold text-sb-charcoal mb-6">Our Residential Portfolio</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                We combine sophisticated material palettes and deep finishing execution to create intimate personal sanctuaries.
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Project 1 -->
            <div class="group relative overflow-hidden scroll-reveal bg-white shadow-lg lg:col-span-2 lg:row-span-2">
                <div class="h-full min-h-[400px] lg:min-h-full overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?w=800&h=800&fit=crop" alt="Living Room" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-sb-black/90 via-sb-black/40 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-8">
                    <p class="text-sb-gold uppercase tracking-widest text-xs font-semibold mb-2">Residential</p>
                    <h3 class="font-playfair text-2xl lg:text-3xl font-bold text-white mb-2">Premium Luxury Living Rooms</h3>
                    <p class="text-gray-300 text-sm max-w-md opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        Curated spaces that blend comfort with sophistication, featuring bespoke furniture and artisanal finishes.
                    </p>
                </div>
            </div>
            
            <!-- Project 2 -->
            <div class="group relative overflow-hidden scroll-reveal bg-white shadow-lg">
                <div class="aspect-square overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?w=600&h=600&fit=crop" alt="Kitchen" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-sb-black/90 via-sb-black/40 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6">
                    <p class="text-sb-gold uppercase tracking-widest text-[10px] font-semibold mb-1">Residential</p>
                    <h3 class="font-playfair text-lg font-bold text-white">State-of-the-Art Modular Kitchens</h3>
                </div>
            </div>
            
            <!-- Project 3 -->
            <div class="group relative overflow-hidden scroll-reveal bg-white shadow-lg">
                <div class="aspect-square overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1505693416388-1295fceeeb88?w=600&h=600&fit=crop" alt="Bedroom" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-sb-black/90 via-sb-black/40 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6">
                    <p class="text-sb-gold uppercase tracking-widest text-[10px] font-semibold mb-1">Residential</p>
                    <h3 class="font-playfair text-lg font-bold text-white">Bespoke Master Bedrooms</h3>
                </div>
            </div>
            
            <!-- Project 4 -->
            <div class="group relative overflow-hidden scroll-reveal bg-white shadow-lg">
                <div class="aspect-square overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1600585154526-990dced4db0d?w=600&h=600&fit=crop" alt="Bathroom" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-sb-black/90 via-sb-black/40 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6">
                    <p class="text-sb-gold uppercase tracking-widest text-[10px] font-semibold mb-1">Residential</p>
                    <h3 class="font-playfair text-lg font-bold text-white">Luxury Bathroom Design</h3>
                </div>
            </div>
            
            <!-- Project 5 -->
            <div class="group relative overflow-hidden scroll-reveal bg-white shadow-lg">
                <div class="aspect-square overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1600566753086-00f18fb6b3ea?w=600&h=600&fit=crop" alt="Dining" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-sb-black/90 via-sb-black/40 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6">
                    <p class="text-sb-gold uppercase tracking-widest text-[10px] font-semibold mb-1">Residential</p>
                    <h3 class="font-playfair text-lg font-bold text-white">Elegant Dining Spaces</h3>
                </div>
            </div>
            
            <!-- Project 6 -->
            <div class="group relative overflow-hidden scroll-reveal bg-white shadow-lg">
                <div class="aspect-square overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1600210491898-7e67f8d3b3e3?w=600&h=600&fit=crop" alt="Study" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-sb-black/90 via-sb-black/40 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6">
                    <p class="text-sb-gold uppercase tracking-widest text-[10px] font-semibold mb-1">Residential</p>
                    <h3 class="font-playfair text-lg font-bold text-white">Home Study & Library</h3>
                </div>
            </div>
            
            <!-- Project 7 - Full Width -->
            <div class="group relative overflow-hidden scroll-reveal bg-white shadow-lg md:col-span-2 lg:col-span-3">
                <div class="aspect-[21/9] lg:aspect-[3/1] overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1600585154526-990dced4db0d?w=1200&h=400&fit=crop" alt="Exterior" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-sb-black/90 via-sb-black/40 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-8">
                    <p class="text-sb-gold uppercase tracking-widest text-xs font-semibold mb-2">Residential</p>
                    <h3 class="font-playfair text-2xl font-bold text-white">Modern Exterior HPL Sheet Elevations</h3>
                    <p class="text-gray-300 text-sm max-w-xl mt-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        Contemporary facade solutions combining durability with aesthetic excellence.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-24 bg-sb-black text-white relative overflow-hidden">
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-sb-gold/10 rounded-full blur-3xl translate-x-1/2 translate-y-1/2"></div>
    <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center relative z-10">
        <h2 class="font-playfair text-4xl md:text-5xl font-bold mb-6">Design Your Dream Home</h2>
        <p class="text-gray-400 text-lg mb-10">Let's create a living space that reflects your personality and lifestyle.</p>
        <a href="contact.php" class="px-8 py-4 bg-sb-gold text-sb-black font-semibold uppercase tracking-widest text-sm hover:bg-sb-gold-light transition-all inline-flex items-center space-x-2">
            <span>Start a Project</span>
            <i data-lucide="arrow-right" class="w-4 h-4"></i>
        </a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
