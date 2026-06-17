<?php
/**
 * Blog listing page.
 *
 * Pulls posts from `includes/blog-data.php`, promotes the first item as the
 * featured article, and renders the rest as card links to `blog-detail.php`.
 */
include 'includes/blog-data.php';
$posts = getBlogPosts();
?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<section class="relative w-full h-[50vh] min-h-[400px] overflow-hidden bg-sb-black">
    <div class="absolute inset-0 bg-gradient-to-b from-sb-black/45 via-sb-black/65 to-sb-black/95 z-10"></div>
    <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=1920&h=1080&fit=crop')] bg-cover bg-center"></div>
    <div class="relative z-20 h-full flex items-center">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 w-full">
            <p class="text-sb-gold uppercase tracking-[0.3em] text-sm font-semibold mb-4">Blog</p>
            <h1 class="font-playfair text-5xl md:text-6xl lg:text-7xl font-bold text-white leading-tight mb-6">Interior Design Insights</h1>
            <p class="text-gray-300 text-lg max-w-2xl">Ideas, planning guides, and execution advice for residential and commercial interiors.</p>
        </div>
    </div>
</section>

<section class="py-24 lg:py-32 bg-sb-cream relative overflow-hidden">
    <div class="absolute top-0 left-0 w-96 h-96 bg-sb-gold/5 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2"></div>
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <?php $featured = $posts[0]; ?>
        <article class="grid lg:grid-cols-2 bg-sb-black text-white mb-14 shadow-2xl scroll-reveal overflow-hidden">
            <a href="blog-detail.php?slug=<?php echo urlencode($featured['slug']); ?>" class="block min-h-[360px] overflow-hidden">
                <img src="<?php echo htmlspecialchars($featured['image']); ?>" alt="<?php echo htmlspecialchars($featured['title']); ?>" class="w-full h-full object-cover hover:scale-110 transition-transform duration-700">
            </a>
            <div class="p-8 md:p-12 lg:p-14 flex flex-col justify-center">
                <p class="text-sb-gold uppercase tracking-[0.3em] text-xs font-semibold mb-5">Featured Insight</p>
                <h2 class="font-playfair text-4xl md:text-5xl font-bold leading-tight mb-6">
                    <a href="blog-detail.php?slug=<?php echo urlencode($featured['slug']); ?>" class="hover:text-sb-gold transition-colors"><?php echo htmlspecialchars($featured['title']); ?></a>
                </h2>
                <p class="text-gray-300 text-lg leading-relaxed mb-8"><?php echo htmlspecialchars($featured['subtitle']); ?></p>
                <a href="blog-detail.php?slug=<?php echo urlencode($featured['slug']); ?>" class="inline-flex items-center gap-2 text-sb-gold text-sm font-semibold uppercase tracking-widest hover:text-sb-gold-light transition-colors">
                    <span>Read Featured Article</span>
                    <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </a>
            </div>
        </article>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach (array_slice($posts, 1) as $post): ?>
                <article class="bg-white shadow-xl border border-gray-100 overflow-hidden scroll-reveal group">
                    <a href="blog-detail.php?slug=<?php echo urlencode($post['slug']); ?>" class="block aspect-[4/3] overflow-hidden">
                        <img src="<?php echo htmlspecialchars($post['image']); ?>" alt="<?php echo htmlspecialchars($post['title']); ?>" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                    </a>
                    <div class="p-8">
                        <div class="flex flex-wrap items-center gap-3 text-xs uppercase tracking-widest text-gray-500 mb-4">
                            <span class="text-sb-gold font-semibold"><?php echo htmlspecialchars($post['category']); ?></span>
                            <span><?php echo htmlspecialchars($post['date']); ?></span>
                            <span><?php echo htmlspecialchars($post['read_time']); ?></span>
                        </div>
                        <h2 class="font-playfair text-2xl font-bold text-sb-charcoal mb-4">
                            <a href="blog-detail.php?slug=<?php echo urlencode($post['slug']); ?>" class="hover:text-sb-gold transition-colors"><?php echo htmlspecialchars($post['title']); ?></a>
                        </h2>
                        <p class="text-gray-600 leading-relaxed mb-6"><?php echo htmlspecialchars($post['excerpt']); ?></p>
                        <a href="blog-detail.php?slug=<?php echo urlencode($post['slug']); ?>" class="inline-flex items-center gap-2 text-sb-gold text-sm font-semibold uppercase tracking-widest hover:text-sb-charcoal transition-colors">
                            <span>Read More</span>
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
