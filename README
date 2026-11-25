# SP by Night

Source code for **[spbynight.city](https://spbynight.city/)**, the official landing page and chronicle portal for **SP by Night**—an original *Vampire: The Masquerade* (5th Edition) tabletop RPG setting set in São Paulo, created and run by Head Storyteller **Tatiane Pires**.

---

## Features

- **Pure-CSS "Blooded Fangs" Wordmark:** Accessible live-text logo (`Open Sans 800`) built with layered `::before` and `::after` triangular pseudo-elements on the `I` and `H` of *NIGHT*, adapting automatically between light and dark themes via `currentColor`.
- **Lightweight PHP Bilingual Engine (`PT-BR` / `EN`):** Single-template architecture powered by structured translation dictionaries (`lang/pt.php` and `lang/en.php`), cookie persistence, `hreflang` tags, and clean `/pt` and `/en` Apache rewrite routes.
- **Responsive Dark/Light Section Cadence:** Built with Bootstrap 5, custom CSS variables, dynamic scroll-aware navbar transitions, and language-specific Open Graph preview cards.

---

## Project Structure

```text
├── .htaccess               # Apache rewrite rules for /en and /pt routes (placed above YOURLS)
├── index.php               # Main entry point assembling page sections
├── lang.php                # Language resolution, cookie persistence, and t() translation helper
├── site-html-head.php      # Document <head>, Open Graph meta tags, favicons, and versioned CSS link
├── site-header.php         # Fixed navbar, pure-CSS blooded fangs logo, and language switcher
├── site-hero.php           # Full-viewport hero section
├── site-about.php          # Setting overview section
├── site-storyteller.php    # Storyteller profile section
├── site-play.php           # Chronicles, platforms, and gameplay details section
├── site-contact.php        # Contact and community links section
├── site-footer.php         # Footer, copyright/Dark Pack notices, and Bootstrap JS bundle
├── lang/
│   ├── en.php              # English dictionary
│   └── pt.php              # Brazilian Portuguese dictionary
└── site-assets/
    ├── css/
    │   └── style.css       # Custom stylesheet, CSS variables, fang clip-paths, and SVG masks
    ├── img/                # Hero background, favicons, and language-specific Open Graph previews
    └── svg/                # Monochrome SVG icons rendered via CSS masks