<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<!-- 1. Hero Banner -->
<section id="hero" class="home-hero relative min-h-screen bg-sb-black text-white overflow-hidden">
    <div class="home-hero-images absolute inset-0">
        <div style="background-image:url('https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?w=900&h=1200&fit=crop')"></div>
        <div style="background-image:url('https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?w=900&h=1200&fit=crop')"></div>
        <div style="background-image:url('https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=900&h=1200&fit=crop')"></div>
    </div>
    <div class="absolute inset-0 bg-gradient-to-r from-sb-black/95 via-sb-black/75 to-sb-black/35"></div>
    <div class="relative z-10 min-h-screen flex items-center pt-24 pb-20">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 w-full">
            <div class="max-w-4xl">
                <p class="text-sb-gold uppercase tracking-[0.3em] text-sm font-semibold mb-5">Interior Designer in Ghaziabad & Delhi NCR</p>
                <h1 class="font-playfair text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold leading-[1.08] mb-6">Luxury Interior Design & Turnkey Renovation Company in Ghaziabad & Delhi NCR</h1>
                <p class="font-playfair text-xl md:text-2xl italic text-sb-gold mb-5">From Concept to Creation, We Build Your Dreams.</p>
                <p class="text-gray-200 md:text-lg leading-relaxed max-w-3xl mb-8">At SAB Buildwell Projects, we specialize in creating exceptional residential and commercial spaces through innovative interior design, premium modular furniture, and complete turnkey renovation solutions. From elegant homes and luxury modular kitchens to modern office interiors and civil renovation, we deliver beautifully crafted spaces with uncompromising quality, transparency, and attention to detail.</p>
                <div class="flex flex-wrap gap-4">
                    <button type="button" data-lead-modal="free-quote" class="px-7 py-4 bg-sb-gold text-sb-black font-semibold uppercase tracking-widest text-sm">Get Free Consultation</button>
                    <a href="#projects" class="px-7 py-4 border border-white/50 font-semibold uppercase tracking-widest text-sm hover:border-sb-gold hover:text-sb-gold transition-colors">View Our Projects</a>
                </div>
                <div class="flex flex-wrap gap-x-6 gap-y-3 mt-10">
                    <?php foreach (['Free Site Visit', '3D Design', 'Turnkey Solutions', 'Premium Materials', 'On-Time Delivery'] as $badge): ?>
                        <span class="inline-flex items-center gap-2 text-sm text-gray-200"><i data-lucide="check-circle-2" class="w-4 h-4 text-sb-gold"></i><?php echo $badge; ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. Trust Bar -->
<section class="bg-sb-gold py-5">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 grid grid-cols-2 md:grid-cols-5 gap-4">
        <?php
        $trustItems = [['award','Premium Quality'],['house','100% Customized Designs'],['hammer','Turnkey Execution'],['badge-indian-rupee','Transparent Pricing'],['map-pin','Serving Delhi NCR']];
        foreach ($trustItems as [$icon,$label]):
        ?>
            <div class="flex items-center justify-center gap-2 text-sb-black text-center text-xs sm:text-sm font-semibold"><i data-lucide="<?php echo $icon; ?>" class="w-5 h-5 shrink-0"></i><span><?php echo $label; ?></span></div>
        <?php endforeach; ?>
    </div>
</section>

<!-- 3. About -->
<section id="about" class="py-24 lg:py-28 bg-sb-cream">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-14 items-center">
            <div class="relative scroll-reveal">
                <img src="https://images.unsplash.com/photo-1524758631624-e2822e304c36?w=1000&h=800&fit=crop" alt="SAB Buildwell interior design team" class="w-full aspect-[4/3] object-cover">
                <div class="absolute -bottom-6 -right-4 md:right-8 bg-sb-gold text-sb-black p-6 shadow-xl"><strong class="font-playfair text-3xl block">5+</strong><span class="text-xs uppercase tracking-widest">Years of Experience</span></div>
            </div>
            <div class="scroll-reveal">
                <p class="section-kicker">About SAB Buildwell</p>
                <h2 class="section-title">Creating Beautiful Spaces with Quality, Innovation & Precision</h2>
                <p class="font-playfair text-2xl text-sb-gold italic mt-7">From Concept to Creation, We Build Your Dreams.</p>
                <p class="text-gray-600 leading-relaxed mt-5">At SAB Buildwell Projects, we specialize in creating exceptional residential and commercial spaces through innovative interior design, premium modular furniture, and complete turnkey renovation solutions. From elegant homes and luxury modular kitchens to modern office interiors and civil renovation, we deliver beautifully crafted spaces with uncompromising quality, transparency, and attention to detail.</p>
                <div class="grid md:grid-cols-2 gap-8 mt-8 text-gray-600 leading-relaxed">
                    <div><h3 class="font-playfair text-xl font-bold text-sb-charcoal mb-3">Our Story</h3><p>SAB Buildwell Projects delivers home interiors, office interiors, modular kitchens, customised furniture, civil renovation, and complete turnkey execution across Ghaziabad and Delhi NCR.</p></div>
                    <div><h3 class="font-playfair text-xl font-bold text-sb-charcoal mb-3">Why Clients Trust Us</h3><p>Clients receive clear scope, transparent BOQs, approved materials, coordinated site management, quality checks, and one accountable team through final handover.</p></div>
                </div>
                <a href="about.php" class="inline-flex items-center gap-2 mt-8 font-semibold text-sb-charcoal hover:text-sb-gold">Know More <i data-lucide="arrow-right" class="w-4 h-4"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- 4. Services -->
