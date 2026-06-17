/**
 * Main JavaScript - SAB Buildwell Projects
 * Enhanced with Interactive Graphics & Effects
 */

document.addEventListener('DOMContentLoaded', function() {
    
    // ============================================
    // Initialize Lucide Icons
    // ============================================
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }

    // ============================================
    // Custom Cursor Follower
    // ============================================
    const cursor = document.createElement('div');
    cursor.className = 'custom-cursor';
    document.body.appendChild(cursor);

    const cursorDot = document.createElement('div');
    cursorDot.className = 'cursor-dot';
    document.body.appendChild(cursorDot);

    let mouseX = 0, mouseY = 0;
    let cursorX = 0, cursorY = 0;
    let dotX = 0, dotY = 0;

    document.addEventListener('mousemove', (e) => {
        mouseX = e.clientX;
        mouseY = e.clientY;
    });

    function animateCursor() {
        cursorX += (mouseX - cursorX) * 0.15;
        cursorY += (mouseY - cursorY) * 0.15;
        dotX += (mouseX - dotX) * 0.5;
        dotY += (mouseY - dotY) * 0.5;

        cursor.style.left = cursorX + 'px';
        cursor.style.top = cursorY + 'px';
        cursorDot.style.left = dotX + 'px';
        cursorDot.style.top = dotY + 'px';

        requestAnimationFrame(animateCursor);
    }

    // Hide default cursor on desktop
    if (window.innerWidth > 768) {
        document.body.style.cursor = 'none';
        animateCursor();

        // Cursor hover effects on interactive elements
        const interactiveElements = document.querySelectorAll('a, button, .interactive, input, textarea, select, .project-card, .tilt-card');
        interactiveElements.forEach(el => {
            el.addEventListener('mouseenter', () => {
                cursor.classList.add('cursor-hover');
            });
            el.addEventListener('mouseleave', () => {
                cursor.classList.remove('cursor-hover');
            });
        });
    }

    // ============================================
    // Particle Cursor Trail
    // ============================================
    const particleContainer = document.createElement('div');
    particleContainer.className = 'particle-container';
    document.body.appendChild(particleContainer);

    const particles = [];
    const maxParticles = 20;

    function createParticle(x, y) {
        if (particles.length >= maxParticles) return;
        
        const particle = document.createElement('div');
        particle.className = 'cursor-particle';
        particle.style.left = x + 'px';
        particle.style.top = y + 'px';
        particleContainer.appendChild(particle);
        particles.push(particle);

        setTimeout(() => {
            particle.remove();
            particles.splice(particles.indexOf(particle), 1);
        }, 1000);
    }

    let lastParticleTime = 0;
    document.addEventListener('mousemove', (e) => {
        const now = Date.now();
        if (now - lastParticleTime > 30) {
            createParticle(e.clientX, e.clientY);
            lastParticleTime = now;
        }
    });

    // ============================================
    // Navigation Scroll Effect
    // ============================================
    const navbar = document.getElementById('navbar');
    let lastScroll = 0;

    function handleScroll() {
        const currentScroll = window.pageYOffset;
        
        if (currentScroll > 100) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
        
        lastScroll = currentScroll;
        
        const backToTop = document.getElementById('back-to-top');
        if (backToTop) {
            if (currentScroll > 500) {
                backToTop.classList.add('visible');
            } else {
                backToTop.classList.remove('visible');
            }
        }
    }

    window.addEventListener('scroll', handleScroll, { passive: true });

    // ============================================
    // Mobile Menu Toggle
    // ============================================
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    if (mobileMenuBtn && mobileMenu) {
        const setMobileMenuState = (isOpen) => {
            mobileMenu.classList.toggle('hidden', !isOpen);
            mobileMenu.classList.toggle('active', isOpen);
            document.body.classList.toggle('mobile-menu-open', isOpen);
            if (navbar) {
                navbar.classList.toggle('mobile-menu-open', isOpen);
            }
            if (isOpen) {
                mobileMenu.scrollTop = 0;
            } else {
                mobileMenu.querySelectorAll('.mobile-tree-branch.is-open').forEach(branch => {
                    branch.classList.remove('is-open');
                });
                mobileMenu.querySelectorAll('.mobile-tree-toggle[aria-expanded="true"]').forEach(toggle => {
                    toggle.setAttribute('aria-expanded', 'false');
                });
                mobileMenu.querySelectorAll('.mobile-tree-children').forEach(submenu => {
                    submenu.hidden = true;
                });
            }

            const icon = mobileMenuBtn.querySelector('[data-lucide]');
            if (icon) {
                icon.setAttribute('data-lucide', isOpen ? 'x' : 'menu');
                lucide.createIcons();
            }
        };

        mobileMenuBtn.addEventListener('click', function() {
            setMobileMenuState(!mobileMenu.classList.contains('active'));
        });

        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                setMobileMenuState(false);
            });
        });

        mobileMenu.querySelectorAll('.mobile-tree-toggle').forEach(toggle => {
            toggle.addEventListener('click', () => {
                const branch = toggle.closest('.mobile-tree-branch');
                const submenuId = toggle.getAttribute('aria-controls');
                const submenu = submenuId ? document.getElementById(submenuId) : null;
                const isOpen = branch && branch.classList.toggle('is-open');

                toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
                if (submenu) {
                    submenu.hidden = false;
                    if (!isOpen) {
                        window.setTimeout(() => {
                            if (!branch.classList.contains('is-open')) {
                                submenu.hidden = true;
                            }
                        }, 300);
                    }
                }
            });
        });

        window.addEventListener('resize', () => {
            if (window.innerWidth >= 1280 && mobileMenu.classList.contains('active')) {
                setMobileMenuState(false);
            }
        });
    }

    // ============================================
    // Smooth Scroll for Anchor Links
    // ============================================
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                const offsetTop = target.offsetTop - 80;
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });

    // ============================================
    // Back to Top
    // ============================================
    const backToTop = document.getElementById('back-to-top');
    if (backToTop) {
        backToTop.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    // ============================================
    // Scroll Reveal Animation
    // ============================================
    const scrollRevealElements = document.querySelectorAll('.scroll-reveal');
    
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('revealed');
                revealObserver.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    });

    scrollRevealElements.forEach(el => {
        revealObserver.observe(el);
    });

    // ============================================
    // Hero Entrance Animations (GSAP)
    // ============================================
    if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
        gsap.registerPlugin(ScrollTrigger);

        const heroTl = gsap.timeline({ delay: 0.3 });
        
        heroTl.to('.hero-subtitle', {
            y: 0,
            duration: 0.8,
            ease: 'power3.out'
        })
        .to('.hero-title', {
            y: 0,
            duration: 1,
            ease: 'power3.out'
        }, '-=0.5')
        .to('.hero-tagline', {
            y: 0,
            duration: 0.8,
            ease: 'power3.out'
        }, '-=0.6')
        .to('.hero-cta', {
            y: 0,
            duration: 0.8,
            ease: 'power3.out'
        }, '-=0.5');

        // Parallax effect for images
        gsap.utils.toArray('.group img').forEach(img => {
            gsap.to(img, {
                yPercent: -10,
                ease: 'none',
                scrollTrigger: {
                    trigger: img.closest('.group'),
                    start: 'top bottom',
                    end: 'bottom top',
                    scrub: true
                }
            });
        });

        // Animate floating shapes
        gsap.utils.toArray('.floating-shape').forEach((shape, i) => {
            gsap.to(shape, {
                y: `${Math.sin(i) * 30}`,
                rotation: i % 2 === 0 ? 360 : -360,
                duration: 20 + i * 5,
                repeat: -1,
                ease: 'none'
            });
        });

        // Workflow steps animation
        gsap.utils.toArray('.workflow-step').forEach((step, i) => {
            const isLeft = i % 2 === 1; // Steps 2 and 4 are on left
            
            gsap.from(step.querySelector('.workflow-card'), {
                x: isLeft ? 50 : -50,
                opacity: 0,
                duration: 0.8,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: step,
                    start: 'top 80%',
                    toggleActions: 'play none none none'
                }
            });

            gsap.from(step.querySelector('.workflow-node > div:first-child'), {
                scale: 0,
                opacity: 0,
                duration: 0.6,
                delay: 0.2,
                ease: 'back.out(1.7)',
                scrollTrigger: {
                    trigger: step,
                    start: 'top 80%',
                    toggleActions: 'play none none none'
                }
            });
        });
    } else {
        document.querySelectorAll('.hero-subtitle, .hero-title, .hero-tagline, .hero-cta').forEach(el => {
            el.style.transform = 'translateY(0)';
        });
    }

    // ============================================
    // 3D Tilt Cards Effect
    // ============================================
    const tiltCards = document.querySelectorAll('.tilt-card');
    
    tiltCards.forEach(card => {
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            
            const rotateX = (y - centerY) / 10;
            const rotateY = (centerX - x) / 10;
            
            card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale3d(1.02, 1.02, 1.02)`;
        });
        
        card.addEventListener('mouseleave', () => {
            card.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) scale3d(1, 1, 1)';
        });
    });

    // ============================================
    // Project Gallery Filtering
    // ============================================
    const filterButtons = document.querySelectorAll('.gallery-filter-btn');
    const galleryItems = document.querySelectorAll('.gallery-item');

    filterButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            // Update active state
            filterButtons.forEach(b => {
                b.classList.remove('active');
                b.classList.remove('bg-sb-gold');
                b.classList.remove('text-sb-black');
                b.classList.add('text-white');
                b.classList.add('border-white/30');
            });
            btn.classList.add('active');
            btn.classList.add('bg-sb-gold');
            btn.classList.add('text-sb-black');
            btn.classList.remove('text-white');
            btn.classList.remove('border-white/30');

            const filter = btn.getAttribute('data-filter');

            galleryItems.forEach(item => {
                const category = item.getAttribute('data-category');
                
                if (filter === 'all' || category === filter) {
                    item.style.opacity = '0';
                    item.style.transform = 'scale(0.8)';
                    setTimeout(() => {
                        item.style.display = '';
                        setTimeout(() => {
                            item.style.opacity = '1';
                            item.style.transform = 'scale(1)';
                        }, 50);
                    }, 300);
                } else {
                    item.style.opacity = '0';
                    item.style.transform = 'scale(0.8)';
                    setTimeout(() => {
                        item.style.display = 'none';
                    }, 300);
                }
            });
        });
    });

    // ============================================
    // Image Lightbox
    // ============================================
    const lightbox = document.createElement('div');
    lightbox.className = 'lightbox';
    lightbox.innerHTML = `
        <div class="lightbox-overlay"></div>
        <div class="lightbox-content">
            <img src="" alt="" class="lightbox-image">
            <button class="lightbox-close"><i data-lucide="x"></i></button>
            <button class="lightbox-prev"><i data-lucide="chevron-left"></i></button>
            <button class="lightbox-next"><i data-lucide="chevron-right"></i></button>
            <div class="lightbox-caption"></div>
        </div>
    `;
    document.body.appendChild(lightbox);

    const lightboxImage = lightbox.querySelector('.lightbox-image');
    const lightboxCaption = lightbox.querySelector('.lightbox-caption');
    const lightboxOverlay = lightbox.querySelector('.lightbox-overlay');
    const lightboxClose = lightbox.querySelector('.lightbox-close');
    const lightboxPrev = lightbox.querySelector('.lightbox-prev');
    const lightboxNext = lightbox.querySelector('.lightbox-next');

    let currentImageIndex = 0;
    const galleryImages = [];

    // Collect all gallery images
    document.querySelectorAll('.gallery-item img, .lightbox-trigger').forEach((img, index) => {
        galleryImages.push({
            src: img.src,
            caption: img.alt || ''
        });
        img.style.cursor = 'pointer';
        img.addEventListener('click', () => openLightbox(index));
    });

    function openLightbox(index) {
        currentImageIndex = index;
        updateLightbox();
        lightbox.classList.add('active');
        document.body.style.overflow = 'hidden';
        lucide.createIcons();
    }

    function closeLightbox() {
        lightbox.classList.remove('active');
        document.body.style.overflow = '';
    }

    function updateLightbox() {
        const image = galleryImages[currentImageIndex];
        lightboxImage.src = image.src;
        lightboxCaption.textContent = image.caption;
    }

    function nextImage() {
        currentImageIndex = (currentImageIndex + 1) % galleryImages.length;
        updateLightbox();
    }

    function prevImage() {
        currentImageIndex = (currentImageIndex - 1 + galleryImages.length) % galleryImages.length;
        updateLightbox();
    }

    lightboxClose.addEventListener('click', closeLightbox);
    lightboxOverlay.addEventListener('click', closeLightbox);
    lightboxNext.addEventListener('click', (e) => { e.stopPropagation(); nextImage(); });
    lightboxPrev.addEventListener('click', (e) => { e.stopPropagation(); prevImage(); });

    document.addEventListener('keydown', (e) => {
        if (!lightbox.classList.contains('active')) return;
        if (e.key === 'Escape') closeLightbox();
        if (e.key === 'ArrowRight') nextImage();
        if (e.key === 'ArrowLeft') prevImage();
    });

    // ============================================
    // Before/After Slider
    // ============================================
    const beforeAfterContainer = document.querySelector('.before-after-container');
    
    if (beforeAfterContainer) {
        const beforeImage = beforeAfterContainer.querySelector('.before-image');
        const slider = beforeAfterContainer.querySelector('.before-after-slider');
        const handle = beforeAfterContainer.querySelector('.slider-handle');
        
        let isDragging = false;
        
        function updateSlider(x) {
            const rect = beforeAfterContainer.getBoundingClientRect();
            let percentage = ((x - rect.left) / rect.width) * 100;
            percentage = Math.max(0, Math.min(100, percentage));
            
            beforeImage.style.clipPath = `inset(0 ${100 - percentage}% 0 0)`;
            beforeImage.style.webkitClipPath = `inset(0 ${100 - percentage}% 0 0)`;
            slider.style.left = `${percentage}%`;
            handle.style.left = `${percentage}%`;
        }
        
        function startDrag(e) {
            isDragging = true;
            if (e.type === 'mousedown') e.preventDefault();
        }
        
        function endDrag() {
            isDragging = false;
        }
        
        function onMove(e) {
            if (!isDragging) return;
            const clientX = e.touches ? e.touches[0].clientX : e.clientX;
            updateSlider(clientX);
        }
        
        function onClick(e) {
            const clientX = e.touches ? e.touches[0].clientX : e.clientX;
            updateSlider(clientX);
        }
        
        // Mouse events
        handle.addEventListener('mousedown', startDrag);
        beforeAfterContainer.addEventListener('mousedown', (e) => {
            startDrag(e);
            onClick(e);
        });
        document.addEventListener('mouseup', endDrag);
        document.addEventListener('mousemove', onMove);
        
        // Touch events
        handle.addEventListener('touchstart', startDrag, { passive: true });
        beforeAfterContainer.addEventListener('touchstart', (e) => {
            startDrag(e);
            onClick(e);
        }, { passive: true });
        document.addEventListener('touchend', endDrag);
        document.addEventListener('touchmove', onMove, { passive: true });
    }

    // ============================================
    // Text Scramble Effect
    // ============================================
    class TextScramble {
        constructor(el) {
            this.el = el;
            this.chars = '!<>-_\\/[]{}—=+*^?#________';
            this.update = this.update.bind(this);
        }
        
        setText(newText) {
            const oldText = this.el.innerText;
            const length = Math.max(oldText.length, newText.length);
            const promise = new Promise((resolve) => this.resolve = resolve);
            this.queue = [];
            
            for (let i = 0; i < length; i++) {
                const from = oldText[i] || '';
                const to = newText[i] || '';
                const start = Math.floor(Math.random() * 40);
                const end = start + Math.floor(Math.random() * 40);
                this.queue.push({ from, to, start, end });
            }
            
            cancelAnimationFrame(this.frameRequest);
            this.frame = 0;
            this.update();
            return promise;
        }
        
        update() {
            let output = '';
            let complete = 0;
            
            for (let i = 0, n = this.queue.length; i < n; i++) {
                let { from, to, start, end, char } = this.queue[i];
                
                if (this.frame >= end) {
                    complete++;
                    output += to;
                } else if (this.frame >= start) {
                    if (!char || Math.random() < 0.28) {
                        char = this.randomChar();
                        this.queue[i].char = char;
                    }
                    output += `<span class="scramble-char">${char}</span>`;
                } else {
                    output += from;
                }
            }
            
            this.el.innerHTML = output;
            
            if (complete === this.queue.length) {
                this.resolve();
            } else {
                this.frameRequest = requestAnimationFrame(this.update);
                this.frame++;
            }
        }
        
        randomChar() {
            return this.chars[Math.floor(Math.random() * this.chars.length)];
        }
    }

    // Apply scramble effect to specific elements
    document.querySelectorAll('.scramble-text').forEach(el => {
        const fx = new TextScramble(el);
        const originalText = el.innerText;
        
        el.addEventListener('mouseenter', () => {
            fx.setText(originalText);
        });
    });

    // ============================================
    // Counter Animation for Stats
    // ============================================
    const statNumbers = document.querySelectorAll('.scroll-reveal .font-playfair.text-5xl, .stat-number');
    
    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const element = entry.target;
                const text = element.textContent;
                const number = parseInt(text.replace(/\D/g, ''));
                const suffix = text.replace(/[0-9]/g, '');
                
                if (!isNaN(number)) {
                    animateCounter(element, 0, number, 2000, suffix);
                }
                
                counterObserver.unobserve(element);
            }
        });
    }, { threshold: 0.5 });

    statNumbers.forEach(stat => counterObserver.observe(stat));

    function animateCounter(element, start, end, duration, suffix) {
        const range = end - start;
        const increment = end > start ? 1 : -1;
        const stepTime = Math.abs(Math.floor(duration / range));
        let current = start;
        
        const timer = setInterval(() => {
            current += increment * Math.ceil(range / (duration / 16));
            if ((increment > 0 && current >= end) || (increment < 0 && current <= end)) {
                current = end;
                clearInterval(timer);
            }
            element.textContent = current + suffix;
        }, 16);
    }

    // ============================================
    // Animated SVG Lines (Drawing Effect)
    // ============================================
    const svgLines = document.querySelectorAll('.animate-line');
    
    const svgObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('drawn');
                svgObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    svgLines.forEach(line => svgObserver.observe(line));

    // ============================================
    // Magnetic Button Effect
    // ============================================
    const magneticButtons = document.querySelectorAll('.magnetic-btn');
    
    magneticButtons.forEach(btn => {
        btn.addEventListener('mousemove', (e) => {
            const rect = btn.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;
            
            btn.style.transform = `translate(${x * 0.3}px, ${y * 0.3}px)`;
        });
        
        btn.addEventListener('mouseleave', () => {
            btn.style.transform = 'translate(0, 0)';
        });
    });

    // ============================================
    // Horizontal Scroll Gallery (for mobile)
    // ============================================
    const scrollGalleries = document.querySelectorAll('.horizontal-scroll');
    
    scrollGalleries.forEach(gallery => {
        let isDown = false;
        let startX;
        let scrollLeft;
        
        gallery.addEventListener('mousedown', (e) => {
            isDown = true;
            gallery.classList.add('active');
            startX = e.pageX - gallery.offsetLeft;
            scrollLeft = gallery.scrollLeft;
        });
        
        gallery.addEventListener('mouseleave', () => {
            isDown = false;
            gallery.classList.remove('active');
        });
        
        gallery.addEventListener('mouseup', () => {
            isDown = false;
            gallery.classList.remove('active');
        });
        
        gallery.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - gallery.offsetLeft;
            const walk = (x - startX) * 2;
            gallery.scrollLeft = scrollLeft - walk;
        });
    });

    // ============================================
    // Form Validation & Handling
    // ============================================
    const contactForm = document.querySelector('form[action="contact.php"]');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            const email = this.querySelector('input[type="email"]');
            const firstname = this.querySelector('input[name="firstname"]');
            const lastname = this.querySelector('input[name="lastname"]');
            
            let valid = true;
            
            if (!email.value.match(/^[^\s@]+@[^\s@]+\.[^\s@]+$/)) {
                email.style.borderColor = '#ef4444';
                valid = false;
            } else {
                email.style.borderColor = '';
            }
            
            if (firstname.value.trim() === '') {
                firstname.style.borderColor = '#ef4444';
                valid = false;
            } else {
                firstname.style.borderColor = '';
            }
            
            if (lastname.value.trim() === '') {
                lastname.style.borderColor = '#ef4444';
                valid = false;
            } else {
                lastname.style.borderColor = '';
            }
            
            if (!valid) {
                e.preventDefault();
            }
        });

        contactForm.querySelectorAll('input, textarea').forEach(field => {
            field.addEventListener('input', function() {
                this.style.borderColor = '';
            });
        });
    }

    // ============================================
    // Check for contact form success message
    // ============================================
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.get('contact') === 'success') {
        const contactSection = document.getElementById('contact');
        if (contactSection) {
            const successDiv = document.createElement('div');
            successDiv.className = 'fixed top-24 right-6 bg-green-600 text-white px-6 py-4 shadow-2xl z-50 flex items-center space-x-3 transform translate-x-full transition-transform duration-500';
            successDiv.innerHTML = `
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                <div>
                    <p class="font-semibold">Message Sent!</p>
                    <p class="text-sm opacity-90">We'll get back to you soon.</p>
                </div>
            `;
            document.body.appendChild(successDiv);
            
            setTimeout(() => {
                successDiv.style.transform = 'translateX(0)';
            }, 100);
            
            setTimeout(() => {
                successDiv.style.transform = 'translateX(120%)';
                setTimeout(() => successDiv.remove(), 500);
            }, 5000);
        }
        
        if (window.history.replaceState) {
            window.history.replaceState({}, document.title, window.location.pathname + '#contact');
        }
    }

    // ============================================
    // Lazy Loading Images
    // ============================================
    if ('IntersectionObserver' in window) {
        const lazyImages = document.querySelectorAll('img[data-src]');
        
        const imageObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.removeAttribute('data-src');
                    imageObserver.unobserve(img);
                }
            });
        });

        lazyImages.forEach(img => imageObserver.observe(img));
    }

    // ============================================
    // Console Branding
    // ============================================
    console.log('%c SAB Buildwell Projects ', 'background: #c9a96e; color: #0a0a0a; font-size: 20px; font-weight: bold; padding: 10px;');
    console.log('%c Constructing Dreams. Building Trust. ', 'color: #c9a96e; font-size: 14px; font-style: italic;');

}); // End DOMContentLoaded
