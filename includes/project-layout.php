<?php
$isAgricultural = $project['interest'] === 'Agricultural Projects';
require __DIR__ . '/header.php';
?>

<section class="hero hero--project project-page__hero">
  <img class="hero__media" src="<?= htmlspecialchars($project['hero'], ENT_QUOTES) ?>" alt="<?= htmlspecialchars($project['title'], ENT_QUOTES) ?>">
  <div class="hero__overlay"></div>
  <div class="hero__content page-shell">
    <h1 class="display" data-hero-reveal><?php if (!empty($project['titleLines'])): ?><?php foreach ($project['titleLines'] as $line): ?><span><?= htmlspecialchars($line) ?></span> <?php endforeach; ?><?php else: ?><?= htmlspecialchars($project['title']) ?><?php endif; ?></h1>
    <p class="lead" data-hero-reveal><?= htmlspecialchars($project['location']) ?></p>
    <?php if (!$isAgricultural): ?><p class="project-hero__summary" data-hero-reveal><?= htmlspecialchars($project['summary']) ?></p><?php endif; ?>
    <div class="hero__actions" data-hero-reveal>
      <a class="button" href="contact.php?interest=<?= urlencode($project['interest']) ?>"><span>Enquire about this project</span><img class="project-hero__arrow project-hero__arrow--desktop" src="assets/images/project-arrow-down-right.svg" alt=""><img class="project-hero__arrow project-hero__arrow--mobile" src="assets/images/project-arrow-up-right.svg" alt=""></a>
    </div>
  </div>
</section>

<section class="project-introduction bg-white">
  <div class="page-shell project-intro">
    <div data-reveal><p class="eyebrow text-brand">The opportunity</p><h2 class="section-title"><?= htmlspecialchars($project['opportunityTitle']) ?></h2></div>
    <div class="project-intro__copy" data-reveal>
      <h2>About the Project<?= $isAgricultural ? 's' : '' ?></h2>
      <p class="lead project-about-copy"><span class="project-about-copy__desktop"><?= htmlspecialchars($project['about']) ?></span><span class="project-about-copy__mobile"><?= htmlspecialchars($project['aboutMobile'] ?? $project['about']) ?></span></p>
      <?php if (!empty($project['suitableCrops'])): ?><p class="lead project-crops"><strong>Suitable Crops:</strong> <?= htmlspecialchars($project['suitableCrops']) ?></p><?php endif; ?>
      <div class="project-facts"><?php foreach ($project['facts'] as $fact): ?><div class="project-fact"><span><?= htmlspecialchars($fact[0]) ?></span><strong><?= htmlspecialchars($fact[1]) ?></strong><?php if (!empty($fact[2])): ?><a href="<?= htmlspecialchars($fact[2], ENT_QUOTES) ?>" target="_blank" rel="noopener">View location ↗</a><?php endif; ?></div><?php endforeach; ?></div>
    </div>
  </div>
</section>

<?php if ($isAgricultural): ?>
<section class="project-sites muted-section">
  <div class="page-shell">
    <p class="eyebrow text-brand">Two distinct opportunities</p>
    <h2 class="project-sites__title">Two agricultural projects in two distinct locations.</h2>
    <div class="site-comparison"><?php foreach ($project['sites'] as $site): ?><article class="site-card" data-reveal><span><?= htmlspecialchars($site['number']) ?></span><h3><?= htmlspecialchars($site['name']) ?></h3><dl><?php foreach ($site['facts'] as $label => $value): ?><div><dt><?= htmlspecialchars($label) ?></dt><dd><?= htmlspecialchars($value) ?></dd></div><?php endforeach; ?></dl></article><?php endforeach; ?></div>
  </div>
</section>
<?php endif; ?>

<section class="project-intro-gallery bg-white" aria-label="Project views">
  <div class="page-shell project-intro-gallery__grid" data-reveal>
    <img src="<?= htmlspecialchars($project['secondary'][0], ENT_QUOTES) ?>" alt="<?= htmlspecialchars($project['secondaryAlt'][0]) ?>">
    <img src="<?= htmlspecialchars($project['secondary'][1], ENT_QUOTES) ?>" alt="<?= htmlspecialchars($project['secondaryAlt'][1]) ?>">
  </div>
</section>

<section class="project-details bg-white">
  <div class="page-shell project-details__grid">
    <div data-reveal><p class="eyebrow text-brand">Explore <?= $isAgricultural ? 'the land' : 'the units' ?></p><h2 class="section-title">Everything <?= $isAgricultural ? 'an investor' : 'a tenant' ?> needs to understand the opportunity.</h2><p class="lead"><?= htmlspecialchars($project['detailsIntro']) ?></p></div>
    <div class="detail-list"><?php foreach ($project['details'] as $index => $detail): ?><article class="detail-item" data-reveal><span>0<?= $index + 1 ?></span><div><h3><?= htmlspecialchars($detail[0]) ?></h3><p><?= htmlspecialchars($detail[1]) ?></p></div></article><?php endforeach; ?></div>
  </div>
