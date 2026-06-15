<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<!-- Hero Section -->
<section class="relative w-full h-[70vh] min-h-[600px] overflow-hidden bg-sb-black">
    <div class="absolute inset-0 bg-gradient-to-b from-sb-black/30 via-sb-black/50 to-sb-black/95 z-10"></div>
    <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1497366754035-f200968a6e72?w=1920&h=1080&fit=crop')] bg-cover bg-center"></div>
    <div class="relative z-20 h-full flex items-end pb-20">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 w-full">
            <div class="max-w-4xl">
                <div class="flex items-center gap-3 mb-6">
                    <span class="px-4 py-1 bg-sb-gold text-sb-black text-xs font-bold uppercase tracking-widest">Commercial</span>
                    <span class="text-gray-400 text-sm">New Delhi</span>
                </div>
                <h1 class="font-playfair text-5xl md:text-6xl lg:text-7xl font-bold text-white leading-tight mb-6">
                    Corporate HQ <br><span class="text-sb-gold">Office</span> Fit-out
                </h1>
                <p class="text-gray-300 text-lg max-w-2xl">A premium office fit-out for a multinational corporate headquarters featuring executive boardrooms, open workspaces, and smart meeting facilities.</p>
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
            <div class="text-center p-6 border border-white/10 bg-white/5 backdrop-blur-sm"><i data-lucide="map-pin" class="w-6 h-6 text-sb-gold mx-auto mb-3"></i><p class="text-gray-400 text-sm mb-1">Location</p><p class="font-playfair text-xl font-bold">New Delhi</p></div>
            <div class="text-center p-6 border border-white/10 bg-white/5 backdrop-blur-sm"><i data-lucide="maximize" class="w-6 h-6 text-sb-gold mx-auto mb-3"></i><p class="text-gray-400 text-sm mb-1">Area</p><p class="font-playfair text-xl font-bold">12,000 sqft</p></div>
            <div class="text-center p-6 border border-white/10 bg-white/5 backdrop-blur-sm"><i data-lucide="clock" class="w-6 h-6 text-sb-gold mx-auto mb-3"></i><p class="text-gray-400 text-sm mb-1">Duration</p><p class="font-playfair text-xl font-bold">4 Months</p></div>
        </div>
    </div>
</section>

