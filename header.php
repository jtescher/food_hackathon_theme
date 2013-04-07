<!doctype html>
<html>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/normalize.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />

    <?php wp_head(); ?>
    <style type="text/css">body.custom-background { background-position: center center; background-attachment: fixed; }</style>

    <!--[if lt IE 9]>
        <script src="<?php bloginfo( 'template_url' ); ?>/js/vendor/html5-3.6-respond-1.1.0.min.js"></script>
    <![endif]-->

</head>

<body <?php body_class(); ?>>
<!--[if lt IE 7]>
    <p class="chromeframe">
        You are using an <strong>outdated</strong> browser. Please
        <a href="http://browsehappy.com/">upgrade your browser</a> or
        <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a>
        to improve your experience.
    </p>
<![endif]-->

<div class="nav-container">
    <header>
        <nav>
            <ul class='default-home-link'>
                <li class="<?php if (is_home()) { echo 'current_page_item'; }; ?>"><a href="<?php echo home_url(); ?>">Home</a></li>
            </ul>
            <?php wp_nav_menu(); ?>
        </nav>
    </header>
</div>