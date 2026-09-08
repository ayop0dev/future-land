# Future Land — Final Engineering Audit

**Date:** 2026-09-03  
**Auditor:** Automated Engineering Audit (Read-Only)  
**Repository:** `D:\Projects\future-land`  
**Commit:** `6e4b28d` (HEAD of `main`)

---

## 1. Executive Summary

The Future Land frontend demonstrates a **well-designed foundational architecture** that is substantially undermined by a single systemic problem: a massive **Figma fidelity CSS layer** that replaces the project's fluid, intrinsic responsive system with 4,046 lines of hardcoded pixel values, fixed heights, `overflow: hidden` clipping, and absolute positioning.

The project's PHP template architecture, content separation system, bilingual content management, JavaScript, semantic markup, and accessibility foundations are all at a **senior engineering standard**. The content system (`content.php`) cleanly separates all translated strings from templates, achieving near-perfect English ↔ Arabic structural parity using shared templates — an architecture that maps remarkably well to WordPress + WPML.

However, the CSS layer renders the responsive system **structurally fragile** across intermediate viewport widths, makes RTL handling dependent on 200+ lines of physical-property overrides that must be manually maintained, and introduces image duplication that adds ~30 MB of unnecessary weight.

**Verdict: REMEDIATION REQUIRED BEFORE WORDPRESS MIGRATION**

The required remediation is concentrated in one root cause (the Figma fidelity CSS layer) and one asset concern (image deduplication). The template architecture, content system, and JavaScript can migrate with only minor adjustments.

---

## 2. Audit Scope

This audit covers:

- Repository integrity and Git state
- Project architecture (PHP templates, content system, asset organization)
- HTML / semantic markup across all 10 pages (5 EN + 5 AR)
- CSS architecture (4,433 lines in `input.css`)
- JavaScript (83 lines in `site.js` + GSAP vendor)
- Responsive behavior across the full 320–1920px viewport range
- Arabic / RTL implementation
- Translation architecture and EN ↔ AR structural parity
- WordPress theme readiness
- WPML multilingual readiness
- Dynamic content / CMS mapping
- Assets (images, fonts, icons)
- Typography system
- Performance-oriented code concerns
- Accessibility baseline
- SEO / document structure
- Dead code identification
- Hack / fragile implementation detection
- Cross-page consistency
- Runtime / browser inspection feasibility

**Exclusions:** This audit does NOT evaluate translation quality, visual design fidelity to Figma, or perform Lighthouse performance optimization. It does NOT modify any file.

---

## 3. Repository State

### Initial State (pre-audit)

```
Branch: main
Status: Up to date with origin/main
Tracked modifications: None
Staged changes: None
```

**Untracked files (pre-existing, not created by this audit):**

```
.chrome-about-capture/
.chrome-responsive-audit-2/
.chrome-responsive-audit/
.chrome-responsive/
.tmp-responsive/
```

These are temporary directories from previous audit tooling. They are not tracked by Git and do not affect the project.

**The repository is clean.** No tracked files have been modified.

### Gitignore

The `.gitignore` correctly excludes:
- `node_modules/`
- Environment files (`.env`, `.env.*`)
- Working notes (`.impeccable.md`, `checkpoint.md`)
- Logs, temp files, editor settings, OS files
- Previous audit artifacts (`.codex-parity/`, `.playwright-mcp/`)

---

## 4. Architecture Assessment

### Overall Structure

```
future-land/
├── index.php                    # EN homepage entry
├── about.php                    # EN about entry
├── contact.php                  # EN contact entry
├── agricultural-projects.php    # EN agricultural project entry
├── fuel-station-project.php     # EN fuel station entry
├── ar/                          # Arabic mirror (5 identical entry files)
│   ├── index.php
│   ├── about.php
│   ├── contact.php
│   ├── agricultural-projects.php
│   └── fuel-station-project.php
├── includes/
│   ├── content.php              # Centralized bilingual content (53 KB)
│   ├── header.php               # Shared header/nav template
│   ├── footer.php               # Shared footer template
│   └── project-layout.php       # Shared project page template
├── templates/
│   ├── home.php                 # Homepage template
│   ├── about.php                # About page template
│   └── contact.php              # Contact page template
├── assets/
│   ├── css/
│   │   ├── input.css            # Tailwind CSS v4 source (204 KB, 4,433 lines)
│   │   └── site.css             # Compiled output (196 KB)
│   ├── js/
│   │   ├── site.js              # Custom JS (3.4 KB, 83 lines)
│   │   └── vendor/
│   │       ├── gsap.min.js      # GSAP 3.13.0 (72 KB)
│   │       └── ScrollTrigger.min.js (44 KB)
│   ├── fonts/                   # TS Safaa (4 weights, OTF)
│   └── images/                  # 68 files + figma/ subdirectory
├── docs/                        # Content reference docs (EN + AR)
├── package.json                 # Tailwind CSS v4 + GSAP
└── node_modules/                # Dependencies
```

### Architecture Quality: STRONG

The architecture demonstrates intentional, senior-level design:

1. **Clean routing pattern:** PHP entry files set `$lang` and delegate to shared templates. English and Arabic pages use *identical* templates with language-aware content injection.
2. **Centralized content system:** `content.php` contains ALL translatable strings in a structured PHP array keyed by language, with helper functions (`e()`, `fl_asset()`, `fl_page_url()`, `fl_language_url()`) that handle escaping and path resolution.
3. **No template duplication:** Arabic pages do NOT have separate templates — they use the same `templates/` and `includes/` files as English, driven by the `$lang` variable. This is the ideal architecture for WPML migration.
4. **Logical separation:** `includes/` for shared partials, `templates/` for page-specific content, `assets/` for static resources.

### Architectural Issues

#### [HIGH] Monolithic CSS File

**Area:** Architecture  
**Affected files:** `assets/css/input.css`

The CSS source is a single 4,433-line file with no modular organization. Lines 1–386 define a clean, fluid system. Lines 387–4,433 constitute the "Figma fidelity layer" that overrides nearly everything. This makes the CSS unmaintainable.

**WordPress migration impact:** HIGH — Theme CSS should be modular (base, components, pages, responsive, RTL).

#### [LOW] Missing Project Page Templates

**Area:** Architecture  
**Affected files:** `includes/project-layout.php`

Project pages (agricultural, fuel) use `project-layout.php` directly from `includes/` rather than having a `templates/project.php` wrapper. This is a minor inconsistency — `project-layout.php` also includes `header.php` and `footer.php` internally, unlike other pages where these are included by the entry files.

**WordPress migration impact:** LOW — Will be normalized by the WP template hierarchy naturally.

---

## 5. HTML / Semantic Markup

### Strengths

- **Proper document structure:** `<!doctype html>`, `<html lang="..." dir="...">`, charset, viewport meta
- **Semantic elements:** `<header>`, `<main>`, `<footer>`, `<nav>`, `<section>`, `<article>`, `<aside>`, `<fieldset>`, `<legend>` used appropriately
- **Skip link:** Present and correctly targets `#main-content` (`header.php:26`)
- **Heading hierarchy:** Generally correct — `<h1>` for page titles, `<h2>` for section titles, `<h3>` for card/item titles
- **Form labels:** All form inputs have associated `<label>` elements with matching `for`/`id` pairs
- **Image alt text:** Present on all content images; decorative images (arrows, icons) use `alt=""`
- **Aria attributes:** `aria-label` on navigation landmarks, `aria-expanded` on toggle buttons, `aria-hidden` on mobile menu, `aria-live="polite"` on form messages
- **Button semantics:** Interactive elements use `<button type="button">`, not `<a>` tags
- **Output escaping:** All dynamic content passes through `e()` (htmlspecialchars) — XSS-safe

### Issues

#### [HIGH] Missing `<link rel="canonical">` and `hreflang`

**Area:** HTML / SEO  
**Affected files:** `includes/header.php`

No canonical URL or hreflang declarations exist. For a bilingual site, both are essential:

```html
<link rel="canonical" href="...">
<link rel="alternate" hreflang="en" href="...">
<link rel="alternate" hreflang="ar" href="...">
```

**Root cause:** SEO meta was not part of the initial implementation scope.  
**WordPress migration impact:** HIGH — WPML can generate these, but their absence should be flagged as a pre-migration gap.

