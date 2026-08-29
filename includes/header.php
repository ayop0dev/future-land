<?php
$pageTitle = $pageTitle ?? 'Future Land';
$pageDescription = $pageDescription ?? 'Practical agricultural and commercial opportunities across Egypt.';
$activePage = $activePage ?? '';
$pageClass = $pageClass ?? $activePage;
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES) ?>">
  <title><?= htmlspecialchars($pageTitle, ENT_QUOTES) ?></title>
  <link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3E%3Crect width='16' height='16' fill='%2305332c'/%3E%3Cpath d='M8 2 3 7h3v7h4V7h3L8 2Z' fill='white'/%3E%3C/svg%3E">
  <link rel="preload" href="assets/fonts/TSSafaa-Regular.otf" as="font" type="font/otf" crossorigin>
  <link rel="stylesheet" href="assets/css/site.css">
  <script defer src="assets/js/vendor/gsap.min.js"></script>
  <script defer src="assets/js/vendor/ScrollTrigger.min.js"></script>
  <script defer src="assets/js/site.js"></script>
</head>
<body class="page-<?= htmlspecialchars($pageClass, ENT_QUOTES) ?> bg-white text-ink antialiased">
  <a class="skip-link" href="#main-content">Skip to content</a>
  <header class="site-header" data-site-header>
    <div class="site-header__inner">
      <a href="index.php" class="brand" aria-label="Future Land home">
        <img src="assets/images/logo-white.svg" alt="Future Land" width="131" height="60">
      </a>
      <nav class="desktop-nav" aria-label="Primary navigation">
        <a class="<?= $activePage === 'home' ? 'is-active' : '' ?>" href="index.php">Home</a>
        <a class="<?= $activePage === 'about' ? 'is-active' : '' ?>" href="about.php">About us</a>
        <a class="<?= $activePage === 'projects' ? 'is-active' : '' ?>" href="index.php#projects">Our projects</a>
        <a href="agricultural-projects.php">Agricultural projects</a>
        <a href="fuel-station-project.php">Fuel station project</a>
        <a class="<?= $activePage === 'contact' ? 'is-active' : '' ?>" href="contact.php">Contact</a>
        <span class="language-switch" aria-label="Language">EN <i>|</i> ع</span>
      </nav>
      <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="mobile-menu" data-menu-toggle>
        <img src="assets/images/menu-icon.svg" alt=""><span class="sr-only">Open menu</span>
      </button>
    </div>
  </header>
  <div class="mobile-menu" id="mobile-menu" data-mobile-menu aria-hidden="true">
    <div class="mobile-menu__upper">
      <div class="mobile-menu__top">
        <a href="index.php"><img src="assets/images/logo-white.svg" alt="Future Land" width="106" height="48"></a>
        <button type="button" class="menu-close" data-menu-close aria-label="Close menu"><img src="assets/images/menu-close.svg" alt="" width="24" height="24"></button>
      </div>
      <nav aria-label="Mobile navigation">
        <a href="index.php">Home</a>
        <a href="about.php">About us</a>
        <a href="agricultural-projects.php">Agricultural project</a>
        <a href="fuel-station-project.php">Fuel station project</a>
        <a href="contact.php">Contact</a>
      </nav>
    </div>
    <div class="mobile-menu__foot">
      <div class="mobile-menu__language"><span>Language</span><span><b>EN</b><i aria-hidden="true"></i><b lang="ar">ع</b></span></div>
      <span class="mobile-menu__divider" aria-hidden="true"></span>
      <div class="mobile-menu__social"><span>Follow us</span><div><a href="#">Instagram</a><a href="#">LinkedIn</a><a href="#">Facebook</a></div></div>
    </div>
  </div>
  <main id="main-content">
