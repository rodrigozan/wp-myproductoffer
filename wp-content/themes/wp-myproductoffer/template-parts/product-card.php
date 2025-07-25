<article class="product-card">
  <a href="<?php the_permalink(); ?>">
    <?php if (has_post_thumbnail()): ?>
      <div class="product-thumb"><?php the_post_thumbnail('medium'); ?></div>
    <?php endif; ?>
    <h3 class="product-title"><?php the_title(); ?></h3>
    <p class="product-excerpt"><?php the_excerpt(); ?></p>
    <a href="<?php echo get_field('affiliate_url'); ?>" class="btn btn-sm" target="_blank">View Product</a>
  </a>
</article>