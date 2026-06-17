<?php
// Some pages begin on light backgrounds, so they need a solid header immediately.
$currentPage = basename($_SERVER['PHP_SELF']);
$solidNavbarPages = ['blog-detail.php'];
$navbarStateClass = in_array($currentPage, $solidNavbarPages, true) ? 'navbar-solid' : '';
?>
<!-- Navigation -->
<nav id="navbar" class="fixed w-full z-50 transition-all duration-500 <?php echo $navbarStateClass; ?>">
    <div class="max-w-none mx-auto px-6 lg:px-10">
        <div class="flex items-center justify-between h-20">
            <!-- Logo -->
            <a href="index.php" class="flex items-center space-x-3 shrink-0">
                <img src="assets/logo.png" alt="SAB Buildwell Projects" class="h-14 w-auto">
                <div class="hidden sm:block">
                    <span class="font-playfair font-bold text-white text-xl lg:text-2xl tracking-wide whitespace-nowrap">SAB BUILDWELL</span>
                </div>
            </a>
            
            <!-- Desktop Menu -->
            <div class="hidden xl:flex items-center gap-4 2xl:gap-6">
                <a href="index.php" class="nav-link text-sm text-white/80 hover:text-sb-gold transition-colors uppercase tracking-widest">Home</a>

                <div class="nav-tree-group relative">
                    <a href="services.php" class="nav-link text-sm text-white/80 hover:text-sb-gold transition-colors uppercase tracking-widest">Services</a>
                    <div class="nav-tree-panel">
                        <a href="home-interior-design.php" class="nav-tree-item">Home Interior Design</a>
                        <a href="residential.php" class="nav-tree-item">Residential Interior Design</a>
                        <a href="commercial.php" class="nav-tree-item">Commercial Interior Design</a>
                        <a href="modular-interiors.php" class="nav-tree-item">Modular Interiors</a>
                        <a href="turnkey-interior-solutions.php" class="nav-tree-item">Turnkey Interior Solutions</a>
                        <a href="renovation-services.php" class="nav-tree-item">Renovation Services</a>
                        <a href="smart-home-automation.php" class="nav-tree-item">Smart Home Automation</a>
                        <a href="interior-design-consultation.php" class="nav-tree-item">Interior Design Consultation</a>
                    </div>
                </div>

                <a href="portfolio.php" class="nav-link text-sm text-white/80 hover:text-sb-gold transition-colors uppercase tracking-widest">Portfolio</a>
                <a href="projects.php" class="nav-link text-sm text-white/80 hover:text-sb-gold transition-colors uppercase tracking-widest">Projects</a>

                <div class="nav-tree-group relative">
                    <a href="locations.php" class="nav-link text-sm text-white/80 hover:text-sb-gold transition-colors uppercase tracking-widest">Locations</a>
                    <div class="nav-tree-panel nav-tree-panel-sm">
                        <a href="location-delhi.php" class="nav-tree-item">Delhi</a>
                        <a href="location-noida.php" class="nav-tree-item">Noida</a>
                        <a href="location-ghaziabad.php" class="nav-tree-item">Ghaziabad</a>
                        <a href="location-gurugram.php" class="nav-tree-item">Gurugram</a>
                        <a href="location-faridabad.php" class="nav-tree-item">Faridabad</a>
                    </div>
                </div>

                <a href="about.php" class="nav-link text-sm text-white/80 hover:text-sb-gold transition-colors uppercase tracking-widest">About Us</a>
                <a href="blog.php" class="nav-link text-sm text-white/80 hover:text-sb-gold transition-colors uppercase tracking-widest">Blog</a>
                <a href="faqs.php" class="nav-link text-sm text-white/80 hover:text-sb-gold transition-colors uppercase tracking-widest">FAQs</a>
                <a href="contact.php" class="px-5 py-2.5 bg-sb-gold text-sb-black text-xs xl:text-sm font-semibold uppercase tracking-widest hover:bg-sb-gold-light transition-all transform hover:scale-105 whitespace-nowrap">Contact</a>
            </div>
            
            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn" class="xl:hidden text-white p-2">
                <i data-lucide="menu" class="w-6 h-6"></i>
            </button>
        </div>
    </div>
    
            <!-- Mobile Menu
                 Services and Locations use left-side toggle buttons.
                 assets/js/main.js controls expand/collapse through aria-controls. -->
    <div id="mobile-menu" class="hidden xl:hidden bg-sb-charcoal/95 backdrop-blur-md border-t border-white/10">
        <div class="mobile-tree px-6 py-5">
            <a href="index.php" class="mobile-tree-link mobile-tree-root">Home</a>
            <div class="mobile-tree-branch is-collapsible">
                <div class="mobile-tree-row">
                    <button class="mobile-tree-toggle" type="button" aria-expanded="false" aria-controls="mobile-services-submenu" aria-label="Toggle services submenu">
                        <i data-lucide="plus" class="w-4 h-4 icon-open"></i>
                        <i data-lucide="minus" class="w-4 h-4 icon-close"></i>
                    </button>
                    <a href="services.php" class="mobile-tree-link mobile-tree-root">Services</a>
                </div>
                <div id="mobile-services-submenu" class="mobile-tree-children" hidden>
                    <a href="home-interior-design.php" class="mobile-tree-link">Home Interior Design</a>
                    <a href="residential.php" class="mobile-tree-link">Residential Interior Design</a>
                    <a href="commercial.php" class="mobile-tree-link">Commercial Interior Design</a>
                    <a href="modular-interiors.php" class="mobile-tree-link">Modular Interiors</a>
                    <a href="turnkey-interior-solutions.php" class="mobile-tree-link">Turnkey Interior Solutions</a>
                    <a href="renovation-services.php" class="mobile-tree-link">Renovation Services</a>
                    <a href="smart-home-automation.php" class="mobile-tree-link">Smart Home Automation</a>
                    <a href="interior-design-consultation.php" class="mobile-tree-link">Interior Design Consultation</a>
                </div>
            </div>
            <a href="portfolio.php" class="mobile-tree-link mobile-tree-root">Portfolio</a>
            <a href="projects.php" class="mobile-tree-link mobile-tree-root">Projects</a>
            <div class="mobile-tree-branch is-collapsible">
                <div class="mobile-tree-row">
                    <button class="mobile-tree-toggle" type="button" aria-expanded="false" aria-controls="mobile-locations-submenu" aria-label="Toggle locations submenu">
                        <i data-lucide="plus" class="w-4 h-4 icon-open"></i>
                        <i data-lucide="minus" class="w-4 h-4 icon-close"></i>
                    </button>
                    <a href="locations.php" class="mobile-tree-link mobile-tree-root">Locations</a>
                </div>
                <div id="mobile-locations-submenu" class="mobile-tree-children" hidden>
                    <a href="location-delhi.php" class="mobile-tree-link">Delhi</a>
                    <a href="location-noida.php" class="mobile-tree-link">Noida</a>
                    <a href="location-ghaziabad.php" class="mobile-tree-link">Ghaziabad</a>
                    <a href="location-gurugram.php" class="mobile-tree-link">Gurugram</a>
                    <a href="location-faridabad.php" class="mobile-tree-link">Faridabad</a>
                </div>
            </div>
            <a href="about.php" class="mobile-tree-link mobile-tree-root">About Us</a>
            <a href="blog.php" class="mobile-tree-link mobile-tree-root">Blog</a>
            <a href="faqs.php" class="mobile-tree-link mobile-tree-root">FAQs</a>
            <a href="contact.php" class="mobile-tree-link mobile-tree-root">Contact Us</a>
        </div>
    </div>
</nav>
