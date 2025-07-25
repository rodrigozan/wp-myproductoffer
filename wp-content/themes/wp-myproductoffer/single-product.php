<?php get_header(); ?>
<main class="container single-product">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article>
      <h1><?php the_title(); ?></h1>
      <div class="product-thumbnail"> <?php the_post_thumbnail('large'); ?> </div>
      <div class="product-content"> <?php the_content(); ?> </div>
      <a href="<?php echo get_field('affiliate_url'); ?>" target="_blank" class="btn btn-lg">Access Product</a>
    </article>
  <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>