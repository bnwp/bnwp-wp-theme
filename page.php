<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
<section>
  <div class="bg-primary py-4">
    <div class="container d-lg-flex justify-content-between py-5">
      <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
        <h1 class="h3 mb-0 text-light"><?php the_title(); ?></h1>
      </div>
    </div>
  </div>
  <div class="container my-5">
    <?php the_content(); ?>
  </div>
</section>
<?php endwhile; ?>
<?php get_footer(); ?>
