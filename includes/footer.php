  </main>
  <?php $shared = $content['shared']; ?>
  <footer class="site-footer">
    <div class="footer-main page-shell">
      <div class="footer-brand">
        <img src="<?= e(fl_asset('assets/images/logo-white.svg')) ?>" alt="Future Land" width="131" height="60">
        <p><?= e($shared['footer']['tagline']) ?></p>
      </div>
      <div class="footer-column">
        <p class="eyebrow footer-label"><?= e($shared['footer']['explore']) ?></p>
        <a href="<?= e(fl_page_url('home')) ?>"><?= e($shared['nav']['home']) ?></a>
        <a href="<?= e(fl_page_url('about')) ?>"><?= e($shared['nav']['about']) ?></a>
        <a href="<?= e(fl_page_url('agricultural')) ?>"><?= e($shared['nav']['agricultural']) ?></a>
        <a href="<?= e(fl_page_url('fuel')) ?>"><?= e($shared['nav']['fuel']) ?></a>
        <a href="<?= e(fl_page_url('contact')) ?>"><?= e($shared['nav']['contact']) ?></a>
      </div>
      <div class="footer-column footer-contact">
        <p class="eyebrow footer-label"><?= e($shared['footer']['contact']) ?></p>
        <a href="mailto:info@futureland.com">info@futureland.com</a>
        <p><?= e($shared['footer']['address']) ?></p>
        <a href="tel:<?= e($shared['footer']['phoneHref']) ?>"><?= e($shared['footer']['phone']) ?></a>
      </div>
    </div>
    <div class="footer-bottom page-shell">
      <div><a href="#">LinkedIn</a><a href="#">Facebook</a><a href="#">Instagram</a></div>
      <p><?= e($shared['footer']['copyright']) ?></p>
      <div><a href="#"><?= e($shared['footer']['privacy']) ?></a><a href="#"><?= e($shared['footer']['terms']) ?></a><span><a href="<?= e(fl_language_url('en')) ?>" lang="en">EN</a>&nbsp; | &nbsp;<a href="<?= e(fl_language_url('ar')) ?>" lang="ar">ع</a></span></div>
    </div>
  </footer>
</body>
</html>