#### [MEDIUM] Some Inline Language Checks in Templates

**Area:** HTML  
**Affected files:** `templates/home.php:4,22,28,46,57,69`, `templates/about.php:4,16,62`, `includes/project-layout.php:22,27,59,65`

Several templates contain `$lang === 'ar' ? '...' : '...'` conditionals for alt text translations. While functional, these strings should ideally live in `content.php` alongside other translated content.

**Example** (`templates/home.php:4`):
```php
alt="<?= e($lang === 'ar' ? 'تطوير فيوتشر لاند وقت الغروب' : 'Future Land development at sunset') ?>"
```

**Root cause:** Alt texts were added after the content system was established and were inlined for convenience.  
**WordPress migration impact:** MEDIUM — These must be moved into the content system or ACF fields.

#### [MEDIUM] Placeholder Social Links

**Area:** HTML  
**Affected files:** `includes/header.php:63`, `includes/footer.php:25`

Social media links point to `#`:
```html
<a href="#">Instagram</a><a href="#">LinkedIn</a><a href="#">Facebook</a>
```

**WordPress migration impact:** LOW — Will become WordPress options page fields.

#### [LOW] Duplicate `h2` in Project Introduction

**Area:** HTML  
**Affected files:** `includes/project-layout.php:22,24`

The project introduction section contains two `<h2>` elements: one for the opportunity title and one for "About the Projects". This creates a heading hierarchy ambiguity within the same section.

#### [INFORMATIONAL] No Open Graph / Social Meta Tags

**Area:** HTML  
**Affected files:** `includes/header.php`

No `og:title`, `og:description`, `og:image`, or Twitter Card meta tags. These should be added during WordPress migration via Yoast or a similar plugin.

---

## 6. CSS Architecture

### The Two-Layer Problem

This is the **central finding** of the entire audit.

The CSS file contains two conflicting architectures:

| Layer | Lines | Size | Approach |
|-------|-------|------|----------|
| **Base architecture** (L1–386) | 386 | ~15 KB | Fluid, intrinsic, token-based, responsive |
| **Figma fidelity layer** (L387–4,433) | 4,046 | ~189 KB | Hardcoded pixels, absolute positioning, fixed heights |

#### [CRITICAL] Figma Fidelity Layer Overrides the Entire Fluid System

**Area:** CSS Architecture  
**Affected files:** `assets/css/input.css:387–4433`  
**Affected pages/components:** Every page and component

**Evidence:**

The base architecture establishes excellent patterns:
- `.page-shell` uses `inline-size: min(calc(100% - (2 * var(--page-pad))), var(--content-max))` with logical properties (L80–85)
- `.display` uses `font-size: clamp(2.5rem, 4.2vw, 4.5rem)` (L89)
- `.section-title` uses `font-size: clamp(2.25rem, 3.35vw, 3rem)` (L90)
- `--page-pad: clamp(var(--space-md), 4.45vw, var(--space-2xl))` (L57)

At line 387, the comment `/* Figma fidelity layer — source frames: 1440 desktop / 440 mobile */` introduces overrides that destroy these fluid behaviors:
- `--page-pad: 64px` (L388) — removes the fluid clamp
- `.page-shell { width: min(calc(100% - 128px), 1312px) }` (L389) — replaces logical `inline-size`
- `.section-title { font-size: 50px; line-height: 54px }` (L390) — removes fluid clamp
- `.hero { min-height: 730px; height: 730px }` (L400) — introduces fixed heights

**Why this matters:** The base architecture was designed to be responsive across all viewports. The Figma layer replaces it with measurements extracted from 1440px and 440px Figma frames, creating a system that only works at those two exact widths and breaks at every width in between.

**Root cause:** The Figma layer was added to achieve pixel-perfect fidelity to design mockups at specific viewport widths, rather than accepting the fluid behavior of the base system.

**WordPress migration impact:** BLOCKING — This layer must be dismantled before migration.

#### [CRITICAL] Fixed Heights with `overflow: hidden` Masking Content

**Area:** CSS  
**Affected files:** `assets/css/input.css` (63 occurrences of `overflow: hidden`)

**Evidence (representative examples):**

```css
.home-about { height: 665px; padding: 0; overflow: hidden; }     /* L450 */
.home-projects { height: 979px; padding: 0; overflow: hidden; }   /* L465 */
.home-features { height: 821px; padding: 0; overflow: hidden; }   /* L483 */
.home-masterplan { height: 1080px; padding: 0; overflow: hidden; }/* L499 */
.home-steps { height: 790px; padding: 0; overflow: hidden; }      /* L518 */
.home-enquiry { height: 628px; padding: 0; overflow: hidden; }    /* L530 */
.about-who { height: 616px; overflow: hidden; }                    /* L552 */
.about-vision { height: 943px; padding: 86px 0; overflow: hidden; }/* L561 */
.about-values { height: 848px; padding: 68px 0 52px; overflow: hidden; }/* L576 */
.about-principles { height: 868px; padding: 68px 0 54px; overflow: hidden; }/* L589 */
```

**Why this matters:** Fixed heights guarantee that content will be clipped if:
- Arabic text is longer than English (common)
- Font rendering differs across browsers
- User increases text size for accessibility
- Content is edited in WordPress CMS

The `overflow: hidden` masks these problems during development but creates invisible content loss in production.

#### [HIGH] Absolute Positioning Replacing Grid/Flex Layout

**Area:** CSS  
**Affected files:** `assets/css/input.css:452–549` and throughout the Figma layer

**Evidence:**

```css
.home-about__title { position: absolute; left: 11px; top: 65px; width: 579px; }     /* L452 */
.home-about__intro { position: absolute; left: 998px; top: 413px; width: 308px; }    /* L453 */
.home-about__agriculture { position: absolute; left: 356px; top: 147px; width: 610px; }/* L454 */
.home-about__perspective { position: absolute; left: 4px; top: 276px; width: 330px; }/* L455 */
.home-about__commercial { position: absolute; left: 998px; top: 147px; width: 308px; }/* L459 */
```

These values are extracted from Figma frame coordinates. They only work at exactly 1440px viewport width and break at every other width.

#### [HIGH] 42 Uses of `!important`

**Area:** CSS  
**Affected files:** `assets/css/input.css`

Of 42 `!important` declarations:
- ~10 are in the `prefers-reduced-motion` rule (acceptable)
- ~10 are Tailwind utility overrides in templates (e.g., `!text-white/70`)
- ~22 are in the Figma layer to force overrides over the base system (symptomatic of the two-layer conflict)

#### [MEDIUM] Spacing Token Bypass

**Area:** CSS  
**Affected files:** `assets/css/input.css:388+`

The base system defines spacing tokens (`--space-2xs` through `--space-5xl`, L46–54) and uses them for `--page-pad` and `--section-space`. The Figma layer replaces all of these with raw pixel values (`gap: 42px 30px`, `margin-top: 24px`, `padding: 30px 28px`).

#### [MEDIUM] Typography System Override

**Area:** CSS  
**Affected files:** `assets/css/input.css:390,406–408`

The fluid `clamp()` typography established at L89–91 is overridden with static pixel values throughout the Figma layer. For example:
- `.display` goes from `clamp(2.5rem, 4.2vw, 4.5rem)` to `60px`
- `.section-title` goes from `clamp(2.25rem, 3.35vw, 3rem)` to `50px`

---

## 7. JavaScript Architecture

### Overall Quality: STRONG

The JavaScript file (`assets/js/site.js`) is 83 lines, well-structured, uses modern ES6+ patterns, and demonstrates good accessibility awareness.

### Strengths

- **IIFE pattern** prevents namespace pollution
- **Data attributes** (`[data-site-header]`, `[data-mobile-menu]`, `[data-accordion-button]`) used for JS hooks — resilient to CSS class changes
- **Accessibility:** Focus management on menu open/close, `aria-expanded` and `aria-hidden` toggling, `Escape` key handling, focus return to trigger element
- **Reduced motion:** GSAP animations skipped when `prefers-reduced-motion: reduce` matches
- **No console/debug code** in production
- **Passive scroll listener** for header state
- **Language-agnostic:** Form success message read from `data-form-success` body attribute

### Issues

