<?php get_header(); ?>

<main class="container">
  <section class="hero">
    <h1>Blog</h1>
    <p>Insights, updates, etc.</p>
  </section>

  <section class="blog-list">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article class="blog-card">
        <h2>
          <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
          </a>
        </h2>
        <p><?php the_excerpt(); ?></p>
      </article>
    <?php endwhile; endif; ?>
  </section>
</main>

<?php get_footer(); ?>
