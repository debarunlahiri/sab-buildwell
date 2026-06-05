<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<!-- Hero Section -->
<section id="hero" class="relative w-full h-screen overflow-hidden bg-sb-black">
    <div id="three-canvas" class="absolute inset-0 z-0"></div>
    <div class="absolute inset-0 bg-gradient-to-b from-sb-black/60 via-sb-black/40 to-sb-black/90 z-10"></div>
    
    <!-- Floating Geometric Shapes -->
    <div class="floating-shapes-container">
        <div class="floating-shape circle" style="width: 300px; height: 300px; top: 10%; left: -5%;"></div>
        <div class="floating-shape square" style="width: 150px; height: 150px; top: 60%; right: 10%;"></div>
        <div class="floating-shape circle" style="width: 80px; height: 80px; top: 20%; right: 30%;"></div>
        <div class="floating-shape line" style="top: 40%; left: 20%; width: 200px; transform: rotate(45deg);"></div>
        <div class="floating-shape line" style="bottom: 20%; right: 25%; width: 150px; transform: rotate(-30deg);"></div>
    </div>
    
    <div class="relative z-20 h-full flex items-center">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 w-full">
            <div class="max-w-4xl">
                <div class="overflow-hidden mb-4">
                    <p class="hero-subtitle text-sb-gold uppercase tracking-[0.4em] text-sm font-semibold transform translate-y-full">Turnkey Office & Architecture</p>
                </div>
                <div class="overflow-hidden mb-6">
                    <h1 class="hero-title font-playfair text-5xl md:text-7xl lg:text-8xl font-bold text-white leading-[1.1] transform translate-y-full">
                        SAB <span class="text-sb-gold">Buildwell</span><br>Projects
                    </h1>
                </div>
                <div class="overflow-hidden mb-10">
                    <p class="hero-tagline text-xl md:text-2xl text-white/80 font-light italic font-playfair transform translate-y-full">
                        "Constructing Dreams. Building Trust."
                    </p>
                </div>
                <div class="overflow-hidden">
                    <div class="hero-cta transform translate-y-full">
                        <p class="text-gray-400 max-w-xl mb-8 leading-relaxed">
                            Bespoke Commercial Workspace Systems, Executive Infrastructure, and Luxury Residential Masterpieces Engineered to Perfection.
                        </p>
                        <div class="flex flex-wrap gap-4">
                            <a href="#workflow" class="magnetic-btn group px-8 py-4 bg-sb-gold text-sb-black font-semibold uppercase tracking-widest text-sm hover:bg-sb-gold-light transition-all flex items-center space-x-2">
                                <span>Our Process</span>
                                <i data-lucide="arrow-right" class="w-4 h-4 transform group-hover:translate-x-1 transition-transform"></i>
                            </a>
                            <a href="#contact" class="magnetic-btn px-8 py-4 border border-white/30 text-white font-semibold uppercase tracking-widest text-sm hover:border-sb-gold hover:text-sb-gold transition-all">
                                Get in Touch
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Scroll Indicator -->
    <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 z-20">
        <div class="w-6 h-10 border-2 border-white/30 rounded-full flex justify-center pt-2">
            <div class="w-1 h-3 bg-sb-gold rounded-full animate-bounce"></div>
        </div>
    </div>
    
    <!-- SVG Animated Border -->
    <svg class="absolute bottom-0 left-0 w-full h-16 z-20" viewBox="0 0 1440 64" preserveAspectRatio="none">
        <path class="animate-line" d="M0,64 C360,0 1080,0 1440,64" fill="none" stroke="#c9a96e" stroke-width="2" opacity="0.5"/>
    </svg>
</section>

<!-- Executive Summary -->
<section id="about" class="py-24 lg:py-32 bg-sb-cream relative overflow-hidden">
    <div class="absolute top-0 right-0 w-96 h-96 bg-sb-gold/5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>
    
    <!-- Decorative SVG -->
    <svg class="absolute top-20 left-0 w-64 h-64 opacity-10" viewBox="0 0 200 200">
        <circle cx="100" cy="100" r="80" fill="none" stroke="#c9a96e" stroke-width="1" class="animate-line"/>
        <rect x="50" y="50" width="100" height="100" fill="none" stroke="#c9a96e" stroke-width="1" transform="rotate(45 100 100)" class="animate-line"/>
    </svg>
    
    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div class="scroll-reveal">
                <p class="text-sb-gold uppercase tracking-[0.3em] text-sm font-semibold mb-4">Executive Summary</p>
                <h2 class="font-playfair text-4xl md:text-5xl font-bold text-sb-charcoal mb-8 leading-tight">
                    Transforming Visions Into <span class="text-sb-gold">Architectural Reality</span>
                </h2>
                <div class="space-y-6 text-gray-600 leading-relaxed">
                    <p>
                        SAB Buildwell Projects is a premier, full-service interior design and turnkey execution firm dedicated to transforming complex architectural blueprints into breathtaking, functional realities.
                    </p>
                    <p>
                        Driven by an uncompromising commitment to premium craftsmanship, structural integrity, and absolute transparency, we seamlessly bridge the gap between creative design vision and engineering precision.
                    </p>
                    <p>
                        We specialize in delivering best-in-class architectural and interior environments across both Commercial and Residential sectors. From high-productivity corporate offices tailored to reflect a brand's corporate identity, to high-end luxury residential spaces custom engineered for modern lifestyles.
                    </p>
                </div>
                <div class="mt-10 flex items-center space-x-4">
                    <div class="w-16 h-[2px] bg-sb-gold"></div>
                    <span class="text-sb-charcoal font-semibold uppercase tracking-widest text-sm">Since 2010</span>
                </div>
            </div>
            
            <div class="relative scroll-reveal">
                <div class="grid grid-cols-2 gap-4">
                    <div class="space-y-4 mt-8">
                        <div class="relative overflow-hidden group zoom-hover">
                            <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=600&h=800&fit=crop" alt="Luxury Interior" class="w-full h-64 object-cover">
                            <div class="absolute inset-0 bg-sb-gold/20 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                            <div class="corner-accent tl"></div>
                            <div class="corner-accent br"></div>
                        </div>
                        <div class="relative overflow-hidden group zoom-hover">
                            <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=600&h=400&fit=crop" alt="Modern Office" class="w-full h-48 object-cover">
                            <div class="absolute inset-0 bg-sb-gold/20 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div class="relative overflow-hidden group zoom-hover">
                            <img src="https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?w=600&h=400&fit=crop" alt="Residential Design" class="w-full h-48 object-cover">
                            <div class="absolute inset-0 bg-sb-gold/20 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        </div>
                        <div class="relative overflow-hidden group zoom-hover">
                            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=600&h=800&fit=crop" alt="Premium Interior" class="w-full h-64 object-cover">
                            <div class="absolute inset-0 bg-sb-gold/20 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                            <div class="corner-accent tl"></div>
                            <div class="corner-accent br"></div>
                        </div>
                    </div>
                </div>
                <!-- Floating Badge -->
                <div class="absolute -bottom-6 -left-6 bg-sb-gold text-sb-black p-6 shadow-2xl z-10">
                    <p class="font-playfair text-3xl font-bold">15+</p>
                    <p class="text-xs uppercase tracking-widest mt-1">Years Experience</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Interactive Services Section with 3D Tilt Cards -->
