<?php
/**
 * Central site config. Add new gallery/multimedia/published-works items here
 * without touching page templates or layout markup.
 */

$site = [
    'name' => 'Andres Mona',
    'full_name' => 'Andres Juan Mona Jaramillo',
    'titles' => [
        'Communications Strategist',
        'Public Affairs Representative',
        'Research Associate in Strategy and Sustainability',
    ],
    'socials' => [
        'linkedin' => 'https://www.linkedin.com/in/andres-mona-55657222b/',
        'email_primary' => 'andresjmona@hotmail.com',
        'email_secondary' => 'amona@uwo.ca',
        'the_org' => 'https://theorg.com/org/conseil-scolaire-viamonde/org-chart/andres-mona',
    ],
    'organizations' => [
        'Canadian Armed Forces',
        'Canadian Army',
        'Ivey Business School',
        'Western University',
        'Conseil Scolaire Viamonde',
        'The Boys and Girls Club (BGC)',
        'The London Foodbank',
        'Toys for Tots',
        'Lemma Academy',
        'London InterCommunity Health Centre',
        'Middlesex County (Middlesex Trails)',
        'Vanier Children\'s Services',
        'Western Gazette',
        'Les Editions David (Mordus des Mots)',
    ],
];

$nav = [
    'index.php' => 'Home',
    'about.php' => 'About',
    'gallery.php' => 'Photo Gallery',
    'multimedia.php' => 'Multimedia',
    'published-works.php' => 'Published Works',
    'resume.php' => 'Resume',
    'contact.php' => 'Contact',
];

// category => display label used for gallery filter buttons
$galleryCategories = [
    'all' => 'All',
    'Operation Nanook' => 'Operation Nanook',
    'Operation Unifier' => 'Operation Unifier',
    'Operation Reassurance' => 'Operation Reassurance',
    'EK Colours Parade' => 'EK Colours Parade',
    'Range Days' => 'Range Days',
    'Windsor Marksman' => 'Windsor Marksman',
    '31 Canadian Brigade Group' => '31 Canadian Brigade Group',
    'Military Training' => 'Military Training',
    'Field Operations' => 'Field Operations',
    'Regimental Events' => 'Regimental Events',
    'Community Engagement' => 'Community Engagement',
    'Campus & Education' => 'Campus & Education',
];

