<?php get_header(); ?>

<section class="section-block bg-bb">
    <div class="container blog-section">
      <h2 class="h1">Blog Beiträge</h2>
      <div class="blog-posts page">
          
      <?php
$args = array(
  'post_type'      => 'post',
  'posts_per_page' => '',
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
        
        ?>
        

        </div>
        
      </div>
      
        <div class="button-container-page">

        <?php

          $args = array(
            'prev_text'   => "Vorherige Seite",
            'next_text'   => "Nächste Seite"
          );

          echo paginate_links( $args );

          ?>

        <?php
          } 
        ?>

        </div>
      
    </div>
  </section>

<?php get_footer(); ?>