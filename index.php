<?php get_header(); ?>

  <?php

    if (have_posts() ):
      while (have_posts(  ) ): the_post(); ?>

    <main>
        
        <article class="container post page">
          <h1 class="post-heading"><?php the_title(); ?></h1>

          <?php the_content(); ?>
          <?php 
      endwhile;
    endif;
  ?>
    </article>

          <?php
              if (comments_open() ):
                comments_template('/template-parts/comments.php');

              endif;
           ?>

  </main>

<?php get_footer(); ?>