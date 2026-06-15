<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<!-- Hero Section -->
<section class="relative w-full h-[70vh] min-h-[600px] overflow-hidden bg-sb-black">
    <div class="absolute inset-0 bg-gradient-to-b from-sb-black/30 via-sb-black/50 to-sb-black/95 z-10"></div>
    <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1524758631624-e2822e304c36?w=1920&h=1080&fit=crop')] bg-cover bg-center"></div>
    <div class="relative z-20 h-full flex items-end pb-20">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 w-full">
            <div class="max-w-4xl">
                <div class="flex items-center gap-3 mb-6">
                    <span class="px-4 py-1 bg-sb-gold text-sb-black text-xs font-bold uppercase tracking-widest">Commercial</span>
                    <span class="text-gray-400 text-sm">Noida, UP</span>
                </div>
                <h1 class="font-playfair text-5xl md:text-6xl lg:text-7xl font-bold text-white leading-tight mb-6">
                    Tech Hub <span class="text-sb-gold">Workspace</span>
                </h1>
                <p class="text-gray-300 text-lg max-w-2xl">A collaborative workspace designed for a tech startup, featuring agile workstations, creative breakout zones, and modern amenities.</p>
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
            <div class="text-center p-6 border border-white/10 bg-white/5 backdrop-blur-sm"><i data-lucide="maximize" class="w-6 h-6 text-sb-gold mx-auto mb-3"></i><p class="text-gray-400 text-sm mb-1">Area</p><p class="font-playfair text-xl font-bold">3,500 sqft</p></div>
            <div class="text-center p-6 border border-white/10 bg-white/5 backdrop-blur-sm"><i data-lucide="clock" class="w-6 h-6 text-sb-gold mx-auto mb-3"></i><p class="text-gray-400 text-sm mb-1">Duration</p><p class="font-playfair text-xl font-bold">8 Weeks</p></div>
        </div>
    </div>
</section>

