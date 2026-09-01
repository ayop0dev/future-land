<?php $home = $content['home']; $shared = $content['shared']; $forms = $shared['forms']; ?>

<section class="hero">
  <img class="hero__media" data-parallax src="<?= e(fl_asset('assets/images/home-hero.png')) ?>" alt="<?= e($lang === 'ar' ? 'تطوير فيوتشر لاند وقت الغروب' : 'Future Land development at sunset') ?>">
  <div class="hero__overlay"></div>
  <div class="hero__content page-shell">
    <p class="eyebrow mb-6" data-hero-reveal><?= e($home['hero'][0]) ?></p>
    <h1 class="display" data-hero-reveal><?php foreach ($home['hero'][1] as $index => $line): ?><span><?= e($line) ?><?= $index === count($home['hero'][1]) - 1 ? '<span class="hero-title-period">.</span>' : '' ?></span> <?php endforeach; ?></h1>
    <p class="lead" data-hero-reveal><?= e($home['hero'][2]) ?></p>
    <div class="hero__actions" data-hero-reveal>
      <a class="button" href="#projects"><?= e($shared['buttons']['explore']) ?> <img src="<?= e(fl_asset('assets/images/arrow-up-right.svg')) ?>" alt=""></a>
      <a class="button button--outline" href="<?= e(fl_page_url('contact')) ?>"><?= e($shared['buttons']['talk']) ?> <img src="<?= e(fl_asset('assets/images/arrow-up-right.svg')) ?>" alt=""></a>
    </div>
  </div>
  <p class="scroll-cue"><span><?= e($shared['scroll']) ?></span><img src="<?= e(fl_asset('assets/images/down-arrow-sm.svg')) ?>" alt=""></p>
</section>

<section class="home-about bg-white">
  <div class="page-shell home-about__layout" data-reveal>
    <h2 class="home-about__title"><span><?= e($home['about'][0]) ?></span><span><?= e($home['about'][1]) ?></span></h2>
    <p class="home-about__intro lead"><?= e($home['about'][2]) ?></p>
    <img class="home-about__agriculture" src="<?= e(fl_asset('assets/images/home-agriculture.png')) ?>" alt="<?= e($lang === 'ar' ? 'أرض زراعية مستصلحة' : 'Reclaimed agricultural land') ?>">
    <div class="home-about__perspective">
      <p class="home-about__perspective-label"><?= e($home['about'][3]) ?></p>
      <h3><?= e($home['about'][4]) ?></h3>
      <p class="lead"><?= e($home['about'][5]) ?></p>
    </div>
    <img class="home-about__commercial" src="<?= e(fl_asset('assets/images/home-commercial.png')) ?>" alt="<?= e($lang === 'ar' ? 'تطوير تجاري' : 'Commercial development') ?>">
    <p class="home-about__development-label"><?= e($home['about'][6]) ?></p>
    <a class="home-about__story-link" href="<?= e(fl_page_url('about')) ?>">
      <span><?= e($shared['buttons']['story']) ?></span>
      <img class="home-about__story-arrow home-about__story-arrow--desktop" src="<?= e(fl_asset('assets/images/arrow-down-right.svg')) ?>" alt="">
      <img class="home-about__story-arrow home-about__story-arrow--mobile" src="<?= e(fl_asset('assets/images/arrow-up-right-green.svg')) ?>" alt="">
    </a>
  </div>
</section>

