# SAB Buildwell PHP Site

This is a static PHP website for SAB Buildwell Projects. Pages share common header, navigation, and footer includes, with Tailwind loaded from CDN and custom CSS/JS in `assets/`.

## Main Structure

- `includes/header.php` loads global HTML head, Tailwind config, fonts, third-party scripts, and `assets/css/custom.css`.
- `includes/navbar.php` contains the desktop navigation, mobile tree menu, and expandable mobile submenus.
- `includes/footer.php` contains footer content and script loading.
- `assets/css/custom.css` is only the CSS entrypoint. Actual CSS lives in `assets/css/partials/`.
- `assets/js/main.js` handles site interactions such as navbar scroll state, mobile menu behavior, reveal effects, sliders, and UI interactions.
- `assets/js/threejs-bg.js` bootstraps the hero Three.js background. Scene/object/animation code lives in `assets/js/three/`.

## Dynamic Content

The site does not use a database right now. Dynamic-looking pages are data-driven through PHP arrays.

### Blog

- `includes/blog-data.php` stores all blog posts.
- `blog.php` renders the blog listing from `getBlogPosts()`.
- `blog-detail.php?slug=...` renders a single blog post using `getBlogPostBySlug($slug)`.

To add a new blog post, add one array item in `includes/blog-data.php` with:

- `slug`
- `title`
- `category`
- `date`
- `read_time`
- `image`
- `excerpt`
- `subtitle`
- `takeaways`
- `quote`
- `tags`
- `sections`

### Service Pages

Small service pages such as `home-interior-design.php` define a `$service` array and include:

```php
include 'includes/service-detail-template.php';
```

The template expects:

- `title`
- `intro`
- `eyebrow`
- `heading`
- `image`
- `body`
- `features`
- `cta_subject`

### Location Pages

City pages such as `location-delhi.php` define a `$location` array and include:

```php
include 'includes/location-detail-template.php';
```

The template expects:

- `city`
- `title`
- `intro`
- `image`
- `cards`

## CSS Split

`assets/css/custom.css` imports partials in this order:

1. `base.css`
2. `navigation.css`
3. `components.css`
4. `mobile-menu.css`
5. `utilities.css`
6. `responsive.css`

Keep broad mobile fixes in `responsive.css`. Keep header/menu behavior in `navigation.css` and `mobile-menu.css`.

## Mobile Menu

The mobile menu is a fixed panel under the header. When opened:

- `body.mobile-menu-open` prevents the page behind from scrolling.
- `#navbar.mobile-menu-open` keeps the header dark.
- `.mobile-tree-toggle` buttons expand/collapse Services and Locations.

Do not remove the `aria-controls` attributes on submenu buttons; `assets/js/main.js` uses them to find the submenu.

## Validation Commands

Run these after edits:

```bash
for f in $(rg --files -g '*.php'); do php -l "$f" || exit 1; done
node --check assets/js/main.js
for f in assets/js/threejs-bg.js assets/js/three/*.js; do node --check "$f" || exit 1; done
```
