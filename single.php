<?php get_header(); ?>

    <?php
    while (have_posts()) {
        the_post(); ?>
            

    <?php } ?> 

<?php get_footer(); ?>

