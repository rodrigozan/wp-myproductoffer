<?php get_header(); ?>

<main class="container" role="main" aria-label="Latest posts">
  <section class="content-area">
    <h1 class="page-title"><?php _e('Latest Content', 'wp-productoffer'); ?></h1>

    <?php
    if (have_posts()) :
      echo '<div class="post-grid">';

      while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('post-item'); ?> itemscope itemtype="https://schema.org/CreativeWork">
          <a href="<?php the_permalink(); ?>" class="post-link">
            <?php if (has_post_thumbnail()) : ?>
              <div class="post-thumbnail">
                <?php the_post_thumbnail('medium', ['loading' => 'lazy', 'itemprop' => 'image']); ?>
              </div>
            <?php endif; ?>

            <div class="post-body">
              <h2 class="post-title" itemprop="headline"><?php the_title(); ?></h2>
              <p class="post-excerpt"><?php echo get_the_excerpt(); ?></p>
            </div>
          </a>
        </article>
      <?php endwhile;

      echo '</div>';

      // Pagination
      the_posts_pagination([
        'mid_size'  => 2,
        'prev_text' => __('« Prev', 'wp-productoffer'),
        'next_text' => __('Next »', 'wp-productoffer'),
      ]);
    else : ?>
      <section class="no-content">
        <h2><?php _e('No posts found', 'wp-productoffer'); ?></h2>
        <p><?php _e('It seems there is nothing here yet.', 'wp-productoffer'); ?></p>
      </section>
    <?php endif; ?>
  </section>
</main>

<?php get_footer(); ?>
