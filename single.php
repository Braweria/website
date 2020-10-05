<?php get_header(); ?>

<?php

while(have_posts()) {
	the_post();

if (has_post_thumbnail( $post->ID ) ): ?>
<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
<main>
    <div aria-hidden="true" class="feature-img" style="background-image: url('<?php echo $image[0]; ?>')"></div>
    <article class="container post">
      <h1 class="post-heading"><?php the_title(); ?></h1>

      <?php the_content(); ?>
      <?php 
        endif;
        } 
      ?>
    </article>

          <?php
              if (comments_open() ):
                comments_template('/template-parts/comments.php');

              endif;
           ?>

  </main>

<?php get_footer(); ?>