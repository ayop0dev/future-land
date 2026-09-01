<?php
$isAgricultural = ($projectKey ?? $pageClass ?? '') === 'agricultural';
$shared = $content['shared'];
require __DIR__ . '/header.php';
?>

<section class="hero hero--project project-page__hero">
  <img class="hero__media" src="<?= e(fl_asset($project['hero'])) ?>" alt="<?= e($project['title']) ?>">
  <div class="hero__overlay"></div>
  <div class="hero__content page-shell">
    <h1 class="display" data-hero-reveal><?php if (!empty($project['titleLines'])): ?><?php foreach ($project['titleLines'] as $line): ?><span><?= e($line) ?></span> <?php endforeach; ?><?php else: ?><?= e($project['title']) ?><?php endif; ?></h1>
    <p class="lead" data-hero-reveal><?= e($project['location']) ?></p>
    <?php if (!$isAgricultural): ?><p class="project-hero__summary" data-hero-reveal><?= e($project['summary']) ?></p><?php endif; ?>
    <div class="hero__actions" data-hero-reveal>
      <a class="button" href="<?= e(fl_page_url('contact')) ?>?interest=<?= urlencode($project['interestKey'] ?? $project['interest']) ?>"><span><?= e($shared['buttons']['project']) ?></span><img class="project-hero__arrow project-hero__arrow--desktop" src="<?= e(fl_asset('assets/images/project-arrow-down-right.svg')) ?>" alt=""><img class="project-hero__arrow project-hero__arrow--mobile" src="<?= e(fl_asset('assets/images/project-arrow-up-right.svg')) ?>" alt=""></a>
    </div>
  </div>
</section>

<section class="project-introduction bg-white">
  <div class="page-shell project-intro">
    <div data-reveal><p class="eyebrow text-brand"><?= e($project['opportunityEyebrow'] ?? ($lang === 'ar' ? 'الفرصة' : 'The opportunity')) ?></p><h2 class="section-title"><?= e($project['opportunityTitle']) ?></h2></div>
    <div class="project-intro__copy" data-reveal>
      <h2><?= e($project['aboutHeading']) ?></h2>
      <p class="lead project-about-copy"><span class="project-about-copy__desktop"><?= e($project['about']) ?></span><span class="project-about-copy__mobile"><?= e($project['aboutMobile'] ?? $project['about']) ?></span></p>
      <?php if (!empty($project['suitableCrops'])): ?><p class="lead project-crops"><strong><?= e($project['suitableCropsLabel'] ?? 'Suitable Crops:') ?></strong> <?= e($project['suitableCrops']) ?></p><?php endif; ?>
      <div class="project-facts"><?php foreach ($project['facts'] as $fact): ?><div class="project-fact"><span><?= e($fact[0]) ?></span><strong><?= e($fact[1]) ?></strong><?php if (!empty($fact[2])): ?><a href="<?= e($fact[2]) ?>" target="_blank" rel="noopener"><?= e($lang === 'ar' ? 'عرض الموقع ↗' : 'View location ↗') ?></a><?php endif; ?></div><?php endforeach; ?></div>
    </div>
  </div>
</section>

<?php if ($isAgricultural): ?>
<section class="project-sites muted-section">
  <div class="page-shell">
    <p class="eyebrow text-brand"><?= e($project['sitesEyebrow']) ?></p>
    <h2 class="project-sites__title"><?= e($project['sitesTitle']) ?></h2>
    <div class="site-comparison"><?php foreach ($project['sites'] as $site): ?><article class="site-card" data-reveal><span><?= e($site['number']) ?></span><h3><?= e($site['name']) ?></h3><dl><?php foreach ($site['facts'] as $label => $value): ?><div><dt><?= e($label) ?></dt><dd><?= e($value) ?></dd></div><?php endforeach; ?></dl></article><?php endforeach; ?></div>
  </div>
</section>
<?php endif; ?>

<section class="project-intro-gallery bg-white" aria-label="Project views">
  <div class="page-shell project-intro-gallery__grid" data-reveal>
    <img src="<?= e(fl_asset($project['secondary'][0])) ?>" alt="<?= e($project['secondaryAlt'][0]) ?>">
    <img src="<?= e(fl_asset($project['secondary'][1])) ?>" alt="<?= e($project['secondaryAlt'][1]) ?>">
  </div>
</section>