<section class="home-projects dark-section" id="projects">
  <div class="page-shell">
    <div class="section-heading" data-reveal>
      <div><p class="eyebrow"><?= e($home['projects'][0]) ?></p><h2 class="section-title mt-6"><?= e($home['projects'][1]) ?></h2></div>
      <p class="lead !text-white/70"><?= e($home['projects'][2]) ?></p>
    </div>
    <div class="project-cards" data-reveal>
      <a class="project-card" href="<?= e(fl_page_url('agricultural')) ?>">
        <div class="project-card__image"><img class="image-cover" src="<?= e(fl_asset('assets/images/home-agriculture.png')) ?>" alt="<?= e($lang === 'ar' ? 'مشروع زراعي' : 'Agricultural project') ?>"></div>
        <div class="project-card__meta">
          <p class="eyebrow"><?= e($home['projects'][3]) ?></p>
          <div class="project-card__title-row">
            <h3><span class="project-card__title--desktop"><?= e($home['projects'][4]) ?></span><span class="project-card__title--mobile"><?= e($home['projects'][5]) ?></span></h3>
            <img class="project-card__arrow project-card__arrow--desktop" src="<?= e(fl_asset('assets/images/project-arrow-down-right.svg')) ?>" alt="">
            <img class="project-card__arrow project-card__arrow--mobile" src="<?= e(fl_asset('assets/images/project-arrow-up-right.svg')) ?>" alt="">
          </div>
        </div>
      </a>
      <a class="project-card" href="<?= e(fl_page_url('fuel')) ?>">
        <div class="project-card__image"><img class="image-cover" src="<?= e(fl_asset('assets/images/home-commercial.png')) ?>" alt="<?= e($lang === 'ar' ? 'مشروع محطة الوقود التجاري' : 'Wataneya fuel station commercial project') ?>"></div>
        <div class="project-card__meta">
          <p class="eyebrow"><?= e($home['projects'][6]) ?></p>
          <div class="project-card__title-row">
            <h3><?= e($home['projects'][7]) ?></h3>
            <img class="project-card__arrow project-card__arrow--desktop" src="<?= e(fl_asset('assets/images/project-arrow-down-right.svg')) ?>" alt="">
            <img class="project-card__arrow project-card__arrow--mobile" src="<?= e(fl_asset('assets/images/project-arrow-up-right.svg')) ?>" alt="">
          </div>
        </div>
      </a>
      <a class="project-card" href="<?= e(fl_page_url('contact')) ?>">
        <div class="project-card__image project-card__image--future">
          <img class="image-cover" src="<?= e(fl_asset('assets/images/home-project.png')) ?>" alt="<?= e($lang === 'ar' ? 'مخطط فرص مستقبلية' : 'Future opportunities masterplan') ?>">
          <span class="project-card__overlay" aria-hidden="true"></span>
          <span class="project-card__future-title"><?= nl2br(e($home['projects'][9])) ?></span>
        </div>
        <div class="project-card__meta">
          <p class="eyebrow"><?= e($home['projects'][8]) ?></p>
          <div class="project-card__title-row">
            <h3><?= e($home['projects'][10]) ?></h3>
            <img class="project-card__arrow project-card__arrow--desktop" src="<?= e(fl_asset('assets/images/project-arrow-down-right.svg')) ?>" alt="">
            <img class="project-card__arrow project-card__arrow--mobile" src="<?= e(fl_asset('assets/images/project-arrow-up-right.svg')) ?>" alt="">
          </div>
        </div>
      </a>
    </div>
  </div>
</section>