// src paths are relative to site root
$galleryItems = [
    ['src' => 'assets/img/gallery/op-nanook-1.jpg', 'category' => 'Operation Nanook', 'caption' => 'Approximately thirty American soldiers experience extreme cold weather during Operation NANOOK-NUNALIVUT, Resolute Bay, Nunavut, March 2024. Photo: Cplc Richard Halle, Canadian Armed Forces'],
    ['src' => 'assets/img/gallery/op-nanook-2.jpg', 'category' => 'Operation Nanook', 'caption' => 'Port Inspection Divers, Royal Canadian Navy, prepare to ride ski-doos to the dive site during Operation NANOOK-NUNALIVUT, Yellowknife, NWT, March 2024. Photo: S1 Bryan Underwood, Canadian Armed Forces'],
    ['src' => 'assets/img/gallery/op-unifier-drone.jpg', 'category' => 'Operation Unifier', 'caption' => 'A member of the Canadian Armed Forces deploys a drone during training on Operation UNIFIER, Poland, June 2024. Photo: MS Zach Barr, Canadian Armed Forces'],
    ['src' => 'assets/img/gallery/op-unifier-1.jpg', 'category' => 'Operation Unifier', 'caption' => 'A member of the Canadian Armed Forces operates a drone during training on Operation UNIFIER, Poland, June 2024. Photo: MS Zach Barr, Canadian Armed Forces'],
    ['src' => 'assets/img/gallery/ag-drone-video-moment.jpg', 'category' => 'Operation Unifier', 'caption' => ''],
    ['src' => 'assets/img/gallery/op-reassurance-3.jpg', 'category' => 'Operation Reassurance', 'caption' => 'A CAF member of NATO enhanced Forward Presence Battle Group Latvia during Exercise BOLD FUSILIER, Tapa, Estonia, October 2023. Photo: Capt Joffray Provencher, eFP BG Latvia Public Affairs'],
    ['src' => 'assets/img/gallery/ek-colours-parade-1.jpg', 'category' => 'EK Colours Parade', 'caption' => ''],
    ['src' => 'assets/img/gallery/ek-colours-parade.jpg', 'category' => 'EK Colours Parade', 'caption' => ''],
    ['src' => 'assets/img/gallery/range-days.jpg', 'category' => 'Range Days', 'caption' => ''],
    ['src' => 'assets/img/gallery/c6-range.jpg', 'category' => 'Range Days', 'caption' => ''],
    ['src' => 'assets/img/gallery/windsor-marksman-01.jpg', 'category' => 'Windsor Marksman', 'caption' => ''],
    ['src' => 'assets/img/gallery/windsor-marksman-02.jpg', 'category' => 'Windsor Marksman', 'caption' => ''],
    ['src' => 'assets/img/gallery/windsor-marksman-03.jpg', 'category' => 'Windsor Marksman', 'caption' => ''],
    ['src' => 'assets/img/gallery/windsor-marksman-05.jpg', 'category' => 'Windsor Marksman', 'caption' => ''],
    ['src' => 'assets/img/gallery/windsor-marksman-06.jpg', 'category' => 'Windsor Marksman', 'caption' => ''],
    ['src' => 'assets/img/gallery/31-cbg-arctic-2.jpg', 'category' => '31 Canadian Brigade Group', 'caption' => ''],
    ['src' => 'assets/img/gallery/31-cbg-patch.jpg', 'category' => '31 Canadian Brigade Group', 'caption' => ''],
    ['src' => 'assets/img/gallery/31-service-change-of-command.jpg', 'category' => '31 Canadian Brigade Group', 'caption' => ''],
    ['src' => 'assets/img/gallery/tri-armoured.jpg', 'category' => '31 Canadian Brigade Group', 'caption' => ''],
    ['src' => 'assets/img/gallery/arrowhead-guardian.jpg', 'category' => 'Military Training', 'caption' => ''],
    ['src' => 'assets/img/gallery/ahg-bh-10.jpg', 'category' => 'Military Training', 'caption' => ''],
    ['src' => 'assets/img/gallery/ahg-bh-11.jpg', 'category' => 'Military Training', 'caption' => ''],
    ['src' => 'assets/img/gallery/ahg-bh-16.jpg', 'category' => 'Military Training', 'caption' => ''],
    ['src' => 'assets/img/gallery/royal-frost-1.jpg', 'category' => 'Military Training', 'caption' => ''],
    ['src' => 'assets/img/gallery/winter-ex-0170.jpg', 'category' => 'Military Training', 'caption' => ''],
    ['src' => 'assets/img/gallery/winter-ex-0300.jpg', 'category' => 'Military Training', 'caption' => ''],
    ['src' => 'assets/img/gallery/winter-ex-0338.jpg', 'category' => 'Military Training', 'caption' => ''],
    ['src' => 'assets/img/gallery/winter-ex-0358.jpg', 'category' => 'Military Training', 'caption' => ''],
    ['src' => 'assets/img/gallery/winter-ex-0370.jpg', 'category' => 'Military Training', 'caption' => ''],
    ['src' => 'assets/img/gallery/iscc-1.jpg', 'category' => 'Military Training', 'caption' => ''],
    ['src' => 'assets/img/gallery/iscc-3.jpg', 'category' => 'Military Training', 'caption' => ''],
    ['src' => 'assets/img/gallery/snowmobile.jpg', 'category' => 'Military Training', 'caption' => ''],
    ['src' => 'assets/img/gallery/meaford-sunset.jpg', 'category' => 'Military Training', 'caption' => ''],
    ['src' => 'assets/img/gallery/armoured-recce.jpg', 'category' => 'Military Training', 'caption' => ''],
    ['src' => 'assets/img/gallery/capn-simpson.jpg', 'category' => 'Military Training', 'caption' => ''],
    ['src' => 'assets/img/gallery/field-ops-1.jpg', 'category' => 'Field Operations', 'caption' => ''],
    ['src' => 'assets/img/gallery/field-ops-2.jpg', 'category' => 'Field Operations', 'caption' => ''],
    ['src' => 'assets/img/gallery/field-ops-3.jpg', 'category' => 'Field Operations', 'caption' => ''],
    ['src' => 'assets/img/gallery/petawawa-2021.jpg', 'category' => 'Field Operations', 'caption' => ''],
    ['src' => 'assets/img/gallery/field-ex-2021-1.jpg', 'category' => 'Field Operations', 'caption' => ''],
    ['src' => 'assets/img/gallery/field-ex-2021-2.jpg', 'category' => 'Field Operations', 'caption' => ''],
    ['src' => 'assets/img/gallery/field-ex-2021-3.jpg', 'category' => 'Field Operations', 'caption' => ''],
    ['src' => 'assets/img/gallery/field-ex-2021-4.jpg', 'category' => 'Field Operations', 'caption' => ''],
    ['src' => 'assets/img/gallery/dsc06448.jpg', 'category' => 'Regimental Events', 'caption' => ''],
    ['src' => 'assets/img/gallery/dsc06573.jpg', 'category' => 'Regimental Events', 'caption' => ''],
    ['src' => 'assets/img/gallery/community-set-1.jpg', 'category' => 'Community Engagement', 'caption' => ''],
    ['src' => 'assets/img/gallery/community-set-2.jpg', 'category' => 'Community Engagement', 'caption' => ''],
    ['src' => 'assets/img/gallery/community-set-3.jpg', 'category' => 'Community Engagement', 'caption' => ''],
    ['src' => 'assets/img/gallery/community-set-4.jpg', 'category' => 'Community Engagement', 'caption' => ''],
    ['src' => 'assets/img/gallery/community-1.jpg', 'category' => 'Community Engagement', 'caption' => ''],
    ['src' => 'assets/img/gallery/community-2.jpg', 'category' => 'Community Engagement', 'caption' => ''],
    ['src' => 'assets/img/gallery/community-3.jpg', 'category' => 'Community Engagement', 'caption' => ''],
    ['src' => 'assets/img/gallery/community-4.jpg', 'category' => 'Community Engagement', 'caption' => ''],
    ['src' => 'assets/img/gallery/community-2020.jpg', 'category' => 'Community Engagement', 'caption' => 'London Free Press clipping: "Canada Means Security to Family"'],
    ['src' => 'assets/img/gallery/campus-brescia.jpg', 'category' => 'Campus & Education', 'caption' => ''],
];

