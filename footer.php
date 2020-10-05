<div>
    <nav class="navbar-mobile">
      <div class="current-page"><button id="open-main-menu" aria-expanded="false" aria-label="open-main-menu">Startseite</button>

        <?php
          wp_nav_menu(
            array(
              'theme_location'  => 'header-menu',
              'container'       => '',
              'menu_class' => 'drop-menu',
              'menu_id'    => 'main-menu'
            )
          );
        ?>

      </div>
      <div class="context-menu">
        <button id="open-context-menu" aria-expanded="false" aria-label="open-context-menu" class="context-menu-btn"><i class="fas fa-ellipsis-v"></i></button>
        
        <?php
          wp_nav_menu(
            array(
              'theme_location'  => 'context-menu',
              'container'       => '',
              'menu_class' => 'drop-menu',
              'menu_id'    => 'context-menu'
            )
          );
        ?>
        
      </div>
    </nav>
  </div>

  <footer class="bg-bb">
    <div class="container footer-content">
      <div>
        <span>Kleines Über Mich</span>
        <p>Hey 👋 Mein Name ist Wiktoria und ich bin Web Designerin & Entwicklerin, darauf fokussiert das Web barrierefrei zu gestalten!</p>
      </div>
      <div>
        <span>Kontakt Informationen</span>
        <p>Du kannst mich jederzeit erreichen. Schreibe mir einfach eine E-Mail und lass uns ins Gespräch kommen.</p>
        <p><a href="mailto:w.mielcarake@braweria.de">w.mielcarek@braweria.de</a></p>
      </div>
      <div>
        <span>Du kannst mich hier finden</span>

        <?php
          wp_nav_menu(
            array(
              'theme_location'  => 'social-menu',
              'container'       => ''
            )
          );
        ?>

      </div>
    </div>
    <div class="container footer-important">
      <div>
      <?php $upload_dir = wp_upload_dir(); ?>
        <img src="<?php echo $upload_dir['baseurl']; ?>/Braweria-Logo-White.svg" alt="Braweria Logo">
        <span>© <span class="current-year">2020</span> Wiktoria Mielcarek</span>
      </div>
      <img src="<?php echo $upload_dir['baseurl']; ?>/Braweria-Pfote-Weiss.svg" class="paw" alt="Pfote Icon">
      
      <?php
          wp_nav_menu(
            array(
              'theme_location'  => 'footer-menu',
              'container'       => 'nav'
            )
          );
        ?>

    </div>

  </footer>
  <?php wp_footer(); ?>
</body>

</html>