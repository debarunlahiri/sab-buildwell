<?php
/**
 * Location content page.
 *
 * This file only defines city-specific content. The shared layout/rendering
 * lives in `includes/location-detail-template.php`.
 */
$location = [
    'city' => 'Delhi',
    'title' => 'Interior Designers in Delhi',
    'intro' => 'Turnkey home and office interior services for Delhi apartments, builder floors, retail spaces, and corporate offices.',
    'image' => 'https://images.unsplash.com/photo-1587474260584-136574528ed5?w=1920&h=1080&fit=crop',
    'cards' => [
        ['icon' => 'home', 'title' => 'Residential Interiors', 'text' => 'Space planning, modular storage, kitchens, wardrobes, lighting, and premium finishes for Delhi homes.'],
        ['icon' => 'building-2', 'title' => 'Commercial Fit-Outs', 'text' => 'Office cabins, receptions, meeting rooms, workstations, and MEP coordination for commercial spaces.'],
        ['icon' => 'ruler', 'title' => 'Site-Led Execution', 'text' => 'Measured planning and site supervision suited to compact plots, apartments, and renovation constraints.']
    ]
];
include 'includes/location-detail-template.php';