// Multimedia Projects, keyed by section title matching multimedia.php's $multimediaSections.
// Each entry is an image (['thumb' => 'assets/img/...', 'title' => '...']), a document
// (['type' => 'pdf', 'url' => 'assets/files/...', 'title' => '...']), or a video
// (['type' => 'video', 'src' => 'assets/video/...', 'title' => '...']). Videos are tracked
// via Git LFS (see .gitattributes) since they're well over GitHub's 100MB plain-push limit.
$multimediaProjects = [
    'Videos - Army' => [
        ['type' => 'video', 'src' => 'assets/video/dtn-2023-01-04.mp4', 'title' => 'DTN - January 2023'],
        ['type' => 'video', 'src' => 'assets/video/dtn-2023-05-17.mp4', 'title' => 'DTN - May 2023'],
        ['type' => 'video', 'src' => 'assets/video/ag-chinook.mp4', 'title' => 'Exercise Arrowhead Guardian: Chinook'],
        ['type' => 'video', 'src' => 'assets/video/arrowhead-chill-2.mp4', 'title' => 'Exercise Arrowhead Chill 2'],
    ],
    'Videos - Civilian & Non-Profit' => [
        ['type' => 'video', 'src' => 'assets/video/carlos-story-middlesex-trails.mp4', 'title' => "Carlos' Story - Middlesex Trails"],
        ['type' => 'video', 'src' => 'assets/video/london-foodbank-story.mp4', 'title' => 'London Foodbank Story - Western Gazette'],
    ],
    'Boys and Girls Club London (BGC)' => [
        ['thumb' => 'assets/img/multimedia/bgc-open-house-poster.jpg', 'title' => 'BGC London Open House Poster'],
        ['thumb' => 'assets/img/multimedia/bgc-flyer.png', 'title' => 'BGC London Open House Flyer'],
        ['thumb' => 'assets/img/multimedia/bgc-open-house-promo.png', 'title' => 'BGC London Open House Promo'],
        ['thumb' => 'assets/img/multimedia/bgc-youth-week-schedule.jpg', 'title' => 'National Youth Week Events Schedule'],
        ['type' => 'pdf', 'url' => 'assets/files/bgc-open-house.pdf', 'title' => 'BGC London Open House PDF'],
    ],
    'Canadian Army: 31 Canadian Brigade Group' => [
        ['type' => 'pdf', 'url' => 'assets/files/31-cbg-cover-pages.pdf', 'title' => '31 CBG Cover Pages'],
        ['type' => 'pdf', 'url' => 'assets/files/31-cbg-cover-pages-2.pdf', 'title' => '31 CBG Cover Pages (Alt)'],
        ['thumb' => 'assets/img/multimedia/31-cbg-brand-guide.png', 'title' => '31 CBG Brand Guide'],
        ['thumb' => 'assets/img/multimedia/31-cbg-ao-map.jpg', 'title' => 'Area of Operations Map'],
        ['thumb' => 'assets/img/multimedia/31-cbg-infographic-02.jpg', 'title' => 'Army Infographic 02'],
        ['thumb' => 'assets/img/multimedia/31-cbg-infographic-05.jpg', 'title' => 'Army Infographic 05'],
        ['thumb' => 'assets/img/multimedia/31-cbg-infographic-06.jpg', 'title' => 'Army Infographic 06'],
        ['thumb' => 'assets/img/multimedia/31cbg-facebook-post-example.png', 'title' => '31 CBG Facebook Post: Job Fair'],
        ['thumb' => 'assets/img/multimedia/31cbg-facebook-post-2.png', 'title' => '31 CBG Facebook Post: Glacial Arrowhead'],
        ['thumb' => 'assets/img/multimedia/31cbg-facebook-post-4.png', 'title' => '31 CBG Facebook Post: Glacial Arrowhead Deployment'],
        ['thumb' => 'assets/img/multimedia/31cbg-facebook-post-5.png', 'title' => '31 CBG Facebook Post: Glacial Arrowhead Deployment (2)'],
        ['type' => 'pdf', 'url' => 'assets/files/31-cbg-magazine-draft.pdf', 'title' => '31 CBG Magazine Draft'],
        ['type' => 'pdf', 'url' => 'assets/files/31-cbg-magazine-body.pdf', 'title' => '31 CBG Magazine Body (Contents and Foreword)'],
        ['thumb' => 'assets/img/multimedia/31-cbg-ao-map-4-3.jpg', 'title' => 'Area of Operations Map (Draft 4.3)'],
        ['thumb' => 'assets/img/multimedia/31cbg-facebook-post-1.png', 'title' => '31 CBG Facebook Post (1)'],
        ['thumb' => 'assets/img/multimedia/31cbg-facebook-post-3.png', 'title' => '31 CBG Facebook Post (3)'],
        ['thumb' => 'assets/img/multimedia/31cbg-calendar-february.png', 'title' => '31 CBG Calendar: February'],
        ['thumb' => 'assets/img/multimedia/31cbg-calendar-march.png', 'title' => '31 CBG Calendar: March'],
        ['thumb' => 'assets/img/multimedia/31cbg-pa-recruiting.png', 'title' => 'Public Affairs Recruiting Poster'],
        ['thumb' => 'assets/img/multimedia/grey-wolf-1.jpg', 'title' => 'Exercise Grey Wolf Recruiting Post (1)'],
        ['thumb' => 'assets/img/multimedia/grey-wolf-2.jpg', 'title' => 'Exercise Grey Wolf Recruiting Post (2)'],
        ['thumb' => 'assets/img/multimedia/grey-wolf-3.jpg', 'title' => 'Exercise Grey Wolf Recruiting Post (3)'],
    ],
    'London InterCommunity Health Centre' => [
        ['type' => 'link', 'url' => 'https://andresmona.wordpress.com/2023/12/03/integrated-media-project/', 'title' => 'Integrated Media Project - WordPress Post'],
        ['type' => 'pdf', 'url' => 'assets/files/storytelling-digital-age-lihc.pdf', 'title' => 'Storytelling in the Digital Age - Presentation Summary'],
        ['thumb' => 'assets/img/multimedia/lihc-infographic.png', 'title' => 'LIHC Infographic'],
        ['thumb' => 'assets/img/multimedia/lihc-opioid-crisis-facts.png', 'title' => '5 Facts About the Opioid Crisis'],
        ['thumb' => 'assets/img/multimedia/lihc-imp-timeline.png', 'title' => 'Integrated Media Project Timeline'],
        ['thumb' => 'assets/img/multimedia/lihc-social-1.png', 'title' => 'LIHC Social Media Post (1)'],
        ['thumb' => 'assets/img/multimedia/lihc-social-2.jpg', 'title' => 'LIHC Social Media Post (2)'],
        ['thumb' => 'assets/img/multimedia/lihc-social-3.jpg', 'title' => 'LIHC Social Media Post (3)'],
        ['thumb' => 'assets/img/multimedia/lihc-social-4.jpg', 'title' => 'LIHC Social Media Post (4)'],
    ],
    'Middlesex County (Middlesex Trails)' => [
        ['thumb' => 'assets/img/multimedia/middlesex-grassroutes-cover.webp', 'title' => '2023 Grassroutes Map Cover'],
        ['thumb' => 'assets/img/multimedia/middlesex-trails-cover.png', 'title' => 'Trails Guide 2023 Cover'],
        ['thumb' => 'assets/img/multimedia/middlesex-trails-1.jpg', 'title' => 'Trails Guide 2023 (1)'],
        ['thumb' => 'assets/img/multimedia/middlesex-trails-2.jpg', 'title' => 'Trails Guide 2023 (2)'],
        ['thumb' => 'assets/img/multimedia/middlesex-trails-3.jpg', 'title' => 'Trails Guide 2023 (3)'],
        ['thumb' => 'assets/img/multimedia/middlesex-trails-4.jpg', 'title' => 'Trails Guide 2023 (4)'],
        ['thumb' => 'assets/img/multimedia/middlesex-trails-5.jpg', 'title' => 'Trails Guide 2023 (5)'],
        ['thumb' => 'assets/img/multimedia/middlesex-trails-6.jpg', 'title' => 'Trails Guide 2023 (6)'],
        ['thumb' => 'assets/img/multimedia/middlesex-trails-38.png', 'title' => 'Trails Guide 2023 (38)'],
        ['thumb' => 'assets/img/multimedia/middlesex-trails-39.png', 'title' => 'Trails Guide 2023 (39)'],
    ],
];

