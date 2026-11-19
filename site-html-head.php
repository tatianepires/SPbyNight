<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars( t( 'meta.description' ), ENT_QUOTES, 'UTF-8' ); ?>">
    
    <title><?php echo htmlspecialchars( t( 'meta.title' ), ENT_QUOTES, 'UTF-8' ); ?></title>

    <!-- Open Graph (Universal Social & Messaging Preview Standard) -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="SP by Night">
    <meta property="og:title" content="<?php echo htmlspecialchars( t( 'meta.title' ), ENT_QUOTES, 'UTF-8' ); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars( t( 'meta.description' ), ENT_QUOTES, 'UTF-8' ); ?>">
    <meta property="og:url" content="<?php echo htmlspecialchars( t( 'meta.url' ), ENT_QUOTES, 'UTF-8' ); ?>">
    <meta property="og:locale" content="<?php echo htmlspecialchars( t( 'meta.locale' ), ENT_QUOTES, 'UTF-8' ); ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars( t( 'meta.og_image' ), ENT_QUOTES, 'UTF-8' ); ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="<?php echo htmlspecialchars( t( 'meta.og_alt' ), ENT_QUOTES, 'UTF-8' ); ?>">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Waterfall&display=swap" rel="stylesheet">

    <?php
    require_once ABSPATH . 'style.php';
    ?>
</head>
