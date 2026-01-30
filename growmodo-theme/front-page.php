<?php get_header(); ?>

<main class="container">
  <section class="hero">
    <h1>
      <?php echo esc_html(get_field('hero_title')); ?>
    </h1>

    <p>
      <?php echo esc_html(get_field('hero_subtitle')); ?>
    </p>

    <?php if (get_field('hero_button_text') && get_field('hero_button_url')) : ?>
      <a class="btn" href="<?php echo esc_url(get_field('hero_button_url')); ?>">
        <?php echo esc_html(get_field('hero_button_text')); ?>
      </a>
    <?php endif; ?>
  </section>
</main>

<?php get_footer(); ?>