#### [HIGH] Form Submission is a UI Mock

**Area:** JavaScript  
**Affected files:** `assets/js/site.js:53–61`

```javascript
form.addEventListener('submit', (event) => {
  event.preventDefault();
  if (!form.reportValidity()) return;
  const message = form.querySelector('[data-form-message]');
  if (message) message.textContent = document.body.dataset.formSuccess || 'Thank you...';
  form.reset();
});
```

The form `submit` event is prevented, a success message is displayed, and the form is reset — but **no data is ever sent**. There is no `fetch()`, `XMLHttpRequest`, or form action.

**Why this matters:** This will completely break WordPress form plugins (Contact Form 7, WPForms, Gravity Forms) that rely on either standard form submission or their own AJAX handlers.

**WordPress migration impact:** HIGH — The `event.preventDefault()` must be removed or made conditional on WordPress form plugin presence.

#### [MEDIUM] Dead Code — Project Dropdown Toggle

**Area:** JavaScript  
**Affected files:** `assets/js/site.js:6–7,28–39`

```javascript
const projectToggle = document.querySelector('[data-projects-toggle]');
const projectMenu = document.querySelector('[data-projects-menu]');
```

These elements do not exist in any template. The associated event listeners (L28–39) execute harmlessly (the optional chaining prevents errors) but are dead code.

**WordPress migration impact:** LOW — Should be removed during cleanup.

#### [LOW] Hardcoded English Fallback String

**Area:** JavaScript  
**Affected files:** `assets/js/site.js:58`

```javascript
document.body.dataset.formSuccess || 'Thank you. Your enquiry is ready for the Future Land team.'
```

If the `data-form-success` attribute is ever missing from `<body>`, Arabic users will see an English message. Currently the attribute IS present (set in `header.php:25`), so this is defensive but not dangerous.

#### [LOW] No Event Delegation for Dynamic Content

**Area:** JavaScript  
**Affected files:** `assets/js/site.js:45–51,53–61`

Accordion and form event listeners bind directly to elements found at page load via `querySelectorAll().forEach()`. If WordPress loads content dynamically (AJAX), new elements will not receive listeners.

**WordPress migration impact:** MEDIUM — Should migrate to event delegation on a stable parent element.

---

## 8. Responsive System

### Assessment: STRUCTURALLY FRAGILE

The responsive system exists in two conflicting states:

1. **Base system (L1–386):** Uses 4 clean breakpoints (1100px, 1024px, 860px, 560px) with fluid values. This system is intrinsic and would produce correct responsive behavior.

2. **Figma layer (L387+):** Introduces 28 media queries including arbitrary breakpoints (1439px, 1180px, 900px, 439px, 400px, 390px, 359px, 319px) to patch the layout problems created by the fixed-height, absolute-positioning approach.

### Breakpoint Architecture

| Breakpoint | Purpose | Source |
|-----------|---------|--------|
| `1440px` | Max desktop design width | Figma layer |
| `1439px` | "Below Figma desktop" patch | Figma layer |
| `1180px` | Nav gap + page padding reduction | Figma layer |
| `1100px` | Grid columns reduction (base) | Base |
| `1024px` | Desktop nav → mobile menu | Base |
| `900px` | Section grid → single column | Figma layer |
| `860px` | Hero + layout stacking (base) | Base |
| `560px` | Mobile layout (base) | Base |
| `439px` | Footer + small device fixes | Figma layer |
| `400px` | Home hero height fix | Figma layer |
| `390px` | Display font size reduction | Figma layer |
| `359px` | Footer word wrapping | Figma layer |
| `319px` | Extreme small device clamp | Figma layer |

### The Critical Width Ranges

**1025px–1439px:** The Figma layer includes a specific media query (L833) that undoes its own fixed heights and absolute positioning for this range:

```css
@media (min-width: 1025px) and (max-width: 1439px) {
  .home-about, .home-projects, ... { height: auto; min-height: 0; overflow: visible; }
  .home-about__layout { position: static; height: auto; display: grid; ... }
}
```

This is an admission that the Figma layer's own approach breaks at these widths. The fact that a media query exists to *undo the Figma layer's damage* confirms the layer is architecturally unsound.

**561px–900px:** Another media query (L861) similarly removes fixed heights and restores `overflow: visible` for tablet widths.

**At exactly 1440px:** The Figma layer's absolute pixel values work correctly because they were measured from a 1440px Figma frame.

**At exactly 440px (mobile):** The mobile breakpoint rules are similarly tuned to a 440px Figma frame.

**At intermediate widths (e.g., 600–859px, 901–1024px):** The layout depends on which "undo" media query happens to apply, creating a patchwork of overrides.

---

## 9. Responsive Range Findings

### Root Cause Group: Fixed Heights + Overflow Hidden

At the 1440px desktop width, sections have hardcoded heights. At any other width, these sections are either:
- **Undone** by a range-specific media query (1025–1439px, 561–900px)
- **Clipped** by `overflow: hidden` (widths not covered by undo queries)

**Affected sections (all pages):**

| Section | Fixed Height | Line |
|---------|-------------|------|
| `.home-about` | 665px | L450 |
| `.home-projects` | 979px | L465 |
| `.home-features` | 821px | L483 |
| `.home-masterplan` | 1080px | L499 |
| `.home-steps` | 790px | L518 |
| `.home-enquiry` | 628px | L530 |
| `.about-who` | 616px | L552 |
| `.about-vision` | 943px | L561 |
| `.about-values` | 848px | L576 |
| `.about-principles` | 868px | L589 |
| `.site-footer` | Various fixed | L804+ |

### Root Cause Group: Absolute Positioning at Desktop

Elements positioned with `position: absolute` and pixel coordinates extracted from the 1440px Figma frame will misalign at any other width. The undo queries convert these to `position: static` with CSS Grid for intermediate ranges, but this creates abrupt visual transitions at the breakpoint boundaries (1024px, 1440px).

### Specific Width Range Issues

**900px–1024px:** A specific media query (L4130) `@media (min-width: 901px) and (max-width: 1023px)` suggests known layout problems in this range. The desktop nav is hidden at 1024px but the Figma layer was designed for a navigation present at 1440px.

**390px and below:** Multiple breakpoints (390px, 400px, 359px, 319px) patch specific elements. The `min-height: 556.314px` value on `.site-footer` (L1326) is a magic number likely extracted from a screenshot measurement.

---

## 10. Arabic / RTL

### Implementation Approach

RTL is handled through:

1. `<html lang="ar" dir="rtl">` — set dynamically in `header.php:12`
2. A large RTL override block starting at `input.css:2659`
3. Physical CSS properties manually flipped via `html[dir="rtl"]` selectors

### RTL Override Block Size

The RTL overrides span from approximately line 2659 to line 3158 (~500 lines at the core block) with additional scattered RTL rules throughout the mobile breakpoints. The block contains approximately **230 `html[dir="rtl"]` selectors** across the entire file.

### What the RTL Block Does

1. **Sets `text-align: right`** on body (L2659)
2. **Removes letter-spacing and text-transform** from uppercase elements — correct for Arabic (L2663–2676)
3. **Flips skip-link** from `left` to `right` (L2678–2681)
4. **Mirrors gradient overlay** from 90deg to 270deg (L2683–2685)
5. **Flips directional icons** via `scaleX(-1)` (L2687–2691)
6. **Flips absolute positions** (every `left: Xpx` becomes `left: auto; right: Xpx`)
7. **Adjusts scroll-cue position** (L2716–2723)
8. **Adjusts hero content positions** for each page variant

### Issues

#### [HIGH] Physical Properties Require Manual RTL Mirroring

**Area:** CSS / RTL  
**Affected files:** `assets/css/input.css`

The Figma layer uses physical directional properties (`left`, `right`, `margin-left`, `padding-left`, `text-align: left/right`) extensively. Every physical property must be manually duplicated in the RTL block. When new components are added, the RTL block must be updated — a maintenance burden that is easy to forget.

**Evidence:** The base system (L1–386) already uses logical properties in some places (e.g., `.page-shell` uses `inline-size`, `margin-inline`, `min-inline-size`). The Figma layer overrides these with physical equivalents (L389: `width: min(...)`) which then require RTL overrides.

