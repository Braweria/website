<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Braweria WP Theme</title>

  <!-- <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/5659311191.js" crossorigin="anonymous"></script>
  <link href="style.css" rel="stylesheet" type="text/css">
  <script src="assets/js/navigation.js" defer></script> -->
  <?php wp_head(); ?>
  <?php $upload_dir = wp_upload_dir(); ?>
</head>

<body>
  <header class="navbar">
    <nav class="container" aria-label="Haupt Menü">
      <div class="logo">
        <a href="#"><img alt="Braweria Logo" src="<?php echo $upload_dir['baseurl']; ?>/Braweria-Logo-White.svg" /></a>
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