<section id="services" class="py-24 lg:py-28 bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-14 scroll-reveal"><p class="section-kicker">Complete Interior Solutions</p><h2 class="section-title">Our Services</h2><p class="text-gray-600">From a single room upgrade to complete turnkey execution, every service is planned around your space, requirements, and budget.</p></div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            <?php
            $services = [
                ['home-interior-design.php','house','Home Interior Design','Complete personalised interiors for apartments, villas, and independent homes.','1600210492486-724fe5c67fb0'],
                ['commercial.php','building-2','Office Interior Design','Efficient offices, cabins, workstations, meeting rooms, and reception spaces.','1497366754035-f200968a6e72'],
                ['modular-interiors.php','cooking-pot','Modular Kitchen','Ergonomic kitchens with premium finishes, hardware, and smart storage.','1556909114-f6e7ad7d3136'],
                ['modular-interiors.php','panels-top-left','Modular Wardrobe','Custom wardrobes designed for organised storage and long-term use.','1558997519-83ea9252edf8'],
                ['residential.php','bed-double','Bedroom Interior','Comfortable bedrooms with lighting, wardrobes, furniture, and finishes.','1616486338812-3dadae4b4ace'],
                ['residential.php','sofa','Living Room','Elegant living spaces created for comfort, hosting, and everyday family life.','1600566753086-00f18fb6b3ea'],
                ['renovation-services.php','bath','Bathroom Renovation','Waterproofing, plumbing, tiles, sanitaryware, lighting, and storage upgrades.','1600585154526-990dced4db0d'],
                ['renovation-services.php','hammer','Home Renovation','Planned renovation of existing homes with controlled execution and finishing.','1600585154340-be6161a56a0c'],
                ['renovation-services.php','construction','Civil Renovation','Civil repairs, masonry, flooring, plumbing, electrical, and structural finishes.','1503387762-592deb58ef4e'],
                ['turnkey-interior-solutions.php','lamp','False Ceiling','Gypsum, profile lighting, feature ceilings, and coordinated electrical work.','1600566753190-17f0baa2a6c3'],
                ['turnkey-interior-solutions.php','paint-roller','Wall & Paint Finish','Premium paints, textures, panelling, wallpaper, veneer, and decorative surfaces.','1618221195710-dd6b41faaea6'],
                ['turnkey-interior-solutions.php','panels-left-bottom','Glass & Aluminium','Partitions, doors, windows, shower enclosures, and facade solutions.','1497366811353-6870744d04b2'],
                ['turnkey-interior-solutions.php','hard-hat','Turnkey Interior Solutions','One team for design, BOQ, procurement, execution, finishing, and handover.','1497366216548-37526070297c']
            ];
            foreach ($services as [$url,$icon,$title,$desc,$image]):
            ?>
                <a href="<?php echo $url; ?>" class="home-service-card group scroll-reveal">
                    <img src="https://images.unsplash.com/photo-<?php echo $image; ?>?w=600&h=420&fit=crop" alt="<?php echo $title; ?>" loading="lazy">
                    <div class="p-6"><i data-lucide="<?php echo $icon; ?>" class="w-7 h-7 text-sb-gold mb-4"></i><h3 class="font-playfair text-xl font-bold mb-2"><?php echo $title; ?></h3><p class="text-gray-500 text-sm leading-relaxed mb-4"><?php echo $desc; ?></p><span class="text-xs font-semibold uppercase tracking-widest text-sb-gold">Read More</span></div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 5. Why Choose Us -->
