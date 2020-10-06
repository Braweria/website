<?php get_header(); ?>

<section class="section-block bg-lr">
    <div class="container contact">
      <h2 class="h1">Kontakt</h2>
      <p>Du hast eine Geschäftsanfrage? Schreibe mir eine E-Mail an <a href="mailto:w.mielcarek@braweria.de">w.mielcarek@braweria.de</a> oder fülle das Formular unten aus! 
      Willst du mir lieber nur Hallo sagen und ein bisschen chatten? Dann schicke mir eine Private Nachricht auf meinen Social Media Kanälen.</p>
      <?php echo do_shortcode('[contact-form-7 id="52" title="kontakt-frontpage"]'); ?>
      <div class="contact-social">
        <a href="https://twitter.com/Braweria" aria-label="Zu meinem Twitter wechseln"><button class="primary"><i class="fab fa-twitter"></i></button></a>
        <a href="https://www.behance.net/braweria" aria-label="Zu meinem Behance wechseln"><button class="primary"><i class="fab fa-behance"></i></button></a>
        <a href="https://github.com/Braweria" aria-label="Zu meinem Github wechseln"><button class="primary"><i class="fab fa-github"></i></button></a>
        <a href="https://www.reddit.com/u/braweria" aria-label="Zu meinem Reddit wechseln"><button class="primary"><i class="fab fa-reddit-alien"></i></button></a>
      </div>
    </div>
  </section>

<?php get_footer(); ?>