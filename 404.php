<?php 
  get_header( );
?>

<main class="page">
  <section class="error_page">
      <div  id="cursor"></div>
      <div class="error_page__container _container">
          <div class="error_page__body">

              <div class="error_page__code">
                      404
              </div>
              <div class="error_page__title">
                  <div class="error_page__title_title">
                      <?php
                        _e( 'Такой страницы не существует', 'design' );
                      ?>
                  </div>
                  <div class="error_page__title_subtitle">                            
                      <?php
                        _e( 'Как и плохого дизайна от нашей компании', 'design' );
                      ?>
                  </div>

                  <div class="error_page__title_button a">
                      <div class="border_bottom">
                          <a href="<?= get_bloginfo( 'url' ); ?>" class="error_page__title_button_3d">                                    
                              <?php
                                _e( 'На главную', 'design' );
                              ?>
                          </a>
                      </div>
                  </div>

              </div>
          </div>
      </div>
  </section>
</main>

<?php 
  get_footer(  );
?>