<section class="py-24 lg:py-28 bg-[#101b31] text-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-14 scroll-reveal"><p class="section-kicker">The SAB Buildwell Advantage</p><h2 class="section-title text-white">Why Homeowners Trust SAB Buildwell</h2></div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
            <?php
            $reasons=[['gem','Premium Materials'],['users','Experienced Team'],['badge-indian-rupee','Transparent Pricing'],['clock-3','On-Time Delivery'],['sparkles','Latest Designs'],['clipboard-check','Professional Project Management'],['user-check','Dedicated Site Supervisor'],['shield-check','Warranty Support'],['key-round','Complete Turnkey Execution']];
            foreach($reasons as [$icon,$title]):
            ?>
                <div class="why-card scroll-reveal"><i data-lucide="<?php echo $icon; ?>" class="w-8 h-8 text-sb-gold"></i><h3 class="font-playfair text-xl font-bold"><?php echo $title; ?></h3></div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 6. Process -->
<section id="workflow" class="py-24 lg:py-28 bg-sb-cream">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-14 scroll-reveal"><p class="section-kicker">Simple & Transparent</p><h2 class="section-title">Our Process</h2></div>
        <div class="process-line grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <?php
            $steps=['Free Consultation','Site Visit','Design & Planning','Quotation & BOQ','Material Selection','Execution','Quality Inspection','Project Handover'];
            foreach($steps as $i=>$step):
            ?>
                <div class="process-card scroll-reveal"><span><?php echo str_pad($i+1,2,'0',STR_PAD_LEFT); ?></span><h3><?php echo $step; ?></h3></div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 7. Featured Projects -->
<section id="projects" class="py-24 lg:py-28 bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-14 scroll-reveal"><div><p class="section-kicker">Selected Work</p><h2 class="section-title mb-0">Featured Projects</h2></div><a href="portfolio.php" class="gold-button">View Portfolio</a></div>
        <div class="project-luxury-grid">
            <?php
            $projects=[['Home','1600210492486-724fe5c67fb0'],['Kitchen','1556909114-f6e7ad7d3136'],['Bedroom','1505693416388-1295fceeeb88'],['Office','1497366754035-f200968a6e72'],['Villa','1600585154340-be6161a56a0c'],['Renovation','1600566753086-00f18fb6b3ea']];
            foreach($projects as $i=>[$title,$image]):
            ?><a href="portfolio.php" class="project-luxury-card <?php echo $i===0?'project-featured':''; ?> scroll-reveal"><img src="https://images.unsplash.com/photo-<?php echo $image; ?>?w=900&h=700&fit=crop" alt="<?php echo $title; ?> interior project" loading="lazy"><span><?php echo $title; ?></span></a><?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 8. Materials & Brands -->
<section id="brands" class="py-20 lg:py-24 bg-sb-cream">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center">
        <p class="section-kicker">Quality Specifications</p><h2 class="section-title">Premium Brands We Trust</h2>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 mt-12">
            <?php foreach(['Action TESA','Merino','Hettich','Häfele','Jaquar','Carysil','Faber','Philips','Kalinga Stone','Rehau','Ashirvad','Asian Paints'] as $brand): ?><div class="brand-tile bg-white border border-gray-200 min-h-24 grid place-items-center px-3 font-playfair font-bold text-lg scroll-reveal"><?php echo $brand; ?></div><?php endforeach; ?>
        </div>
        <a href="#material-specifications" class="gold-button mt-10">View Material Specifications</a>
    </div>
</section>

<!-- 9. Modular Kitchen Speciality -->
<section id="material-specifications" class="py-24 lg:py-28 bg-sb-black text-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 grid lg:grid-cols-2 gap-14 items-center">
        <img src="https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?w=1100&h=900&fit=crop" alt="Premium modular kitchen" class="w-full aspect-[4/3] object-cover scroll-reveal">
        <div class="scroll-reveal"><p class="section-kicker">Modular Kitchen Speciality</p><h2 class="section-title text-white">Why Our Kitchens Are Different</h2>
            <div class="grid sm:grid-cols-2 gap-4 mt-8">
                <?php foreach(['HDHMR Carcass','Hettich Hardware','Quartz Countertop','Premium Acrylic / Laminate','Soft-Close Drawers','Custom Design'] as $item): ?><div class="flex items-center gap-3 border border-white/10 bg-white/5 p-4"><i data-lucide="check" class="w-5 h-5 text-sb-gold"></i><span><?php echo $item; ?></span></div><?php endforeach; ?>
            </div>
            <a href="modular-interiors.php" class="gold-button mt-8">Explore Modular Kitchens</a>
        </div>
    </div>