<section class="py-24 lg:py-32 bg-sb-black text-white relative overflow-hidden grid-pattern">
    <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23c9a96e\' fill-opacity=\'0.4\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    
    <!-- Animated SVG Background -->
    <svg class="absolute top-10 right-10 w-40 h-40 opacity-20" viewBox="0 0 100 100">
        <polygon points="50,5 95,50 50,95 5,50" fill="none" stroke="#c9a96e" stroke-width="0.5" class="animate-line"/>
        <circle cx="50" cy="50" r="30" fill="none" stroke="#c9a96e" stroke-width="0.5" class="animate-line"/>
    </svg>
    
    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16 scroll-reveal">
            <p class="text-sb-gold uppercase tracking-[0.3em] text-sm font-semibold mb-4">What We Offer</p>
            <h2 class="font-playfair text-4xl md:text-5xl font-bold mb-4">Our <span class="scramble-text">Services</span></h2>
            <p class="text-gray-400 max-w-2xl mx-auto">Comprehensive interior design and turnkey solutions tailored to your unique requirements</p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Service 1 -->
            <div class="tilt-card service-card glass-dark p-8 border border-white/10 hover:border-sb-gold/50 transition-all group scroll-reveal">
                <div class="tilt-card-shine rounded-lg"></div>
                <div class="tilt-card-content relative z-10">
                    <div class="service-icon w-16 h-16 bg-sb-gold/20 flex items-center justify-center mb-6 group-hover:bg-sb-gold transition-colors">
                        <i data-lucide="compass" class="w-8 h-8 text-sb-gold group-hover:text-sb-black transition-colors"></i>
                    </div>
                    <h3 class="font-playfair text-xl font-semibold mb-3">Interior Design</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">Complete interior design solutions from concept to completion, tailored to reflect your brand and lifestyle.</p>
                </div>
            </div>
            
            <!-- Service 2 -->
            <div class="tilt-card service-card glass-dark p-8 border border-white/10 hover:border-sb-gold/50 transition-all group scroll-reveal">
                <div class="tilt-card-shine rounded-lg"></div>
                <div class="tilt-card-content relative z-10">
                    <div class="service-icon w-16 h-16 bg-sb-gold/20 flex items-center justify-center mb-6 group-hover:bg-sb-gold transition-colors">
                        <i data-lucide="hard-hat" class="w-8 h-8 text-sb-gold group-hover:text-sb-black transition-colors"></i>
                    </div>
                    <h3 class="font-playfair text-xl font-semibold mb-3">Turnkey Execution</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">End-to-end project management ensuring timely delivery with uncompromising quality standards.</p>
                </div>
            </div>
            
            <!-- Service 3 -->
            <div class="tilt-card service-card glass-dark p-8 border border-white/10 hover:border-sb-gold/50 transition-all group scroll-reveal">
                <div class="tilt-card-shine rounded-lg"></div>
                <div class="tilt-card-content relative z-10">
                    <div class="service-icon w-16 h-16 bg-sb-gold/20 flex items-center justify-center mb-6 group-hover:bg-sb-gold transition-colors">
                        <i data-lucide="box" class="w-8 h-8 text-sb-gold group-hover:text-sb-black transition-colors"></i>
                    </div>
                    <h3 class="font-playfair text-xl font-semibold mb-3">Modular Solutions</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">Custom modular furniture and storage systems designed for modern functionality and aesthetics.</p>
                </div>
            </div>
            
            <!-- Service 4 -->
            <div class="tilt-card service-card glass-dark p-8 border border-white/10 hover:border-sb-gold/50 transition-all group scroll-reveal">
                <div class="tilt-card-shine rounded-lg"></div>
                <div class="tilt-card-content relative z-10">
                    <div class="service-icon w-16 h-16 bg-sb-gold/20 flex items-center justify-center mb-6 group-hover:bg-sb-gold transition-colors">
                        <i data-lucide="lightbulb" class="w-8 h-8 text-sb-gold group-hover:text-sb-black transition-colors"></i>
                    </div>
                    <h3 class="font-playfair text-xl font-semibold mb-3">MEP Services</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">Professional mechanical, electrical, and plumbing solutions integrated seamlessly into your design.</p>
                </div>
            </div>
            
            <!-- Service 5 -->
            <div class="tilt-card service-card glass-dark p-8 border border-white/10 hover:border-sb-gold/50 transition-all group scroll-reveal">
                <div class="tilt-card-shine rounded-lg"></div>
                <div class="tilt-card-content relative z-10">
                    <div class="service-icon w-16 h-16 bg-sb-gold/20 flex items-center justify-center mb-6 group-hover:bg-sb-gold transition-colors">
                        <i data-lucide="palette" class="w-8 h-8 text-sb-gold group-hover:text-sb-black transition-colors"></i>
                    </div>
                    <h3 class="font-playfair text-xl font-semibold mb-3">Surface Treatments</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">Premium wall treatments, flooring solutions, and decorative finishes that define luxury spaces.</p>
                </div>
            </div>
            
            <!-- Service 6 -->
            <div class="tilt-card service-card glass-dark p-8 border border-white/10 hover:border-sb-gold/50 transition-all group scroll-reveal">
                <div class="tilt-card-shine rounded-lg"></div>
                <div class="tilt-card-content relative z-10">
                    <div class="service-icon w-16 h-16 bg-sb-gold/20 flex items-center justify-center mb-6 group-hover:bg-sb-gold transition-colors">
                        <i data-lucide="shield-check" class="w-8 h-8 text-sb-gold group-hover:text-sb-black transition-colors"></i>
                    </div>
                    <h3 class="font-playfair text-xl font-semibold mb-3">Quality Assurance</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">Rigorous quality checks and compliance verification at every stage of the project lifecycle.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Company Matrix -->