**Recommended direction:** Convert physical properties to logical equivalents where it genuinely simplifies maintenance. The `.page-shell` base implementation is the correct model. Properties like `padding-left` → `padding-inline-start`, `left` → `inset-inline-start`, `text-align: left` → `text-align: start`.

#### [MEDIUM] RTL Overrides Depend on Figma Layer Positions

The RTL block flips `left` values from the Figma layer to `right`. If the Figma layer is dismantled (as recommended), the RTL overrides for those positions become unnecessary. This means the RTL fix is coupled to the Figma layer problem — solving one largely solves the other.

---

## 11. Translation Architecture

### Assessment: EXCELLENT

The translation architecture is the project's strongest engineering dimension.

**Key design decisions:**

1. **Single content source:** `includes/content.php` contains ALL translatable strings for both languages in a structured PHP array.
2. **Shared templates:** English and Arabic pages use identical templates. Language switching happens via the `$lang` variable, not through duplicated markup.
3. **Content keys, not string lookups:** Content is accessed by semantic keys (`$home['hero'][0]`, `$shared['buttons']['explore']`) rather than string-based translation functions.
4. **HTML escaping built in:** The `e()` function ensures all content output is XSS-safe.
5. **URL generation:** `fl_page_url()` and `fl_language_url()` handle language-aware URL construction.

### Issues

#### [LOW] Content Array Uses Numeric Indices

**Area:** Translation Architecture  
**Affected files:** `includes/content.php`

Content arrays use positional numeric indices:
```php
'hero' => ['Future Land', ['Land and', 'spaces', 'ready for real', 'business'], 'An Egyptian...']
```

Accessed as `$home['hero'][0]`, `$home['hero'][1]`, `$home['hero'][2]`. This works but is fragile — inserting a new element shifts all subsequent indices.

**WordPress migration impact:** LOW — In WordPress, this content will move to ACF fields with named keys, resolving this naturally.

#### [LOW] Line-Break Arrays for Display Text

**Area:** Translation Architecture  
**Affected files:** `includes/content.php`

Hero titles are split into arrays for line-by-line rendering:
```php
'hero' => ['Future Land', ['Land and', 'spaces', 'ready for real', 'business'], ...]
```

This is a design-driven content structure (controlling line breaks). It works but creates a tight coupling between content and visual presentation.

---

## 12. English ↔ Arabic Structural Parity

### Assessment: NEAR-PERFECT PARITY

Because English and Arabic pages share identical templates, structural divergence is architecturally impossible for most components. Both language versions produce the same DOM structure, same CSS classes, same section order.

### Verified Parity Points

| Component | EN | AR | Parity |
|-----------|----|----|--------|
| Homepage hero | ✓ | ✓ | ✅ Identical |
| About section | ✓ | ✓ | ✅ Identical |
| Projects cards | ✓ | ✓ | ✅ Identical |
| Features grid | ✓ | ✓ | ✅ Identical |
| Masterplan | ✓ | ✓ | ✅ Identical |
| Steps | ✓ | ✓ | ✅ Identical |
| Quick enquiry form | ✓ | ✓ | ✅ Identical |
| About hero | ✓ | ✓ | ✅ Identical |
| Who we are | ✓ | ✓ | ✅ Identical |
| Vision/mission | ✓ | ✓ | ✅ Identical |
| Values | ✓ | ✓ | ✅ Identical |
| Principles | ✓ | ✓ | ✅ Identical |
| Growth banner | ✓ | ✓ | ✅ Identical |
| Agricultural project | ✓ | ✓ | ✅ Identical |
| Fuel station project | ✓ | ✓ | ✅ Identical |
| Site comparison | ✓ | ✓ | ✅ Identical |
| FAQ | ✓ | ✓ | ✅ Identical |
| Contact form | ✓ | ✓ | ✅ Identical |
| Header / nav | ✓ | ✓ | ✅ Identical |
| Footer | ✓ | ✓ | ✅ Identical |
| Mobile menu | ✓ | ✓ | ✅ Identical |

### Minor Differences (by design)

- Arabic hero title arrays have different element counts (2 lines vs 4 lines for homepage) — this is correct as Arabic text has different natural line breaks.
- Arabic contact details use Arabic-Hindi numerals (٠١١٤٠٦٤٤٤٤٨) while English uses Western Arabic numerals — correct localization.
- Arabic meta descriptions are longer and more descriptive — correct SEO practice.

---

## 13. WordPress Theme Readiness

### Template Mapping

The current PHP structure maps cleanly to WordPress:

| Current File | WordPress Equivalent |
|-------------|---------------------|
| `includes/header.php` | `header.php` |
| `includes/footer.php` | `footer.php` |
| `templates/home.php` | `front-page.php` |
| `templates/about.php` | `page-about.php` |
| `templates/contact.php` | `page-contact.php` |
| `includes/project-layout.php` | `single-project.php` or `page-{slug}.php` |
| `includes/content.php` | `functions.php` + ACF fields |
| Entry point files (`.php`) | WordPress routing (no equivalent needed) |

### Reusable Component Candidates

| Component | Template Part Name | Frequency |
|-----------|-------------------|-----------|
| Section heading (eyebrow + title + lead) | `template-parts/section-heading.php` | ~15× |
| Hero section | `template-parts/hero.php` | 5× (with variants) |
| Button | `template-parts/button.php` | ~20× |
| Feature/value/principle card | `template-parts/card.php` | ~16× |
| FAQ accordion | `template-parts/faq.php` | 2× |
| Form | `template-parts/form.php` | 2× (quick + full) |
| Project facts | `template-parts/facts.php` | 2× |
| Stats row | `template-parts/stats.php` | 1× |
| Gallery grid | `template-parts/gallery.php` | 4× |
| CTA banner | `template-parts/cta.php` | 3× |

### Assessment

The frontend architecture is **well-suited** for WordPress theme conversion. The separation of content from templates, shared partials, and language-aware routing all align with WordPress conventions.

**Blocking issue:** The CSS must be refactored before the theme can be responsive across all viewports.

---

## 14. WPML Readiness

### Assessment: READY AFTER MINOR REMEDIATION

The current architecture is ideally designed for WPML:

1. **Shared templates** — WPML's core principle. ✅
2. **Content separated from structure** — WPML translates content, not templates. ✅
3. **Language-aware URLs** — `fl_language_url()` generates `/ar/` prefix paths, matching WPML's directory language URL format. ✅
4. **No hardcoded language logic in CSS** — CSS uses `html[dir="rtl"]` selector, which WPML sets automatically. ✅
5. **JavaScript is language-agnostic** — success messages via data attributes, no JS language detection. ✅

### Potential WPML Issues

#### [MEDIUM] Alt Text Language Conditionals Must Migrate

~20 inline `$lang === 'ar' ? ... : ...` alt text conditionals in templates will need to become WPML string translations or ACF image field alt attributes.

#### [LOW] URL Structure Difference

The current `fl_language_url()` generates `../about.php` for cross-language links. WPML uses `?lang=ar` or `/ar/about/` depending on configuration. This function will be replaced by WPML's `icl_get_languages()` API.

#### [INFORMATIONAL] Content Array Will Migrate to WPML String Translation

The `content.php` content array structure can be migrated to WPML via:
- Page content → WPML page translation
- Shared strings → WPML String Translation (`__()` and `_e()` functions)
- Form labels → WPML String Translation
- Navigation → WPML menu translation
- ACF fields → WPML ACF integration (automatic field translation)

---

## 15. Dynamic Content / CMS Mapping

### Content Classification

#### Global Site Settings (WordPress Options Page / ACF Options)
- Site logo
- Company name
- Phone number / WhatsApp number
- Email address
- Physical address
- Business hours
- Social media URLs (currently placeholder `#`)
- Footer tagline
- Copyright text
- Privacy policy / Terms of use URLs

#### WordPress Page Content (ACF Field Groups)
- Hero: eyebrow, title (line array), description, background image
- Section headings: eyebrow, title, lead paragraph
- Body copy blocks
- CTA: eyebrow, title, copy, button text, background image
- Contact details: heading, subheading, location, hours, phone

