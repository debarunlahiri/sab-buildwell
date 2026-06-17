<?php
/**
 * Service content page.
 *
 * This file only defines page content. The shared layout/rendering lives in
 * `includes/service-detail-template.php`.
 */
$service = [
    'title' => 'Home Interior Design',
    'intro' => 'Personalized home interiors planned around comfort, storage, lighting, and daily living.',
    'eyebrow' => 'Homes That Work Beautifully',
    'heading' => 'Complete home design from layout to final finish.',
    'image' => 'https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?w=1920&h=1080&fit=crop',
    'body' => [
        'We design homes that balance visual warmth with practical function. Every room is planned around movement, natural light, furniture placement, storage, and long-term usability.',
        'Our team coordinates layouts, finishes, modular furniture, lighting, false ceiling, surface treatments, and site execution so the design intent carries through to handover.'
    ],
    'features' => ['Living, dining, bedroom, kitchen, and utility planning', 'Material palettes, lighting layouts, and decor direction', 'Custom storage, wardrobes, TV units, and furniture', 'Turnkey site execution with quality checks'],
    'cta_subject' => 'Home Interior'
];
include 'includes/service-detail-template.php';
