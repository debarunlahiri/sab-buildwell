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
                    Transformations <span class="text-sb-gold">Gallery</span>
                </h1>
                <p class="text-gray-300 text-lg max-w-xl">
                    Witness the dramatic transformations we create. Before and after comparisons of our finest projects.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Transformations -->
<section class="py-24 lg:py-32 bg-sb-cream relative">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-20 scroll-reveal">
            <p class="text-sb-gold uppercase tracking-[0.3em] text-sm font-semibold mb-4">Before & After</p>
            <h2 class="font-playfair text-4xl md:text-5xl font-bold text-sb-charcoal mb-6">Project Transformations</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Drag the sliders to reveal the stunning transformations we create for our clients.
            </p>
        </div>
        
        <!-- Transformation 1 -->
        <div class="mb-20 scroll-reveal">
            <div class="max-w-4xl mx-auto mb-8">
                <h3 class="font-playfair text-2xl font-bold text-sb-charcoal mb-2">Living Room Transformation</h3>
                <p class="text-gray-500 text-sm">Ghaziabad, Uttar Pradesh — Residential Project</p>
            </div>
            <div class="before-after-container aspect-[16/9] rounded-lg overflow-hidden max-w-4xl mx-auto">
                <img src="assets/before_image.png" alt="Before" class="before-image">
                <img src="assets/after_image.png" alt="After" class="after-image">
                <div class="before-after-slider"></div>
                <div class="slider-handle">
                    <i data-lucide="move-horizontal" class="w-5 h-5"></i>
                </div>
                <div class="before-label">Before</div>
                <div class="after-label">After</div>
            </div>
        </div>
        
        <!-- Transformation 2 -->
        <div class="mb-20 scroll-reveal">
            <div class="max-w-4xl mx-auto mb-8">
                <h3 class="font-playfair text-2xl font-bold text-sb-charcoal mb-2">Corporate Office Makeover</h3>
                <p class="text-gray-500 text-sm">Delhi NCR — Commercial Project</p>
            </div>
            <div class="before-after-container aspect-[16/9] rounded-lg overflow-hidden max-w-4xl mx-auto">
                <img src="https://images.unsplash.com/photo-1497366811353-6870744d04b2?w=1200&h=675&fit=crop" alt="Before" class="before-image">
                <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=1200&h=675&fit=crop" alt="After" class="after-image">
                <div class="before-after-slider"></div>
                <div class="slider-handle">
                    <i data-lucide="move-horizontal" class="w-5 h-5"></i>
                </div>
                <div class="before-label">Before</div>
                <div class="after-label">After</div>
            </div>
        </div>
        
        <!-- Transformation 3 -->
        <div class="scroll-reveal">
            <div class="max-w-4xl mx-auto mb-8">
                <h3 class="font-playfair text-2xl font-bold text-sb-charcoal mb-2">Kitchen Renovation</h3>
                <p class="text-gray-500 text-sm">Noida, Uttar Pradesh — Residential Project</p>
            </div>
            <div class="before-after-container aspect-[16/9] rounded-lg overflow-hidden max-w-4xl mx-auto">
                <img src="https://images.unsplash.com/photo-1556912173-3db996b5e3b9?w=1200&h=675&fit=crop" alt="Before" class="before-image">
                <img src="https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?w=1200&h=675&fit=crop" alt="After" class="after-image">
                <div class="before-after-slider"></div>
                <div class="slider-handle">
                    <i data-lucide="move-horizontal" class="w-5 h-5"></i>
                </div>
                <div class="before-label">Before</div>
                <div class="after-label">After</div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-24 bg-sb-gold relative overflow-hidden">
    <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center relative z-10">
        <h2 class="font-playfair text-4xl md:text-5xl font-bold text-sb-black mb-6">Ready for Your Transformation?</h2>
        <p class="text-sb-black/80 text-lg mb-10">Contact us today and let's bring your vision to life.</p>
        <a href="contact.php" class="px-8 py-4 bg-sb-black text-white font-semibold uppercase tracking-widest text-sm hover:bg-sb-charcoal transition-all inline-flex items-center space-x-2">
            <span>Get Started</span>
            <i data-lucide="arrow-right" class="w-4 h-4"></i>
        </a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
