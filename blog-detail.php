<?php
/**
 * Blog detail page.
 *
 * Reads the `slug` query parameter, looks up the matching post from
 * `includes/blog-data.php`, and renders a normal article layout. Missing slugs
 * return a 404 response while still using the site header/footer.
 */
include 'includes/blog-data.php';

$slug = $_GET['slug'] ?? '';
$post = getBlogPostBySlug($slug);
$relatedPosts = $post ? getRelatedBlogPosts($post['slug'], 3) : [];

if (!$post) {
    http_response_code(404);
}
?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<?php if (!$post): ?>
    <section class="py-40 bg-sb-cream">
        <div class="max-w-3xl mx-auto px-6 lg:px-8 text-center">
            <p class="text-sb-gold uppercase tracking-[0.3em] text-sm font-semibold mb-4">404</p>
            <h1 class="font-playfair text-5xl font-bold text-sb-charcoal mb-6">Blog Post Not Found</h1>
            <p class="text-gray-600 mb-10">The article you are looking for does not exist or has been moved.</p>
            <a href="blog.php" class="inline-flex items-center gap-2 px-8 py-4 bg-sb-black text-white font-semibold uppercase tracking-widest text-sm hover:bg-sb-charcoal transition-all">
                <span>Back to Blog</span>
                <i data-lucide="arrow-right" class="w-4 h-4"></i>
            </a>
        </div>
    </section>
