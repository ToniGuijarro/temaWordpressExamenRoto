<?php get_header(); ?>

<?php while (have_posts()) {
    the_post(); ?>

    <div class="blog-post">
        <h2 class="blog-post-title"> <?php the_title(); ?> </h2>
        <p class="blog-post-meta">
            <?php the_date(); ?> por <?php the_author(); ?>
        </p>

        <?= the_excerpt(); ?>

        <a href="<?= the_permalink(); ?>">Ver mas...</a>
    </div>
<?php } ?>


<div class="nav-previous alignleft"><?php previous_posts_link('Entradas más antiguas'); ?></div>
<div class="nav-next alignright"><?php next_posts_link('Entradas más recientes'); ?></div>

</div>
</div>
</main>
</body>

<footer class="blog-footer">
    <div class="contariner">
        <div class="row">
            <div class="col-md-6"><?php echo get_bloginfo("description") ?> </div>
            <div class="col-md-6">
               Menú
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
          <?php
          wp_nav_menu(
            array(
              'theme_location'  => 'temazo_menu_principal',
              'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
              'container'       => 'div',
              'container_class' => 'collapse navbar-collapse',
              'container_id'    => 'navbarNav',
              'menu_class'      => 'navbar-nav mr-auto',
              'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
              'walker'          => new WP_Bootstrap_Navwalker(),
            )
          );
          ?>
      </div>
    </nav>
</footer>

</html>