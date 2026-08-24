# Future Land website

Framework-free responsive implementation of the approved Future Land Figma designs.

## Stack

- PHP includes for shared page structure
- Semantic HTML
- Tailwind CSS CLI (no Vite)
- Vanilla JavaScript
- GSAP + ScrollTrigger

## Local development

```powershell
npm install
npm run css:build
php -S 127.0.0.1:8080
```

Open `http://127.0.0.1:8080`.

Use `npm run css:watch` while editing styles.

## Pages

- `/index.php`
- `/about.php`
- `/agricultural-projects.php`
- `/fuel-station-project.php`
- `/contact.php`

## Production integration note

The enquiry forms include accessible client-side validation and interface feedback. Connect their submit handlers to the production CRM or email endpoint before launch.

The Figma design uses the licensed `TS Safaa` typeface. Add the licensed webfont files and an `@font-face` declaration if the production environment does not already provide it; the current CSS includes a metric-compatible system fallback chain.
# future-land
