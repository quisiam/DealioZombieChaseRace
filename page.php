<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/hero'); ?>
  <div class="wrap container" role="document">
    <div class="content row">
      <main class="main">
            <?php get_template_part('templates/content', 'page'); ?>
      </main>
<?php endwhile; ?>