</section>

<!-- 10. Turnkey Renovation -->
<section class="py-24 lg:py-28 bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-14 scroll-reveal"><p class="section-kicker">Complete Transformation</p><h2 class="section-title">Turnkey Renovation: Before to After</h2></div>
        <div class="grid lg:grid-cols-[1.2fr_0.8fr] gap-12 items-center">
            <div class="before-after-container aspect-[16/9] overflow-hidden scroll-reveal">
                <img src="assets/before_image.png" alt="Interior before renovation" class="before-image"><img src="assets/after_image.png" alt="Interior after renovation" class="after-image"><div class="before-after-slider"></div><div class="slider-handle"><i data-lucide="move-horizontal"></i></div><div class="before-label">Before</div><div class="after-label">After</div>
            </div>
            <div class="scroll-reveal"><h3 class="font-playfair text-3xl font-bold mb-6">One Team for Complete Renovation</h3><div class="grid grid-cols-2 gap-3"><?php foreach(['Civil Work','Electrical','Plumbing','Flooring','Painting','Furniture','False Ceiling','Complete Renovation'] as $item): ?><div class="flex gap-2 text-gray-600"><i data-lucide="check-circle" class="w-5 h-5 text-sb-gold shrink-0"></i><?php echo $item; ?></div><?php endforeach; ?></div><a href="renovation-services.php" class="gold-button mt-8">Explore Renovation</a></div>
        </div>
    </div>
</section>

<!-- 11. Cost Estimator -->
<section class="py-24 lg:py-28 bg-[#101b31] text-white">
    <div class="max-w-5xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-12"><p class="section-kicker">Plan Your Budget</p><h2 class="section-title text-white">Interior Cost Estimator</h2><p class="text-gray-400">Get a quick indicative estimate, then request a detailed BOQ from our team.</p></div>
        <div class="bg-white text-sb-charcoal p-6 md:p-10 grid md:grid-cols-3 gap-6 shadow-2xl">
            <label class="font-medium">Property Type<select id="home-cost-type" class="home-form-control mt-2"><option value="1800">Home Interior</option><option value="1600">Office Interior</option><option value="2200">Premium Turnkey</option><option value="1400">Renovation</option></select></label>
            <label class="font-medium">Area (sq. ft.)<input id="home-cost-area" type="number" min="100" value="1000" class="home-form-control mt-2"></label>
            <label class="font-medium">Budget Preference<select id="home-cost-budget" class="home-form-control mt-2"><option value="1">Essential</option><option value="1.25">Premium</option><option value="1.55">Luxury</option></select></label>
            <div class="md:col-span-2 bg-sb-cream p-6"><p class="text-xs uppercase tracking-widest text-gray-500 mb-2">Estimated Cost</p><p id="home-cost-result" class="font-playfair text-3xl md:text-4xl font-bold">₹18,00,000</p><p class="text-xs text-gray-500 mt-2">Indicative only. Final cost depends on design, scope, material specifications, and site conditions.</p></div>
            <button type="button" data-lead-modal="free-quote" class="bg-sb-gold font-semibold uppercase tracking-widest text-sm p-5">Get Detailed Quote</button>
        </div>
    </div>
</section>

<!-- 12. Testimonials -->
<section class="py-24 lg:py-28 bg-sb-cream">
    <div class="max-w-7xl mx-auto px-6 lg:px-8"><div class="text-center mb-14"><p class="section-kicker">Google Reviews & Client Feedback</p><h2 class="section-title">Client Testimonials</h2></div>
        <div class="grid md:grid-cols-3 gap-7">
            <?php $reviews=[['Residential Client','Ghaziabad','The team handled our complete home interior with clear planning, good material guidance, and regular site updates.'],['Office Client','Noida','Our office layout and execution were managed professionally, with practical detailing and a strong final finish.'],['Homeowner','Delhi NCR','The modular kitchen and wardrobes are functional, well-finished, and exactly suited to our storage needs.']]; foreach($reviews as [$name,$place,$text]): ?>
                <article class="bg-white p-8 border border-gray-200 shadow-lg scroll-reveal"><div class="flex gap-1 text-sb-gold mb-5"><?php for($i=0;$i<5;$i++): ?><i data-lucide="star" class="w-4 h-4 fill-current"></i><?php endfor; ?></div><p class="text-gray-600 leading-relaxed mb-6">“<?php echo $text; ?>”</p><h3 class="font-playfair font-bold text-lg"><?php echo $name; ?></h3><p class="text-gray-500 text-sm"><?php echo $place; ?></p></article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 13. Service Areas -->
