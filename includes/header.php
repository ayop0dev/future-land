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
  <link rel="preload" href="assets/fonts/TS-Safaa-Regular.otf" as="font" type="font/otf" crossorigin>
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
        <span></span><span></span><span></span><span class="sr-only">Open menu</span>
      </button>
    </div>
  </header>
  <div class="mobile-menu" id="mobile-menu" data-mobile-menu aria-hidden="true">
    <div class="mobile-menu__top">
      <a href="index.php"><img src="assets/images/logo-white.svg" alt="Future Land" width="131" height="60"></a>
      <button type="button" class="menu-close" data-menu-close aria-label="Close menu">×</button>
    </div>
    <nav aria-label="Mobile navigation">
      <a href="index.php"><span>01</span>Home</a>
      <a href="about.php"><span>02</span>About us</a>
      <a href="agricultural-projects.php"><span>03</span>Agricultural projects</a>
      <a href="fuel-station-project.php"><span>04</span>Fuel station project</a>
      <a href="contact.php"><span>05</span>Contact</a>
    </nav>
    <div class="mobile-menu__foot"><span>AR</span><span>/</span><span>EN</span></div>
  </div>
  <main id="main-content">
