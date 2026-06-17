<?php

/**
 * Blog content source.
 *
 * The site currently has no database/CMS. `blog.php` and `blog-detail.php`
 * render directly from this array, so each post must keep the same shape:
 * slug, title, category, date, read_time, image, excerpt, subtitle,
 * takeaways, quote, tags, and sections.
 */
$blogPosts = [
    [
        'slug' => 'plan-turnkey-interior-project',
        'title' => 'How to Plan a Turnkey Interior Project Without Losing Control',
        'category' => 'Turnkey Guide',
        'date' => 'June 12, 2026',
        'read_time' => '7 min read',
        'image' => 'https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=1200&h=800&fit=crop',
        'excerpt' => 'A practical roadmap for clients who want one accountable team from design brief to final handover.',
        'subtitle' => 'Turnkey interiors sound simple until design decisions, material lead times, site constraints, and vendor coordination start moving at the same time.',
        'takeaways' => ['Create a decision calendar, not just a design moodboard', 'Lock service drawings before decorative finishes', 'Keep one live snag list from day one'],
        'quote' => 'A turnkey project succeeds when decisions are sequenced before the site starts demanding answers.',
        'tags' => ['Turnkey', 'Project Planning', 'Site Execution'],
        'sections' => [
            [
                'heading' => 'Begin with a decision calendar',
                'body' => 'Most project delays do not come from the carpenter or painter. They come from decisions that arrive too late. Before execution starts, prepare a calendar for layout approval, electrical points, ceiling levels, laminate selection, hardware, appliances, loose furniture, lighting, and final decor. This gives the client and execution team a shared timeline instead of a vague expectation that everything can be decided on site.'
            ],
            [
                'heading' => 'Separate design approvals from site approvals',
                'body' => 'A 3D render can show the mood of the room, but the site needs working drawings. Wardrobe dimensions, switch locations, AC drain routes, plumbing points, false ceiling drops, and tile start points must be checked separately. Treat visual approval and execution approval as two different milestones.'
            ],
            [
                'heading' => 'Procurement should start before demolition ends',
                'body' => 'Imported hardware, special laminates, stone slabs, lighting profiles, acoustic materials, and custom furniture can affect the schedule. A turnkey team should map long-lead items early and order them before the site is waiting. This is especially important for offices and homes with fixed move-in dates.'
            ],
            [
                'heading' => 'Use a live snag list',
                'body' => 'Snagging should not be a last-week panic. Maintain one live list for alignment corrections, paint touch-ups, hardware issues, chipped edges, lighting defects, cleaning, and handover items. Close it section by section so the final week is for polish, not damage control.'
            ],
            [
                'heading' => 'What the client should ask for',
                'body' => 'Ask for a scope document, material schedule, payment milestones, execution sequence, and a clear owner for approvals. These documents may feel administrative, but they protect both the client and the contractor from confusion once work starts.'
            ]
        ]
    ],
    [
        'slug' => 'choosing-durable-interior-materials',
        'title' => 'Interior Materials That Age Well in Indian Homes',
        'category' => 'Materials',
        'date' => 'June 10, 2026',
        'read_time' => '6 min read',
        'image' => 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=1200&h=800&fit=crop',
        'excerpt' => 'A room-by-room look at materials that survive moisture, dust, heat, heavy use, and everyday cleaning.',
        'subtitle' => 'The best material is not always the most expensive one. It is the one that fits the room, the climate, the user, and the maintenance routine.',
        'takeaways' => ['Use moisture-resistant cores in wet zones', 'Choose finishes by cleaning behavior', 'Spend on hardware where movement is frequent'],
        'quote' => 'Luxury fails quickly when the wrong material is placed in the wrong condition.',
        'tags' => ['Materials', 'Durability', 'Indian Homes'],
        'sections' => [
            [
                'heading' => 'Kitchen materials need a different standard',
                'body' => 'Kitchen cabinets face heat, steam, oil, water, and constant hand contact. This is where moisture-resistant boards, good edge banding, reliable hinges, drawer channels, and easy-clean laminates matter more than decorative experiments. If the family cooks daily, avoid finishes that need delicate care every evening.'
            ],
            [
                'heading' => 'Wardrobes fail at hardware first',
                'body' => 'A wardrobe may look perfect on day one, but poor hinges, weak channels, and badly aligned shutters show up within months. Spend on hardware quality, internal planning, and shutter stability. A simple laminate wardrobe with good hardware often outlasts a visually dramatic wardrobe built with weak fittings.'
            ],
            [
                'heading' => 'Flooring should match traffic',
                'body' => 'Living rooms, corridors, and office receptions need flooring that handles shoes, dust, furniture movement, and cleaning chemicals. Bedrooms can use warmer finishes with softer movement patterns. Before selecting tiles, stone, vinyl, or wooden flooring, ask how often the area will be cleaned and who will use it daily.'
            ],
            [
                'heading' => 'Wall finishes need repair logic',
                'body' => 'Paint is easy to repair. Wallpaper can be dramatic but needs careful protection. Fluted panels and veneers look premium but can be sensitive to impact and moisture. In high-contact areas, choose finishes that can be cleaned or repaired without replacing an entire wall.'
            ],
            [
                'heading' => 'A practical material palette',
                'body' => 'Use durable laminates and quartz-like surfaces for heavy-use zones, richer veneers or textures for feature areas, washable paint for family spaces, and premium hardware wherever parts move daily. That balance usually creates a home that looks refined and still survives real life.'
            ]
        ]
    ],
    [
        'slug' => 'smart-storage-ideas-modern-homes',
        'title' => 'Storage Planning: The Difference Between a Pretty Home and a Livable Home',
        'category' => 'Home Interiors',
        'date' => 'June 8, 2026',
        'read_time' => '6 min read',
        'image' => 'https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?w=1200&h=800&fit=crop',
        'excerpt' => 'A practical guide to planning storage around habits, not just around empty walls.',
        'subtitle' => 'Most homes do not need more cupboards everywhere. They need storage placed exactly where daily clutter is created.',
        'takeaways' => ['Map clutter points before drawing cabinets', 'Design kitchen storage by task zones', 'Leave breathing space so storage does not feel heavy'],
        'quote' => 'The best storage is the storage nobody notices because it works exactly where it is needed.',
        'tags' => ['Storage', 'Modular Design', 'Homes'],
        'sections' => [
            [
                'heading' => 'Start with a clutter audit',
                'body' => 'Before designing wardrobes or cabinets, identify where clutter currently collects: entry keys, school bags, chargers, cleaning supplies, medicines, documents, extra groceries, ironing items, shoes, toys, or festival decor. Each clutter point needs a home. Otherwise even an expensive interior starts looking messy within weeks.'
            ],
            [
                'heading' => 'Kitchen storage is not one cabinet type',
                'body' => 'A useful kitchen separates daily utensils, heavy cookware, spices, dry groceries, appliances, cleaning supplies, and waste management. Tall units are useful for bulk storage, drawers work better for frequently used items, and corner systems should be selected only when they genuinely improve access.'
            ],
            [
                'heading' => 'Wardrobes should match the person',
                'body' => 'A couple sharing a wardrobe may need very different internal divisions. One person may need more hanging space, another may need drawers, shelves, trouser pull-outs, accessory trays, or a locker. Good wardrobe design starts with inventory, not shutter finish.'
            ],
            [
                'heading' => 'Living rooms need hidden utility',
                'body' => 'TV walls can hide routers, gaming consoles, remotes, wires, documents, blankets, and display lighting. A sideboard can store crockery or seasonal decor. A bench near the entrance can hide shoes. These details keep the living room usable without making it look like a storage room.'
            ],
            [
                'heading' => 'Avoid the overbuilt look',
                'body' => 'Storage should not swallow every wall. Use a mix of closed cabinets, open niches, floating shelves, and negative space. When all walls are packed with storage, the room may become functional but visually heavy.'
            ]
        ]
    ],
    [
        'slug' => 'commercial-office-interior-planning',
        'title' => 'Office Interior Planning for Teams That Actually Work There',
        'category' => 'Commercial',
        'date' => 'June 6, 2026',
        'read_time' => '7 min read',
        'image' => 'https://images.unsplash.com/photo-1497366754035-f200968a6e72?w=1200&h=800&fit=crop',
        'excerpt' => 'How to plan cabins, workstations, meeting rooms, reception, storage, acoustics, and services without creating a showroom that fails as a workplace.',
        'subtitle' => 'An office should look sharp, but it must first support how people enter, focus, collaborate, meet, store, and leave.',
        'takeaways' => ['Design around departments and visitor flow', 'Treat acoustics as a planning issue', 'Coordinate HVAC, data, power, and lighting early'],
        'quote' => 'A workplace is successful when the design supports the team without making them think about the design.',
        'tags' => ['Office Design', 'Commercial Fit-Out', 'Workplace'],
        'sections' => [
            [
                'heading' => 'Map people before furniture',
                'body' => 'Start with how many people use the space, which teams need to sit together, who receives visitors, who needs privacy, and which roles need quick access to printers, storage, meeting rooms, or managers. Workstations should come after this movement map, not before it.'
            ],
            [
                'heading' => 'Reception is a traffic controller',
                'body' => 'The reception should represent the brand, but it also has to control movement. Visitors should know where to wait, whom to speak to, and where not to go. A beautiful reception that confuses visitors or exposes private work zones has failed its purpose.'
            ],
            [
                'heading' => 'Meeting rooms need acoustic seriousness',
                'body' => 'Glass rooms look modern, but without acoustic planning they leak sound and distract nearby teams. Meeting rooms need seals, wall treatment, ceiling coordination, display points, lighting scenes, and HVAC placement that does not create noise or discomfort.'
            ],
            [
                'heading' => 'Services make or break the office',
                'body' => 'Power points, data ports, Wi-Fi coverage, HVAC ducts, fire safety, sprinkler lines, access control, CCTV, and emergency lighting must be coordinated before ceiling and partition work. Late service changes are expensive and often visible.'
            ],
            [
                'heading' => 'Plan for the next team size',
                'body' => 'If the company expects growth, keep expansion zones flexible. Use modular furniture, movable storage, and meeting spaces that can adapt. A workspace should not become obsolete the moment five more people join.'
            ]
        ]
    ],
    [
        'slug' => 'renovation-before-starting-work',
        'title' => 'Renovation Reality Check: What to Inspect Before You Break Anything',
        'category' => 'Renovation',
        'date' => 'June 4, 2026',
        'read_time' => '6 min read',
        'image' => 'https://images.unsplash.com/photo-1600566753086-00f18fb6b3ea?w=1200&h=800&fit=crop',
        'excerpt' => 'A renovation checklist for old wiring, seepage, uneven floors, retained furniture, dust control, and budget surprises.',
        'subtitle' => 'Renovation is not new construction. The old site has history, damage, shortcuts, and hidden services that need respect.',
        'takeaways' => ['Inspect seepage and wiring before finishes', 'Budget for surprises, not just visible work', 'Protect occupied areas from dust and damage'],
        'quote' => 'In renovation, the first design decision is knowing what not to touch.',
        'tags' => ['Renovation', 'Inspection', 'Repair'],
        'sections' => [
            [
                'heading' => 'Look for seepage before selecting finishes',
                'body' => 'If a wall has dampness, bubbling paint, or a musty smell, do not hide it behind wallpaper or panels. Fix the source first. Seepage can destroy paint, plywood, wardrobes, wallpaper, flooring edges, and electrical points after the renovation appears complete.'
            ],
            [
                'heading' => 'Old wiring needs a load check',
                'body' => 'Modern homes and offices use more appliances, chargers, lighting circuits, routers, displays, and HVAC equipment than older layouts were designed for. Before adding false ceilings and new furniture, check whether wiring, distribution boards, and earthing can handle the load.'
            ],
            [
                'heading' => 'Floor levels affect everything',
                'body' => 'Uneven floors create problems for wardrobes, sliding shutters, kitchen cabinets, partitions, and large-format tiles. A proper level check helps decide whether the site needs correction, threshold planning, or adjusted furniture details.'
            ],
            [
                'heading' => 'Retained furniture changes the plan',
                'body' => 'If the client wants to keep a sofa, bed, dining table, office desk, or appliance, measure it and include it in the layout from the beginning. Renovations often go wrong when retained items are treated as an afterthought.'
            ],
            [
                'heading' => 'Dust management is part of design service',
                'body' => 'For occupied homes or active offices, plan working zones, plastic partitions, material movement paths, cleaning frequency, and working hours. The client remembers how the renovation felt, not only how it looked at the end.'
            ]
        ]
    ],
    [
        'slug' => 'lighting-design-for-interiors',
        'title' => 'Lighting Design: Why Good Interiors Look Flat Without It',
        'category' => 'Lighting',
        'date' => 'June 2, 2026',
        'read_time' => '5 min read',
        'image' => 'https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?w=1200&h=800&fit=crop',
        'excerpt' => 'How ambient, task, accent, and indirect lighting shape mood, material quality, and daily usability.',
        'subtitle' => 'Lighting is not decoration at the end. It is a design layer that changes how color, texture, furniture, and people appear in the space.',
        'takeaways' => ['Use layers instead of one ceiling grid', 'Avoid glare in task-heavy zones', 'Select color temperature by room use'],
        'quote' => 'Bad lighting can make expensive interiors look unfinished.',
        'tags' => ['Lighting', 'Ceiling', 'Mood'],
        'sections' => [
            [
                'heading' => 'Stop relying on one type of light',
                'body' => 'A room with only downlights can feel flat and harsh. Use ambient light for general brightness, task light for specific work, accent light for features, and indirect light for softness. The mix matters more than the number of fixtures.'
            ],
            [
                'heading' => 'Living rooms need scenes',
                'body' => 'The same living room may host guests, movie nights, reading, family conversations, or quiet evenings. Use separate circuits for cove lights, wall washers, lamps, and display lights so the room can change mood without changing furniture.'
            ],
            [
                'heading' => 'Kitchens need shadow-free task zones',
                'body' => 'If the light is behind the person cooking, the counter falls into shadow. Under-cabinet lighting, well-positioned ceiling fixtures, and correct color temperature make kitchens safer and more comfortable.'
            ],
            [
                'heading' => 'Bedrooms need control near the bed',
                'body' => 'A bedroom should not force someone to get up to switch off the main lights. Bedside control, wardrobe lights, reading lights, and soft indirect lighting improve comfort more than a decorative chandelier alone.'
            ],
            [
                'heading' => 'Coordinate lighting with materials',
                'body' => 'Glossy stone, textured walls, veneer, fluted panels, and metallic finishes all react differently to light. Test beam direction and color temperature before finalizing fixture positions, especially in premium rooms.'
            ]
        ]
    ]
];

/**
 * Return every blog post in display order.
 *
 * @return array<int, array<string, mixed>>
 */
function getBlogPosts()
{
    global $blogPosts;
    return $blogPosts;
}

/**
 * Find one blog post by its URL slug.
 *
 * @param string $slug Slug from `blog-detail.php?slug=...`.
 * @return array<string, mixed>|null Matching post, or null when not found.
 */
function getBlogPostBySlug($slug)
{
    foreach (getBlogPosts() as $post) {
        if ($post['slug'] === $slug) {
            return $post;
        }
    }

    return null;
}

/**
 * Return nearby posts for the related-posts section.
 *
 * This currently uses simple list order and excludes the active post. If the
 * blog grows, this can be replaced with category/tag matching without changing
 * the detail template.
 *
 * @param string $slug Active post slug to exclude.
 * @param int $limit Maximum number of posts to return.
 * @return array<int, array<string, mixed>>
 */
function getRelatedBlogPosts($slug, $limit = 3)
{
    $related = [];

    foreach (getBlogPosts() as $post) {
        if ($post['slug'] !== $slug) {
            $related[] = $post;
        }
    }

    return array_slice($related, 0, $limit);
}