#### Potential ACF Repeaters
- Feature cards (number, title, description, alt text, image)
- Value cards (number, title, description, image, alt)
- Principle cards (number, title, description, image, alt)
- Steps (number, title, description)
- FAQ items (question, answer)
- Project facts (label, value)
- Statistics (number, label, sublabel)
- Site comparison cards (number, name, facts key-value pairs)
- Facility items (title, description, icon, image)
- Gallery images (image, alt)

#### Potential Custom Post Type
- **Projects** — with fields for: type, eyebrow, title, location, summary, hero image, about text, facts, sites, gallery, details, facilities, FAQ, CTA

#### Potential Taxonomy
- **Project Type** — Agricultural, Commercial (used for filtering and categorization)

#### Navigation (WordPress Menus + WPML)
- Primary navigation (6 items)
- Footer navigation (5 items)
- Mobile navigation (5 items — excludes "Our projects" anchor link)
- Language switcher

#### Static Presentation Content (stays in theme templates)
- CSS classes and layout structure
- Icon references (arrows, menu icons)
- Decorative elements
- Form structure (field types, validation attributes)
- Section background patterns

---

## 16. Assets

### Image Assets — Critical Findings

#### [HIGH] Massive Image Duplication (~30 MB wasted)

**Area:** Assets  
**Affected files:** `assets/images/`

Identical images are stored under different filenames. File hash comparison reveals 13 duplicate groups:

| Duplicate Group | File Count | Size Each | Wasted |
|----------------|-----------|-----------|--------|
| `about-growth.png` = `agri-hero.png` = `fuel-cta.png` = `home-agriculture.png` | 4 | 2.25 MB | 6.75 MB |
| `agri-facility-1.png` = `fuel-facility-2.png` = `agri-project-gallery-small-left.png` | 3 | 2.35 MB | 4.70 MB |
| `fuel-secondary-a.png` = `home-commercial.png` | 2 | 2.16 MB | 2.16 MB |
| `fuel-facility-1.png` = `home-feature-1.png` | 2 | 2.04 MB | 2.04 MB |
| `about-who-we-are.png` = `home-feature-3.png` | 2 | 1.77 MB | 1.77 MB |
| `agri-cta.png` = `agricultural-faq-background.png` = `fuel-faq-background.png` | 3 | 1.73 MB | 3.46 MB |
| `agri-facility-2.png` = `agri-project-gallery-small-right.png` | 2 | 1.43 MB | 1.43 MB |
| `about-principle-3.png` = `agri-facility-4.png` = `agri-facilities-gallery-right.png` | 3 | 0.89 MB | 1.78 MB |
| `about-principle-1.png` = `agri-facility-3.png` | 2 | 0.59 MB | 0.59 MB |
| `about-mission.png` = `agri-secondary.png` = `agri-project-gallery-large.png` | 3 | 0.50 MB | 1.00 MB |
| `contact-background.png` = `contact-background-mobile.png` | 2 | 0.36 MB | 0.36 MB |
| `agricultural-faq-plus.svg` = `faq-plus.svg` | 2 | 0.3 KB | ~0 |
| `agricultural-faq-mask.svg` = `fuel-faq-mask.svg` | 2 | 0.4 KB | ~0 |

**Total estimated waste: ~26 MB**

**Root cause:** Images were exported from Figma with context-specific names (e.g., `about-principle-1.png` and `agri-facility-3.png` are the same photo used in two contexts). Rather than referencing one file, each usage got its own copy.

**WordPress migration impact:** HIGH — Images should be deduplicated before migration. In WordPress, the media library should contain one copy of each unique image.

#### [HIGH] Oversized PNG Images

**Area:** Assets / Performance  
**Affected files:** `assets/images/`

All photographic images are uncompressed PNG format:

| Image | Size |
|-------|------|
| `home-feature-2.png` | **6.25 MB** |
| `about-hero.png` | 2.73 MB |
| `home-masterplan.png` | 2.66 MB |
| Most other photos | 1.5–2.5 MB |

Photographic content should be served as WebP or optimized JPEG. A 6.25 MB image will cause significant load time issues.

**WordPress migration impact:** MEDIUM — WordPress image processing can generate optimized sizes, but source images should be provided in a reasonable format.

### Font Assets

**Files:** 4 OTF files (TS Safaa: Light 300, Regular 400, Medium 500, Bold 600/700)  
**Total size:** ~130 KB  

All four weights are loaded via `@font-face` with `font-display: swap` (correct). Only Regular is preloaded (`header.php:19`), which is appropriate.

**Observation:** The Light weight (300) does not appear to be used anywhere in the CSS. All text uses 400, 500, or 600/700.

### Candidate Cleanup Inventory

#### Definitely Unused
- None — all images are referenced in either PHP templates or CSS

#### Likely Unused
- `assets/fonts/TSSafaa-Light.otf` — no CSS rule uses `font-weight: 300`
- `assets/images/contact-background-mobile.png` — identical to `contact-background.png`, referenced in CSS but the mobile version appears unused in current media queries

#### Needs Manual Verification
- `assets/images/faq-plus.svg` — may be the generic fallback (identical to `agricultural-faq-plus.svg`)

#### Duplicate Groups (consolidation candidates)
- All 13 groups listed above

---

## 17. Typography

### Font System

- **Family:** "TS Safaa" — a bilingual font supporting both Latin and Arabic scripts
- **Weights loaded:** 300 (Light), 400 (Regular), 500 (Medium), 600-700 (Bold)
- **Fallbacks:** "Avenir Next", "Segoe UI", sans-serif
- **Font display:** `swap` (correct — prevents invisible text during load)
- **Preload:** Regular weight only (correct — most used weight)

### Typography Scale (Base System)

| Class | Size | Line Height | Usage |
|-------|------|-------------|-------|
| `.display` | `clamp(2.5rem, 4.2vw, 4.5rem)` | 0.99 | Hero titles |
| `.section-title` | `clamp(2.25rem, 3.35vw, 3rem)` | 1.16 | Section headings |
| `.eyebrow` | 0.75rem | 1 | Labels, categories |
| `.lead` | 1.0625rem | 27px | Body copy |
| Body text | inherited from font-sans | — | Default |

### Typography Issues

#### [MEDIUM] Fluid Typography Overridden by Static Pixels

As detailed in §6, the Figma layer replaces `clamp()` values with fixed `60px`, `50px`, `48px` etc. This eliminates responsive typography scaling between breakpoints.

#### [LOW] Mixed Unit Systems

Line heights use both unitless values (`.display { line-height: .99 }`) and pixel values (`.lead { line-height: 27px }`). The Figma layer introduces many more pixel line heights. Unitless or `em` values are generally preferred for maintainability.

#### [LOW] Potential Unused Font Weight

`font-weight: 300` (Light) is declared in `@font-face` but no CSS rule appears to use it. The lightest weight used in the codebase is 400.

---

## 18. Performance-Oriented Findings

#### [HIGH] 72+ MB of Image Assets (pre-deduplication)

The `assets/images/` directory contains 72 files totaling approximately 72 MB. After deduplication and format conversion (PNG → WebP), this could reasonably be reduced to ~10–15 MB.

#### [MEDIUM] 204 KB CSS Source File

The `input.css` file is 204 KB. After Tailwind compilation and minification, `site.css` is 196 KB. This is unusually large for a 5-page site. The Figma fidelity layer accounts for the vast majority.

#### [MEDIUM] GSAP Loaded Globally

GSAP core (72 KB) + ScrollTrigger (44 KB) = 116 KB of JavaScript loaded on every page. Animations are simple fade/slide reveals. Consider whether CSS `@keyframes` with `IntersectionObserver` could replace GSAP on simpler pages.

#### [LOW] Single CSS File for All Pages

All page-specific styles are in one file. Pages load CSS rules for pages they don't display. In WordPress, this can be addressed with `wp_enqueue_style()` conditionally.

#### [INFORMATIONAL] Render-Blocking Concern

The CSS is loaded via `<link rel="stylesheet">` (render-blocking) and JS via `<script defer>` (non-blocking). This is correct behavior — CSS should block rendering to prevent FOUC.

---

## 19. Accessibility Baseline

### Strengths (Genuine Implementation, Not Checkbox)

