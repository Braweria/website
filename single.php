<?php get_header(); ?>

<main>
    <div aria-hidden="true" class="feature-img" style="background-image: url('../assets/img/Förster_Complimentcard2.jpg')" </div>
    </div>
    <article class="container post">
      <h1 class="post-heading">Das ist ein Blog Eintrag über ein Design Thema</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi culpa blanditiis reiciendis, facere impedit
        debitis optio nobis consectetur, est sed neque perferendis ut voluptatum adipisci, animi similique officia id.
        Mollitia corrupti adipisci itaque vero doloremque saepe ipsam perferendis, ut quibusdam, vel, tenetur aliquam
        nemo quidem dolorem architecto laborum distinctio explicabo.</p>

      <h2 class="post-heading">Das ist ein Heading</h2>
      <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
        dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet
        clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet,
        consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed
        diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
        takimata sanctus est Lorem ipsum dolor sit amet.</p>
      <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
        dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet
        clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet,
        consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed
        diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
        takimata sanctus est.</p>
      <h2 class="post-heading">Heading 2</h2>
      <h3 class="post-heading">Heading 3</h3>
      <h4 class="post-heading">Heading 4</h4>
      <h5 class="post-heading">Heading 5</h5>
      <h6 class="post-heading">Heading 6</h6>
      <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
        dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet
        clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet,
        consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed
        diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
        takimata sanctus est Lorem ipsum dolor sit amet.</p>
      <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
        dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet
        clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet,
        consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed
        diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
        takimata sanctus est.</p>
      <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
        dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet
        clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet,
        consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed
        diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
        takimata sanctus est Lorem ipsum dolor sit amet.</p>
      <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
        dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet
        clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet,
        consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed
        diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
        takimata sanctus est.</p>
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