<section class="py-24 lg:py-28 bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 grid lg:grid-cols-2 gap-12 items-center">
        <div><p class="section-kicker">Local Interior Experts</p><h2 class="section-title">Interior Design Service Areas</h2><p class="text-gray-600 leading-relaxed mb-8">Looking for the best interior designer in Ghaziabad or a turnkey renovation company in Delhi NCR? Our team serves homes, offices, shops, and commercial properties throughout the region.</p><div class="flex flex-wrap gap-3"><?php foreach(['Ghaziabad','Noida','Greater Noida','Delhi','Vaishali','Vasundhara','Raj Nagar Extension','Crossing Republik','Gaur City','Indirapuram','Gurugram','Faridabad'] as $city): ?><span class="border border-gray-200 bg-sb-cream px-4 py-2 text-sm"><?php echo $city; ?></span><?php endforeach; ?></div></div>
        <iframe title="SAB Buildwell service areas map" src="https://www.google.com/maps?q=Ghaziabad%20Delhi%20NCR&output=embed" class="w-full h-96 border-0" loading="lazy"></iframe>
    </div>
</section>

<!-- 14. FAQ -->
<section class="py-24 lg:py-28 bg-sb-cream">
    <div class="max-w-4xl mx-auto px-6 lg:px-8"><div class="text-center mb-14"><p class="section-kicker">Helpful Answers</p><h2 class="section-title">Frequently Asked Questions</h2></div>
        <div class="space-y-4">
            <?php
            $faqs=[
                ['How much does interior design cost in Ghaziabad?','Interior cost depends on area, scope, design complexity, materials, furniture, and services. Use our estimator for an indicative range and request a detailed BOQ for accurate pricing.'],
                ['How long does a complete interior project take?','A typical project may take 6 to 16 weeks depending on size, approvals, material availability, and the amount of civil and modular work.'],
                ['Do you provide a warranty?','Warranty support is provided according to the selected materials, hardware brands, products, and agreed project scope.'],
                ['Do you manufacture modular kitchens and wardrobes?','Yes. We design and execute customised modular kitchens, wardrobes, TV units, vanities, and storage systems.'],
                ['Do you undertake civil renovation?','Yes. Our renovation scope can include demolition, masonry, waterproofing, plumbing, electrical, flooring, ceiling, painting, and furniture.'],
                ['Do you provide 3D interior designs?','Yes. 3D views can be developed after layout planning and design direction are approved.'],
                ['Can I select materials according to my budget?','Yes. We present suitable material and brand options based on application, performance, design, and budget.'],
                ['Do you work on office and commercial interiors?','Yes. We execute offices, shops, showrooms, reception areas, meeting rooms, workstations, and other commercial interiors.'],
                ['Do you provide turnkey interior execution?','Yes. Turnkey service covers planning, BOQ, procurement, site execution, modular work, finishing, quality checks, and handover.'],
                ['How can I book a free site visit?','Use the Book Site Visit button, WhatsApp us, or call +91 93199 06420 to share your location and preferred time.']
            ]; foreach($faqs as [$q,$a]): ?>
                <details class="home-faq bg-white border border-gray-200"><summary class="flex justify-between gap-4 p-6 cursor-pointer font-semibold"><span><?php echo $q; ?></span><i data-lucide="plus" class="faq-plus w-5 h-5 text-sb-gold shrink-0"></i></summary><p class="px-6 pb-6 text-gray-600 leading-relaxed"><?php echo $a; ?></p></details>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 15. Final CTA -->
<section id="contact" class="py-20 lg:py-24 bg-[#101b31] text-white">
    <div class="max-w-5xl mx-auto px-6 lg:px-8 text-center"><p class="section-kicker">Start Your Project</p><h2 class="section-title text-white">Ready to Transform Your Space?</h2><p class="text-gray-300 text-lg mb-9">Let's build a home that reflects your personality and lifestyle.</p><div class="flex flex-wrap justify-center gap-4"><a href="tel:+919319906420" class="gold-button">Call Now</a><a href="https://wa.me/919319906420" class="px-7 py-4 border border-white/40 font-semibold uppercase tracking-widest text-sm">WhatsApp</a><button type="button" data-lead-modal="free-quote" class="px-7 py-4 border border-white/40 font-semibold uppercase tracking-widest text-sm">Book Free Consultation</button></div></div>
</section>

<?php include 'includes/footer.php'; ?>