<section class="py-24 lg:py-32 bg-sb-charcoal text-white relative overflow-hidden">
    <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23c9a96e\' fill-opacity=\'0.4\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    
    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
        <div class="text-center mb-20 scroll-reveal">
            <p class="text-sb-gold uppercase tracking-[0.3em] text-sm font-semibold mb-4">Company Overview</p>
            <h2 class="font-playfair text-4xl md:text-5xl lg:text-6xl font-bold mb-6">Who We Are</h2>
            <p class="text-gray-400 max-w-2xl mx-auto text-lg">
                A premier interior design and turnkey execution firm, transforming architectural visions into breathtaking realities since 2010.
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Card 1: Company -->
            <div class="tilt-card bg-white/5 backdrop-blur-sm p-8 border border-white/10 hover:border-sb-gold/50 transition-all duration-500 group scroll-reveal">
                <div class="tilt-card-shine rounded-lg"></div>
                <div class="relative z-10">
                    <div class="w-14 h-14 rounded-full bg-sb-gold/10 border border-sb-gold/30 flex items-center justify-center mb-6 group-hover:bg-sb-gold group-hover:border-sb-gold transition-all duration-500">
                        <i data-lucide="landmark" class="w-6 h-6 text-sb-gold group-hover:text-sb-black transition-colors"></i>
                    </div>
                    <h3 class="font-playfair text-2xl font-semibold mb-3 text-white">Company</h3>
                    <p class="text-gray-400 text-sm leading-relaxed mb-4">
                        SAB Buildwell Projects is a premier full-service interior design firm headquartered in Ghaziabad, Uttar Pradesh.
                    </p>
                    <div class="flex items-center gap-2 text-sb-gold text-sm">
                        <span class="w-6 h-[1px] bg-sb-gold"></span>
                        <span class="uppercase tracking-widest text-xs">Est. 2010</span>
                    </div>
                </div>
            </div>
            
            <!-- Card 2: Expertise -->
            <div class="tilt-card bg-white/5 backdrop-blur-sm p-8 border border-white/10 hover:border-sb-gold/50 transition-all duration-500 group scroll-reveal">
                <div class="tilt-card-shine rounded-lg"></div>
                <div class="relative z-10">
                    <div class="w-14 h-14 rounded-full bg-sb-gold/10 border border-sb-gold/30 flex items-center justify-center mb-6 group-hover:bg-sb-gold group-hover:border-sb-gold transition-all duration-500">
                        <i data-lucide="target" class="w-6 h-6 text-sb-gold group-hover:text-sb-black transition-colors"></i>
                    </div>
                    <h3 class="font-playfair text-2xl font-semibold mb-3 text-white">Core Expertise</h3>
                    <p class="text-gray-400 text-sm leading-relaxed mb-4">
                        Specializing in commercial turnkey office fit-outs and premium residential interiors with full MEP integration.
                    </p>
                    <div class="flex items-center gap-2 text-sb-gold text-sm">
                        <span class="w-6 h-[1px] bg-sb-gold"></span>
                        <span class="uppercase tracking-widest text-xs">Turnkey Solutions</span>
                    </div>
                </div>
            </div>
            
            <!-- Card 3: Location / Service Area -->
            <div class="tilt-card bg-white/5 backdrop-blur-sm p-8 border border-white/10 hover:border-sb-gold/50 transition-all duration-500 group scroll-reveal">
                <div class="tilt-card-shine rounded-lg"></div>
                <div class="relative z-10">
                    <div class="w-14 h-14 rounded-full bg-sb-gold/10 border border-sb-gold/30 flex items-center justify-center mb-6 group-hover:bg-sb-gold group-hover:border-sb-gold transition-all duration-500">
                        <i data-lucide="map-pin" class="w-6 h-6 text-sb-gold group-hover:text-sb-black transition-colors"></i>
                    </div>
                    <h3 class="font-playfair text-2xl font-semibold mb-3 text-white">Headquarters</h3>
                    <p class="text-gray-400 text-sm leading-relaxed mb-4">
                        P-36, Durga Industrial Area, Sahibabad, Ghaziabad, Uttar Pradesh, India — Serving Delhi NCR and beyond.
                    </p>
                    <div class="flex items-center gap-2 text-sb-gold text-sm">
                        <span class="w-6 h-[1px] bg-sb-gold"></span>
                        <span class="uppercase tracking-widest text-xs">Delhi NCR Based</span>
                    </div>
                </div>
            </div>
            
            <!-- Card 4: Clientele -->
            <div class="tilt-card bg-white/5 backdrop-blur-sm p-8 border border-white/10 hover:border-sb-gold/50 transition-all duration-500 group scroll-reveal">
                <div class="tilt-card-shine rounded-lg"></div>
                <div class="relative z-10">
                    <div class="w-14 h-14 rounded-full bg-sb-gold/10 border border-sb-gold/30 flex items-center justify-center mb-6 group-hover:bg-sb-gold group-hover:border-sb-gold transition-all duration-500">
                        <i data-lucide="award" class="w-6 h-6 text-sb-gold group-hover:text-sb-black transition-colors"></i>
                    </div>
                    <h3 class="font-playfair text-2xl font-semibold mb-3 text-white">Clientele</h3>
                    <p class="text-gray-400 text-sm leading-relaxed mb-4">
                        Trusted by corporate headquarters, premium retail brands, and luxury residential clients across India.
                    </p>
                    <div class="flex items-center gap-2 text-sb-gold text-sm">
                        <span class="w-6 h-[1px] bg-sb-gold"></span>
                        <span class="uppercase tracking-widest text-xs">500+ Projects</span>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>