<section class="project-details bg-white">
  <div class="page-shell project-details__grid">
    <div data-reveal><p class="eyebrow text-brand"><?= e($project['detailsEyebrow']) ?></p><h2 class="section-title"><?= e($project['detailsTitle']) ?></h2><p class="lead"><?= e($project['detailsIntro']) ?></p></div>
    <div class="detail-list"><?php foreach ($project['details'] as $index => $detail): ?><article class="detail-item" data-reveal><span>0<?= $index + 1 ?></span><div><h3><?= e($detail[0]) ?></h3><p><?= e($detail[1]) ?></p></div></article><?php endforeach; ?></div>
  </div>
</section>

<section class="project-gallery muted-section" aria-label="Project gallery">
  <div class="page-shell project-gallery__grid" data-reveal>
    <?php $galleryImages = !empty($project['gallery']) ? $project['gallery'] : ($isAgricultural ? [$project['facilities'][0][2], $project['facilities'][1][2], $project['facilities'][2][2]] : []); ?>
    <?php foreach ($galleryImages as $index => $image): ?><img src="<?= e(fl_asset($image)) ?>" alt="<?= e($project['title']) ?> view <?= $index + 1 ?>"><?php endforeach; ?>
  </div>
</section>

<section class="project-facilities bg-white">
  <div class="page-shell project-facilities-layout">
    <img class="project-facilities-image" src="<?= e(fl_asset($isAgricultural ? 'assets/images/agri-facility-3.png' : 'assets/images/fuel-facility-1.png')) ?>" alt="<?= e($lang === 'ar' ? 'مرافق المشروع' : 'Project facilities') ?>">
    <div class="agricultural-facilities-content">
      <div class="section-heading" data-reveal><div><p class="eyebrow text-brand"><?= e($project['facilitiesEyebrow']) ?></p><h2 class="section-title"><?= e($project['facilitiesTitle']) ?></h2></div><p class="lead"><?= e($project['facilitiesIntro']) ?></p></div>
      <div class="facility-grid"><?php $facilityIcons = $isAgricultural ? ['agri-icon-water.svg','agri-icon-road.svg','agri-icon-electric.svg','agri-icon-service.svg'] : ['fuel-icon-water-electric.svg','fuel-icon-drainage.svg','fuel-icon-parking.svg','fuel-icon-operation.svg']; foreach ($project['facilities'] as $index => $facility): ?><article class="facility" data-reveal><div class="facility__head"><img src="<?= e(fl_asset('assets/images/' . $facilityIcons[$index])) ?>" alt=""><h3><?= e($facility[0]) ?></h3></div><p><?= e($facility[1]) ?></p></article><?php endforeach; ?></div>
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
    <?php foreach ($facilityGallery as $facilityImage): ?><img src="<?= e(fl_asset($facilityImage[2])) ?>" alt="<?= e($facilityImage[0]) ?>"><?php endforeach; ?>
  </div>
</section>

<section class="project-faq bg-white">
  <div class="page-shell project-faq__grid">
    <div data-reveal><p class="eyebrow text-brand"><?= e($project['faqEyebrow']) ?></p><h2 class="section-title"><?= e($project['faqTitle']) ?></h2></div>
    <div class="faq-list" data-reveal><?php foreach ($project['faqs'] as $faq): ?><article class="faq-item"><button type="button" data-accordion-button aria-expanded="false"><span><?= e($faq[0]) ?></span><img src="<?= e(fl_asset('assets/images/faq-plus.svg')) ?>" alt=""></button><div class="faq-answer"><div><p><?= e($faq[1]) ?></p></div></div></article><?php endforeach; ?></div>
  </div>
</section>

<section class="project-cta">
  <img src="<?= e(fl_asset($project['cta'])) ?>" alt="">
  <div class="page-shell project-cta__copy" data-reveal><p class="eyebrow"><?= e($project['ctaEyebrow']) ?></p><h2 class="section-title"><?= e($project['ctaTitle']) ?></h2><p class="lead"><?= e($project['ctaCopy']) ?></p><a class="button" href="<?= e(fl_page_url('contact')) ?>?interest=<?= urlencode($project['interestKey'] ?? $project['interest']) ?>"><span><?= e($shared['buttons']['project']) ?></span><img src="<?= e(fl_asset('assets/images/project-arrow-up-right.svg')) ?>" alt=""></a></div>
</section>

<?php require __DIR__ . '/footer.php'; ?>
