<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<section class="relative w-full h-[56vh] min-h-[450px] overflow-hidden bg-sb-black">
    <div class="absolute inset-0 bg-gradient-to-b from-sb-black/45 via-sb-black/65 to-sb-black/95 z-10"></div>
    <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?w=1920&h=1080&fit=crop')] bg-cover bg-center"></div>
    <div class="relative z-20 h-full flex items-center">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 w-full">
            <p class="text-sb-gold uppercase tracking-[0.3em] text-sm font-semibold mb-4">Portfolio</p>
            <h1 class="font-playfair text-5xl md:text-6xl lg:text-7xl font-bold text-white leading-tight mb-6">Selected Interior Work</h1>
            <p class="text-gray-300 text-lg max-w-2xl">A fresh overview of residential and commercial interior transformations by SAB Buildwell Projects.</p>
        </div>
    </div>
</section>

<section class="py-24 lg:py-32 bg-sb-cream">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php
            $items = [
                ['Residential Living Room', 'Residential', 'https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?w=700&h=600&fit=crop'],
                ['Corporate Boardroom', 'Commercial', 'https://images.unsplash.com/photo-1497366754035-f200968a6e72?w=700&h=600&fit=crop'],
                ['Modular Kitchen', 'Residential', 'https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?w=700&h=600&fit=crop'],
                ['Reception Lounge', 'Commercial', 'https://images.unsplash.com/photo-1604328698692-f76ea9498e76?w=700&h=600&fit=crop'],
                ['Master Bedroom', 'Residential', 'https://images.unsplash.com/photo-1505693416388-1295fceeeb88?w=700&h=600&fit=crop'],
                ['Open Office Workspace', 'Commercial', 'https://images.unsplash.com/photo-1497366216548-37526070297c?w=700&h=600&fit=crop']
            ];
            foreach ($items as $item):
            ?>
                <div class="group relative overflow-hidden bg-white shadow-lg scroll-reveal">
                    <div class="aspect-[4/3] overflow-hidden">
                        <img src="<?php echo $item[2]; ?>" alt="<?php echo $item[0]; ?>" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-sb-black/90 via-sb-black/40 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6">
                        <p class="text-sb-gold uppercase tracking-widest text-[10px] font-semibold mb-2"><?php echo $item[1]; ?></p>
                        <h2 class="font-playfair text-xl font-bold text-white"><?php echo $item[0]; ?></h2>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
