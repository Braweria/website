<?php get_header(); ?>

<section class="section-block bg-bb" role="main">
    <div class="container project-section">
      <h2 class="h1">Meine Projekte</h1>
        <div class="projects">
          
      <?php

        $currentPage = get_query_var( 'paged' );

        $args = array(
          'post_type'      => 'project',
          'paged'          => $currentPage
        );

        $wp_query = new WP_Query($args);

        while ( $wp_query->have_posts() ) {
          $wp_query->the_post();

          if (has_post_thumbnail( $post->ID ) ):

            $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>

              <div class="project-item" style="background-image: url('<?php echo $image[0]; ?>')">
                <a href="<?php the_permalink(); ?>">
                  <h3><?php the_title(); ?></h3>
                </a>
              </div> <!-- end of .project-item -->

              <?php 
                endif;
              } // endwhile
              ?>
    </div> <!-- end of .projects .page -->

    <div class="button-container-page">
      <?php
        $args = array(
          'prev_text'   => "Vorherige Seite",
          'next_text'   => "Nächste Seite",
          );
        echo paginate_links( $args );
      ?>
    </div> <!-- end of .button-container-page -->
      
  </div> <!-- end of .container .blog-section -->
  </section>

<?php get_footer(); ?>