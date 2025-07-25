<?php get_header(); ?>
<main class="container archive-products">
  <h1>All Productivity Products</h1>
  <div class="product-grid">
    <?php if (have_posts()) : while (have_posts()) : the_post();
      get_template_part('template-parts/product-card');
    endwhile; endif; ?>
  </div>
</main>
<?php get_footer(); ?>