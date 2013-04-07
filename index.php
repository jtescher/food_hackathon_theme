<?php get_header(); ?>

<div class="main-container">
    <h1 class='page-header'><?php bloginfo('title'); ?></h1>
    <div class='page-content'>
        <?php the_post(); ?>
        <?php the_content(); ?>
    </div>
</div><!-- end of #main-container -->

<?php get_footer(); ?>
