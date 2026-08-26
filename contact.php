<?php
$pageTitle = 'Contact Future Land';
$pageDescription = 'Enquire about Future Land agricultural and commercial opportunities.';
$activePage = 'contact';
$selectedInterest = $_GET['interest'] ?? '';
require __DIR__ . '/includes/header.php';
?>

<section class="contact-hero">
  <div class="page-shell contact-hero__inner">
    <div data-hero-reveal><p class="eyebrow">Contact us</p><h1 class="display mt-6">Let's discuss the right opportunity for you.</h1></div>
    <p class="lead !m-0 !text-white/75" data-hero-reveal>Whether you are looking at agricultural land or a commercial unit, share your details and our team will get back to you with the available information.</p>
  </div>
</section>

<section class="contact-main bg-white">
  <div class="page-shell contact-layout">
    <aside class="contact-details" data-reveal>
      <div class="contact-details__heading"><p class="eyebrow text-brand">Prefer to contact us directly?</p><h2>Reach our team through the channel that works best for you.</h2></div>
      <div class="contact-details__list">
        <p><img src="assets/images/contact-location.svg" alt=""><span>Shebin El-Kom, Talaat Harb St., Menoufia</span></p>
        <p><img src="assets/images/contact-hours.svg" alt=""><span>Sun to Thu, 9:00 AM to 5:00 PM</span></p>
        <a href="https://wa.me/201140644448"><img src="assets/images/contact-whatsapp.svg" alt=""><span>01140644448</span></a>
      </div>
    </aside>
    <div data-reveal>
      <form class="form-grid" data-enquiry-form>
        <div class="field"><label for="contact-name">Full Name *</label><input id="contact-name" name="name" autocomplete="name" placeholder="Your name" required></div>
        <div class="field"><label for="contact-company">Company or Activity (Optional)</label><input id="contact-company" name="company" autocomplete="organization" placeholder="Your business or activity"></div>
        <div class="field"><label for="contact-phone">Mobile Number *</label><input id="contact-phone" name="phone" type="tel" autocomplete="tel" placeholder="+20" required></div>
        <div class="field"><label for="contact-email">Email (Optional)</label><input id="contact-email" name="email" type="email" autocomplete="email" placeholder="you@email.com"></div>
        <div class="field"><label for="contact-interest">I'm Interested In *</label><select id="contact-interest" name="interest" required><option value="">Select an opportunity</option><option value="Agricultural Land, Wadi El Natrun" <?= $selectedInterest === 'Agricultural Projects' ? 'selected' : '' ?>>Agricultural Land, Wadi El Natrun</option><option value="Agricultural Land, El Dabaa Road (before El Mohra)">Agricultural Land, El Dabaa Road (before El Mohra)</option><option value="Commercial Unit, Fuel Station" <?= $selectedInterest === 'Fuel Station Project' ? 'selected' : '' ?>>Commercial Unit, Fuel Station</option><option value="Something else">Something else</option></select></div>
        <fieldset class="field m-0 border-0 p-0"><legend class="mb-3 text-[.92rem]">Preferred Contact Method *</legend><div class="flex flex-wrap gap-5"><label class="flex items-center gap-2"><input class="!w-auto" type="radio" name="contact_method" value="Phone" required> Phone</label><label class="flex items-center gap-2"><input class="!w-auto" type="radio" name="contact_method" value="WhatsApp"> WhatsApp</label><label class="flex items-center gap-2"><input class="!w-auto" type="radio" name="contact_method" value="Email"> Email</label></div></fieldset>
        <div class="field field--wide"><label for="contact-message">Message (Optional)</label><textarea id="contact-message" name="message" placeholder="Tell us the area or unit size you need, and the activity you plan to run."></textarea></div>
        <div class="form-actions"><small>Our team will review your enquiry and contact you during working hours (Sun to Thu, 9:00 to 17:00).</small><button class="button" type="submit"><span>Submit enquiry</span><img src="assets/images/project-arrow-down-right.svg" alt=""></button></div>
        <p class="form-message" data-form-message aria-live="polite"></p>
      </form>
    </div>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
