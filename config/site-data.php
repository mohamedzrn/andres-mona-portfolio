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

// Multimedia Projects: Andres's Drive subfolders (Videos / BGC / 31 CBG Magazine)
// are currently empty. Keyed by section title matching multimedia.php's
// $multimediaSections; each entry is ['thumb' => 'assets/img/...', 'title' => '...'].
// Example once populated: $multimediaProjects['Videos'] = [['thumb' => '...', 'title' => '...']];
$multimediaProjects = [];

// Published Works & Comms Materials: also empty in Drive as of the last sync.
// Keyed by section title matching published-works.php's $publishedSections;
// each entry is ['title' => '...', 'url' => '...', 'date' => '...' (optional)].
$publishedWorks = [];