// Published Works & Communications Materials.
// Keyed by section title matching published-works.php's $publishedSections;
// each entry is ['title' => '...', 'url' => '...', 'date' => '...' (optional)].
$publishedWorks = [
    'Articles and Published Works' => [
        [
            'title' => 'Western PhD Candidate Studies Impact of Smartphone Use in Youth',
            'url' => 'https://news.westernu.ca/2024/11/sarah-alakshar-digital-health/',
            'date' => 'November 2024',
        ],
        [
            'title' => 'Vanier Scholar Develops Innovations for Use of AI in Cancer Treatment Planning',
            'url' => 'https://www.schulich.uwo.ca/about/news/2024/september/vanier_scholar_develops_innovations_for_use_of_ai_in_cancer_treatment_planning.html',
            'date' => 'September 2024',
        ],
        [
            'title' => 'Careers Day Article: Army Career from Co-op Student to Instructor',
            'url' => '/assets/files/careers-day-article-mona.pdf',
            'date' => 'November 2022',
        ],
        [
            'title' => 'Unsilencing the South: The Prophecy of the Two Birds (Academy of Management Annals)',
            'url' => '/assets/files/unsilencing-the-south-published-ama.pdf',
        ],
        [
            'title' => 'SDRP Report: Settler & Indigenous Comms Two Years After Kamloops',
            'url' => '/assets/files/sdrp-report-kamloops-comms.pdf',
            'date' => 'April 2024',
        ],
        [
            'title' => 'CM/Storytelling Rationale Paper: 31 Canadian Brigade Group',
            'url' => '/assets/files/cm-storytelling-rationale-31cbg.pdf',
            'date' => 'March 2024',
        ],
        [
            'title' => 'Capstone Backgrounder: 31 CBG Magazine',
            'url' => '/assets/files/capstone-backgrounder-31cbg-magazine.pdf',
        ],
        [
            'title' => 'Article for Army Magazine: The Maple Leaf',
            'url' => '/assets/files/maple-leaf-army-magazine-2023.pdf',
            'date' => '2023',
        ],
        [
            'title' => '3 Samples of Journalism and Communication Publications (Western Gazette)',
            'url' => '/assets/files/journalism-samples.pdf',
        ],
        [
            'title' => 'Mordus des Mots Short Story (Les Editions David)',
            'url' => '/assets/files/mordus-des-mots-short-story.pdf',
        ],
        [
            'title' => 'Mordus des Mots Short Story: Translation',
            'url' => '/assets/files/mordus-des-mots-translation.pdf',
        ],
        [
            'title' => 'Local Community Spotlight: St-Maurice Weekly',
            'url' => '/assets/files/st-maurice-weekly-spotlight.pdf',
        ],
        [
            'title' => 'Échantillon d\'écriture',
            'url' => '/assets/files/echantillon-decriture.pdf',
        ],
        [
            'title' => 'Writer\'s Commonplace Book',
            'url' => '/assets/files/writers-commonplace-book.pdf',
        ],
        [
            'title' => 'Legal Case Review: Writing Sample',
            'url' => '/assets/files/legal-case-review-sample.pdf',
        ],
        [
            'title' => 'Vanier Children\'s Services: London Free Press Insert',
            'url' => '/assets/files/vanier-london-free-press-insert.pdf',
        ],
        [
            'title' => 'Vanier Children\'s Services: Press Write-up',
            'url' => '/assets/files/vanier-press-writeup.jpg',
        ],
        [
            'title' => 'English Published Research Paper (Western University)',
            'url' => '/assets/files/western-english-research-paper.pdf',
        ],
    ],
    'Communications Materials' => [
        [
            'title' => 'Strategic Communications Plan: City of London Sports & Rec',
            'url' => '/assets/files/communications-plan-london-sports-rec.pdf',
        ],
        [
            'title' => 'Media Advisory: BGC London Next Level Sports Showcase',
            'url' => '/assets/files/draft-media-advisory-nls.pdf',
            'date' => 'August 2023',
        ],
        [
            'title' => 'News Release: 31 CBG to Participate in Exercise Arrowhead Guardian',
            'url' => '/assets/files/news-release-31cbg-arrowhead-guardian-23.pdf',
            'date' => 'June 2023',
        ],
        [
            'title' => 'Media Advisory: 4 RCR Change of Command Parade',
            'url' => '/assets/files/media-advisory-army-parade-2022.pdf',
            'date' => 'May 2022',
        ],
        [
            'title' => 'Avis Aux Médias : Parade De Passation De Commandement Du 4 RCR',
            'url' => '/assets/files/media-advisory-army-parade-2022-fr.pdf',
            'date' => 'Mai 2022',
        ],
        [
            'title' => 'Media Advisory: CFB Petawawa Change of Command Parade',
            'url' => '/assets/files/media-advisory-petawawa-2018.pdf',
            'date' => '2018',
        ],
        [
            'title' => 'Public Service Announcement: Military Convoy, Highway 3',
            'url' => '/assets/files/psa-military-convoy-2018.pdf',
            'date' => 'May 2018',
        ],
        [
            'title' => 'Message D\'intérêt Public : Convoyage Militaire',
            'url' => '/assets/files/convoyage-militaire-2018.pdf',
            'date' => 'Mai 2018',
        ],
        [
            'title' => 'Lemma Academy Communications Plan Sample',
            'url' => '/assets/files/lemma-academy-comms-plan.pdf',
        ],
        [
            'title' => 'Communications Audit: Vanier Children\'s Services (Collaboration)',
            'url' => '/assets/files/comms-audit-vanier.pdf',
        ],
        [
            'title' => 'Exercise Grey Wolf Post Bank',
            'url' => '/assets/files/grey-wolf-post-bank.pdf',
        ],
        [
            'title' => 'Canadian Military Interview Template',
            'url' => '/assets/files/military-interview-template.pdf',
        ],
        [
            'title' => 'BGC London Community Showcase Tournament Information',
            'url' => '/assets/files/bgc-showcase-tournament-info.pdf',
        ],
    ],
];