<!-- Workflow Section -->
<section id="workflow" class="py-24 lg:py-32 bg-sb-cream relative overflow-hidden">
    <!-- Background decoration -->
    <div class="absolute top-0 left-0 w-72 h-72 bg-sb-gold/5 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-sb-gold/5 rounded-full blur-3xl translate-x-1/3 translate-y-1/3"></div>
    
    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
        <div class="text-center mb-20 scroll-reveal">
            <p class="text-sb-gold uppercase tracking-[0.3em] text-sm font-semibold mb-4">Our Methodology</p>
            <h2 class="font-playfair text-4xl md:text-5xl lg:text-6xl font-bold text-sb-charcoal mb-6">Project Architecture Workflow</h2>
            <p class="text-gray-600 max-w-2xl mx-auto text-lg leading-relaxed">
                At SAB Buildwell Projects, we maintain an orderly, step-by-step project framework that guarantees transparency, budget containment, and impeccable finishing alignment.
            </p>
        </div>
        
        <div class="relative">
            <!-- Animated Timeline Line -->
            <div class="hidden lg:block absolute left-1/2 transform -translate-x-1/2 top-0 bottom-0 w-1">
                <div class="w-full h-full bg-gradient-to-b from-sb-gold/20 via-sb-gold/50 to-sb-gold/20 rounded-full"></div>
                <div class="absolute top-0 left-1/2 transform -translate-x-1/2 w-4 h-4 bg-sb-gold rounded-full shadow-lg shadow-sb-gold/50"></div>
                <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-4 h-4 bg-sb-gold rounded-full shadow-lg shadow-sb-gold/50"></div>
            </div>
            
            <!-- Step 1 - Right Side -->
            <div class="workflow-step relative mb-20 lg:mb-28 scroll-reveal" data-step="1">
                <div class="grid lg:grid-cols-2 gap-8 lg:gap-16 items-center">
                    <!-- Content Left -->
                    <div class="lg:text-right lg:pr-16 order-2 lg:order-1">
                        <div class="workflow-card group bg-white p-8 lg:p-10 shadow-xl shadow-black/5 border border-gray-100 hover:border-sb-gold/30 transition-all duration-500 hover:shadow-2xl hover:shadow-sb-gold/10 relative overflow-hidden">
                            <!-- Corner accents -->
                            <div class="corner-accent tl border-sb-gold"></div>
                            <div class="absolute top-0 right-0 w-20 h-20 bg-sb-gold/5 rounded-bl-full -translate-y-10 translate-x-10 group-hover:translate-y-0 group-hover:translate-x-0 transition-transform duration-700"></div>
                            
                            <div class="relative z-10">
                                <div class="flex items-center lg:justify-end gap-4 mb-5">
                                    <div class="w-14 h-14 bg-sb-gold/10 border-2 border-sb-gold flex items-center justify-center group-hover:bg-sb-gold group-hover:border-sb-gold transition-all duration-500">
                                        <i data-lucide="clipboard-list" class="w-6 h-6 text-sb-gold group-hover:text-sb-black transition-colors"></i>
                                    </div>
                                    <h3 class="font-playfair text-2xl lg:text-3xl font-bold text-sb-charcoal">Initial Consultation & Site Evaluation</h3>
                                </div>
                                <p class="text-gray-600 leading-relaxed text-lg">
                                    We initiate deep site measurements, structural mapping, and client brief processing to evaluate basic civil configurations and mechanical/electrical restrictions.
                                </p>
                                <div class="mt-6 flex items-center lg:justify-end gap-2 text-sb-gold">
                                    <span class="w-8 h-[2px] bg-sb-gold"></span>
                                    <span class="text-sm font-semibold uppercase tracking-widest">Discovery Phase</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Node Right -->
                    <div class="hidden lg:flex items-center justify-center relative order-2 lg:order-2">
                        <div class="workflow-node relative">
                            <div class="w-24 h-24 rounded-full bg-sb-gold text-sb-black font-playfair text-3xl font-bold flex items-center justify-center shadow-2xl shadow-sb-gold/30 relative z-10 group-hover:scale-110 transition-transform duration-500">
                                01
                            </div>
                            <div class="absolute inset-0 bg-sb-gold/20 animate-ping rounded-full"></div>
                            <div class="absolute -inset-4 border-2 border-sb-gold/30 rounded-full"></div>
                        </div>
                        <div class="absolute w-16 h-[3px] bg-gradient-to-r from-sb-gold to-sb-gold/30 left-0 top-1/2 -translate-y-1/2"></div>
                    </div>
                    
                    <!-- Mobile Node -->
                    <div class="lg:hidden flex justify-center order-1 mb-4">
                        <div class="w-20 h-20 rounded-full bg-sb-gold text-sb-black font-playfair text-2xl font-bold flex items-center justify-center shadow-xl">
                            01
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Step 2 - Left Side -->
            <div class="workflow-step relative mb-20 lg:mb-28 scroll-reveal" data-step="2">
                <div class="grid lg:grid-cols-2 gap-8 lg:gap-16 items-center">
                    <!-- Node Left -->
                    <div class="hidden lg:flex items-center justify-center relative order-1">
                        <div class="workflow-node relative">
                            <div class="w-24 h-24 rounded-full bg-sb-gold text-sb-black font-playfair text-3xl font-bold flex items-center justify-center shadow-2xl shadow-sb-gold/30 relative z-10">
                                02
                            </div>
                            <div class="absolute inset-0 bg-sb-gold/20 animate-ping rounded-full"></div>
                            <div class="absolute -inset-4 border-2 border-sb-gold/30 rounded-full"></div>
                        </div>
                        <div class="absolute w-16 h-[3px] bg-gradient-to-l from-sb-gold to-sb-gold/30 right-0 top-1/2 -translate-y-1/2"></div>
                    </div>
                    
                    <!-- Content Right -->
                    <div class="lg:pl-16 order-2">
                        <div class="workflow-card group bg-white p-8 lg:p-10 shadow-xl shadow-black/5 border border-gray-100 hover:border-sb-gold/30 transition-all duration-500 hover:shadow-2xl hover:shadow-sb-gold/10 relative overflow-hidden">
                            <div class="corner-accent tl border-sb-gold"></div>
                            <div class="absolute top-0 left-0 w-20 h-20 bg-sb-gold/5 rounded-br-full -translate-y-10 -translate-x-10 group-hover:translate-y-0 group-hover:translate-x-0 transition-transform duration-700"></div>
                            
                            <div class="relative z-10">
                                <div class="flex items-center gap-4 mb-5">
                                    <div class="w-14 h-14 bg-sb-gold/10 border-2 border-sb-gold flex items-center justify-center group-hover:bg-sb-gold group-hover:border-sb-gold transition-all duration-500">
                                        <i data-lucide="layout" class="w-6 h-6 text-sb-gold group-hover:text-sb-black transition-colors"></i>
                                    </div>
                                    <h3 class="font-playfair text-2xl lg:text-3xl font-bold text-sb-charcoal">Spatial Blueprinting & 3D Render Layouts</h3>
                                </div>
                                <p class="text-gray-600 leading-relaxed text-lg">
                                    Our design engineers generate detailed ergonomic space planning matrices and photo-realistic 3D presentations to align raw architectural concepts with material specifications.
                                </p>
                                <div class="mt-6 flex items-center gap-2 text-sb-gold">
                                    <span class="text-sm font-semibold uppercase tracking-widest">Design Phase</span>
                                    <span class="w-8 h-[2px] bg-sb-gold"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Mobile Node -->
                    <div class="lg:hidden flex justify-center order-1 mb-4">
                        <div class="w-20 h-20 rounded-full bg-sb-gold text-sb-black font-playfair text-2xl font-bold flex items-center justify-center shadow-xl">
                            02
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Step 3 - Right Side -->
            <div class="workflow-step relative mb-20 lg:mb-28 scroll-reveal" data-step="3">
                <div class="grid lg:grid-cols-2 gap-8 lg:gap-16 items-center">
                    <div class="lg:text-right lg:pr-16 order-2 lg:order-1">
                        <div class="workflow-card group bg-white p-8 lg:p-10 shadow-xl shadow-black/5 border border-gray-100 hover:border-sb-gold/30 transition-all duration-500 hover:shadow-2xl hover:shadow-sb-gold/10 relative overflow-hidden">
                            <div class="corner-accent tl border-sb-gold"></div>
                            <div class="absolute top-0 right-0 w-20 h-20 bg-sb-gold/5 rounded-bl-full -translate-y-10 translate-x-10 group-hover:translate-y-0 group-hover:translate-x-0 transition-transform duration-700"></div>
                            
                            <div class="relative z-10">
                                <div class="flex items-center lg:justify-end gap-4 mb-5">
                                    <div class="w-14 h-14 bg-sb-gold/10 border-2 border-sb-gold flex items-center justify-center group-hover:bg-sb-gold group-hover:border-sb-gold transition-all duration-500">
                                        <i data-lucide="file-spreadsheet" class="w-6 h-6 text-sb-gold group-hover:text-sb-black transition-colors"></i>
                                    </div>
                                    <h3 class="font-playfair text-2xl lg:text-3xl font-bold text-sb-charcoal">BOQ Finalization & Procurement</h3>
                                </div>
                                <p class="text-gray-600 leading-relaxed text-lg">
                                    An itemized Bill of Quantities (BOQ) is formulated with absolute structural transparency. Materials, hardware systems, and fixtures are locked in prior to deployment.
                                </p>
                                <div class="mt-6 flex items-center lg:justify-end gap-2 text-sb-gold">
                                    <span class="w-8 h-[2px] bg-sb-gold"></span>
                                    <span class="text-sm font-semibold uppercase tracking-widest">Planning Phase</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="hidden lg:flex items-center justify-center relative order-2 lg:order-2">
                        <div class="workflow-node relative">
                            <div class="w-24 h-24 rounded-full bg-sb-gold text-sb-black font-playfair text-3xl font-bold flex items-center justify-center shadow-2xl shadow-sb-gold/30 relative z-10">
                                03
                            </div>
                            <div class="absolute inset-0 bg-sb-gold/20 animate-ping rounded-full"></div>
                            <div class="absolute -inset-4 border-2 border-sb-gold/30 rounded-full"></div>
                        </div>
                        <div class="absolute w-16 h-[3px] bg-gradient-to-r from-sb-gold to-sb-gold/30 left-0 top-1/2 -translate-y-1/2"></div>
                    </div>
                    
                    <div class="lg:hidden flex justify-center order-1 mb-4">
                        <div class="w-20 h-20 rounded-full bg-sb-gold text-sb-black font-playfair text-2xl font-bold flex items-center justify-center shadow-xl">
                            03
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Step 4 - Left Side -->
            <div class="workflow-step relative mb-20 lg:mb-28 scroll-reveal" data-step="4">
                <div class="grid lg:grid-cols-2 gap-8 lg:gap-16 items-center">
                    <div class="hidden lg:flex items-center justify-center relative order-1">
                        <div class="workflow-node relative">
                            <div class="w-24 h-24 rounded-full bg-sb-gold text-sb-black font-playfair text-3xl font-bold flex items-center justify-center shadow-2xl shadow-sb-gold/30 relative z-10">
                                04
                            </div>
                            <div class="absolute inset-0 bg-sb-gold/20 animate-ping rounded-full"></div>
                            <div class="absolute -inset-4 border-2 border-sb-gold/30 rounded-full"></div>
                        </div>
                        <div class="absolute w-16 h-[3px] bg-gradient-to-l from-sb-gold to-sb-gold/30 right-0 top-1/2 -translate-y-1/2"></div>
                    </div>
                    
                    <div class="lg:pl-16 order-2">
                        <div class="workflow-card group bg-white p-8 lg:p-10 shadow-xl shadow-black/5 border border-gray-100 hover:border-sb-gold/30 transition-all duration-500 hover:shadow-2xl hover:shadow-sb-gold/10 relative overflow-hidden">
                            <div class="corner-accent tl border-sb-gold"></div>
                            <div class="absolute top-0 left-0 w-20 h-20 bg-sb-gold/5 rounded-br-full -translate-y-10 -translate-x-10 group-hover:translate-y-0 group-hover:translate-x-0 transition-transform duration-700"></div>
                            
                            <div class="relative z-10">
                                <div class="flex items-center gap-4 mb-5">
                                    <div class="w-14 h-14 bg-sb-gold/10 border-2 border-sb-gold flex items-center justify-center group-hover:bg-sb-gold group-hover:border-sb-gold transition-all duration-500">
                                        <i data-lucide="hammer" class="w-6 h-6 text-sb-gold group-hover:text-sb-black transition-colors"></i>
                                    </div>
                                    <h3 class="font-playfair text-2xl lg:text-3xl font-bold text-sb-charcoal">Turnkey Execution & MEP Installation</h3>
                                </div>
                                <p class="text-gray-600 leading-relaxed text-lg">
                                    Our onsite engineering crews execute civil structural updates, electrical cabling pathways, air-conditioning routing, and acoustic insulation matrices under strict supervision.
                                </p>
                                <div class="mt-6 flex items-center gap-2 text-sb-gold">
                                    <span class="text-sm font-semibold uppercase tracking-widest">Execution Phase</span>
                                    <span class="w-8 h-[2px] bg-sb-gold"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="lg:hidden flex justify-center order-1 mb-4">
                        <div class="w-20 h-20 rounded-full bg-sb-gold text-sb-black font-playfair text-2xl font-bold flex items-center justify-center shadow-xl">
                            04
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Step 5 - Right Side (Final) -->
            <div class="workflow-step relative scroll-reveal" data-step="5">
                <div class="grid lg:grid-cols-2 gap-8 lg:gap-16 items-center">
                    <div class="lg:text-right lg:pr-16 order-2 lg:order-1">
                        <div class="workflow-card group bg-white p-8 lg:p-10 shadow-xl shadow-black/5 border border-gray-100 hover:border-sb-gold/30 transition-all duration-500 hover:shadow-2xl hover:shadow-sb-gold/10 relative overflow-hidden">
                            <div class="corner-accent tl border-sb-gold"></div>
                            <div class="absolute top-0 right-0 w-20 h-20 bg-sb-gold/5 rounded-bl-full -translate-y-10 translate-x-10 group-hover:translate-y-0 group-hover:translate-x-0 transition-transform duration-700"></div>
                            
                            <div class="relative z-10">
                                <div class="flex items-center lg:justify-end gap-4 mb-5">
                                    <div class="w-14 h-14 bg-sb-gold/10 border-2 border-sb-gold flex items-center justify-center group-hover:bg-sb-gold group-hover:border-sb-gold transition-all duration-500">
                                        <i data-lucide="check-circle" class="w-6 h-6 text-sb-gold group-hover:text-sb-black transition-colors"></i>
                                    </div>
                                    <h3 class="font-playfair text-2xl lg:text-3xl font-bold text-sb-charcoal">Premium Joinery & Handover</h3>
                                </div>
                                <p class="text-gray-600 leading-relaxed text-lg">
                                    Bespoke customized modular carpentry units, ceiling paneling systems, and decorative surface layers are fitted, followed by rigid quality checks and absolute clean site handover.
                                </p>
                                <div class="mt-6 flex items-center lg:justify-end gap-2 text-sb-gold">
                                    <span class="w-8 h-[2px] bg-sb-gold"></span>
                                    <span class="text-sm font-semibold uppercase tracking-widest">Completion Phase</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="hidden lg:flex items-center justify-center relative order-2 lg:order-2">
                        <div class="workflow-node relative">
                            <div class="w-24 h-24 rounded-full bg-sb-gold text-sb-black font-playfair text-3xl font-bold flex items-center justify-center shadow-2xl shadow-sb-gold/30 relative z-10">
                                05
                            </div>
                            <div class="absolute inset-0 bg-sb-gold/20 animate-ping rounded-full"></div>
                            <div class="absolute -inset-4 border-2 border-sb-gold/30 rounded-full"></div>
                        </div>
                        <div class="absolute w-16 h-[3px] bg-gradient-to-r from-sb-gold to-sb-gold/30 left-0 top-1/2 -translate-y-1/2"></div>
                    </div>
                    
                    <div class="lg:hidden flex justify-center order-1 mb-4">
                        <div class="w-20 h-20 rounded-full bg-sb-gold text-sb-black font-playfair text-2xl font-bold flex items-center justify-center shadow-xl">
                            05
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Before/After Transformation Slider -->
<section class="py-24 lg:py-32 bg-sb-black text-white relative overflow-hidden">
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-sb-gold/10 rounded-full blur-3xl translate-x-1/2 translate-y-1/2"></div>
    
    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16 scroll-reveal">
            <p class="text-sb-gold uppercase tracking-[0.3em] text-sm font-semibold mb-4">Transformations</p>
            <h2 class="font-playfair text-4xl md:text-5xl font-bold mb-4">Before & After</h2>
            <p class="text-gray-400 max-w-2xl mx-auto">Drag the slider to reveal the stunning transformations we create</p>
        </div>
        
        <div class="max-w-4xl mx-auto scroll-reveal">
            <div class="before-after-container aspect-[16/9] rounded-lg overflow-hidden">
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
    </div>
