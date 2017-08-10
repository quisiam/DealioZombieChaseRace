<?php while (have_posts()) : the_post(); ?>
  <section id="hero">
  </section>

  <div class="wrap container" role="document">
    <div class="content row">
      <main class="main" style="height:400px">

            <?php get_template_part('templates/content', 'page'); ?>

<?php endwhile; ?>


    </main>
  </div>
</div>
