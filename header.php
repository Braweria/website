<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <?php wp_head(); ?>
  <?php $upload_dir = wp_upload_dir(); ?>
</head>

<body>
  <header class="navbar">
    <nav class="container" aria-label="Haupt Menü">
      <div class="logo">
        <a href="<?php echo get_home_url(); ?>"><img alt="Braweria Logo" src="<?php echo $upload_dir['baseurl']; ?>/Braweria-Logo-White.svg" /></a>
      </div>
      
      <?php
        wp_nav_menu(
          array(
            'theme_location' => 'header-menu',
            'container_class' => 'menu'
          )
        );
      ?>

    </nav>
  </header>