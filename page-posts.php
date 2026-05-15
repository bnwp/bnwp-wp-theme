<?php get_header(); ?>
<div class="bg-primary py-4">
  <div class="container py-5 text-center text-lg-start"><h1 class="h3 mb-0 text-light"><?php the_title(); ?></h1></div>
</div>
<div class="container"><div class="row justify-content-center pt-5 mt-2"><section class="col-lg-9">
<?php
$paged = max(1, get_query_var('paged'));
$q = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 6, 'paged' => $paged));
if ($q->have_posts()) : while ($q->have_posts()) : $q->the_post(); ?>
  <article class="row border-bottom py-5">
    <div class="col-12 col-md-5">
      <span class="dateofpost"><?php echo esc_html(get_the_date('F j, Y')); ?></span>
      <h5><a class="fw-bold" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
      <div class="fs-6 pe-2 mb-2"><?php the_tags('<span class="badge text-bg-dark">#', '</span> <span class="badge text-bg-dark">#', '</span>'); ?></div>
    </div>
    <div class="col-12 col-md-7 text-justify"><?php echo esc_html(wp_trim_words(get_the_excerpt() ?: wp_strip_all_tags(get_the_content()), 70)); ?> <a class="text-muted" href="<?php the_permalink(); ?>">[আরও পড়ুন]</a></div>
  </article>
<?php endwhile; wp_reset_postdata(); else : ?><p>কোনো ব্লগ পোস্ট পাওয়া যায়নি।</p><?php endif; ?>
</section></div></div>
<?php get_footer(); ?>
