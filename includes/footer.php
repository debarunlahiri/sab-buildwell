<!-- Shared footer and site-wide lead generation tools. -->
<footer class="bg-sb-black text-white pt-16">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-7 gap-10 pb-14">
            <div class="sm:col-span-2 xl:col-span-2">
                <h4 class="footer-heading">Company</h4>
                <div class="flex items-center gap-4 mb-5">
                    <img src="assets/logo.png" alt="SAB Buildwell Projects" class="h-16 w-auto">
                    <span class="font-playfair font-bold text-xl tracking-wide">SAB BUILDWELL</span>
                </div>
                <p class="text-gray-400 text-sm leading-relaxed max-w-sm">Interior design, modular solutions, customised furniture, renovation, and turnkey project execution across Delhi NCR.</p>
                <p class="text-sb-gold font-playfair font-bold mt-6 mb-3">Instagram</p>
                <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer" aria-label="Follow SAB Buildwell on Instagram" class="inline-flex items-center justify-center w-10 h-10 border border-white/20 text-gray-400 hover:border-sb-gold hover:text-sb-gold transition-colors">
                    <i data-lucide="instagram" class="w-5 h-5"></i>
                </a>
            </div>

            <div>
                <h4 class="footer-heading">Quick Links</h4>
                <ul class="footer-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="portfolio.php">Portfolio</a></li>
                    <li><a href="projects.php">Projects</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="faqs.php">FAQs</a></li>
                </ul>
            </div>

            <div>
                <h4 class="footer-heading">Services</h4>
                <ul class="footer-links">
                    <li><a href="home-interior-design.php">Home Interiors</a></li>
                    <li><a href="residential.php">Residential</a></li>
                    <li><a href="commercial.php">Commercial</a></li>
                    <li><a href="modular-interiors.php">Modular Interiors</a></li>
                    <li><a href="turnkey-interior-solutions.php">Turnkey Projects</a></li>
                    <li><a href="renovation-services.php">Renovation</a></li>
                </ul>
            </div>

            <div>
                <h4 class="footer-heading">Cities</h4>
                <ul class="footer-links">
                    <li><a href="location-delhi.php">Delhi</a></li>
                    <li><a href="location-noida.php">Noida</a></li>
                    <li><a href="location-ghaziabad.php">Ghaziabad</a></li>
                    <li><a href="location-gurugram.php">Gurugram</a></li>
                    <li><a href="location-faridabad.php">Faridabad</a></li>
                </ul>
            </div>

            <div>
                <h4 class="footer-heading">Contact</h4>
                <ul class="space-y-4 text-gray-400 text-sm">
                    <li><a href="tel:+919319906420" class="flex gap-2 hover:text-white"><i data-lucide="phone" class="w-4 h-4 text-sb-gold shrink-0"></i><span>+91 93199 06420</span></a></li>
                    <li><a href="mailto:sabbuildwell@gmail.com" class="flex gap-2 hover:text-white break-all"><i data-lucide="mail" class="w-4 h-4 text-sb-gold shrink-0"></i><span>sabbuildwell@gmail.com</span></a></li>
                    <li class="flex gap-2"><i data-lucide="map-pin" class="w-4 h-4 text-sb-gold shrink-0"></i><span>P-36, Durga Industrial Area, Sahibabad, Ghaziabad, UP</span></li>
                </ul>
            </div>

            <div>
                <h4 class="footer-heading">Google Map</h4>
                <a href="https://maps.google.com/?q=P-36+Durga+Industrial+Area+Sahibabad+Ghaziabad" target="_blank" rel="noopener noreferrer" class="footer-map block relative overflow-hidden border border-white/10 group">
                    <iframe title="SAB Buildwell location map" src="https://www.google.com/maps?q=P-36%20Durga%20Industrial%20Area%20Sahibabad%20Ghaziabad&output=embed" width="100%" height="150" style="border:0; pointer-events:none;" loading="lazy"></iframe>
                    <span class="absolute inset-x-0 bottom-0 bg-sb-black/85 py-2 px-3 text-xs text-sb-gold group-hover:text-white">Open in Google Maps</span>
                </a>
            </div>
        </div>

        <div class="border-t border-white/10 py-6 flex flex-col md:flex-row justify-between items-center gap-3">
            <p class="text-gray-500 text-sm">&copy; <?php echo date('Y'); ?> SAB Buildwell Projects. All rights reserved.</p>
            <p class="text-gray-500 text-xs">Designed by <a href="https://techproitsolutions.in/" target="_blank" rel="noopener noreferrer" class="text-sb-gold">Techpro IT Solutions</a></p>
        </div>
    </div>
</footer>

<!-- Sticky lead-generation actions -->
<div class="lead-actions" aria-label="Quick contact actions">
    <a href="https://wa.me/919319906420?text=Hello%20SAB%20Buildwell%2C%20I%20want%20to%20discuss%20an%20interior%20project." target="_blank" rel="noopener noreferrer" class="lead-action lead-action-whatsapp">
        <i data-lucide="message-circle" class="w-5 h-5"></i><span>WhatsApp</span>
    </a>
    <a href="tel:+919319906420" class="lead-action lead-action-call">
        <i data-lucide="phone" class="w-5 h-5"></i><span>Call</span>
    </a>
    <button type="button" class="lead-action" data-lead-modal="site-visit">
        <i data-lucide="calendar-check" class="w-5 h-5"></i><span>Book Site Visit</span>
    </button>
    <button type="button" class="lead-action" data-lead-modal="free-quote">
        <i data-lucide="file-text" class="w-5 h-5"></i><span>Free Quote</span>
    </button>
    <a href="output/pdf/sab-buildwell-brochure.pdf" download class="lead-action">
        <i data-lucide="download" class="w-5 h-5"></i><span>Brochure</span>
    </a>
    <button type="button" class="lead-action" data-lead-modal="cost-calculator">
        <i data-lucide="calculator" class="w-5 h-5"></i><span>Cost Calculator</span>
    </button>
