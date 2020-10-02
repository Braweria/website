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
            "walker"              => null,
            "max_depth"           => '',
            "style"               => "ol",
            "callback"            => 'braweria_comment_formatting',
            "end-callback"        => null,
            "type"                => "all",
            "reply_text"          => "Antworten",
            "page"                => "",
            "per_page"            => "",
            "avatar_size"         => 70,
            "reverse_top_level"   => true,
            "reverse_children"    => "",
            "format"              => "",
            "short_ping"          => false,
            "echo"                => true
          );

          wp_list_comments( $args);
        ?>
      </ol>

      <?php braweria_wp_comment_pagination(); ?>

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

<?php endif; ?>





<?php

// ***********************
// Comment Markup Callback Function
// ***********************

$defaultArgs = array(
  'size'    => 70,
  'height'  => null,
  'width'   => null,
  'default'       => get_option( 'avatar_default', 'mystery' ),
  'force_default' => false,
  'rating'        => get_option( 'avatar_rating' ),
  'scheme'        => null,
  'alt'           => 'Avatar Image',
  'class'         => null,
  'force_display' => false,
  'loading'       => null,
  'extra_attr'    => '',
);

    function braweria_comment_formatting($comment, $args, $depth) {
    
       $GLOBALS['comment'] = $comment; ?>
       
        <li id="comment-<?php comment_ID(); ?>" <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?> >
          <div id="div-comment-<?php comment_ID() ?>" class="comment-body">

            <div class="comment-author vcard">
              <?php echo get_avatar( $comment, $default = $defaultArgs ); ?>
              <span class="comment-author-name"><?php echo get_comment_author(); ?></span>
            </div> <!-- .comment-author -->

            <div class="comment-meta commentmetdadata">
              <a href="<?php echo esc_url( get_comment_link( $comment->comment_ID, $args ) ); ?>">
                <time datetime="<?php get_comment_date( 'Y-m-d' ) ?> <?php comment_time( 'G:i' ); ?>">
                  <?php printf( _x( '%1$s um %2$s', '1: date, 2: time' ), get_comment_date(), get_comment_time() ); ?>
                </time>
              </a>
            </div> <!-- .comment-meta -->

            <?php if ( '0' == $comment->comment_approved ) : ?>
              <p class="comment-awaiting-moderation label label-info"><?php _e( 'Vielen Dank für deinen Kommentar. Er wird in Kürze überprüft.' ); ?></p>
            <?php endif; ?> 

            <div class="comment-content">
              <?php comment_text(); ?>
            </div> <!-- .comment-content -->
            
            <div class="reply">
                <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
            </div> <!-- .reply -->
          </div> <!-- .comment-body -->
        
<?php } ?>