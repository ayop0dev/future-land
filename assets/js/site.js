(() => {
  const header = document.querySelector('[data-site-header]');
  const menu = document.querySelector('[data-mobile-menu]');
  const openButton = document.querySelector('[data-menu-toggle]');
  const closeButton = document.querySelector('[data-menu-close]');
  const projectToggle = document.querySelector('[data-projects-toggle]');
  const projectMenu = document.querySelector('[data-projects-menu]');

  const setMenu = (open) => {
    if (!menu || !openButton) return;
    menu.classList.toggle('is-open', open);
    menu.setAttribute('aria-hidden', String(!open));
    openButton.setAttribute('aria-expanded', String(open));
    document.body.classList.toggle('menu-open', open);
  };

  openButton?.addEventListener('click', () => setMenu(true));
  closeButton?.addEventListener('click', () => setMenu(false));
  menu?.querySelectorAll('a').forEach((link) => link.addEventListener('click', () => setMenu(false)));

  projectToggle?.addEventListener('click', () => {
    const open = projectToggle.getAttribute('aria-expanded') === 'true';
    projectToggle.setAttribute('aria-expanded', String(!open));
    projectMenu?.classList.toggle('is-open', !open);
  });

  document.addEventListener('click', (event) => {
    if (!event.target.closest('.nav-projects')) {
      projectToggle?.setAttribute('aria-expanded', 'false');
      projectMenu?.classList.remove('is-open');
    }
  });

  const updateHeader = () => header?.classList.toggle('is-scrolled', window.scrollY > 40);
  updateHeader();
  window.addEventListener('scroll', updateHeader, { passive: true });

  document.querySelectorAll('[data-accordion-button]').forEach((button) => {
    button.addEventListener('click', () => {
      const item = button.closest('.faq-item');
      const open = item.classList.toggle('is-open');
      button.setAttribute('aria-expanded', String(open));
    });
  });

  document.querySelectorAll('form[data-enquiry-form]').forEach((form) => {
    form.addEventListener('submit', (event) => {
      event.preventDefault();
      if (!form.reportValidity()) return;
      const message = form.querySelector('[data-form-message]');
      if (message) message.textContent = 'Thank you. Your enquiry is ready for the Future Land team.';
      form.reset();
    });
  });

  if (!window.gsap || window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
  gsap.registerPlugin(ScrollTrigger);
  gsap.from('[data-hero-reveal]', { opacity: 0, y: 28, duration: 1, stagger: 0.11, ease: 'power4.out' });
  gsap.utils.toArray('[data-reveal]').forEach((element) => {
    gsap.from(element, {
      opacity: 0,
      y: 34,
      duration: 0.9,
      ease: 'power4.out',
      scrollTrigger: { trigger: element, start: 'top 86%', once: true }
    });
  });
  gsap.utils.toArray('[data-parallax]').forEach((image) => {
    gsap.fromTo(image, { yPercent: -4 }, {
      yPercent: 4,
      ease: 'none',
      scrollTrigger: { trigger: image.parentElement, start: 'top bottom', end: 'bottom top', scrub: true }
    });
  });
})();
