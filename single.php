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

    <div class="section-block bg-lr comments" aria-label="Kommentare">
      <div class="container">
        <h2 class="h1">Kommentare</h2>
        <p class="comment-info">Deine E-Mail-Adresse wird nicht veröffentlich. Erforderliche Fehlder sind mit *
          markiert.</p>
        <form aria-label="Kommentar verfassen">
          <label for="name"><abbr title="Erforderliche">*</abbr> Dein Name</label>
          <input type="text" id="name" name="name" required placeholder="Wiktoria" />
          <label for="email"><abbr title="Erforderliche">*</abbr> Deine E-Mail</label>
          <input type="email" id="email" name="email" required placeholder="w.mielcarek@braweria.de" />
          <label for="comment"><abbr title="Erforderliche">*</abbr> Dein Kommentar</label>
          <textarea type="text" id="comment" name="comment" required rows="8"
            placeholder="Echt guter Beitrag, jedoch ..."></textarea>
          <div class="form-privacy-check">
            <input type="checkbox" id="save-credentials" name="save-credentials" />
            <label for="save-credentials">Meinen Namen und E-Mail in diesem Browser speichern, bis ich wieder
              kommentiere.</label>
          </div>
          <button class="primary" type="submit">Kommentar abschicken <i class="fas fa-paper-plane"></i></button>
        </form>

        <section class="comment-list">
          <ol class="first-level-comment-list">
            <li>
              <div class="first-level comment-wrap bg-cr">
                <div class="author-profile">
                  <img src="../assets/img/identicon-author-profile.png" alt="author profile image" />
                </div>
                <div class="author-info">
                  <span class="author-name">Mähnenwölf</span>
                  <span class="author-date">28. August 2020</span>
                </div>
                <div class="author-comment-body">
                  
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo odit doloribus dolores, recusandae
                    fugit voluptas, molestias sapiente sit ratione eveniet labore a sequi beatae rerum explicabo
                    placeat? Nam adipisci commodi ipsum atque asperiores iste veritatis fugiat repellendus amet saepe
                    assumenda dicta minima aperiam perspiciatis, ducimus explicabo provident, numquam sit voluptas?</p>
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus, possimus! Consequatur,
                    facilis porro. Porro ipsam cupiditate perferendis pariatur eveniet quo nemo voluptatem. Nam fuga
                    dolores dolorem autem eligendi nisi iste qui minima, quaerat sint minus, nemo consectetur
                    dignissimos, explicabo modi facere eveniet praesentium! Natus maxime repudiandae nemo delectus.
                    Molestias nobis ipsa earum odit, nam eius, ad at sed reprehenderit vel cupiditate veniam dolores
                    modi blanditiis voluptate voluptates? Odit necessitatibus dolores facilis distinctio dignissimos
                    tenetur assumenda asperiores, veniam laborum officia excepturi! Atque, minima? Harum accusamus in
                    atque voluptate omnis?</p>

                </div>
                <div class="comment-reply"><button class="primary">Antworten <i class="fas fa-paper-plane"></i></button>
                </div>
              </div>
              <ul>
                <li>
                  <div class=" second-level comment-wrap">
                    <div aria-hidden="true" class="author-profile">
                      <img aria-hidden="true" src="../assets/img/identicon-author-profile.png" alt="author profile image" />
                    </div>
                    <div class="author-info">
                      <span class="author-name">Mähnenwölf</span>
                      <span class="author-date">28. August 2020</span>
                    </div>
                    <div class="author-comment-body">
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo odit doloribus dolores,
                        recusandae
                        fugit voluptas, molestias sapiente sit ratione eveniet labore a sequi beatae rerum explicabo
                        placeat? Nam adipisci commodi ipsum atque asperiores iste veritatis fugiat repellendus amet
                        saepe
                        assumenda dicta minima aperiam perspiciatis, ducimus explicabo provident, numquam sit voluptas?
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum saepe, voluptates nesciunt
                        reiciendis consectetur quisquam aperiam quam mollitia voluptatem delectus beatae explicabo
                        corporis unde consequuntur fugiat magnam? Non, hic provident?</p>

                    </div>
                    <div class="comment-reply"><button class="primary">Antworten <i
                          class="fas fa-paper-plane"></i></button></div>
                  </div>
                </li>
              </ul>
            </li>
          </ol>
        </section>
      </div>
    </div>
  </main>

<?php get_footer(); ?>