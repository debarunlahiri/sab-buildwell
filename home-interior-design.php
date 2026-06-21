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
        'The process begins with your lifestyle, family requirements, preferred design language, and budget. These inputs guide the space plan and every material decision that follows.',
        'Our team coordinates layouts, finishes, modular furniture, lighting, false ceilings, surface treatments, and site execution so the approved design carries through to handover.',
        'The content in this section can be expanded by the SEO team with location-specific information, project details, material guidance, and answers to common homeowner questions.'
    ],
    'features' => ['Living, dining, bedroom, kitchen, and utility planning', 'Material palettes, lighting layouts, and decor direction', 'Custom storage, wardrobes, TV units, and furniture', 'Turnkey site execution with quality checks'],
    'cta_subject' => 'Home Interior',
    'gallery' => [
        'https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?w=700&h=480&fit=crop',
        'https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?w=700&h=480&fit=crop',
        'https://images.unsplash.com/photo-1505693416388-1295fceeeb88?w=700&h=480&fit=crop',
        'https://images.unsplash.com/photo-1600585154526-990dced4db0d?w=700&h=480&fit=crop'
    ]
];
include 'includes/service-detail-template.php';