<!-- Project Gallery -->
<section class="py-24 lg:py-32 bg-sb-cream relative">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-16 scroll-reveal"><p class="text-sb-gold uppercase tracking-[0.3em] text-sm font-semibold mb-4">Project Gallery</p><h2 class="font-playfair text-4xl md:text-5xl font-bold text-sb-charcoal">Office Spaces</h2></div>
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12 lg:col-span-6 scroll-reveal">
                <div class="relative overflow-hidden group h-full min-h-[300px] lg:min-h-[500px]">
                    <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?w=800&h=600&fit=crop" alt="Boardroom" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute bottom-6 left-6 opacity-0 group-hover:opacity-100 transition-opacity"><p class="text-sb-gold uppercase tracking-widest text-xs font-semibold">Executive Boardroom</p></div>
                </div>
            </div>
            <div class="col-span-12 lg:col-span-6 flex flex-col gap-4">
                <div class="relative overflow-hidden group h-full min-h-[240px] scroll-reveal">
                    <img src="https://images.unsplash.com/photo-1524758631624-e2822e304c36?w=800&h=400&fit=crop" alt="Open Workspace" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute bottom-4 left-4 opacity-0 group-hover:opacity-100 transition-opacity"><p class="text-sb-gold uppercase tracking-widest text-xs font-semibold">Open Workspace</p></div>
                </div>
                <div class="relative overflow-hidden group h-full min-h-[240px] scroll-reveal">
                    <img src="https://images.unsplash.com/photo-1604328698692-f76ea9498e76?w=800&h=400&fit=crop" alt="Reception" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute bottom-4 left-4 opacity-0 group-hover:opacity-100 transition-opacity"><p class="text-sb-gold uppercase tracking-widest text-xs font-semibold">Reception Area</p></div>
                </div>
            </div>
            <div class="col-span-12 md:col-span-6 lg:col-span-4 scroll-reveal">
                <div class="relative overflow-hidden group h-64">
                    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=600&h=400&fit=crop" alt="Meeting Room" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute bottom-4 left-4 opacity-0 group-hover:opacity-100 transition-opacity"><p class="text-sb-gold uppercase tracking-widest text-xs font-semibold">Meeting Room</p></div>
                </div>
            </div>
            <div class="col-span-12 md:col-span-6 lg:col-span-4 scroll-reveal">
                <div class="relative overflow-hidden group h-64">
                    <img src="https://images.unsplash.com/photo-1497215728101-856f4ea42174?w=600&h=400&fit=crop" alt="Conference" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute bottom-4 left-4 opacity-0 group-hover:opacity-100 transition-opacity"><p class="text-sb-gold uppercase tracking-widest text-xs font-semibold">Conference Suite</p></div>
                </div>
            </div>
            <div class="col-span-12 md:col-span-6 lg:col-span-4 scroll-reveal">
                <div class="relative overflow-hidden group h-64">
                    <img src="https://images.unsplash.com/photo-1604328698692-f76ea9498e76?w=600&h=400&fit=crop" alt="Pantry" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute bottom-4 left-4 opacity-0 group-hover:opacity-100 transition-opacity"><p class="text-sb-gold uppercase tracking-widest text-xs font-semibold">Office Pantry</p></div>
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
                <h2 class="font-playfair text-4xl font-bold text-sb-charcoal mb-8">Corporate Headquarters Fit-out</h2>
                <div class="space-y-6 text-gray-600 leading-relaxed text-lg">
                    <p>This project involved the complete interior fit-out of a 12,000 sqft corporate headquarters in New Delhi for a leading multinational company. The client required a modern, professional workspace that reflected their brand identity.</p>
                    <p>We designed and executed executive boardrooms, collaborative open workspaces, private cabins, smart meeting rooms, and employee wellness areas. The design emphasized natural light, acoustic comfort, and ergonomic functionality.</p>
                    <p>The project integrated advanced MEP systems including centralized AC, smart lighting controls, and high-speed networking infrastructure. Fire safety and compliance were maintained throughout.</p>
                </div>
            </div>
            <div class="scroll-reveal">
                <div class="bg-sb-cream p-10 border border-gray-100">
                    <h3 class="font-playfair text-2xl font-bold text-sb-charcoal mb-6">Scope of Work</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-4"><div class="w-8 h-8 rounded-full bg-sb-gold/20 flex items-center justify-center flex-shrink-0 mt-1"><i data-lucide="check" class="w-4 h-4 text-sb-gold"></i></div><div><h4 class="font-semibold text-sb-charcoal">Space Planning</h4><p class="text-gray-500 text-sm">Open workstations, private cabins, and meeting zones</p></div></li>
                        <li class="flex items-start gap-4"><div class="w-8 h-8 rounded-full bg-sb-gold/20 flex items-center justify-center flex-shrink-0 mt-1"><i data-lucide="check" class="w-4 h-4 text-sb-gold"></i></div><div><h4 class="font-semibold text-sb-charcoal">Executive Boardroom</h4><p class="text-gray-500 text-sm">Premium AV systems, acoustic treatment, and smart glass</p></div></li>
                        <li class="flex items-start gap-4"><div class="w-8 h-8 rounded-full bg-sb-gold/20 flex items-center justify-center flex-shrink-0 mt-1"><i data-lucide="check" class="w-4 h-4 text-sb-gold"></i></div><div><h4 class="font-semibold text-sb-charcoal">MEP Systems</h4><p class="text-gray-500 text-sm">Centralized AC, lighting automation, and power distribution</p></div></li>
                        <li class="flex items-start gap-4"><div class="w-8 h-8 rounded-full bg-sb-gold/20 flex items-center justify-center flex-shrink-0 mt-1"><i data-lucide="check" class="w-4 h-4 text-sb-gold"></i></div><div><h4 class="font-semibold text-sb-charcoal">Reception Design</h4><p class="text-gray-500 text-sm">Branded entrance lobby with visitor management</p></div></li>
                        <li class="flex items-start gap-4"><div class="w-8 h-8 rounded-full bg-sb-gold/20 flex items-center justify-center flex-shrink-0 mt-1"><i data-lucide="check" class="w-4 h-4 text-sb-gold"></i></div><div><h4 class="font-semibold text-sb-charcoal">Fire Safety</h4><p class="text-gray-500 text-sm">Sprinkler systems, smoke detection, and emergency exits</p></div></li>
                        <li class="flex items-start gap-4"><div class="w-8 h-8 rounded-full bg-sb-gold/20 flex items-center justify-center flex-shrink-0 mt-1"><i data-lucide="check" class="w-4 h-4 text-sb-gold"></i></div><div><h4 class="font-semibold text-sb-charcoal">IT Infrastructure</h4><p class="text-gray-500 text-sm">Server room, cable management, and networking</p></div></li>
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
            "SAB Buildwell delivered our office on time and within budget. The quality of work is exceptional and our employees love the new workspace. Truly professional team."
        </blockquote>
        <div class="flex items-center justify-center gap-4">
            <div class="w-12 h-12 rounded-full bg-gray-200 overflow-hidden">
                <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?w=100&h=100&fit=crop&crop=face" alt="Client" class="w-full h-full object-cover">
            </div>
            <div class="text-left">
                <p class="font-semibold text-sb-charcoal">Mr. Vikram Mehta</p>
                <p class="text-gray-500 text-sm">CEO, TechCorp India</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-24 bg-sb-black text-white relative overflow-hidden">
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-sb-gold/10 rounded-full blur-3xl translate-x-1/2 translate-y-1/2"></div>
    <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center relative z-10">
        <h2 class="font-playfair text-4xl md:text-5xl font-bold mb-6">Upgrade Your Office Space</h2>
        <p class="text-gray-400 text-lg mb-10">Let's create a workspace that boosts productivity and reflects your brand.</p>
        <a href="contact.php" class="px-8 py-4 bg-sb-gold text-sb-black font-semibold uppercase tracking-widest text-sm hover:bg-sb-gold-light transition-all inline-flex items-center space-x-2">
            <span>Start a Project</span><i data-lucide="arrow-right" class="w-4 h-4"></i>
        </a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
