<?php
$pageTitle = 'Agricultural Projects | Future Land';
$pageDescription = 'Agricultural opportunities in Wadi El Natrun and El Dabaa Road, Egypt.';
$activePage = 'projects';
$pageClass = 'agricultural';
$project = [
  'interest' => 'Agricultural Projects', 'type' => 'Agricultural opportunity', 'eyebrow' => 'Our Agricultural Projects',
  'title' => 'Future Land Agricultural Projects', 'location' => 'Wadi El Natrun & El Dabaa Road, Egypt',
  'summary' => 'Reclaimed agricultural land in Wadi El Natrun and El Dabaa Road (before El Mohra), available for lease with water, utilities, and road access already in place.',
  'locationLink' => 'https://maps.app.goo.gl/vw4UDUp5UZyMftQ19',
  'hero' => 'assets/images/agri-hero.png',
  'opportunityTitle' => 'A long-term agricultural opportunity shaped around scale, access, and future growth.',
  'about' => 'Future Land currently develops two agricultural sites. The first is in Wadi El Natrun, on sandy soil, 80% reclaimed, irrigated from available wells and located two kilometres from the Wadi El Natrun to El Alamein road. The second is on El Dabaa Road (before El Mohra), on clay soil, fully reclaimed, with surface irrigation and available water, close to the main routes. Both sites carry full utilities including drinking water and electricity, and complete legal documentation.',
  'suitableCrops' => 'Olives, Grapes, Figs, Onions, Garlic, Citrus, and any greenhouse-cultivated crops.',
  'facts' => [['Project sites', '2 Locations'], ['Minimum lease', '10 Feddans'], ['Availability', 'Available now']],
  'secondary' => ['assets/images/agri-hero.png', 'assets/images/agri-secondary.png'],
  'secondaryAlt' => ['Wadi El Natrun agricultural site', 'El Dabaa Road agricultural site'],
  'sites' => [
    ['number' => 'Project 01', 'name' => 'Wadi El Natrun', 'link' => 'https://maps.app.goo.gl/vw4UDUp5UZyMftQ19', 'facts' => ['Soil' => 'Sandy soil', 'Reclamation' => '80%', 'Irrigation' => 'Wells, available', 'Access' => '2 km from the Wadi El Natrun to El Alamein road', 'Minimum lease' => '10 feddans', 'Availability' => 'Available now']],
    ['number' => 'Project 02', 'name' => 'El Dabaa Road (Before El Mohra)', 'facts' => ['Soil' => 'Clay soil', 'Reclamation' => '100%', 'Irrigation' => 'Surface irrigation, water available', 'Access' => 'Close to main routes', 'Minimum lease' => '10 feddans', 'Availability' => 'Available now']]
  ],
  'gallery' => [],
  'detailsIntro' => 'The essential information that every investor asks about: soil, water, access, road proximity and the terms of use.',
  'details' => [
    ['Land Specifications', 'Wadi El Natrun is sandy soil at 80% reclamation. El Dabaa Road is clay soil, fully reclaimed. Both are prepared for immediate agricultural use.'],
    ['Location & Accessibility', 'Wadi El Natrun sits two kilometres from the Wadi El Natrun to El Alamein road. El Dabaa Road is directly served by the El Dabaa road network.'],
    ['Lease Divisions', 'Leasing starts from a minimum of 10 feddans, with a maximum of 50% of the total site area allocated to any single party.'],
    ['Legal Documentation', 'All legal permits and documents for both sites are complete and available for review.']
  ],
  'facilitiesTitle' => 'Essential facilities that support day-to-day agricultural operations.',
  'facilitiesIntro' => 'The facilities are in place, not scheduled. Both sites are served with water, electricity and road access so that operations can begin without waiting on infrastructure.',
  'facilities' => [
    ['Water & Irrigation', 'Wells at Wadi El Natrun and surface irrigation at El Dabaa Road, with water available at both sites.', 'assets/images/agri-facility-1.png'],
    ['Road Access', 'Direct access to the main road network serving each site.', 'assets/images/agri-facility-2.png'],
    ['Electricity & Utilities', 'Electricity and drinking water are connected across both projects.', 'assets/images/agri-facility-3.png'],
    ['Legal & Service Support', 'Complete documentation and a team available to answer operational questions during the lease.', 'assets/images/agri-facility-4.png']
  ],
  'faqs' => [
    ['What is the minimum area I can lease?', 'Leasing starts from a minimum of 10 feddans. A single party may lease up to 50% of the total site area.'],
    ['Is water available on site?', 'Yes. Wadi El Natrun is served by available wells, and El Dabaa Road uses surface irrigation with water available.'],
    ['What is the state of reclamation?', 'Wadi El Natrun is 80% reclaimed. El Dabaa Road is fully reclaimed at 100%.'],
    ['Which utilities are connected?', 'Both sites carry full utilities, including drinking water and electricity.'],
    ['What are the lease duration and terms?', 'Duration and terms are agreed according to the area and the intended activity. Contact our team to discuss the details.'],
    ['Is the land available now?', 'Yes, both sites are available.']
  ],
  'cta' => 'assets/images/agri-cta.png',
  'ctaCopy' => 'Send us your area and the activity you have in mind, and we will get back to you with the available details.'
];
require __DIR__ . '/includes/project-layout.php';