</section>

<!-- Project Showcase -->
<section id="showcase" class="py-24 lg:py-32 bg-sb-cream relative">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-20 scroll-reveal">
            <p class="text-sb-gold uppercase tracking-[0.3em] text-sm font-semibold mb-4">Our Portfolio</p>
            <h2 class="font-playfair text-4xl md:text-5xl font-bold text-sb-charcoal mb-6">Residential & Corporate Showcase</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                From luxury homes to corporate headquarters, explore our diverse portfolio of premium interior transformations across residential and commercial sectors.
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Residential 1 - Large -->
            <div class="group relative overflow-hidden scroll-reveal lg:col-span-2 lg:row-span-2 zoom-hover interactive">
                <div class="h-full min-h-[400px] lg:min-h-full overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?w=800&h=800&fit=crop" alt="Luxury Living Room" class="w-full h-full object-cover">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-sb-black/90 via-sb-black/30 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-8">
                    <p class="text-sb-gold uppercase tracking-widest text-xs font-semibold mb-2">Residential</p>
                    <h3 class="font-playfair text-2xl lg:text-3xl font-bold text-white mb-2">Premium Luxury Living Rooms</h3>
                    <p class="text-gray-300 text-sm max-w-md opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        Curated spaces that blend comfort with sophistication, featuring bespoke furniture and artisanal finishes.
                    </p>
                </div>
                <div class="corner-accent tl"></div>
                <div class="corner-accent br"></div>
            </div>
            
            <!-- Commercial 1 -->
            <div class="group relative overflow-hidden scroll-reveal zoom-hover interactive">
                <div class="aspect-square overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?w=600&h=600&fit=crop" alt="Corporate Boardroom" class="w-full h-full object-cover">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-sb-black/90 via-sb-black/30 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6">
                    <p class="text-sb-gold uppercase tracking-widest text-[10px] font-semibold mb-1">Corporate</p>
                    <h3 class="font-playfair text-lg font-bold text-white">Executive Boardroom Design</h3>
                </div>
            </div>
            
            <!-- Residential 2 -->
            <div class="group relative overflow-hidden scroll-reveal zoom-hover interactive">
                <div class="aspect-square overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?w=600&h=600&fit=crop" alt="Modular Kitchen" class="w-full h-full object-cover">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-sb-black/90 via-sb-black/30 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6">
                    <p class="text-sb-gold uppercase tracking-widest text-[10px] font-semibold mb-1">Residential</p>
                    <h3 class="font-playfair text-lg font-bold text-white">State-of-the-Art Modular Kitchens</h3>
                </div>
            </div>
            
            <!-- Commercial 2 -->
            <div class="group relative overflow-hidden scroll-reveal zoom-hover interactive">
                <div class="aspect-square overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1604328698692-f76ea9498e76?w=600&h=600&fit=crop" alt="Office Reception" class="w-full h-full object-cover">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-sb-black/90 via-sb-black/30 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6">
                    <p class="text-sb-gold uppercase tracking-widest text-[10px] font-semibold mb-1">Corporate</p>
                    <h3 class="font-playfair text-lg font-bold text-white">Premium Client Reception Lounges</h3>
                </div>
            </div>
            
            <!-- Residential 3 -->
            <div class="group relative overflow-hidden scroll-reveal zoom-hover interactive">
                <div class="aspect-square overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1505693416388-1295fceeeb88?w=600&h=600&fit=crop" alt="Master Bedroom" class="w-full h-full object-cover">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-sb-black/90 via-sb-black/30 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6">
                    <p class="text-sb-gold uppercase tracking-widest text-[10px] font-semibold mb-1">Residential</p>
                    <h3 class="font-playfair text-lg font-bold text-white">Bespoke Master Bedrooms</h3>
                </div>
            </div>
            
            <!-- Commercial 3 - Full Width Bottom -->
            <div class="group relative overflow-hidden scroll-reveal md:col-span-2 lg:col-span-4 zoom-hover interactive">
                <div class="aspect-[21/9] lg:aspect-[3/1] overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=1200&h=400&fit=crop" alt="Commercial Office Space" class="w-full h-full object-cover">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-sb-black/90 via-sb-black/40 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-8">
                    <p class="text-sb-gold uppercase tracking-widest text-xs font-semibold mb-2">Corporate</p>
                    <h3 class="font-playfair text-2xl font-bold text-white">Modern Open-Plan Office Workspaces</h3>
                    <p class="text-gray-300 text-sm max-w-xl mt-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        Collaborative environments designed for productivity, featuring acoustic partitions and integrated MEP systems.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-20 bg-sb-gold relative overflow-hidden">
    <div class="absolute inset-0 opacity-20" style="background-image: url('data:image/svg+xml,%3Csvg width=\'100\' height=\'100\' viewBox=\'0 0 100 100\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath d=\'M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-80c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z\' fill=\'%23ffffff\' fill-opacity=\'1\' fill-rule=\'evenodd\'/%3E%3C/svg%3E');"></div>
    
    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 text-center">
            <div class="scroll-reveal">
                <p class="stat-number font-playfair text-5xl lg:text-6xl font-bold text-sb-black mb-2">500<span class="text-3xl">+</span></p>
                <p class="text-sb-black/80 uppercase tracking-widest text-sm font-semibold">Projects Completed</p>
            </div>
            <div class="scroll-reveal">
                <p class="stat-number font-playfair text-5xl lg:text-6xl font-bold text-sb-black mb-2">15<span class="text-3xl">+</span></p>
                <p class="text-sb-black/80 uppercase tracking-widest text-sm font-semibold">Years Experience</p>
            </div>
            <div class="scroll-reveal">
                <p class="stat-number font-playfair text-5xl lg:text-6xl font-bold text-sb-black mb-2">100<span class="text-3xl">%</span></p>
                <p class="text-sb-black/80 uppercase tracking-widest text-sm font-semibold">Client Satisfaction</p>
            </div>
            <div class="scroll-reveal">
                <p class="stat-number font-playfair text-5xl lg:text-6xl font-bold text-sb-black mb-2">50<span class="text-3xl">+</span></p>
                <p class="text-sb-black/80 uppercase tracking-widest text-sm font-semibold">Team Members</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-24 lg:py-32 bg-sb-charcoal text-white relative overflow-hidden">
    <div class="absolute top-0 left-0 w-96 h-96 bg-sb-gold/10 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2"></div>
    
    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
        <div class="grid lg:grid-cols-2 gap-16">
            <div class="scroll-reveal">
                <p class="text-sb-gold uppercase tracking-[0.3em] text-sm font-semibold mb-4">Get in Touch</p>
                <h2 class="font-playfair text-4xl md:text-5xl font-bold mb-6">Connect With SAB Buildwell Projects</h2>
                <p class="text-gray-400 mb-10 leading-relaxed">
                    Ready to transform your space? Contact us today for a consultation and let's build something extraordinary together.
                </p>
                
                <div class="space-y-6">
                    <div class="flex items-start space-x-4 interactive">
                        <div class="w-12 h-12 bg-sb-gold/20 flex items-center justify-center flex-shrink-0">
                            <i data-lucide="phone" class="w-5 h-5 text-sb-gold"></i>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500 uppercase tracking-wider mb-1">Call / WhatsApp</p>
                            <p class="text-white font-semibold text-lg">+91 93199 06420</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4 interactive">
                        <div class="w-12 h-12 bg-sb-gold/20 flex items-center justify-center flex-shrink-0">
                            <i data-lucide="mail" class="w-5 h-5 text-sb-gold"></i>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500 uppercase tracking-wider mb-1">Email</p>
                            <p class="text-white font-semibold text-lg">sabbuildwell@gmail.com</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4 interactive">
                        <div class="w-12 h-12 bg-sb-gold/20 flex items-center justify-center flex-shrink-0">
                            <i data-lucide="map-pin" class="w-5 h-5 text-sb-gold"></i>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500 uppercase tracking-wider mb-1">Headquarters</p>
                            <p class="text-white font-semibold">SAB Buildwell Projects, P-36, Durga Industrial Area,<br>Sahibabad, Ghaziabad, Uttar Pradesh, India</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4 interactive">
                        <div class="w-12 h-12 bg-sb-gold/20 flex items-center justify-center flex-shrink-0">
                            <i data-lucide="briefcase" class="w-5 h-5 text-sb-gold"></i>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500 uppercase tracking-wider mb-1">Scope</p>
                            <p class="text-white font-semibold">Commercial & Residential</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="scroll-reveal">
                <form class="glass-dark p-8 lg:p-10 border border-white/10" action="contact.php" method="POST">
                    <h3 class="font-playfair text-2xl font-bold mb-6">Send us a Message</h3>
                    
                    <div class="grid md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-sm text-gray-400 uppercase tracking-wider mb-2">First Name</label>
                            <input type="text" name="firstname" class="w-full bg-white/5 border border-white/10 px-4 py-3 text-white focus:outline-none focus:border-sb-gold transition-colors" placeholder="John" required>
                        </div>
                        <div>
                            <label class="block text-sm text-gray-400 uppercase tracking-wider mb-2">Last Name</label>
                            <input type="text" name="lastname" class="w-full bg-white/5 border border-white/10 px-4 py-3 text-white focus:outline-none focus:border-sb-gold transition-colors" placeholder="Doe" required>
                        </div>
                    </div>
                    
                    <div class="mb-6">
                        <label class="block text-sm text-gray-400 uppercase tracking-wider mb-2">Email</label>
                        <input type="email" name="email" class="w-full bg-white/5 border border-white/10 px-4 py-3 text-white focus:outline-none focus:border-sb-gold transition-colors" placeholder="john@example.com" required>
                    </div>
                    
                    <div class="mb-6">
                        <label class="block text-sm text-gray-400 uppercase tracking-wider mb-2">Project Type</label>
                        <select name="project_type" class="w-full bg-white/5 border border-white/10 px-4 py-3 text-white focus:outline-none focus:border-sb-gold transition-colors">
                            <option value="" class="bg-sb-charcoal">Select Project Type</option>
                            <option value="commercial" class="bg-sb-charcoal">Commercial Office</option>
                            <option value="residential" class="bg-sb-charcoal">Residential</option>
                            <option value="retail" class="bg-sb-charcoal">Retail Space</option>
                            <option value="other" class="bg-sb-charcoal">Other</option>
                        </select>
                    </div>
                    
                    <div class="mb-8">
                        <label class="block text-sm text-gray-400 uppercase tracking-wider mb-2">Message</label>
                        <textarea name="message" rows="4" class="w-full bg-white/5 border border-white/10 px-4 py-3 text-white focus:outline-none focus:border-sb-gold transition-colors resize-none" placeholder="Tell us about your project..."></textarea>
                    </div>
                    
                    <button type="submit" class="magnetic-btn w-full py-4 bg-sb-gold text-sb-black font-semibold uppercase tracking-widest hover:bg-sb-gold-light transition-all flex items-center justify-center space-x-2 group">
                        <span>Send Message</span>
                        <i data-lucide="send" class="w-4 h-4 transform group-hover:translate-x-1 transition-transform"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
