<style>
    :root {
        --default-red: #780505;
        --default-red-hover: #840606;
        --off-white: #f8f9fa;
    }

    /* --- Global Styles --- */
    html {
        font-family: 'Open Sans', sans-serif;
        font-weight: 400;
        /* font-size: 18px; */
        font-size: 16px; /* 1rem = 16px everywhere */
        scroll-behavior: smooth;
    }
    body {
        /* Add padding to bottom to prevent content being hidden behind the fixed footer */
        font-size: 1.25rem;
        padding-bottom: 80px;
    }

    html {
        scroll-behavior: smooth;
    }

    .waterfall-regular {
        font-family: "Waterfall", cursive;
        font-weight: 400;
        font-style: normal;
    }

    /* --- Header / Navbar Styles --- */
    .navbar {
        transition: all 0.4s ease;
        background: transparent; /* Transparent by default */
        padding: 1rem 0;
    }

    .nav-link {
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: #fff !important;
        transition: color 0.3s ease;
    }

    .nav-link:hover {
        color: var(--default-red-hover) !important;
    }

    /* ==========================================================================
   Reusable SP by Night Logo Component (Use anywhere: hero, footer, cards)
   ========================================================================== */
    .logo {
        --fang-width: 0.2em;
        --blood-offset: 0.025em;
        --fang-top: 76%;
        --blood-color: #cc0000;

        --i-left-offset: 0.07em;
        --h-left-offset: 0.075em;

        font-family: "Open Sans", sans-serif;
        font-size: 3.75rem; /* Default size; override per section or via utility classes */
        font-weight: 800;
        line-height: 1;
        letter-spacing: -0.06em;
        text-decoration: none;
        display: inline-flex;
        align-items: baseline;
        isolation: isolate;
        /* transition: color 0.25s ease, font-size 0.4s ease; */
        transition: all 0.4s ease;
    }

    /* Explicit theme modifiers for standalone placement anywhere on the site */
    .logo--white,
    .logo--white:hover,
    .logo--white:focus {
        color: #ffffff;
    }

    .logo--black,
    .logo--black:hover,
    .logo--black:focus {
        color: #111111;
    }

    .logo-inner {
        display: inline-flex;
        align-items: baseline;
    }

    .logo-uppercase {
        text-transform: uppercase;
    }

    .logo-by {
        padding-left: 0.2em;
        padding-right: 0.2em;
    }

    .fang {
        position: relative;
        display: inline-block;
        text-transform: uppercase;
    }

    .fang::before,
    .fang::after {
        content: "";
        position: absolute;
        top: var(--fang-top);
        width: var(--fang-width);
        height: 0.5em;
        clip-path: polygon(0 0, 100% 0, 100% 100%);
    }

    /* Back layer: Always crimson */
    .fang::before {
        background-color: var(--blood-color);
        z-index: -2;
    }

    /* Front layer: Automatically matches current text color */
    .fang::after {
        background-color: currentColor;
        z-index: -1;
        transition: background-color 0.25s ease;
    }

    /* 'I' alignment */
    .fang-i::after {
        left: var(--i-left-offset);
    }
    .fang-i::before {
        left: calc(var(--i-left-offset) - var(--blood-offset));
    }

    /* 'H' first (left) leg alignment */
    .fang-h::after {
        left: var(--h-left-offset);
    }
    .fang-h::before {
        left: calc(var(--h-left-offset) - var(--blood-offset));
    }

    /* ==========================================================================
    Navbar-Specific Context Overrides (Automatic White <-> Black on Scroll)
    ========================================================================== */
    .navbar .logo,
    .navbar .logo:hover,
    .navbar .logo:focus {
        color: #ffffff;
    }

    .navbar.scrolled .logo,
    .navbar.scrolled .logo:hover,
    .navbar.scrolled .logo:focus {
        color: #111111;
        font-size: 2.25rem; /* Preserves your smooth shrink-on-scroll behavior */
    }

    /* --- Scrolled State Styles (Applied via JS) --- */
    .navbar.scrolled {
        background: rgba(255, 255, 255, 0.95); /* Solid(ish) White */
        backdrop-filter: blur(5px);
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        padding: 0.5rem 0;
    }

    .navbar.scrolled .navbar-brand {
        font-size: 2.25rem;
    }

    .navbar.scrolled .nav-link {
        color: #333 !important; /* Links turn dark */
    }

    .navbar.scrolled .nav-link:hover {
        color: var(--default-red-hover) !important;
    }

    /* Mobile Toggler: Dark lines when scrolled */
    .navbar.scrolled .navbar-toggler {
        border-color: rgba(0,0,0,0.1);
    }
    .navbar.scrolled .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%280, 0, 0, 0.55%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }


    /* --- Hero Section --- */
    #home {
        min-height: 100vh;
        background: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.5)),
        url('./site-assets/img/Sampa--Ponte-Octavio-Frias-de-Oliveira.jpg');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: white;
        padding-top: 0; /* Removed padding since header is now transparent overlay */
    }

    .hero-content h1 {
        font-size: 5.5rem;
        font-weight: 400;
        margin-bottom: 1rem;
    }

    .hero-content p {
        font-size: 1.5rem;
        opacity: 0.9;
    }

    .hero-storyteller {
        font-size: 3.75rem;
    }

    .hero-content .btn-primary {
        background-color: var(--default-red);
        border: none;
    }

    .hero-content .btn-primary:hover {
        text-decoration: none;
        background-color: var(--default-red-hover);
    }

    /* --- Content Sections --- */
    section {
        padding: 6rem 0;
    }

    section a,
    section .email {
        text-decoration: none;
        color: var(--default-red);
    }

    section a:hover,
    section .email:hover {
        text-decoration: underline;
        color: #8E1C55;
    }

    .bg-light-gray {
        background-color: #f8f9fa;
    }

    /* --- Custom Backgrounds --- */
    .bg-black {
        background-color: #111111;
        color: var(--off-white);
    }

    .bg-red {
        background-color: var(--default-red);
        color: var(--off-white);
    }

    .bg-black a,
    .bg-black a:hover,
    .bg-red a,
    .bg-red a:hover {
        color: var(--off-white);
    }

    /* --- Footer Styles --- */
    .fixed-footer {
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 60px;
        background-color: #212529;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 1030;
        border-top: 3px solid var(--default-red);
    }

    footer a {
        text-decoration: none;
        color: #FCF0F6;
    }

    footer a:hover {
        text-decoration: underline;
        color: #F9E2EE;
    }
</style>
