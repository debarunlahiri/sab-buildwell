<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<!-- Hero Section -->
<section class="relative w-full h-[60vh] min-h-[500px] overflow-hidden bg-sb-black">
    <div class="absolute inset-0 bg-gradient-to-b from-sb-black/40 via-sb-black/60 to-sb-black/90 z-10"></div>
    <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1497366216548-37526070297c?w=1920&h=1080&fit=crop')] bg-cover bg-center"></div>
    
    <div class="relative z-20 h-full flex items-center">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 w-full">
            <div class="max-w-3xl">
                <p class="text-sb-gold uppercase tracking-[0.3em] text-sm font-semibold mb-4">Our Services</p>
                <h1 class="font-playfair text-5xl md:text-6xl lg:text-7xl font-bold text-white leading-tight mb-6">
                    Comprehensive <span class="text-sb-gold">Interior</span> Solutions
                </h1>
                <p class="text-gray-300 text-lg max-w-xl">
                    From concept to completion, we offer end-to-end interior design and turnkey execution services.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Services Overview -->
<section class="py-24 lg:py-32 bg-sb-cream relative overflow-hidden">
    <div class="absolute top-0 left-0 w-72 h-72 bg-sb-gold/5 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2"></div>
    
    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
        <div class="text-center mb-20 scroll-reveal">
            <p class="text-sb-gold uppercase tracking-[0.3em] text-sm font-semibold mb-4">What We Offer</p>
            <h2 class="font-playfair text-4xl md:text-5xl font-bold text-sb-charcoal mb-6">Our Premium Services</h2>
            <p class="text-gray-600 max-w-2xl mx-auto text-lg">
                We provide a comprehensive suite of interior design and execution services tailored to both commercial and residential clients.
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Service 1 -->
            <div class="tilt-card bg-white p-10 shadow-xl border border-gray-100 hover:border-sb-gold/30 transition-all duration-500 hover:shadow-2xl group scroll-reveal">
                <div class="tilt-card-shine rounded-lg"></div>
                <div class="relative z-10">
                    <div class="w-16 h-16 rounded-full bg-sb-gold/10 border border-sb-gold flex items-center justify-center mb-6 group-hover:bg-sb-gold group-hover:border-sb-gold transition-all duration-500">
                        <i data-lucide="compass" class="w-7 h-7 text-sb-gold group-hover:text-sb-black transition-colors"></i>
                    </div>
                    <h3 class="font-playfair text-2xl font-bold text-sb-charcoal mb-3">Interior Design</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Complete interior design solutions from concept to completion. Our team creates bespoke designs that reflect your brand identity and personal style.
                    </p>
                    <ul class="space-y-2 text-gray-500 text-sm">
                        <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-sb-gold"></i> Space Planning</li>
                        <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-sb-gold"></i> 3D Visualization</li>
                        <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-sb-gold"></i> Material Selection</li>
                    </ul>
                </div>
            </div>
            
            <!-- Service 2 -->
            <div class="tilt-card bg-white p-10 shadow-xl border border-gray-100 hover:border-sb-gold/30 transition-all duration-500 hover:shadow-2xl group scroll-reveal">
                <div class="tilt-card-shine rounded-lg"></div>
                <div class="relative z-10">
                    <div class="w-16 h-16 rounded-full bg-sb-gold/10 border border-sb-gold flex items-center justify-center mb-6 group-hover:bg-sb-gold group-hover:border-sb-gold transition-all duration-500">
                        <i data-lucide="hard-hat" class="w-7 h-7 text-sb-gold group-hover:text-sb-black transition-colors"></i>
                    </div>
                    <h3 class="font-playfair text-2xl font-bold text-sb-charcoal mb-3">Turnkey Execution</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        End-to-end project management ensuring timely delivery. We handle everything from civil work to final handover with strict quality control.
                    </p>
                    <ul class="space-y-2 text-gray-500 text-sm">
                        <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-sb-gold"></i> Project Management</li>
                        <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-sb-gold"></i> On-site Supervision</li>
                        <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-sb-gold"></i> Quality Assurance</li>
                    </ul>
                </div>
            </div>
            
            <!-- Service 3 -->
            <div class="tilt-card bg-white p-10 shadow-xl border border-gray-100 hover:border-sb-gold/30 transition-all duration-500 hover:shadow-2xl group scroll-reveal">
                <div class="tilt-card-shine rounded-lg"></div>
                <div class="relative z-10">
                    <div class="w-16 h-16 rounded-full bg-sb-gold/10 border border-sb-gold flex items-center justify-center mb-6 group-hover:bg-sb-gold group-hover:border-sb-gold transition-all duration-500">
                        <i data-lucide="box" class="w-7 h-7 text-sb-gold group-hover:text-sb-black transition-colors"></i>
                    </div>
                    <h3 class="font-playfair text-2xl font-bold text-sb-charcoal mb-3">Modular Solutions</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Custom modular furniture and storage systems designed for modern functionality. Maximizing space while maintaining aesthetic excellence.
                    </p>
                    <ul class="space-y-2 text-gray-500 text-sm">
                        <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-sb-gold"></i> Kitchen Cabinets</li>
                        <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-sb-gold"></i> Wardrobes</li>
                        <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-sb-gold"></i> Office Partitions</li>
                    </ul>
                </div>
            </div>
            
            <!-- Service 4 -->
            <div class="tilt-card bg-white p-10 shadow-xl border border-gray-100 hover:border-sb-gold/30 transition-all duration-500 hover:shadow-2xl group scroll-reveal">
                <div class="tilt-card-shine rounded-lg"></div>
                <div class="relative z-10">
                    <div class="w-16 h-16 rounded-full bg-sb-gold/10 border border-sb-gold flex items-center justify-center mb-6 group-hover:bg-sb-gold group-hover:border-sb-gold transition-all duration-500">
                        <i data-lucide="lightbulb" class="w-7 h-7 text-sb-gold group-hover:text-sb-black transition-colors"></i>
                    </div>
                    <h3 class="font-playfair text-2xl font-bold text-sb-charcoal mb-3">MEP Services</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Professional mechanical, electrical, and plumbing solutions. Integrated seamlessly into your design for optimal functionality.
                    </p>
                    <ul class="space-y-2 text-gray-500 text-sm">
                        <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-sb-gold"></i> Electrical Layout</li>
                        <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-sb-gold"></i> HVAC Systems</li>
                        <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-sb-gold"></i> Fire Safety</li>
                    </ul>
                </div>
            </div>
            
            <!-- Service 5 -->
            <div class="tilt-card bg-white p-10 shadow-xl border border-gray-100 hover:border-sb-gold/30 transition-all duration-500 hover:shadow-2xl group scroll-reveal">
                <div class="tilt-card-shine rounded-lg"></div>
                <div class="relative z-10">
                    <div class="w-16 h-16 rounded-full bg-sb-gold/10 border border-sb-gold flex items-center justify-center mb-6 group-hover:bg-sb-gold group-hover:border-sb-gold transition-all duration-500">
                        <i data-lucide="palette" class="w-7 h-7 text-sb-gold group-hover:text-sb-black transition-colors"></i>
                    </div>
                    <h3 class="font-playfair text-2xl font-bold text-sb-charcoal mb-3">Surface Treatments</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Premium wall treatments, flooring solutions, and decorative finishes. Elevating spaces with textures, colors, and materials that define luxury.
                    </p>
                    <ul class="space-y-2 text-gray-500 text-sm">
                        <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-sb-gold"></i> Wall Paneling</li>
                        <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-sb-gold"></i> False Ceiling</li>
                        <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-sb-gold"></i> Flooring</li>
                    </ul>
                </div>
            </div>
            
            <!-- Service 6 -->
            <div class="tilt-card bg-white p-10 shadow-xl border border-gray-100 hover:border-sb-gold/30 transition-all duration-500 hover:shadow-2xl group scroll-reveal">
                <div class="tilt-card-shine rounded-lg"></div>
                <div class="relative z-10">
                    <div class="w-16 h-16 rounded-full bg-sb-gold/10 border border-sb-gold flex items-center justify-center mb-6 group-hover:bg-sb-gold group-hover:border-sb-gold transition-all duration-500">
                        <i data-lucide="shield-check" class="w-7 h-7 text-sb-gold group-hover:text-sb-black transition-colors"></i>
                    </div>
                    <h3 class="font-playfair text-2xl font-bold text-sb-charcoal mb-3">Post-Completion Support</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Our commitment doesn't end at handover. We provide comprehensive maintenance support and warranty services for all our projects.
                    </p>
                    <ul class="space-y-2 text-gray-500 text-sm">
                        <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-sb-gold"></i> Warranty Service</li>
                        <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-sb-gold"></i> Maintenance</li>
                        <li class="flex items-center gap-2"><i data-lucide="check" class="w-4 h-4 text-sb-gold"></i> Renovation</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Process -->