</div>

<!-- Lead modal / exit popup -->
<div id="lead-modal" class="lead-modal" aria-hidden="true">
    <div class="lead-modal-backdrop" data-close-lead-modal></div>
    <div class="lead-modal-panel" role="dialog" aria-modal="true" aria-labelledby="lead-modal-title">
        <button type="button" class="lead-modal-close" data-close-lead-modal aria-label="Close"><i data-lucide="x" class="w-5 h-5"></i></button>
        <div id="lead-form-view">
            <p class="text-sb-gold uppercase tracking-[0.25em] text-xs font-semibold mb-3">SAB Buildwell</p>
            <h2 id="lead-modal-title" class="font-playfair text-3xl font-bold text-sb-charcoal mb-3">Get a Free Design Consultation</h2>
            <p id="lead-modal-copy" class="text-gray-500 text-sm mb-6">Tell us about your property and our interior team will contact you.</p>
            <form action="send_mail.php" method="POST" class="space-y-4">
                <input type="hidden" name="project_type" id="lead-project-type" value="Free Quote">
                <fieldset>
                    <legend class="text-sm font-semibold text-sb-charcoal mb-3">Property type</legend>
                    <div class="lead-property-options">
                        <?php foreach (['1 BHK', '2 BHK', '3 BHK', '4+ BHK / Duplex'] as $index => $type): ?>
                            <label>
                                <input type="radio" name="property_type" value="<?php echo $type; ?>" <?php echo $index === 0 ? 'required' : ''; ?>>
                                <span><?php echo $type; ?></span>
                            </label>
                        <?php endforeach; ?>
                    </div>
                </fieldset>
                <select name="property_location" required class="lead-input">
                    <option value="">Property Location</option>
                    <option>Ghaziabad</option>
                    <option>Noida</option>
                    <option>Greater Noida</option>
                    <option>Delhi</option>
                    <option>Gurugram</option>
                    <option>Faridabad</option>
                    <option>Other Delhi NCR</option>
                </select>
                <input type="text" name="firstname" required autocomplete="name" class="lead-input" placeholder="Name">
                <div class="lead-phone-field">
                    <span>+91</span>
                    <input type="tel" name="phone" required autocomplete="tel" pattern="[0-9]{10}" maxlength="10" inputmode="numeric" placeholder="Mobile Number">
                </div>
                <label class="lead-consent">
                    <input type="checkbox" name="whatsapp_updates" value="yes" checked>
                    <span>Yes, send me updates via WhatsApp and RCS</span>
                    <i data-lucide="message-circle" class="w-5 h-5"></i>
                </label>
                <button type="submit" class="w-full py-3.5 bg-sb-gold text-sb-black font-semibold uppercase tracking-widest text-sm">Book a Free Consultation</button>
                <p class="text-xs text-center text-gray-500 leading-relaxed">By submitting, you consent to our <a href="contact.php" class="text-sb-gold font-semibold">privacy policy</a> and <a href="contact.php" class="text-sb-gold font-semibold">terms of use</a>.</p>
            </form>
        </div>
        <div id="cost-calculator-view" hidden>
            <p class="text-sb-gold uppercase tracking-[0.25em] text-xs font-semibold mb-3">Quick Estimate</p>
            <h2 class="font-playfair text-3xl font-bold text-sb-charcoal mb-5">Interior Cost Calculator</h2>
            <div class="space-y-4">
                <label class="block text-sm font-medium">Project Type
                    <select id="calc-type" class="lead-input mt-2">
                        <option value="1800">Residential Interior</option>
                        <option value="1600">Commercial Interior</option>
                        <option value="2200">Premium Turnkey Interior</option>
                        <option value="1400">Renovation</option>
                    </select>
                </label>
                <label class="block text-sm font-medium">Area in sq. ft.
                    <input id="calc-area" type="number" min="100" step="50" value="1000" class="lead-input mt-2">
                </label>
                <div class="bg-sb-cream border border-gray-200 p-5">
                    <p class="text-xs uppercase tracking-widest text-gray-500 mb-2">Indicative Estimate</p>
                    <p id="calc-result" class="font-playfair text-3xl font-bold text-sb-charcoal">₹18,00,000</p>
                    <p class="text-xs text-gray-500 mt-2">Final pricing depends on scope, materials, services, and site conditions.</p>
                </div>
                <button type="button" class="w-full py-3.5 bg-sb-gold text-sb-black font-semibold uppercase tracking-widest text-sm" data-lead-modal="free-quote">Request Detailed Quote</button>
            </div>
        </div>
    </div>
</div>

<button id="back-to-top" class="fixed bottom-8 right-8 w-12 h-12 bg-sb-gold text-sb-black flex items-center justify-center opacity-0 pointer-events-none transition-all duration-300 hover:bg-sb-gold-light z-40">
    <i data-lucide="arrow-up" class="w-5 h-5"></i>
</button>

<script src="assets/js/three/scene.js"></script>
<script src="assets/js/three/objects.js"></script>
<script src="assets/js/three/animation.js"></script>
<script src="assets/js/threejs-bg.js"></script>
<script src="assets/js/main.js"></script>
<script>lucide.createIcons();</script>
</body>
</html>
