<?php get_header(); ?>

<div class="hero">
    <div class="container">
      <span>Moin, ich bin Wiktoria Mielcarek.</span>
      <h1>Ich erstelle Webseiten die von allen benutzt werden kann.</h1>
      <span>Web Designer und Entwickler.</span>
    </div>
  </div>

  <section class="section-block bg-bb">
    <div class="container project-section">
      <h2 class="h1">Meine Projekte</h1>
        <div class="projects">
          
        <?php
$args = array(
  'post_type'      => 'project',
  'posts_per_page' => 3,
);
$loop = new WP_Query($args);
while ( $loop->have_posts() ) {
  $loop->the_post();

  if (has_post_thumbnail( $post->ID ) ): ?>
    <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
          <div class="project-item" style="background-image: url('<?php echo $image[0]; ?>')">
            <a href="<?php the_permalink(); ?>" class="post-link">
              <h3><?php the_title(); ?></h3>
            </a>
          </div>
          <?php 
        endif;
        } 
        ?>
          
        </div>
        <div class="button-container">
          <button class="primary" aria-label="Mehr Projekte einsehen">Mehr Projekte <i
              class="fas fa-long-arrow-alt-right"></i></button>
        </div>
    </div>
  </section>

  <section class="section-block bg-lr">
    <div class="container about-me">
      <h2 class="h1">Über Mich</h2>
      <p>Moin, ich bin Wiktoria! Ich habe Kommunikationsdesign an der HTK in Hamburg studiert. Daraufhin habe ich mich
        mehr mit Web und UX Design auseinander gesetzt, und mir den Umgang mit Adobe XD, WordPress und Elementor Pro
        beigebracht. Anschließend habe ich mich noch weitergebildet und HTML und CSS gelernt sowie Online Marketing
        Tools, wie Funnel Erstellung, Heatmaps, A/B Testing oder Google Ad Kampagnen.</p>
      <p>Außerdem versuche ich momentan die Ukulele spielen zu lernen.</p>
    </div>
  </section>

  <section class="section-block bg-bb">
    <div class="container blog-section">
      <h2 class="h1">Blog Beiträge</h2>
      <div class="blog-posts">

      <?php
$args = array(
  'post_type'      => 'post',
  'posts_per_page' => 2,
);
$loop = new WP_Query($args);
while ( $loop->have_posts() ) {
  $loop->the_post();

  if (has_post_thumbnail( $post->ID ) ): ?>
  <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
        <div class="blog-post-item" style="background-image: url('<?php echo $image[0]; ?>')">
          <a href="<?php the_permalink(); ?>">
            <h3><?php the_title(); ?></h3>
          </a>
        </div>
        <?php 
        endif;
        } 
        ?>


      </div>
      <div class="button-container">
        <button class="primary">Mehr Blog Beiträge <i class="fas fa-long-arrow-alt-right"></i></button>
      </div>
    </div>
  </section>

  <section class="section-block bg-cr">
    <div class="container my-skills">
      <h2 class="h1">Meine Skills</h2>
      <div class="my-skills-table">
        <div class="my-skills-cell">
          <h3>Sprachen</h3>
          <div class="skills-list">
            <div class="skill-item">
              <img src="../assets/img/html5.svg" alt="HTML5 Logo">
              <span>HTML5</span>
            </div>
            <div class="skill-item">
              <img src="../assets/img/css3.svg" alt="CSS Logo">
              <span>CSS</span>
            </div>
            <div class="skill-item">
              <img src="../assets/img/javascript.svg" alt="JavaScript Logo">
              <span>JavaScript</span>
            </div>
          </div>
        </div>

        <div class="my-skills-cell">
          <h3>Frameworks & Libraries</h3>
          <div class="skills-list">
            <div class="skill-item">
              <img src="../assets/img/react.svg" alt="React Logo">
              <span>React</span>
            </div>
            <div class="skill-item">
              <img src="../assets/img/WordPress.svg" alt="WordPress Logo">
              <span>WordPress</span>
            </div>
            <div class="skill-item">
              <img src="../assets/img/bootstrap-4.svg" alt="Bootstrap Logo">
              <span>Bootstrap</span>
            </div>
            <div class="skill-item">
              <img src="../assets/img/jQuery.svg" alt="jQuery Logo">
              <span>jQuery</span>
            </div>
          </div>
        </div>

        <div class="my-skills-cell">
          <h3>Weitere Tools</h3>
          <div class="skills-list">
            <div class="skill-item">
              <img src="../assets/img/Adobe_XD_CC_icon.svg" alt="Adobe XD Logo">
              <span>Adobe XD</span>
            </div>
            <div class="skill-item">
              <img src="../assets/img/Adobe_Illustrator_CC_icon.svg" alt="Adobe Illustrator Logo">
              <span>Illustrator</span>
            </div>
            <div class="skill-item">
              <img src="../assets/img/Adobe_Photoshop_CC_icon.svg" alt="Adobe Photoshop Logo">
              <span>Photoshop</span>
            </div>
            <div class="skill-item">
              <img src="../assets/img/Git.svg" alt="Git Logo">
              <span>Git</span>
            </div>
            <div class="skill-item">
              <img src="../assets/img/GitHub.svg" alt="GitHub Logo">
              <span>GitHub</span>
            </div>
            <div class="skill-item">
              <img src="../assets/img/VScode.svg" alt="VS Code Logo">
              <span>VS Code</span>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="section-block bg-lr">
    <div class="container contact">
      <h2 class="h1">Kontakt</h2>
      <?php echo do_shortcode('[contact-form-7 id="52" title="kontakt-frontpage"]'); ?>
    </div>
  </section>

<?php get_footer(); ?>