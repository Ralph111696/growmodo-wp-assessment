<?php get_header(); ?>

<main class="container">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article class="blog-post">
      <h1><?php the_title(); ?></h1>
      <p class="blog-meta"><?php echo esc_html(get_the_date()); ?></p>

      <div class="blog-content">
        <?php the_content(); ?>
      </div>

      <p>
        <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>">
          ← Back to Blog
        </a>
      </p>
    </article>
  <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
