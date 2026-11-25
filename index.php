<?php
/** Define ABSPATH as this file's directory */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}
require_once ABSPATH . 'site-lang.php';
?>
<!DOCTYPE html>
<html lang="<?php echo htmlspecialchars( t( 'html_lang' ), ENT_QUOTES, 'UTF-8' ); ?>">
    <?php
    require_once ABSPATH . 'site-html-head.php';
    ?>

    <body>
        <?php
        require_once ABSPATH . 'site-header.php';
        require_once ABSPATH . 'site-hero.php';
        require_once ABSPATH . 'site-about.php';
        require_once ABSPATH . 'site-storyteller.php';
        require_once ABSPATH . 'site-play.php';
        require_once ABSPATH . 'site-content-warning.php';
        require_once ABSPATH . 'site-contact.php';
        require_once ABSPATH . 'site-footer.php';
        ?>
    </body>
</html>