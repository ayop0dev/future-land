<?php
$lang = $lang ?? 'en';
$dir = $dir ?? ($lang === 'ar' ? 'rtl' : 'ltr');
$content = $content ?? fl_content($lang);
$shared = $content['shared'];
$pageTitle = $pageTitle ?? 'Future Land';
$pageDescription = $pageDescription ?? 'Practical agricultural and commercial opportunities across Egypt.';
$activePage = $activePage ?? '';
$pageClass = $pageClass ?? $activePage;
?>
<!doctype html>
<html lang="<?= e($lang) ?>" dir="<?= e($dir) ?>">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES) ?>">
  <title><?= htmlspecialchars($pageTitle, ENT_QUOTES) ?></title>
  <link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3E%3Crect width='16' height='16' fill='%2305332c'/%3E%3Cpath d='M8 2 3 7h3v7h4V7h3L8 2Z' fill='white'/%3E%3C/svg%3E">
  <link rel="preload" href="<?= e(fl_asset('assets/fonts/TSSafaa-Regular.otf')) ?>" as="font" type="font/otf" crossorigin>
  <link rel="stylesheet" href="<?= e(fl_asset('assets/css/site.css')) ?>">
  <script defer src="<?= e(fl_asset('assets/js/vendor/gsap.min.js')) ?>"></script>
  <script defer src="<?= e(fl_asset('assets/js/vendor/ScrollTrigger.min.js')) ?>"></script>
  <script defer src="<?= e(fl_asset('assets/js/site.js')) ?>"></script>
</head>
<body class="page-<?= e($pageClass) ?> bg-white text-ink antialiased" data-form-success="<?= e($shared['success']) ?>">
  <a class="skip-link" href="#main-content"><?= e($shared['skip']) ?></a>
  <header class="site-header" data-site-header>
    <div class="site-header__inner">
      <a href="<?= e(fl_page_url('home')) ?>" class="brand" aria-label="<?= e($shared['brandHome']) ?>">
        <img src="<?= e(fl_asset('assets/images/logo-white.svg')) ?>" alt="Future Land" width="131" height="60">
      </a>
      <nav class="desktop-nav" aria-label="<?= e($shared['primaryNav']) ?>">
        <a class="<?= $activePage === 'home' ? 'is-active' : '' ?>" href="<?= e(fl_page_url('home')) ?>"><?= e($shared['nav']['home']) ?></a>
        <a class="<?= $activePage === 'about' ? 'is-active' : '' ?>" href="<?= e(fl_page_url('about')) ?>"><?= e($shared['nav']['about']) ?></a>
        <a class="<?= $activePage === 'projects' ? 'is-active' : '' ?>" href="<?= e(fl_page_url('home')) ?>#projects"><?= e($shared['nav']['projects']) ?></a>
        <a class="<?= ($activePage === 'agricultural' || ($activePage === 'projects' && $pageClass === 'agricultural')) ? 'is-active' : '' ?>" href="<?= e(fl_page_url('agricultural')) ?>"><?= e($shared['nav']['agricultural']) ?></a>
        <a class="<?= ($activePage === 'fuel' || ($activePage === 'projects' && $pageClass === 'fuel')) ? 'is-active' : '' ?>" href="<?= e(fl_page_url('fuel')) ?>"><?= e($shared['nav']['fuel']) ?></a>
        <a class="<?= $activePage === 'contact' ? 'is-active' : '' ?>" href="<?= e(fl_page_url('contact')) ?>"><?= e($shared['nav']['contact']) ?></a>
        <span class="language-switch" aria-label="<?= e($shared['language']) ?>"><a href="<?= e(fl_language_url('en')) ?>" lang="en" class="<?= $lang === 'en' ? 'is-active' : '' ?>">EN</a> <i>|</i> <a href="<?= e(fl_language_url('ar')) ?>" lang="ar" class="<?= $lang === 'ar' ? 'is-active' : '' ?>">ع</a></span>
      </nav>
      <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="mobile-menu" data-menu-toggle>
        <img src="<?= e(fl_asset('assets/images/menu-icon.svg')) ?>" alt=""><span class="sr-only"><?= e($shared['openMenu']) ?></span>
      </button>
    </div>
  </header>
  <div class="mobile-menu" id="mobile-menu" data-mobile-menu aria-hidden="true">
    <div class="mobile-menu__upper">
      <div class="mobile-menu__top">
        <a href="<?= e(fl_page_url('home')) ?>"><img src="<?= e(fl_asset('assets/images/logo-white.svg')) ?>" alt="Future Land" width="106" height="48"></a>
        <button type="button" class="menu-close" data-menu-close aria-label="<?= e($shared['closeMenu']) ?>"><img src="<?= e(fl_asset('assets/images/menu-close.svg')) ?>" alt="" width="24" height="24"></button>
      </div>
      <nav aria-label="<?= e($shared['mobileNav']) ?>">
        <a class="<?= $activePage === 'home' ? 'is-active' : '' ?>" href="<?= e(fl_page_url('home')) ?>"><?= e($shared['nav']['home']) ?></a>
        <a class="<?= $activePage === 'about' ? 'is-active' : '' ?>" href="<?= e(fl_page_url('about')) ?>"><?= e($shared['nav']['about']) ?></a>
        <a class="<?= ($activePage === 'agricultural' || ($activePage === 'projects' && $pageClass === 'agricultural')) ? 'is-active' : '' ?>" href="<?= e(fl_page_url('agricultural')) ?>"><?= e($shared['nav']['agricultural']) ?></a>
        <a class="<?= ($activePage === 'fuel' || ($activePage === 'projects' && $pageClass === 'fuel')) ? 'is-active' : '' ?>" href="<?= e(fl_page_url('fuel')) ?>"><?= e($shared['nav']['fuel']) ?></a>
        <a class="<?= $activePage === 'contact' ? 'is-active' : '' ?>" href="<?= e(fl_page_url('contact')) ?>"><?= e($shared['nav']['contact']) ?></a>
      </nav>
    </div>
    <div class="mobile-menu__foot">
      <div class="mobile-menu__language"><span><?= e($shared['language']) ?></span><span><a href="<?= e(fl_language_url('en')) ?>" lang="en">EN</a><i aria-hidden="true"></i><a href="<?= e(fl_language_url('ar')) ?>" lang="ar">ع</a></span></div>
      <span class="mobile-menu__divider" aria-hidden="true"></span>
      <div class="mobile-menu__social"><span><?= e($shared['follow']) ?></span><div><a href="#">Instagram</a><a href="#">LinkedIn</a><a href="#">Facebook</a></div></div>
    </div>
  </div>
  <main id="main-content">
