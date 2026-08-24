<?php
$isAgricultural = $project['interest'] === 'Agricultural Projects';
require __DIR__ . '/header.php';
?>

<section class="hero hero--project project-page__hero">
  <img class="hero__media" data-parallax src="<?= htmlspecialchars($project['hero'], ENT_QUOTES) ?>" alt="<?= htmlspecialchars($project['title'], ENT_QUOTES) ?>">
  <div class="hero__overlay"></div>
  <div class="hero__content page-shell">
    <div class="project-hero__meta" data-hero-reveal><?= htmlspecialchars($project['eyebrow'] ?? $project['type']) ?></div>
    <h1 class="display" data-hero-reveal><?= htmlspecialchars($project['title']) ?></h1>
    <p class="lead" data-hero-reveal><?= htmlspecialchars($project['summary']) ?></p>
    <div class="hero__actions" data-hero-reveal>
      <a class="button" href="contact.php?interest=<?= urlencode($project['interest']) ?>">Enquire about this project <span>↗</span></a>
      <?php if (!empty($project['locationLink'])): ?><a class="project-location" href="<?= htmlspecialchars($project['locationLink'], ENT_QUOTES) ?>" target="_blank" rel="noopener">View location <span>↗</span></a><?php endif; ?>
    </div>
  </div>
</section>

<section class="project-introduction bg-white">
  <div class="page-shell project-intro">
    <div data-reveal><p class="eyebrow text-brand">The opportunity</p><h2 class="section-title"><?= htmlspecialchars($project['opportunityTitle']) ?></h2></div>
    <div class="project-intro__copy" data-reveal>
      <h2>About the Project<?= $isAgricultural ? 's' : '' ?></h2>
      <p class="lead"><?= htmlspecialchars($project['about']) ?></p>
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
    <div class="site-comparison"><?php foreach ($project['sites'] as $site): ?><article class="site-card" data-reveal><span><?= htmlspecialchars($site['number']) ?></span><h3><?= htmlspecialchars($site['name']) ?></h3><dl><?php foreach ($site['facts'] as $label => $value): ?><div><dt><?= htmlspecialchars($label) ?></dt><dd><?= htmlspecialchars($value) ?></dd></div><?php endforeach; ?></dl><?php if (!empty($site['link'])): ?><a class="site-card__link" href="<?= htmlspecialchars($site['link'], ENT_QUOTES) ?>" target="_blank" rel="noopener">View location ↗</a><?php endif; ?></article><?php endforeach; ?></div>
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
    <?php $galleryImages = $isAgricultural ? [$project['facilities'][0][2], $project['facilities'][1][2], $project['facilities'][2][2]] : $project['gallery']; ?>
    <?php foreach ($galleryImages as $index => $image): ?><img src="<?= htmlspecialchars($image, ENT_QUOTES) ?>" alt="<?= htmlspecialchars($project['title']) ?> view <?= $index + 1 ?>"><?php endforeach; ?>
  </div>
</section>

<section class="project-facilities bg-white">
  <div class="page-shell">
    <div class="section-heading" data-reveal><div><p class="eyebrow text-brand">Facilities &amp; infrastructure</p><h2 class="section-title"><?= htmlspecialchars($project['facilitiesTitle']) ?></h2></div><p class="lead"><?= htmlspecialchars($project['facilitiesIntro']) ?></p></div>
    <div class="facility-grid"><?php foreach ($project['facilities'] as $index => $facility): ?><article class="facility" data-reveal><img src="<?= htmlspecialchars($facility[2], ENT_QUOTES) ?>" alt="<?= htmlspecialchars($facility[0]) ?>"><div><span>0<?= $index + 1 ?></span><h3><?= htmlspecialchars($facility[0]) ?></h3><p><?= htmlspecialchars($facility[1]) ?></p></div></article><?php endforeach; ?></div>
  </div>
</section>

<section class="project-facility-gallery bg-white" aria-label="Facilities gallery">
  <div class="page-shell project-facility-gallery__grid" data-reveal>
    <img src="<?= htmlspecialchars($project['facilities'][2][2], ENT_QUOTES) ?>" alt="<?= htmlspecialchars($project['facilities'][2][0]) ?>">
    <img src="<?= htmlspecialchars($project['facilities'][3][2], ENT_QUOTES) ?>" alt="<?= htmlspecialchars($project['facilities'][3][0]) ?>">
  </div>
</section>

<section class="project-faq bg-white">
  <div class="page-shell project-faq__grid">
    <div data-reveal><p class="eyebrow text-brand">Frequently asked questions</p><h2 class="section-title">Questions investors commonly ask.</h2></div>
    <div class="faq-list" data-reveal><?php foreach ($project['faqs'] as $faq): ?><article class="faq-item"><button type="button" data-accordion-button aria-expanded="false"><?= htmlspecialchars($faq[0]) ?></button><div class="faq-answer"><div><p><?= htmlspecialchars($faq[1]) ?></p></div></div></article><?php endforeach; ?></div>
  </div>
</section>

<section class="project-cta">
  <img src="<?= htmlspecialchars($project['cta'], ENT_QUOTES) ?>" alt="">
  <div class="page-shell project-cta__copy" data-reveal><p class="eyebrow">Start a conversation</p><h2 class="section-title">Discuss the opportunity with our team.</h2><p class="lead"><?= htmlspecialchars($project['ctaCopy']) ?></p><a class="button" href="contact.php?interest=<?= urlencode($project['interest']) ?>">Enquire about this project <span>↗</span></a></div>
</section>

<?php require __DIR__ . '/footer.php'; ?>
