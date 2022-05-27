<?php 
  get_header( );
?>

<main class="main" data-scroll-container>
  <section class="error" data-scroll-section>
    <div class="container">
      <div class="error__inner links">
        <h1 class="error__number">404</h1>
        <div class="error__descr">
          <h2><?= __( 'Page not fount', 'design' ); ?></h2>
          <p><?= __( 'Please, go back and try something else', 'design' ); ?></p>
          <a href="<?= get_bloginfo( 'url' ); ?>" class="error__link links__hover a">
            <span class="links__front"><?= __( 'Back', 'design' ); ?></span>
            <span class="links__back"><?= __( 'Back', 'design' ); ?></span>
          </a>
        </div>
      </div>
    </div>
  </section>
</main>

<?php 
  get_footer(  );
?>

