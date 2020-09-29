<?php

if (post_password_required(  ) ) {
  return;
}
?>

<div class="section-block bg-lr comments" aria-label="Kommentare">
  <div class="container">
    <h2 class="h1">Kommentare</h2>
    <p class="comment-info">Deine E-Mail-Adresse wird nicht veröffentlich. Erforderliche Fehlder sind mit * markiert.</p>

<?php $args = array(
    'comment_notes_before' => '',
    'submit_button' => '<button class="primary" type="submit">Kommentar abschicken <i class="fas fa-paper-plane"></i></button>',

    'fields' => apply_filters( 'comment_form_default_fields',
      array(
        'author' =>
          '<label for="name"><abbr title="Erforderliche">*</abbr> Dein Name</label>
          <input type="text" id="author" name="author" required placeholder="Wiktoria" />',
              
        'email' =>
          '<label for="email"><abbr title="Erforderliche">*</abbr> Deine E-Mail</label>
          <input type="email" id="email" name="email" required placeholder="w.mielcarek@braweria.de" />',
              
        'cookies' =>
          '<div class="form-privacy-check"><input type="checkbox" name="datenschutz" id="privacy" required>
          <label for="privacy">Speichere meinen Namen und E-Mail in diesem Browser für das nächste mal wenn ich kommentiere.</label></div>',
      ),
    ),

    'comment_field' =>
      '<label for="comment"><abbr title="Erforderliche">*</abbr> Dein Kommentar</label><textarea type="text" id="comment" name="comment" required rows="8"
      placeholder="Echt guter Beitrag, jedoch ..."></textarea>',

    'title_reply' => ""
          );
?>

<?php comment_form($args); ?>

    <section class="comment-list">
  
<?php if (have_comments()): ?>

      <ol class="first-level-comment-list">
        <?php 

          $args = array(
            "walker"          => null,
            "max_depth"       => 2,
            "style"           => "ol",
            "callback"        => null,
            "end-callback"    => null,
            ""
          );

          wp_list_comments( $args);
        ?>
      </ol>
<?php
  if (!comments_open() && get_comments_number()):
?>

<p class="comment-info"><?php esc_html_e( "Kommentare sind geschlossen.", "braweria" ) ?></p>

<?php
  endif;
?>
      
      
    </section>
  </div>
</div>