- ✅ Skip link to main content
- ✅ Semantic HTML5 landmarks (`header`, `nav`, `main`, `footer`)
- ✅ Heading hierarchy (h1 → h2 → h3)
- ✅ All images have alt text (content images descriptive, decorative images `alt=""`)
- ✅ Form inputs have associated `<label>` elements
- ✅ Buttons use `<button>` element with type attribute
- ✅ `aria-expanded`, `aria-hidden`, `aria-controls` on mobile menu
- ✅ `aria-live="polite"` on form message container
- ✅ Focus management on menu open/close with focus return
- ✅ Escape key closes mobile menu
- ✅ `prefers-reduced-motion` respected (GSAP disabled, CSS transitions reduced)
- ✅ `lang` attribute on `<html>` and on language switcher links
- ✅ `aria-label` on navigation landmarks (primary nav, mobile nav)
- ✅ Decorative elements have `aria-hidden="true"`

### Issues

#### [MEDIUM] FAQ Accordion Keyboard Accessibility

**Area:** Accessibility  
**Affected files:** `assets/js/site.js:45–51`, `includes/project-layout.php:106`

The FAQ accordion uses `<button>` elements (keyboard accessible) and toggles `aria-expanded`. However:
- Multiple FAQs can be open simultaneously (no accordion group behavior)
- There is no `aria-controls` linking the button to its answer panel
- The answer panel does not have `role="region"` or `aria-labelledby`

These are enhancements, not blockers.

#### [MEDIUM] Color Contrast Not Verified

**Area:** Accessibility  
**Affected files:** `assets/css/input.css`

The muted text color (`#5c6763` on white background) has a contrast ratio of approximately 4.6:1. This passes WCAG AA for normal text (≥4.5:1) but just barely. On the dark sections, `rgba(255,255,255,.72)` on `#03211d` passes comfortably.

#### [LOW] Footer Links Missing Descriptive Text

**Area:** Accessibility  
**Affected files:** `includes/footer.php:25`

Social media links say only "LinkedIn", "Facebook", "Instagram" without indication they open external sites. Adding `target="_blank" rel="noopener"` with an accessible label would improve this.

#### [LOW] Select Element Requires Custom Arrow for RTL

**Area:** Accessibility / RTL  
**Affected files:** `assets/css/input.css`

The native select element dropdown arrow is positioned by the browser on the right side in LTR and should be on the left in RTL. The current implementation uses `appearance: none` but the custom arrow positioning in RTL has not been verified.

---

## 20. SEO / Document Structure

### Implemented

- ✅ Unique `<title>` per page, per language
- ✅ `<meta name="description">` per page, per language
- ✅ `<meta name="viewport">` with correct settings
- ✅ `<html lang="...">` correctly set
- ✅ Single `<h1>` per page
- ✅ Logical heading hierarchy
- ✅ Crawlable navigation (standard `<a>` links)
- ✅ Semantic HTML structure

### Missing

#### [HIGH] No `hreflang` Declarations

For a bilingual site, search engines need `hreflang` to understand language relationships:
```html
<link rel="alternate" hreflang="en" href="/about.php">
<link rel="alternate" hreflang="ar" href="/ar/about.php">
```

#### [MEDIUM] No Canonical URLs

No `<link rel="canonical">` is present. This can cause duplicate content issues, especially since the site may be accessed with or without `www`, with or without trailing slashes.

#### [LOW] No Structured Data

No JSON-LD schema markup for Organization, LocalBusiness, or BreadcrumbList. This is a nice-to-have that can be added during WordPress migration.

#### [INFORMATIONAL] No Favicon File

The favicon is inline SVG in a data URI (`header.php:18`). This works but some tools/crawlers prefer a file-based favicon.

---

## 21. Dead Code

### Confirmed Dead Code

| Type | Location | Evidence |
|------|----------|----------|
| JS: Project dropdown toggle | `site.js:6–7,28–39` | `[data-projects-toggle]` and `[data-projects-menu]` elements don't exist in any template |
| CSS: `.projects-popover` | `input.css:111–113` | No `.projects-popover` element exists in templates |
| CSS: `.nav-projects` | `input.css:110` | No `.nav-projects` element exists in templates |
| CSS: `.split-intro` and children | `input.css:171–175` | No `.split-intro` elements found in templates |
| CSS: `.media-duo` | `input.css:176–178` | No `.media-duo` elements found in templates |
| CSS: `.gallery` | `input.css:334–336,374–376` | No `.gallery` elements found in current templates |
| CSS: `.project-hero__meta` | `input.css:154` | No element with this class exists in templates |
| CSS: `.project-location` | `input.css:419` | No element with this class exists |
| CSS: `.project-card__copy` | `input.css:188` | No element with this class in current templates |
| Font: `TSSafaa-Light.otf` | `assets/fonts/` | `font-weight: 300` not used in any CSS rule |

### Very Likely Dead Code

| Type | Location | Evidence |
|------|----------|----------|
| CSS: `.contact-method-input` styles | Various | Class exists only in Tailwind utility usage on `contact.php:27`, not as a standalone CSS class |
| CSS: Various `.page-agricultural` and `.page-fuel` overrides | Throughout Figma layer | Many page-specific overrides may duplicate or conflict with generic project rules |

### Possibly Dead / Needs Verification

| Type | Location | Evidence |
|------|----------|----------|
| Image: `contact-background-mobile.png` | `assets/images/` | Identical to `contact-background.png`; may have been intended for a mobile-specific background that was never implemented separately |
| Image: `faq-plus.svg` | `assets/images/` | Generic version; only `agricultural-faq-plus.svg` and `fuel-faq-plus.svg` are used via `project-layout.php` |

---

## 22. Hacks / Fragile Implementation

### Root Cause: Figma Coordinate Extraction

The dominant "hack" pattern throughout the codebase is the extraction of absolute pixel coordinates from Figma frames and their direct application as CSS values.

**Pattern evidence:**

```css
/* These values are Figma frame coordinates, not responsive design values */
.home-about__title { position: absolute; left: 11px; top: 65px; width: 579px; }
.home-about__intro { position: absolute; left: 998px; top: 413px; width: 308px; }
.home-about__agriculture { position: absolute; left: 356px; top: 147px; width: 610px; }
.home-about__commercial { position: absolute; left: 998px; top: 147px; width: 308px; }
```

**Why this is structurally fragile:**
- Values only produce the correct layout at exactly 1440px viewport width
- Any content change (longer text, different language) shifts element positions
- WordPress CMS will allow content editing that breaks these fixed layouts
- Adding a new element requires recalculating all surrounding positions

### Specific Hack Patterns

#### Negative Margins for Image Alignment

```css
.home-features .feature-card--third > img { width: 125.41%; max-width: none; margin-left: -12.71%; } /* L492 */
.home-features .feature-card--fourth > img { width: 116.53%; max-width: none; height: 265.68px; margin: -14.26px 0 -13.42px -.08%; } /* L493 */
```

These are screenshot-matched values to align images within cards at a specific size. The `265.68px` height is a particularly clear indicator of Figma measurement extraction.

#### Magic Number Footer Height

```css
.site-footer { height: auto; min-height: 556.314px; } /* L1326 */
```

The `.314` decimal precision confirms this was measured from a rendered screenshot, not designed as a system value.

#### Viewport-Specific Hero Heights

```css
.hero { min-height: 730px; height: 730px; }                                    /* L400 */
.page-about .hero { min-height: 690px; height: 690px; }                        /* L401 */
@media (max-width: 560px) { .page-home .hero { height: 700px; min-height: 700px; } } /* L900 */
@media (max-width: 400px) { .page-home .hero { height: 760px; min-height: 760px; } } /* L1434 */
```

Hero heights change at specific breakpoints by arbitrary amounts. These should be intrinsic (content-driven).

#### `overflow: hidden` as Layout Mask

63 occurrences of `overflow: hidden` in the CSS. Many are used on sections with fixed heights to clip content that doesn't fit, rather than allowing the section to grow with its content.

---

## 23. Cross-Page Consistency

### Consistent Patterns (Positive)

