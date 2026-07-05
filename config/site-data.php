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
    ['src' => 'assets/img/gallery/arrowhead-guardian.jpg', 'category' => 'Military Training', 'caption' => ''],
    ['src' => 'assets/img/gallery/snowmobile.jpg', 'category' => 'Military Training', 'caption' => ''],
    ['src' => 'assets/img/gallery/meaford-sunset.jpg', 'category' => 'Military Training', 'caption' => ''],
    ['src' => 'assets/img/gallery/armoured-recce.jpg', 'category' => 'Military Training', 'caption' => ''],
    ['src' => 'assets/img/gallery/capn-simpson.jpg', 'category' => 'Military Training', 'caption' => ''],
    ['src' => 'assets/img/gallery/field-ops-1.jpg', 'category' => 'Field Operations', 'caption' => ''],
    ['src' => 'assets/img/gallery/field-ops-2.jpg', 'category' => 'Field Operations', 'caption' => ''],
    ['src' => 'assets/img/gallery/field-ops-3.jpg', 'category' => 'Field Operations', 'caption' => ''],
    ['src' => 'assets/img/gallery/community-set-1.jpg', 'category' => 'Community Engagement', 'caption' => ''],
    ['src' => 'assets/img/gallery/community-set-2.jpg', 'category' => 'Community Engagement', 'caption' => ''],
    ['src' => 'assets/img/gallery/community-set-3.jpg', 'category' => 'Community Engagement', 'caption' => ''],
    ['src' => 'assets/img/gallery/community-set-4.jpg', 'category' => 'Community Engagement', 'caption' => ''],
    ['src' => 'assets/img/gallery/community-1.jpg', 'category' => 'Community Engagement', 'caption' => ''],
    ['src' => 'assets/img/gallery/community-2.jpg', 'category' => 'Community Engagement', 'caption' => ''],
    ['src' => 'assets/img/gallery/community-3.jpg', 'category' => 'Community Engagement', 'caption' => ''],
    ['src' => 'assets/img/gallery/community-4.jpg', 'category' => 'Community Engagement', 'caption' => ''],
    ['src' => 'assets/img/gallery/campus-brescia.jpg', 'category' => 'Campus & Education', 'caption' => ''],
];

// Multimedia Projects, keyed by section title matching multimedia.php's $multimediaSections.
// Each entry is either an image (['thumb' => 'assets/img/...', 'title' => '...']) or a
// document (['type' => 'pdf', 'url' => 'assets/files/...', 'title' => '...']).
$multimediaProjects = [
    // Videos section still empty: the 2 source videos in Drive are 73MB/203MB and haven't
    // been pulled locally yet (Drive download tooling caps out at 10MB per file).
    'Videos' => [],
    'Boys and Girls Club London (BGC)' => [
        ['thumb' => 'assets/img/multimedia/bgc-open-house-poster.jpg', 'title' => 'BGC London Open House Poster'],
        ['thumb' => 'assets/img/multimedia/bgc-flyer.png', 'title' => 'BGC London Open House Flyer'],
    ],
    '31 Canadian Brigade Group - Magazine Sample' => [
        ['type' => 'pdf', 'url' => 'assets/files/31-cbg-cover-pages.pdf', 'title' => '31 CBG Cover Pages'],
        ['type' => 'pdf', 'url' => 'assets/files/31-cbg-cover-pages-2.pdf', 'title' => '31 CBG Cover Pages (Alt)'],
        ['thumb' => 'assets/img/multimedia/31-cbg-brand-guide.png', 'title' => '31 CBG Brand Guide'],
        ['thumb' => 'assets/img/multimedia/31-cbg-ao-map.jpg', 'title' => 'Area of Operations Map'],
        ['thumb' => 'assets/img/multimedia/31-cbg-infographic-02.jpg', 'title' => 'Army Infographic 02'],
        ['thumb' => 'assets/img/multimedia/31-cbg-infographic-05.jpg', 'title' => 'Army Infographic 05'],
        ['thumb' => 'assets/img/multimedia/31-cbg-infographic-06.jpg', 'title' => 'Army Infographic 06'],
    ],
];

// Published Works & Comms Materials.
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
    ],
];
