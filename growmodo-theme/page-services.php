<?php get_header(); ?>

<main class="container">
  <section class="hero">
    <h1><?php echo esc_html(get_field('services_heading') ?: 'Services'); ?></h1>
    <p><?php echo esc_html(get_field('services_intro') ?: 'What we do'); ?></p>
  </section>

  <section class="services-grid">
    <?php for ($i = 1; $i <= 3; $i++):
      $title = get_field("service_{$i}_title");
      $desc  = get_field("service_{$i}_desc");
      if (!$title && !$desc) continue;
    ?>
      <div class="service-box">
        <h3><?php echo esc_html($title); ?></h3>
        <p><?php echo esc_html($desc); ?></p>
      </div>
    <?php endfor; ?>
  </section>
</main>

<?php get_footer(); ?>