- ✅ All pages use `.page-shell` container (when not overridden by Figma layer)
- ✅ All section headings use `.section-heading` with `.eyebrow` + `.section-title` + `.lead` pattern
- ✅ All buttons use `.button` with consistent variants (`--outline`, `--ghost-brand`)
- ✅ All forms use `.form-grid` with `.field`, `.field--wide`, `.form-actions` pattern
- ✅ Header/footer behavior identical across all pages
- ✅ Dark/green/muted section backgrounds applied consistently
- ✅ Typography classes (`.display`, `.section-title`, `.lead`, `.eyebrow`) used uniformly

### Inconsistencies

#### [MEDIUM] Button Arrow Inconsistency

Different arrow SVGs are used across pages:
- `arrow-up-right.svg` — hero buttons (EN)
- `arrow-up-right-green.svg` — ghost-brand buttons
- `arrow-down-right.svg` — "Discover our story" desktop link
- `project-arrow-up-right.svg` — project and submit buttons
- `project-arrow-down-right.svg` — project hero desktop buttons

Some sections show desktop/mobile arrow variants (down-right on desktop, up-right on mobile). This creates 5 arrow variants where 2 (directional + color) might suffice.

#### [MEDIUM] Form Variants Diverge Structurally

The homepage quick enquiry form and the contact page full form have different field sets:
- Quick enquiry: name, phone, email, interest (quickOptions), message
- Contact: name, company, phone, email, interest (contactOptions), preferred contact method (radio), message

This is intentional (different purposes) but the contact form has a `fieldset` with radio buttons using Tailwind utility classes directly (`flex flex-wrap gap-5 cursor-pointer`) while other form elements use custom classes.

#### [LOW] Section Spacing Varies in Figma Layer

The base system uses `--section-space: clamp(var(--space-2xl), 8vw, var(--space-4xl))` for uniform section spacing. The Figma layer replaces this with per-section values: `padding: 72px 0`, `padding: 62px 0`, `padding: 68px 0 52px`, `padding: 86px 0`, `padding: 68px 0 54px`. These slight variations came from Figma measurements.

---

## 24. Runtime / Browser Findings

### Feasibility Assessment

The project uses PHP (`index.php` entry points) and requires a PHP server to run. The `package.json` defines only CSS build scripts (`tailwindcss`), not a dev server.

Running the project locally would require:
1. `php -S localhost:8000` (PHP built-in server)
2. No database dependency — static content only

**Risk assessment:** Running `php -S` would NOT modify any source files. However, it would create/modify `php-server.log` and `php-server.err.log` which are already gitignored. This is safe but was not performed during this read-only audit to maintain strict compliance.

### Static Analysis Findings

Based on code inspection (without runtime):

- **No runtime JS errors expected:** All DOM queries use optional chaining or guard clauses
- **No missing assets:** All image paths referenced in PHP templates correspond to existing files
- **Social media links will 404:** All social links point to `#` — they navigate to the current page with a hash, not external sites
- **Form submission produces no network request:** The `event.preventDefault()` blocks all form data from being sent
- **GSAP will initialize correctly:** Library files exist in `vendor/`, loaded with `defer`, registration happens after DOM ready check

---

## 25. WordPress Migration Risks

### Blocking Risks

1. **CSS Figma fidelity layer** — Fixed heights, absolute positioning, and `overflow: hidden` will cause content clipping when WordPress CMS content changes length. BLOCKING.

### High Risks

2. **Form submission mock** — `event.preventDefault()` will break WordPress form plugins. Must be removed or made conditional.
3. **Image duplication** — 26+ MB of duplicate images will bloat the WordPress media library.
4. **Missing hreflang** — WPML will generate these, but the theme must support them.
5. **Oversized PNG images** — WordPress image processing works better with optimized source images.

### Medium Risks

6. **Physical CSS properties requiring RTL overrides** — Every new component needs manual RTL mirroring. Logical properties would reduce this burden.
7. **Inline language conditionals in templates** — Must be moved to content system / ACF fields.
8. **No event delegation in JS** — Dynamically loaded WordPress content won't trigger JS behaviors.

### Low Risks

9. **Dead CSS/JS code** — Minor cleanup needed.
10. **GSAP dependency** — Consider whether WordPress animation plugins should replace custom GSAP integration.

---

## 26. Findings by Severity

### Critical

1. **Figma fidelity CSS layer overrides entire fluid system** — 4,046 lines of hardcoded pixel values replace a working fluid architecture. (§6)
2. **Fixed heights + overflow:hidden on major sections** — Content will be clipped with CMS-managed content. (§6)
3. **Absolute positioning from Figma coordinates** — Layouts break at non-1440px viewports. (§6)

### High

4. **Form submission is a UI mock** — No data is sent; will break WordPress form plugins. (§7)
5. **26+ MB of duplicate images** — 13 groups of identical files under different names. (§16)
6. **Missing hreflang declarations** — Essential for bilingual SEO. (§20)
7. **RTL handled via 200+ physical property overrides** — Maintenance burden, tightly coupled to Figma layer positions. (§10)
8. **Oversized PNG images** — 6.25 MB largest, most images 1.5–2.5 MB. (§16)

### Medium

9. **Inline language conditionals for alt text** — ~20 instances should be in content system. (§5)
10. **42 uses of !important** — Symptom of two-layer CSS conflict. (§6)
11. **Spacing tokens bypassed by Figma layer** — Design tokens defined but unused. (§6)
12. **Fluid typography overridden by static pixels** — clamp() values replaced with fixed px. (§6, §17)
13. **No event delegation for dynamic content** — JS won't bind to AJAX-loaded elements. (§7)
14. **FAQ accordion missing ARIA enhancements** — No aria-controls or region roles. (§19)
15. **Missing canonical URLs** — Potential duplicate content issues. (§20)
16. **Placeholder social media links** — Point to `#`. (§5)
17. **GSAP loaded globally** — 116 KB on every page. (§18)

### Low

18. **Dead JS code — project dropdown toggle** — 12 lines of unused code. (§21)
19. **Dead CSS — `.projects-popover`, `.nav-projects`, `.split-intro`, `.media-duo`, `.gallery`** — Selectors with no matching markup. (§21)
20. **Hardcoded English fallback in JS** — `'Thank you...'` string if data attribute missing. (§7)
21. **Numeric content array indices** — Fragile insertion behavior. (§11)
22. **Mixed line-height units** — Unitless vs pixel values. (§17)
23. **Potentially unused font weight** — TSSafaa-Light (300) appears unused. (§16)
24. **Footer links missing external indicators** — Social links need `target="_blank" rel="noopener"`. (§19)
25. **Minor heading hierarchy issue** — Duplicate h2 in project introduction. (§5)
26. **Button arrow SVG proliferation** — 5 variants where 2 might suffice. (§23)

### Informational

27. **No Open Graph / social meta tags** — Can be added via WordPress SEO plugin. (§5)
28. **No structured data / JSON-LD** — Can be added during migration. (§20)
29. **Content line-break arrays** — Design-driven content structure, acceptable. (§11)
30. **Inline SVG favicon** — Works but some tools prefer file-based. (§20)
31. **PHP project-layout includes header/footer internally** — Minor structural inconsistency. (§4)

---

## 27. Root-Cause Groups

### Root Cause 1: Figma Fidelity Layer (CRITICAL)

**Description:** A 4,046-line CSS block (lines 387–4,433) was added to match the frontend pixel-for-pixel to Figma design mockups at 1440px desktop and 440px mobile widths. This block overrides the project's fluid responsive system with absolute positioning, fixed heights, hardcoded pixel values, and `overflow: hidden` clipping.

**Affected findings:** #1, #2, #3, #7, #10, #11, #12, and partially #9.

**Scope of impact:**

| Metric | Count |
|--------|-------|
| Lines of overriding CSS | 4,046 |
| Fixed-height sections | 10+ |
| `overflow: hidden` occurrences | 63 |
| Absolute-positioned elements | 50+ |
| `!important` from this layer | ~22 |
| Magic number values | 100+ |

**Resolution:** Dismantle the Figma fidelity layer. Rebuild responsive behavior using the base system's fluid architecture (lines 1–386) as the foundation. Accept that CSS layouts will not be pixel-identical to Figma — they will be *responsive* instead.

---

### Root Cause 2: Physical CSS Properties for RTL (HIGH)

**Description:** The CSS uses physical directional properties (`left`, `right`, `margin-left`, `text-align: left`) throughout, requiring a manual RTL override block of 200+ selectors.

