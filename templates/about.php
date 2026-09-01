<?php $about = $content['about']; $shared = $content['shared']; ?>

<section class="hero about-hero">
  <img class="hero__media" src="<?= e(fl_asset('assets/images/about-hero.png')) ?>" alt="<?= e($lang === 'ar' ? 'تطوير زراعي لفيوتشر لاند' : 'Future Land agricultural development') ?>">
  <div class="hero__overlay"></div>
  <div class="hero__content page-shell">
    <p class="eyebrow mb-6" data-hero-reveal><?= e($about['hero'][0]) ?></p>
    <h1 class="display" data-hero-reveal><?php foreach ($about['hero'][1] as $line): ?><span><?= e($line) ?></span><?php endforeach; ?></h1>
    <p class="lead" data-hero-reveal><?= e($about['hero'][2]) ?></p>
  </div>
  <p class="scroll-cue"><span><?= e($shared['scroll']) ?></span><img src="<?= e(fl_asset('assets/images/down-arrow-sm.svg')) ?>" alt=""></p>
</section>

<section class="about-who bg-white">
  <div class="page-shell about-who__grid">
    <img class="about-who__image" src="<?= e(fl_asset('assets/images/about-who-we-are.png')) ?>" alt="<?= e($lang === 'ar' ? 'فريق وتطوير فيوتشر لاند' : 'Future Land team and development') ?>" data-reveal>
    <div class="about-who__copy" data-reveal>
      <div class="about-who__heading">
        <p class="eyebrow text-brand"><?= e($about['who'][0]) ?></p>
        <h2 class="section-title"><?= e($about['who'][1]) ?></h2>
      </div>
      <p class="lead"><?= e($about['who'][2]) ?></p>
      <a class="button button--ghost-brand" href="#opportunities"><span><?= e($shared['buttons']['explore']) ?></span><img src="<?= e(fl_asset('assets/images/arrow-up-right-green.svg')) ?>" alt=""></a>
    </div>
  </div>
</section>

<section class="about-vision dark-section">
  <div class="page-shell">
    <div class="section-heading" data-reveal><div><p class="eyebrow text-brand"><?= e($about['vision'][0]) ?></p><h2 class="section-title mt-6"><?= e($about['vision'][1]) ?></h2></div><p class="lead"><?= e($about['vision'][2]) ?></p></div>
    <div class="vision-grid">
      <?php foreach ($about['vision'][3] as $card): ?>
        <article class="vision-card" data-reveal><img class="image-cover" src="<?= e(fl_asset('assets/images/' . $card[3])) ?>" alt="<?= e($card[4]) ?>"><div class="vision-card__copy"><div class="vision-card__label"><span><?= e($card[0]) ?></span><h3><?= e($card[1]) ?></h3></div><p><?= e($card[2]) ?></p></div></article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="about-values bg-white">
  <div class="page-shell">
    <div class="section-heading" data-reveal><div><p class="eyebrow text-brand"><?= e($about['values'][0]) ?></p><h2 class="section-title mt-6"><?= e($about['values'][1]) ?></h2></div><p class="lead"><?= e($about['values'][2]) ?></p></div>
    <div class="value-list" data-reveal>
      <?php foreach ($about['values'][3] as $card): ?>
        <article class="value-card"><img src="<?= e(fl_asset('assets/images/' . $card[3])) ?>" alt="<?= e($card[4]) ?>"><div class="value-card__copy"><span><?= e($card[0]) ?></span><h3><?= e($card[1]) ?></h3><p class="lead"><?= e($card[2]) ?></p></div></article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="about-principles muted-section">
  <div class="page-shell">
    <div class="section-heading" data-reveal><div><p class="eyebrow text-brand"><?= e($about['principles'][0]) ?></p><h2 class="section-title mt-6"><?= e($about['principles'][1]) ?></h2></div><p class="lead"><?= e($about['principles'][2]) ?></p></div>
    <div class="principles">
      <?php foreach ($about['principles'][3] as $card): ?>
        <article class="principle" data-reveal><img src="<?= e(fl_asset('assets/images/' . $card[3])) ?>" alt="<?= e($card[4]) ?>"><div><span><?= e($card[0]) ?></span><h3><?= e($card[1]) ?></h3><p><?= e($card[2]) ?></p></div></article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="growth-banner" id="opportunities">
  <img class="absolute inset-0 h-full w-full object-cover" src="<?= e(fl_asset('assets/images/about-growth.png')) ?>" alt="<?= e($lang === 'ar' ? 'اتجاه نمو فيوتشر لاند' : 'Future Land growth direction') ?>">
  <div class="page-shell growth-banner__copy" data-reveal>
    <p class="eyebrow"><?= e($about['growth'][0]) ?></p>
    <h2 class="section-title"><?= e($about['growth'][1]) ?></h2>
    <p class="lead"><?= e($about['growth'][2]) ?></p>
    <div class="growth-banner__actions">
      <a class="button" href="<?= e(fl_page_url('home')) ?>#projects"><span><?= e($shared['buttons']['viewProjects']) ?></span><img src="<?= e(fl_asset('assets/images/project-arrow-up-right.svg')) ?>" alt=""></a>
      <a class="button" href="<?= e(fl_page_url('contact')) ?>"><span><?= e($shared['buttons']['contact']) ?></span><img src="<?= e(fl_asset('assets/images/project-arrow-up-right.svg')) ?>" alt=""></a>
    </div>
  </div>
</section>
