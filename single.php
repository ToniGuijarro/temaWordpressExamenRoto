<?php get_header(); ?>

    <?php
    while (have_posts()) {
        the_post(); ?>
            
            <?php include 'template-parts/content/content-single.php' ?>
    <?php } ?> 

<?php get_footer(); ?>

