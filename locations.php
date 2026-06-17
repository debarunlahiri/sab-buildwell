<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<section class="relative w-full h-[52vh] min-h-[430px] overflow-hidden bg-sb-black">
    <div class="absolute inset-0 bg-gradient-to-b from-sb-black/45 via-sb-black/65 to-sb-black/95 z-10"></div>
    <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=1920&h=1080&fit=crop')] bg-cover bg-center"></div>
    <div class="relative z-20 h-full flex items-center">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 w-full">
            <p class="text-sb-gold uppercase tracking-[0.3em] text-sm font-semibold mb-4">Locations</p>
            <h1 class="font-playfair text-5xl md:text-6xl lg:text-7xl font-bold text-white leading-tight mb-6">Interior Services Across Delhi NCR</h1>
            <p class="text-gray-300 text-lg max-w-2xl">SAB Buildwell Projects serves homes, offices, and commercial spaces across Delhi, Noida, Ghaziabad, Gurugram, and Faridabad.</p>
        </div>
    </div>
</section>

<section class="py-24 lg:py-32 bg-sb-cream">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 grid md:grid-cols-2 lg:grid-cols-5 gap-6">
        <?php
        $cities = [
            ['Delhi', 'location-delhi.php'],
            ['Noida', 'location-noida.php'],
            ['Ghaziabad', 'location-ghaziabad.php'],
            ['Gurugram', 'location-gurugram.php'],
            ['Faridabad', 'location-faridabad.php']
        ];
        foreach ($cities as $city):
        ?>
            <a href="<?php echo $city[1]; ?>" class="bg-white p-8 shadow-xl border border-gray-100 hover:border-sb-gold/40 transition-all scroll-reveal">
                <i data-lucide="map-pin" class="w-8 h-8 text-sb-gold mb-5"></i>
                <h2 class="font-playfair text-2xl font-bold text-sb-charcoal"><?php echo $city[0]; ?></h2>
            </a>
        <?php endforeach; ?>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