<section class="py-24 lg:py-32 bg-sb-black text-white relative overflow-hidden">
    <div class="absolute inset-0 opacity-10 grid-pattern"></div>
    
    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
        <div class="text-center mb-20 scroll-reveal">
            <p class="text-sb-gold uppercase tracking-[0.3em] text-sm font-semibold mb-4">How We Work</p>
            <h2 class="font-playfair text-4xl md:text-5xl font-bold">Our Process</h2>
        </div>
        
        <div class="grid md:grid-cols-5 gap-8">
            <div class="text-center scroll-reveal">
                <div class="w-16 h-16 rounded-full bg-sb-gold text-sb-black font-playfair text-xl font-bold flex items-center justify-center mx-auto mb-4 shadow-lg shadow-sb-gold/30">01</div>
                <h3 class="font-playfair text-lg font-bold mb-2">Consultation</h3>
                <p class="text-gray-400 text-sm">Site evaluation and client brief processing</p>
            </div>
            <div class="text-center scroll-reveal">
                <div class="w-16 h-16 rounded-full bg-sb-gold text-sb-black font-playfair text-xl font-bold flex items-center justify-center mx-auto mb-4 shadow-lg shadow-sb-gold/30">02</div>
                <h3 class="font-playfair text-lg font-bold mb-2">Design</h3>
                <p class="text-gray-400 text-sm">3D renders and spatial blueprinting</p>
            </div>
            <div class="text-center scroll-reveal">
                <div class="w-16 h-16 rounded-full bg-sb-gold text-sb-black font-playfair text-xl font-bold flex items-center justify-center mx-auto mb-4 shadow-lg shadow-sb-gold/30">03</div>
                <h3 class="font-playfair text-lg font-bold mb-2">Planning</h3>
                <p class="text-gray-400 text-sm">BOQ finalization and procurement</p>
            </div>
            <div class="text-center scroll-reveal">
                <div class="w-16 h-16 rounded-full bg-sb-gold text-sb-black font-playfair text-xl font-bold flex items-center justify-center mx-auto mb-4 shadow-lg shadow-sb-gold/30">04</div>
                <h3 class="font-playfair text-lg font-bold mb-2">Execution</h3>
                <p class="text-gray-400 text-sm">Civil, MEP, and joinery installation</p>
            </div>
            <div class="text-center scroll-reveal">
                <div class="w-16 h-16 rounded-full bg-sb-gold text-sb-black font-playfair text-xl font-bold flex items-center justify-center mx-auto mb-4 shadow-lg shadow-sb-gold/30">05</div>
                <h3 class="font-playfair text-lg font-bold mb-2">Handover</h3>
                <p class="text-gray-400 text-sm">Quality checks and clean site delivery</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-24 bg-sb-gold relative overflow-hidden">
    <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center relative z-10">
        <h2 class="font-playfair text-4xl md:text-5xl font-bold text-sb-black mb-6">Start Your Project Today</h2>
        <p class="text-sb-black/80 text-lg mb-10">Contact us for a free consultation and site evaluation.</p>
        <a href="contact.php" class="px-8 py-4 bg-sb-black text-white font-semibold uppercase tracking-widest text-sm hover:bg-sb-charcoal transition-all inline-flex items-center space-x-2">
            <span>Contact Us</span>
            <i data-lucide="arrow-right" class="w-4 h-4"></i>
        </a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