<!-- Project Gallery -->
<section class="py-24 lg:py-32 bg-sb-cream relative">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-16 scroll-reveal"><p class="text-sb-gold uppercase tracking-[0.3em] text-sm font-semibold mb-4">Project Gallery</p><h2 class="font-playfair text-4xl md:text-5xl font-bold text-sb-charcoal">Creative Workspace</h2></div>
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12 lg:col-span-8 scroll-reveal">
                <div class="relative overflow-hidden group h-full min-h-[400px] lg:min-h-[500px]">
                    <img src="https://images.unsplash.com/photo-1524758631624-e2822e304c36?w=1200&h=800&fit=crop" alt="Open Workspace" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute bottom-6 left-6 opacity-0 group-hover:opacity-100 transition-opacity"><p class="text-sb-gold uppercase tracking-widest text-xs font-semibold">Open Workspace</p></div>
                </div>
            </div>
            <div class="col-span-12 lg:col-span-4 flex flex-col gap-4">
                <div class="relative overflow-hidden group h-full min-h-[240px] scroll-reveal">
                    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=600&h=400&fit=crop" alt="Meeting Pod" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute bottom-4 left-4 opacity-0 group-hover:opacity-100 transition-opacity"><p class="text-sb-gold uppercase tracking-widest text-xs font-semibold">Meeting Pod</p></div>
                </div>
                <div class="relative overflow-hidden group h-full min-h-[240px] scroll-reveal">
                    <img src="https://images.unsplash.com/photo-1497215728101-856f4ea42174?w=600&h=400&fit=crop" alt="Lounge" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute bottom-4 left-4 opacity-0 group-hover:opacity-100 transition-opacity"><p class="text-sb-gold uppercase tracking-widest text-xs font-semibold">Breakout Lounge</p></div>
                </div>
            </div>
            <div class="col-span-12 md:col-span-6 lg:col-span-4 scroll-reveal">
                <div class="relative overflow-hidden group h-64">
                    <img src="https://images.unsplash.com/photo-1600585154526-990dced4db0d?w=600&h=400&fit=crop" alt="Game Room" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute bottom-4 left-4 opacity-0 group-hover:opacity-100 transition-opacity"><p class="text-sb-gold uppercase tracking-widest text-xs font-semibold">Game Room</p></div>
                </div>
            </div>
            <div class="col-span-12 md:col-span-6 lg:col-span-4 scroll-reveal">
                <div class="relative overflow-hidden group h-64">
                    <img src="https://images.unsplash.com/photo-1600566753086-00f18fb6b3ea?w=600&h=400&fit=crop" alt="Pantry" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute bottom-4 left-4 opacity-0 group-hover:opacity-100 transition-opacity"><p class="text-sb-gold uppercase tracking-widest text-xs font-semibold">Office Pantry</p></div>
                </div>
            </div>
            <div class="col-span-12 md:col-span-6 lg:col-span-4 scroll-reveal">
                <div class="relative overflow-hidden group h-64">
                    <img src="https://images.unsplash.com/photo-1600210491898-7e67f8d3b3e3?w=600&h=400&fit=crop" alt="Phone Booth" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute bottom-4 left-4 opacity-0 group-hover:opacity-100 transition-opacity"><p class="text-sb-gold uppercase tracking-widest text-xs font-semibold">Phone Booths</p></div>
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
                <h2 class="font-playfair text-4xl font-bold text-sb-charcoal mb-8">Tech Hub Workspace</h2>
                <div class="space-y-6 text-gray-600 leading-relaxed text-lg">
                    <p>This project involved designing a 3,500 sqft workspace for a fast-growing tech startup in Noida. The client wanted an office that reflected their innovative culture and supported agile workstyles.</p>
                    <p>We created an open-plan layout with hot-desking stations, private meeting pods, brainstorming areas, and recreational zones. The design uses vibrant accent colors against neutral backgrounds to energize the space.</p>
                    <p>Special features include soundproof phone booths, a gaming lounge, a fully stocked pantry, and a town-hall area. The office supports 60 employees with room for expansion.</p>
                </div>
            </div>
            <div class="scroll-reveal">
                <div class="bg-sb-cream p-10 border border-gray-100">
                    <h3 class="font-playfair text-2xl font-bold text-sb-charcoal mb-6">Workspace Features</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-4"><div class="w-8 h-8 rounded-full bg-sb-gold/20 flex items-center justify-center flex-shrink-0 mt-1"><i data-lucide="check" class="w-4 h-4 text-sb-gold"></i></div><div><h4 class="font-semibold text-sb-charcoal">Agile Workstations</h4><p class="text-gray-500 text-sm">Hot-desking setup with ergonomic chairs and height-adjustable desks</p></div></li>
                        <li class="flex items-start gap-4"><div class="w-8 h-8 rounded-full bg-sb-gold/20 flex items-center justify-center flex-shrink-0 mt-1"><i data-lucide="check" class="w-4 h-4 text-sb-gold"></i></div><div><h4 class="font-semibold text-sb-charcoal">Meeting Pods</h4><p class="text-gray-500 text-sm">4-person glass pods with AV equipment for quick stand-ups</p></div></li>
                        <li class="flex items-start gap-4"><div class="w-8 h-8 rounded-full bg-sb-gold/20 flex items-center justify-center flex-shrink-0 mt-1"><i data-lucide="check" class="w-4 h-4 text-sb-gold"></i></div><div><h4 class="font-semibold text-sb-charcoal">Game Lounge</h4><p class="text-gray-500 text-sm">Foosball, table tennis, and arcade machines for breaks</p></div></li>
                        <li class="flex items-start gap-4"><div class="w-8 h-8 rounded-full bg-sb-gold/20 flex items-center justify-center flex-shrink-0 mt-1"><i data-lucide="check" class="w-4 h-4 text-sb-gold"></i></div><div><h4 class="font-semibold text-sb-charcoal">Town Hall Area</h4><p class="text-gray-500 text-sm">All-hands space with projector and tiered seating</p></div></li>
                        <li class="flex items-start gap-4"><div class="w-8 h-8 rounded-full bg-sb-gold/20 flex items-center justify-center flex-shrink-0 mt-1"><i data-lucide="check" class="w-4 h-4 text-sb-gold"></i></div><div><h4 class="font-semibold text-sb-charcoal">Phone Booths</h4><p class="text-gray-500 text-sm">Soundproof private booths for video calls and focused work</p></div></li>
                        <li class="flex items-start gap-4"><div class="w-8 h-8 rounded-full bg-sb-gold/20 flex items-center justify-center flex-shrink-0 mt-1"><i data-lucide="check" class="w-4 h-4 text-sb-gold"></i></div><div><h4 class="font-semibold text-sb-charcoal">Smart Office</h4><p class="text-gray-500 text-sm">App-controlled lighting, AC, and booking system</p></div></li>
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
            "Our team productivity increased after moving to the new office. The space is fun, collaborative, and exactly represents our startup culture. Candidates are impressed during interviews!"
        </blockquote>
        <div class="flex items-center justify-center gap-4">
            <div class="w-12 h-12 rounded-full bg-gray-200 overflow-hidden">
                <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?w=100&h=100&fit=crop&crop=face" alt="Client" class="w-full h-full object-cover">
            </div>
            <div class="text-left">
                <p class="font-semibold text-sb-charcoal">Mr. Rajiv Khanna</p>
                <p class="text-gray-500 text-sm">Founder, TechStart India</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-24 bg-sb-black text-white relative overflow-hidden">
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-sb-gold/10 rounded-full blur-3xl translate-x-1/2 translate-y-1/2"></div>
    <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center relative z-10">
        <h2 class="font-playfair text-4xl md:text-5xl font-bold mb-6">Build Your Dream Office</h2>
        <p class="text-gray-400 text-lg mb-10">Let's create a workspace that inspires your team.</p>
        <a href="contact.php" class="px-8 py-4 bg-sb-gold text-sb-black font-semibold uppercase tracking-widest text-sm hover:bg-sb-gold-light transition-all inline-flex items-center space-x-2">
            <span>Start a Project</span><i data-lucide="arrow-right" class="w-4 h-4"></i>
        </a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
