<?php get_header(); ?>

<section class="section-block bg-lr" role="main">
    <div class="container contact">
      <h2 class="h1">Kontakt</h2>
      <p>Du hast eine Geschäftsanfrage? Schreibe mir eine E-Mail an <a href="mailto:w.mielcarek@braweria.de">w.mielcarek@braweria.de</a> oder fülle das Formular unten aus! 
      Willst du mir lieber nur Hallo sagen und ein bisschen chatten? Dann schicke mir eine Private Nachricht auf meinen Social Media Kanälen.</p>
      <?php echo do_shortcode('[contact-form-7 id="116" title="kontakt-contact-page"]'); ?>
      <div class="contact-social">
        <a href="https://twitter.com/Braweria"><button title="Zu Twitter/braweria wechseln" aria-label="Zu meinem Twitter wechseln" class="primary"><i class="fab fa-twitter"></i></button></a>
        <a href="https://www.behance.net/braweria"><button title="Zu Behance/braweria wechseln" aria-label="Zu meinem Behance wechseln" class="primary"><i class="fab fa-behance"></i></button></a>
        <a href="https://github.com/Braweria"><button title="Zu GitHub/braweria wechseln" aria-label="Zu meinem Github wechseln" class="primary"><i class="fab fa-github"></i></button></a>
        <a href="https://www.reddit.com/u/braweria"><button title="Zu Reddit/braweria wechseln" aria-label="Zu meinem Reddit wechseln" class="primary"><i class="fab fa-reddit-alien"></i></button></a>
      </div>
    </div>
  </section>

<?php get_footer(); ?>