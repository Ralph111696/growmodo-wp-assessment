<?php get_header(); ?>

<main class="container">
  <section class="hero">
    <h1><?php echo esc_html(get_the_title()); ?></h1>
    <p>Send us a message and we’ll get back to you shortly.</p>
  </section>

  <section class="contact-card">
    <form method="post" action="#">
      <p><label>Name<br><input type="text" name="name" required></label></p>
      <p><label>Email<br><input type="email" name="email" required></label></p>
      <p><label>Message<br><textarea name="message" rows="6" required></textarea></label></p>
      <p><button class="btn" type="submit">Send Message</button></p>
    </form>
  </section>
</main>

<?php get_footer(); ?>
