<!-- Navigation -->
<nav id="navbar" class="fixed w-full z-50 transition-all duration-500">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Logo -->
            <a href="index.php" class="flex items-center space-x-4">
                <img src="assets/logo.png" alt="SAB Buildwell Projects" class="h-16 w-auto">
                <div class="hidden sm:block">
                    <span class="font-playfair font-bold text-white text-2xl tracking-wide">SAB BUILDWELL</span>
                </div>
            </a>
            
            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="#about" class="nav-link text-sm text-white/80 hover:text-sb-gold transition-colors uppercase tracking-widest">About</a>
                <a href="#workflow" class="nav-link text-sm text-white/80 hover:text-sb-gold transition-colors uppercase tracking-widest">Process</a>
                <a href="#commercial" class="nav-link text-sm text-white/80 hover:text-sb-gold transition-colors uppercase tracking-widest">Commercial</a>
                <a href="#showcase" class="nav-link text-sm text-white/80 hover:text-sb-gold transition-colors uppercase tracking-widest">Showcase</a>
                <a href="#contact" class="px-6 py-2.5 bg-sb-gold text-sb-black text-sm font-semibold uppercase tracking-widest hover:bg-sb-gold-light transition-all transform hover:scale-105">Contact</a>
            </div>
            
            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn" class="md:hidden text-white p-2">
                <i data-lucide="menu" class="w-6 h-6"></i>
            </button>
        </div>
    </div>
    
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-sb-charcoal/95 backdrop-blur-md border-t border-white/10">
        <div class="px-6 py-4 space-y-4">
            <a href="#about" class="block text-white/80 hover:text-sb-gold transition-colors uppercase tracking-widest text-sm">About</a>
            <a href="#workflow" class="block text-white/80 hover:text-sb-gold transition-colors uppercase tracking-widest text-sm">Process</a>
            <a href="#commercial" class="block text-white/80 hover:text-sb-gold transition-colors uppercase tracking-widest text-sm">Commercial</a>
            <a href="#showcase" class="block text-white/80 hover:text-sb-gold transition-colors uppercase tracking-widest text-sm">Showcase</a>
            <a href="#contact" class="block px-6 py-2.5 bg-sb-gold text-sb-black text-sm font-semibold uppercase tracking-widest text-center">Contact</a>
        </div>
    </div>
</nav>