<?php else: ?>
    <article class="bg-sb-cream">
        <header class="pt-32 pb-12 lg:pt-40 lg:pb-16">
            <div class="max-w-4xl mx-auto px-6 lg:px-8">
                <a href="blog.php" class="inline-flex items-center gap-2 text-sb-gold text-xs font-semibold uppercase tracking-[0.25em] mb-8 hover:text-sb-charcoal transition-colors">
                    <i data-lucide="arrow-left" class="w-4 h-4"></i>
                    <span>Back to Blog</span>
                </a>

                <div class="flex flex-wrap items-center gap-3 mb-6">
                    <span class="px-4 py-2 bg-sb-gold text-sb-black text-xs font-bold uppercase tracking-widest"><?php echo htmlspecialchars($post['category']); ?></span>
                    <span class="text-gray-500 text-sm"><?php echo htmlspecialchars($post['date']); ?></span>
                    <span class="text-gray-400">/</span>
                    <span class="text-gray-500 text-sm"><?php echo htmlspecialchars($post['read_time']); ?></span>
                </div>

                <h1 class="font-playfair text-4xl md:text-6xl lg:text-7xl font-bold text-sb-charcoal leading-tight mb-8"><?php echo htmlspecialchars($post['title']); ?></h1>
                <p class="text-xl md:text-2xl text-gray-600 leading-relaxed mb-8"><?php echo htmlspecialchars($post['subtitle']); ?></p>

                <div class="flex items-center gap-4 border-y border-gray-200 py-5">
                    <div class="w-12 h-12 rounded-full bg-sb-black text-sb-gold flex items-center justify-center">
                        <i data-lucide="pen-line" class="w-5 h-5"></i>
                    </div>
                    <div>
                        <p class="text-sb-charcoal font-semibold">SAB Buildwell Editorial Team</p>
                        <p class="text-gray-500 text-sm">Interior design, renovation, and turnkey execution insights</p>
                    </div>
                </div>
            </div>
        </header>

        <div class="max-w-6xl mx-auto px-6 lg:px-8">
            <figure class="mb-14">
                <img src="<?php echo htmlspecialchars($post['image']); ?>" alt="<?php echo htmlspecialchars($post['title']); ?>" class="w-full aspect-[16/8] object-cover shadow-2xl">
                <figcaption class="text-gray-500 text-sm mt-4">Interior planning insight by SAB Buildwell Projects.</figcaption>
            </figure>
        </div>

        <div class="max-w-3xl mx-auto px-6 lg:px-8 pb-20 lg:pb-28">
            <p class="font-playfair text-3xl md:text-4xl text-sb-charcoal leading-snug mb-10"><?php echo htmlspecialchars($post['excerpt']); ?></p>

            <div class="bg-white border-l-4 border-sb-gold p-7 md:p-8 mb-12 shadow-lg">
                <h2 class="text-sb-charcoal font-semibold uppercase tracking-[0.2em] text-sm mb-5">In This Article</h2>
                <ul class="space-y-3">
                    <?php foreach ($post['takeaways'] as $takeaway): ?>
                        <li class="flex gap-3 text-gray-600 leading-relaxed">
                            <i data-lucide="check" class="w-5 h-5 text-sb-gold flex-shrink-0 mt-0.5"></i>
                            <span><?php echo htmlspecialchars($takeaway); ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="space-y-11 text-gray-700 text-lg leading-relaxed">
                <?php foreach ($post['sections'] as $section): ?>
                    <section>
                        <h2 class="font-playfair text-3xl md:text-4xl font-bold text-sb-charcoal mb-5"><?php echo htmlspecialchars($section['heading']); ?></h2>
                        <p><?php echo htmlspecialchars($section['body']); ?></p>
                    </section>
                <?php endforeach; ?>
            </div>

            <blockquote class="my-14 border-y border-gray-200 py-10">
                <p class="font-playfair text-3xl md:text-4xl text-sb-charcoal leading-snug">"<?php echo htmlspecialchars($post['quote']); ?>"</p>
            </blockquote>

            <div class="flex flex-wrap gap-3 mb-12">
                <?php foreach ($post['tags'] as $tag): ?>
                    <span class="px-4 py-2 bg-white text-sb-charcoal text-xs font-semibold uppercase tracking-widest border border-gray-100"><?php echo htmlspecialchars($tag); ?></span>
                <?php endforeach; ?>
            </div>

            <div class="bg-sb-black text-white p-8 md:p-10">
                <h2 class="font-playfair text-3xl font-bold mb-4">Planning a space like this?</h2>
                <p class="text-gray-300 leading-relaxed mb-7">Talk to SAB Buildwell Projects for home interiors, office interiors, renovation, and turnkey execution across Delhi NCR.</p>
                <a href="contact.php" class="inline-flex items-center gap-2 px-7 py-3 bg-sb-gold text-sb-black font-semibold uppercase tracking-widest text-sm hover:bg-sb-gold-light transition-colors">
                    <span>Book Consultation</span>
                    <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </a>
            </div>
        </div>
    </article>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex items-end justify-between gap-8 mb-10">
                <div>
                    <p class="text-sb-gold uppercase tracking-[0.3em] text-sm font-semibold mb-4">Related Posts</p>
                    <h2 class="font-playfair text-4xl md:text-5xl font-bold text-sb-charcoal">Continue Reading</h2>
                </div>
                <a href="blog.php" class="hidden md:inline-flex items-center gap-2 text-sb-gold text-sm font-semibold uppercase tracking-widest hover:text-sb-charcoal transition-colors">
                    View All
                    <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </a>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <?php foreach ($relatedPosts as $related): ?>
                    <article class="bg-sb-cream border border-gray-100 overflow-hidden group">
                        <a href="blog-detail.php?slug=<?php echo urlencode($related['slug']); ?>" class="block aspect-[4/3] overflow-hidden">
                            <img src="<?php echo htmlspecialchars($related['image']); ?>" alt="<?php echo htmlspecialchars($related['title']); ?>" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        </a>
                        <div class="p-7">
                            <p class="text-sb-gold uppercase tracking-widest text-xs font-semibold mb-3"><?php echo htmlspecialchars($related['category']); ?></p>
                            <h3 class="font-playfair text-2xl font-bold text-sb-charcoal leading-snug mb-4">
                                <a href="blog-detail.php?slug=<?php echo urlencode($related['slug']); ?>" class="hover:text-sb-gold transition-colors"><?php echo htmlspecialchars($related['title']); ?></a>
                            </h3>
                            <p class="text-gray-600 text-sm leading-relaxed"><?php echo htmlspecialchars($related['excerpt']); ?></p>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php include 'includes/footer.php'; ?>
