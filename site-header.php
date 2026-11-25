<!-- Header -->
<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand logo" href="#home" aria-label="SP by Night">
            <span class="logo-inner" aria-hidden="true">
                <span class="logo-uppercase">SP</span>
                <span class="logo-by">by</span>
                <span class="logo-uppercase">N</span>
                <span class="fang fang-i">I</span>
                <span class="logo-uppercase">G</span>
                <span class="fang fang-h">H</span>
                <span class="logo-uppercase">T</span>
            </span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#home">
                    <span class="svg-icon" style="--icon-url: url('/site-assets/svg/regular-dice-d10.svg');" aria-hidden="true"></span>
                    <?php echo t('nav.home'); ?></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="#about">
                    <span class="svg-icon" style="--icon-url: url('/site-assets/svg/regular-dice-d10.svg');" aria-hidden="true"></span>
                    <?php echo t('nav.about'); ?></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="#storyteller">
                    <span class="svg-icon" style="--icon-url: url('/site-assets/svg/regular-dice-d10.svg');" aria-hidden="true"></span>
                    <?php echo t('nav.storyteller'); ?></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="#play">
                    <span class="svg-icon" style="--icon-url: url('/site-assets/svg/regular-dice-d10.svg');" aria-hidden="true"></span>
                    <?php echo t('nav.play'); ?></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="#contact">
                    <span class="svg-icon" style="--icon-url: url('/site-assets/svg/regular-dice-d10.svg');" aria-hidden="true"></span>
                    <?php echo t('nav.contact'); ?></a>
                </li>
                <li class="nav-item ms-lg-3">
                    <a class="nav-link lang-switch"
                    href="/<?php echo t( 'nav.switch_code' ); ?>"
                    title="<?php echo t( 'nav.switch_aria' ); ?>"
                    aria-label="<?php echo t( 'nav.switch_aria' ); ?>">
                        <?php echo t( 'nav.switch_text' ); ?>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>