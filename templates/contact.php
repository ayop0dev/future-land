<?php $contact = $content['contact']; $shared = $content['shared']; $forms = $shared['forms']; $selectedInterest = $_GET['interest'] ?? ''; ?>

<section class="contact-hero">
  <div class="page-shell contact-hero__inner">
    <div data-hero-reveal><p class="eyebrow"><?= e($contact['hero'][0]) ?></p><h1 class="display mt-6"><?= e($contact['hero'][1]) ?></h1></div>
    <p class="lead !m-0" data-hero-reveal><?= e($contact['hero'][2]) ?></p>
  </div>
</section>

<section class="contact-main bg-white">
  <div class="page-shell contact-layout">
    <aside class="contact-details" data-reveal>
      <div class="contact-details__heading"><p class="eyebrow text-brand"><?= e($contact['details'][0]) ?></p><h2><?= e($contact['details'][1]) ?></h2></div>
      <div class="contact-details__list">
        <p><img src="<?= e(fl_asset('assets/images/contact-location.svg')) ?>" alt=""><span><?= e($contact['details'][2]) ?></span></p>
        <p><img src="<?= e(fl_asset('assets/images/contact-hours.svg')) ?>" alt=""><span><?= e($contact['details'][3]) ?></span></p>
        <a href="https://wa.me/201140644448"><img src="<?= e(fl_asset('assets/images/contact-whatsapp.svg')) ?>" alt=""><span><?= e($contact['details'][4]) ?></span></a>
      </div>
    </aside>
    <div data-reveal>
      <form class="form-grid" data-enquiry-form>
        <div class="field"><label for="contact-name"><?= e($forms['name'][0]) ?></label><input id="contact-name" name="name" autocomplete="name" placeholder="<?= e($forms['name'][1]) ?>" required></div>
        <div class="field"><label for="contact-company"><?= e($forms['company'][0]) ?></label><input id="contact-company" name="company" autocomplete="organization" placeholder="<?= e($forms['company'][1]) ?>"></div>
        <div class="field"><label for="contact-phone"><?= e($forms['phone'][0]) ?></label><input id="contact-phone" name="phone" type="tel" autocomplete="tel" placeholder="<?= e($forms['phone'][1]) ?>" required></div>
        <div class="field"><label for="contact-email"><?= e($forms['email'][0]) ?></label><input id="contact-email" name="email" type="email" autocomplete="email" placeholder="<?= e($forms['email'][1]) ?>"></div>
        <div class="field"><label for="contact-interest"><?= e($forms['interest'][0]) ?></label><select id="contact-interest" name="interest" required><option value=""><?= e($forms['interest'][1]) ?></option><?php foreach ($forms['contactOptions'] as $key => $option): ?><option value="<?= e($key) ?>" <?= fl_contact_interest_selected($selectedInterest, $key === 'fuel' ? 'fuel' : ($key === 'agri-wadi' ? 'agricultural' : $key)) ? 'selected' : '' ?>><?= e($option) ?></option><?php endforeach; ?></select></div>
        <fieldset class="field m-0 border-0 p-0"><legend class="mb-3 text-[.92rem]"><?= e($forms['method']) ?></legend><div class="flex flex-wrap gap-5"><?php foreach ($forms['methods'] as $method): ?><label class="flex items-center gap-2"><input class="!w-auto" type="radio" name="contact_method" value="<?= e($method) ?>" required> <?= e($method) ?></label><?php endforeach; ?></div></fieldset>
        <div class="field field--wide"><label for="contact-message"><?= e($forms['message'][0]) ?></label><textarea id="contact-message" name="message" placeholder="<?= e($forms['message'][1]) ?>"></textarea></div>
        <div class="form-actions"><small><?= e($contact['note']) ?></small><button class="button" type="submit"><span><?= e($shared['buttons']['submit']) ?></span><img src="<?= e(fl_asset('assets/images/project-arrow-down-right.svg')) ?>" alt=""></button></div>
        <p class="form-message" data-form-message aria-live="polite"></p>
      </form>
    </div>
  </div>
</section>
