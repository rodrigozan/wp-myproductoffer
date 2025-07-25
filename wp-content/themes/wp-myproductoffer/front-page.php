<?php get_header(); ?>
<?php get_template_part('template-parts/hero'); ?>
<main class="product-grid container">
  <section>
    <h2>Discover Products That Boost Your Productivity</h2>
    <?php
      $products = new WP_Query([ 'post_type' => 'product', 'posts_per_page' => 6 ]);
      while ($products->have_posts()): $products->the_post();
        get_template_part('template-parts/product-card');
      endwhile;
      wp_reset_postdata();
    ?>
  </section>
  <?php get_template_part('template-parts/call-to-action'); ?>
</main>
<?php get_footer(); ?>