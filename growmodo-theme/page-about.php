<?php get_header(); ?>

<main class="container">
  <section class="hero">
    <h1><?php echo esc_html(get_the_title()); ?></h1>
    <p>sample lang po ito.</p>
  </section>

  <section class="services-grid">
    <div class="service-card">
      <h3>Our Mission</h3>
      <p>Sample mission.</p>
    </div>

    <div class="service-card">
      <h3>Our Values</h3>
      <p>Value samp.</p>
    </div>

    <div class="service-card">
      <h3>How We Work</h3>
      <p>Sample work</p>
    </div>
  </section>
</main>

<?php get_footer(); ?>
