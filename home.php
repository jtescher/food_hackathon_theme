<?php get_header(); ?>

<div class="main-container home">
    <div class='home-page'>
        <h1><?php bloginfo('title'); ?></h1>
        <h2><?php bloginfo('description'); ?></h2>
        <h3><?php echo get_option('contact_address'); ?></h3>
        <h3><?php echo get_option('contact_email'); ?></h3>
        <hr>
        <p class='description'><?php echo get_option('site_description'); ?></p>
    </div>
</div><!-- end of #main-container -->

<?php wp_footer(); ?>