<section class="home-features bg-white">
  <div class="page-shell">
    <div class="section-heading" data-reveal>
      <div><p class="eyebrow text-brand"><?= e($home['features'][0]) ?></p><h2 class="section-title mt-6"><?= e($home['features'][1]) ?></h2></div>
      <p class="lead"><?= e($home['features'][2]) ?></p>
    </div>
    <div class="feature-grid" data-reveal>
      <?php foreach ($home['features'][3] as $index => $feature): ?>
        <article class="feature-card<?= $index === 2 ? ' feature-card--third' : '' ?><?= $index === 3 ? ' feature-card--fourth' : '' ?>">
          <img src="<?= e(fl_asset('assets/images/' . $feature[4])) ?>" alt="<?= e($feature[3]) ?>">
          <div class="feature-card__content"><div class="feature-card__heading"><p class="eyebrow"><?= e($feature[0]) ?></p><h3><?= e($feature[1]) ?></h3></div><p><?= e($feature[2]) ?></p></div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="home-masterplan muted-section">
  <div class="page-shell masterplan">
    <img class="masterplan__image image-cover" src="<?= e(fl_asset('assets/images/home-masterplan.png')) ?>" alt="<?= e($lang === 'ar' ? 'المخطط العام الزراعي والتجاري لفيوتشر لاند' : 'Future Land combined agricultural and commercial masterplan') ?>" data-reveal>
    <div class="masterplan__copy" data-reveal>
      <div class="masterplan__intro">
        <p class="eyebrow text-brand"><?= e($home['masterplan'][0]) ?></p>
        <h2 class="section-title"><?= e($home['masterplan'][1]) ?></h2>
        <p class="lead"><?= e($home['masterplan'][2]) ?></p>
      </div>
      <div class="masterplan__details">
        <?php foreach ($home['masterplan'][3] as $block): ?><div><h3><?= e($block[0]) ?></h3><p><?= e($block[1]) ?></p></div><?php endforeach; ?>
      </div>
    </div>
    <div class="masterplan__divider" aria-hidden="true"></div>
    <div class="stats" data-reveal>
      <?php foreach ($home['masterplan'][4] as $index => $stat): ?>
        <?= $index > 0 ? '<i aria-hidden="true"></i>' : '' ?><div class="stat"><strong><?= e($stat[0]) ?></strong><span class="stat__primary"><?= e($stat[1]) ?></span><span><?= e($stat[2]) ?></span></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="home-steps green-section">
  <div class="page-shell steps">
    <div data-reveal><p class="eyebrow"><?= e($home['steps'][0]) ?></p><h2 class="section-title mt-6"><?= e($home['steps'][1]) ?></h2><p class="lead mt-8 !text-white/70"><?= e($home['steps'][2]) ?></p></div>
    <div class="steps-list" data-reveal>
      <?php foreach ($home['steps'][3] as $step): ?><article class="step"><span class="step__number"><?= e($step[0]) ?></span><h3><?= e($step[1]) ?></h3><p><?= e($step[2]) ?></p></article><?php endforeach; ?>
    </div>
  </div>
</section>

<section class="home-enquiry enquiry">
  <img class="enquiry__background" src="<?= e(fl_asset('assets/images/home-enquiry-bg.png')) ?>" alt="">
  <div class="page-shell enquiry__inner">
    <div class="home-enquiry__intro" data-reveal><p class="eyebrow text-brand"><?= e($home['enquiry'][0]) ?></p><h2 class="section-title"><?= e($home['enquiry'][1]) ?></h2><p class="lead"><?= e($home['enquiry'][2]) ?></p></div>
    <form class="form-grid" data-enquiry-form data-reveal>
      <div class="field"><label for="quick-name"><?= e($forms['name'][0]) ?></label><input id="quick-name" name="name" autocomplete="name" placeholder="<?= e($forms['name'][1]) ?>" required></div>
      <div class="field"><label for="quick-phone"><?= e($forms['phone'][0]) ?></label><input id="quick-phone" name="phone" type="tel" autocomplete="tel" placeholder="<?= e($forms['phone'][1]) ?>" required></div>
      <div class="field"><label for="quick-email"><?= e($forms['email'][0]) ?></label><input id="quick-email" name="email" type="email" autocomplete="email" placeholder="<?= e($forms['email'][1]) ?>"></div>
      <div class="field"><label for="quick-interest"><?= e($forms['interest'][0]) ?></label><select id="quick-interest" name="interest" required><option value=""><?= e($forms['interest'][1]) ?></option><?php foreach ($forms['quickOptions'] as $option): ?><option><?= e($option) ?></option><?php endforeach; ?></select></div>
      <div class="field field--wide"><label for="quick-message"><?= e($forms['message'][0]) ?></label><textarea id="quick-message" name="message" placeholder="<?= e($forms['message'][1]) ?>"></textarea></div>
      <div class="form-actions"><small><?= e($home['enquiry'][3]) ?></small><button class="button" type="submit"><span><?= e($shared['buttons']['submit']) ?></span><img src="<?= e(fl_asset('assets/images/project-arrow-up-right.svg')) ?>" alt=""></button></div>
      <p class="form-message" data-form-message aria-live="polite"></p>
    </form>
  </div>
</section>