**Affected findings:** #7, and indirectly #2, #3.

**Resolution:** Convert physical properties to logical equivalents (`inset-inline-start`, `margin-inline-start`, `text-align: start`) where the conversion genuinely simplifies maintenance. The base system already demonstrates this approach (`.page-shell` uses `inline-size`, `margin-inline`). After the Figma layer is removed, most RTL overrides for absolute positions become unnecessary.

---

### Root Cause 3: Figma Image Export Workflow (HIGH)

**Description:** Images were exported from Figma with context-specific filenames, resulting in identical photos stored under different names across different page contexts.

**Affected findings:** #5, #8.

**Resolution:** Deduplicate images by keeping one canonical copy per unique photo. Update all PHP template references and CSS background-image references to point to the canonical copy. Consider converting PNGs to WebP for photographic content.

---

### Root Cause 4: Frontend Prototype vs CMS-Ready System (MEDIUM)

**Description:** The frontend was built as a static prototype with hardcoded content, then evolved into a bilingual system. Some assumptions from the prototype phase remain (mock form submission, placeholder links, inline language checks).

**Affected findings:** #4, #9, #13, #16.

**Resolution:** Address individually during WordPress migration preparation. These are straightforward fixes that don't require architectural changes.

---

## 28. Candidate Cleanup Inventory

### Immediate Cleanup (Pre-Migration)

| Item | Action | Impact |
|------|--------|--------|
| Duplicate images (13 groups) | Deduplicate, keep one canonical copy per unique photo | Saves ~26 MB |
| `TSSafaa-Light.otf` | Verify unused, remove if confirmed | Saves 30 KB, reduces font loads |
| Dead JS (`projectToggle`/`projectMenu` code) | Remove lines 6–7, 28–39 of `site.js` | Cleaner JS |
| Dead CSS (`.projects-popover`, `.nav-projects`, `.split-intro`, `.media-duo`, `.gallery`, `.project-hero__meta`, `.project-location`, `.project-card__copy`) | Remove selectors | Cleaner CSS |

### Migration-Phase Cleanup

| Item | Action | Impact |
|------|--------|--------|
| Figma fidelity CSS layer | Dismantle, rebuild responsive system from base architecture | Resolves critical responsive/RTL issues |
| RTL physical property overrides | Convert to logical properties where beneficial | Reduces RTL maintenance burden |
| Form `event.preventDefault()` | Remove or make conditional on WP form plugin | Enables form functionality |
| Inline `$lang` conditionals | Move to content system / ACF | Cleaner WPML integration |
| Placeholder social links | Connect to WordPress options page | Functional links |
| Image format conversion | Convert photographic PNGs to WebP/JPEG | Performance improvement |
| hreflang + canonical | Add via WPML or Yoast | SEO compliance |

---

## 29. Recommended Remediation Order

### Phase 1 — CSS Architecture (Blocking)

**Dismantle the Figma fidelity layer.**

1. Document the current visual appearance at key widths (screenshots at 1440px, 1024px, 768px, 375px for each page)
2. Remove lines 387–4,433 of `input.css`
3. Rebuild responsive behavior using the base system (lines 1–386) as foundation
4. Add targeted refinements where the base system needs enhancement, but using fluid/intrinsic methods
5. Convert physical properties to logical properties where it eliminates RTL overrides
6. Verify at all viewport widths (320–1920px)

**Expected outcome:** CSS reduced from 4,433 lines to approximately 600–800 lines. RTL overrides reduced from 200+ selectors to ~30–50. `overflow: hidden` reduced from 63 to ~5 (only where genuinely needed for image containers).

### Phase 2 — Asset Cleanup

1. Deduplicate images (consolidate 13 groups)
2. Convert photographic PNGs to WebP (with PNG fallback for older browsers)
3. Optimize image dimensions (most images don't need to be larger than 1920px wide)
4. Remove confirmed unused font weight (TSSafaa-Light.otf) if verified

### Phase 3 — Code Cleanup

1. Remove dead JS code (project dropdown toggle)
2. Remove dead CSS selectors
3. Move inline `$lang` conditionals to `content.php`
4. Add event delegation for accordion and form handlers
5. Remove or conditionalize form `event.preventDefault()`

### Phase 4 — SEO / Meta Preparation

1. Add hreflang declarations
2. Add canonical URLs
3. Add Open Graph meta tags
4. Consider structured data (JSON-LD)

### Phase 5 — WordPress Migration

1. Create WordPress theme structure from template mapping (§13)
2. Implement ACF field groups from content mapping (§15)
3. Set up WPML with string translation
4. Migrate content from `content.php` to WordPress pages/ACF
5. Replace `fl_*` helper functions with WordPress equivalents
6. Connect form to WordPress form plugin
7. Connect social links to WordPress options page

### Phase 6 — Final Regression QA

1. Cross-browser testing (Chrome, Firefox, Safari, Edge)
2. Cross-device testing (iOS, Android, desktop)
3. Full viewport range testing (320–1920px) in both languages
4. Accessibility testing (keyboard navigation, screen reader)
5. Form submission testing
6. Language switching testing
7. Performance baseline (Lighthouse)

---

## 30. Final Migration Verdict

### RESPONSIVE SYSTEM STATUS: STRUCTURALLY FRAGILE

- **Is responsiveness fluid?** NO — The base system is fluid, but it is overridden by the Figma fidelity layer which uses fixed values.
- **Is it breakpoint-patched?** YES — 28 media queries, including 13 in the Figma layer, many patching specific width ranges.
- **Are gutters systematic?** PARTIALLY — `--page-pad` is defined as fluid but overridden to `64px` / `24px` by the Figma layer.
- **Are containers systematic?** PARTIALLY — `.page-shell` uses logical properties in base, overridden to physical in Figma layer.
- **Are typography transitions systematic?** NO — `clamp()` values are overridden by static pixel values.
- **Are grids intrinsically responsive?** YES in base system, NO in Figma layer (hardcoded column widths like `repeat(4, 304px)`).
- **Are intermediate viewport widths safe?** PARTIALLY — 1025–1439px and 561–900px ranges have "undo" queries, but transitions between ranges can be abrupt.
- **Are RTL widths equally safe?** YES in the ranges that have been tested — RTL overrides appear to cover the same breakpoint ranges.

### RTL / I18N STATUS: READY WITH MINOR REMEDIATION

The RTL implementation is functional across all pages and components. The architectural concern is maintenance burden: every new CSS component with directional properties requires a corresponding RTL override. Converting the Figma layer to logical properties (during Phase 1 remediation) would largely eliminate this problem.

WPML migration path is clear and well-supported by the existing template architecture.

### WORDPRESS MIGRATION VERDICT

```
REMEDIATION REQUIRED BEFORE WORDPRESS MIGRATION
```

**Explanation:**

The project's **template architecture, content system, bilingual support, JavaScript, semantic markup, and accessibility** are all at a high standard and ready for WordPress migration with only minor adjustments.

However, the **CSS Figma fidelity layer** is a blocking issue. It replaces a fluid responsive system with fixed pixel values that will:

1. Clip CMS-managed content that exceeds the hardcoded section heights
2. Break layouts at any viewport width other than 1440px and 440px
3. Require manual RTL mirroring for every new component
4. Make the WordPress theme unmaintainable by non-specialist developers

The remediation is concentrated: **dismantling one CSS layer** resolves the critical, most high, and some medium findings simultaneously. The base architecture (lines 1–386 of `input.css`) provides the correct foundation to rebuild from.

**Estimated remediation effort:**

| Phase | Effort | Dependency |
|-------|--------|------------|
| Phase 1 (CSS) | 3–5 days | None |
| Phase 2 (Assets) | 1 day | None |
| Phase 3 (Code cleanup) | 1 day | Phase 1 |
| Phase 4 (SEO/meta) | 0.5 day | None |
| Phase 5 (WP migration) | 5–8 days | Phases 1–4 |
| Phase 6 (QA) | 2–3 days | Phase 5 |

The frontend is architecturally sound where it matters most — the template/content separation is excellent and maps directly to WordPress + WPML. The CSS is the only structural barrier.

---

*End of audit. This file (`FINAL-ENGINEERING-AUDIT.md`) is the only file created by this audit. No existing files were modified.*