</section>

<section class="project-gallery muted-section" aria-label="Project gallery">
  <div class="page-shell project-gallery__grid" data-reveal>
    <?php $galleryImages = !empty($project['gallery']) ? $project['gallery'] : ($isAgricultural ? [$project['facilities'][0][2], $project['facilities'][1][2], $project['facilities'][2][2]] : []); ?>
    <?php foreach ($galleryImages as $index => $image): ?><img src="<?= htmlspecialchars($image, ENT_QUOTES) ?>" alt="<?= htmlspecialchars($project['title']) ?> view <?= $index + 1 ?>"><?php endforeach; ?>
  </div>
</section>

<section class="project-facilities bg-white">
  <div class="page-shell project-facilities-layout">
    <img class="project-facilities-image" src="<?= $isAgricultural ? 'assets/images/agri-facility-3.png' : 'assets/images/fuel-facility-1.png' ?>" alt="Project facilities">
    <div class="agricultural-facilities-content">
      <div class="section-heading" data-reveal><div><p class="eyebrow text-brand">Facilities &amp; infrastructure</p><h2 class="section-title"><?= htmlspecialchars($project['facilitiesTitle']) ?></h2></div><p class="lead"><?= htmlspecialchars($project['facilitiesIntro']) ?></p></div>
      <div class="facility-grid"><?php $facilityIcons = $isAgricultural ? ['agri-icon-water.svg','agri-icon-road.svg','agri-icon-electric.svg','agri-icon-service.svg'] : ['fuel-icon-water-electric.svg','fuel-icon-drainage.svg','fuel-icon-parking.svg','fuel-icon-operation.svg']; foreach ($project['facilities'] as $index => $facility): ?><article class="facility" data-reveal><div class="facility__head"><img src="assets/images/<?= $facilityIcons[$index] ?>" alt=""><h3><?= htmlspecialchars($facility[0]) ?></h3></div><p><?= htmlspecialchars($facility[1]) ?></p></article><?php endforeach; ?></div>
    </div>
  </div>
</section>

<section class="project-facility-gallery bg-white" aria-label="Facilities gallery">
  <div class="page-shell project-facility-gallery__grid" data-reveal>
    <?php
      $facilityGallery = [];
      foreach (($project['facilityGalleryImages'] ?? []) as $image) {
        $facilityGallery[] = [$project['title'], '', $image];
      }
      foreach (($project['facilityGallery'] ?? []) as $facilityIndex) {
        if (isset($project['facilities'][$facilityIndex][2])) {
          $facilityGallery[] = $project['facilities'][$facilityIndex];
        }
      }
      if (!$facilityGallery) {
        $facilityGallery = array_values(array_filter($project['facilities'] ?? [], fn($facility) => !empty($facility[2])));
      }
      $facilityGallery = array_slice($facilityGallery, 0, 2);
    ?>
    <?php foreach ($facilityGallery as $facilityImage): ?><img src="<?= htmlspecialchars($facilityImage[2], ENT_QUOTES) ?>" alt="<?= htmlspecialchars($facilityImage[0]) ?>"><?php endforeach; ?>
  </div>
</section>

<section class="project-faq bg-white">
  <div class="page-shell project-faq__grid">
    <div data-reveal><p class="eyebrow text-brand">Frequently asked questions</p><h2 class="section-title">Questions investors commonly ask.</h2></div>
    <div class="faq-list" data-reveal><?php foreach ($project['faqs'] as $faq): ?><article class="faq-item"><button type="button" data-accordion-button aria-expanded="false"><span><?= htmlspecialchars($faq[0]) ?></span><img src="assets/images/faq-plus.svg" alt=""></button><div class="faq-answer"><div><p><?= htmlspecialchars($faq[1]) ?></p></div></div></article><?php endforeach; ?></div>
  </div>
</section>

<section class="project-cta">
  <img src="<?= htmlspecialchars($project['cta'], ENT_QUOTES) ?>" alt="">
  <div class="page-shell project-cta__copy" data-reveal><p class="eyebrow">Start a conversation</p><h2 class="section-title">Discuss the opportunity with our team.</h2><p class="lead"><?= htmlspecialchars($project['ctaCopy']) ?></p><a class="button" href="contact.php?interest=<?= urlencode($project['interest']) ?>"><span>Enquire about this project</span><img src="assets/images/project-arrow-up-right.svg" alt=""></a></div>
</section>

<?php require __DIR__ . '/footer.php'; ?>
