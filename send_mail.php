<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<!-- Hero Section -->
<section class="relative w-full h-[50vh] min-h-[400px] overflow-hidden bg-sb-black">
    <div class="absolute inset-0 bg-gradient-to-b from-sb-black/40 via-sb-black/60 to-sb-black/90 z-10"></div>
    <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1497366216548-37526070297c?w=1920&h=1080&fit=crop')] bg-cover bg-center"></div>
    
    <div class="relative z-20 h-full flex items-center">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 w-full">
            <div class="max-w-3xl">
                <p class="text-sb-gold uppercase tracking-[0.3em] text-sm font-semibold mb-4">Get in Touch</p>
                <h1 class="font-playfair text-5xl md:text-6xl lg:text-7xl font-bold text-white leading-tight">
                    Let's <span class="text-sb-gold">Connect</span>
                </h1>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-24 lg:py-32 bg-sb-cream relative">
    <div class="absolute top-0 left-0 w-96 h-96 bg-sb-gold/5 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-sb-gold/5 rounded-full blur-3xl translate-x-1/3 translate-y-1/3"></div>
    
    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
        <div class="grid lg:grid-cols-2 gap-16">
            <!-- Contact Info -->
            <div class="scroll-reveal">
                <h2 class="font-playfair text-4xl md:text-5xl font-bold text-sb-charcoal mb-6">Connect With Us</h2>
                <p class="text-gray-600 mb-12 text-lg leading-relaxed">
                    Ready to transform your space? Contact us today for a consultation and let's build something extraordinary together.
                </p>
                
                <div class="space-y-8">
                    <div class="flex items-start space-x-4">
                        <div class="w-14 h-14 rounded-full bg-sb-gold/10 border border-sb-gold flex items-center justify-center flex-shrink-0">
                            <i data-lucide="phone" class="w-5 h-5 text-sb-gold"></i>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500 uppercase tracking-wider mb-1">Call / WhatsApp</p>
                            <p class="text-sb-charcoal font-semibold text-xl">+91 93199 06420</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="w-14 h-14 rounded-full bg-sb-gold/10 border border-sb-gold flex items-center justify-center flex-shrink-0">
                            <i data-lucide="mail" class="w-5 h-5 text-sb-gold"></i>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500 uppercase tracking-wider mb-1">Email</p>
                            <p class="text-sb-charcoal font-semibold text-xl">sabbuildwell@gmail.com</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="w-14 h-14 rounded-full bg-sb-gold/10 border border-sb-gold flex items-center justify-center flex-shrink-0">
                            <i data-lucide="map-pin" class="w-5 h-5 text-sb-gold"></i>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500 uppercase tracking-wider mb-1">Headquarters</p>
                            <p class="text-sb-charcoal font-semibold">SAB Buildwell Projects<br>P-36, Durga Industrial Area<br>Sahibabad, Ghaziabad<br>Uttar Pradesh, India</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="w-14 h-14 rounded-full bg-sb-gold/10 border border-sb-gold flex items-center justify-center flex-shrink-0">
                            <i data-lucide="clock" class="w-5 h-5 text-sb-gold"></i>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500 uppercase tracking-wider mb-1">Working Hours</p>
                            <p class="text-sb-charcoal font-semibold">Monday - Saturday: 9:00 AM - 7:00 PM</p>
                        </div>
                    </div>
                </div>
                
                <!-- Social Links -->
                <div class="mt-12">
                    <p class="text-sm text-gray-500 uppercase tracking-wider mb-4">Follow Us</p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-12 h-12 border border-sb-gold/30 rounded-full flex items-center justify-center hover:bg-sb-gold hover:border-sb-gold transition-all group">
                            <i data-lucide="facebook" class="w-5 h-5 text-sb-gold group-hover:text-sb-black transition-colors"></i>
                        </a>
                        <a href="#" class="w-12 h-12 border border-sb-gold/30 rounded-full flex items-center justify-center hover:bg-sb-gold hover:border-sb-gold transition-all group">
                            <i data-lucide="instagram" class="w-5 h-5 text-sb-gold group-hover:text-sb-black transition-colors"></i>
                        </a>
                        <a href="#" class="w-12 h-12 border border-sb-gold/30 rounded-full flex items-center justify-center hover:bg-sb-gold hover:border-sb-gold transition-all group">
                            <i data-lucide="linkedin" class="w-5 h-5 text-sb-gold group-hover:text-sb-black transition-colors"></i>
                        </a>
                        <a href="#" class="w-12 h-12 border border-sb-gold/30 rounded-full flex items-center justify-center hover:bg-sb-gold hover:border-sb-gold transition-all group">
                            <i data-lucide="youtube" class="w-5 h-5 text-sb-gold group-hover:text-sb-black transition-colors"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Contact Form -->
            <div class="scroll-reveal">
                <form class="bg-white p-10 lg:p-12 shadow-2xl border border-gray-100" action="contact.php" method="POST">
                    <h3 class="font-playfair text-2xl font-bold text-sb-charcoal mb-2">Send us a Message</h3>
                    <p class="text-gray-500 text-sm mb-8">Fill in the details below and we'll get back to you within 24 hours.</p>
                    
                    <div class="grid md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-sm text-gray-500 uppercase tracking-wider mb-2">First Name *</label>
                            <input type="text" name="firstname" class="w-full bg-gray-50 border border-gray-200 px-4 py-3 text-sb-charcoal focus:outline-none focus:border-sb-gold transition-colors" placeholder="John" required>
                        </div>
                        <div>
                            <label class="block text-sm text-gray-500 uppercase tracking-wider mb-2">Last Name *</label>
                            <input type="text" name="lastname" class="w-full bg-gray-50 border border-gray-200 px-4 py-3 text-sb-charcoal focus:outline-none focus:border-sb-gold transition-colors" placeholder="Doe" required>
                        </div>
                    </div>
                    
                    <div class="mb-6">
                        <label class="block text-sm text-gray-500 uppercase tracking-wider mb-2">Email Address *</label>
                        <input type="email" name="email" class="w-full bg-gray-50 border border-gray-200 px-4 py-3 text-sb-charcoal focus:outline-none focus:border-sb-gold transition-colors" placeholder="john@example.com" required>
                    </div>
                    
                    <div class="mb-6">
                        <label class="block text-sm text-gray-500 uppercase tracking-wider mb-2">Phone Number</label>
                        <input type="tel" name="phone" class="w-full bg-gray-50 border border-gray-200 px-4 py-3 text-sb-charcoal focus:outline-none focus:border-sb-gold transition-colors" placeholder="+91 98765 43210">
                    </div>
                    
                    <div class="mb-6">
                        <label class="block text-sm text-gray-500 uppercase tracking-wider mb-2">Project Type</label>
                        <select name="project_type" class="w-full bg-gray-50 border border-gray-200 px-4 py-3 text-sb-charcoal focus:outline-none focus:border-sb-gold transition-colors">
                            <option value="">Select Project Type</option>
                            <option value="commercial">Commercial Office</option>
                            <option value="residential">Residential</option>
                            <option value="retail">Retail Space</option>
                            <option value="renovation">Renovation</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    
                    <div class="mb-8">
                        <label class="block text-sm text-gray-500 uppercase tracking-wider mb-2">Your Message</label>
                        <textarea name="message" rows="5" class="w-full bg-gray-50 border border-gray-200 px-4 py-3 text-sb-charcoal focus:outline-none focus:border-sb-gold transition-colors resize-none" placeholder="Tell us about your project requirements..."></textarea>
                    </div>
                    
                    <button type="submit" class="w-full py-4 bg-sb-gold text-sb-black font-semibold uppercase tracking-widest hover:bg-sb-gold-light transition-all flex items-center justify-center space-x-2 group">
                        <span>Send Message</span>
                        <i data-lucide="send" class="w-4 h-4 transform group-hover:translate-x-1 transition-transform"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="w-full h-96 bg-sb-charcoal">
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.5!2d77.35!3d28.68!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjjCsDQwJzQ4LjAiTiA3N8KwMjEnMDAuMCJF!5e0!3m2!1sen!2sin!4v1600000000000!5m2!1sen!2sin" 
        width="100%" 
        height="100%" 
        style="border:0; filter: grayscale(100%) invert(92%) contrast(83%);" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</section>

<?php include 'includes/footer.php'; ?>
