<?php 
  $frontpage_id = get_option( 'page_on_front' );
  $contacts = get_field( 'contacts',  $frontpage_id);
?>
<footer class="footer">
    <div class="footer__container _container">
        <div class="footer__body">
            <div class="footer__block1">

                <div class="footer__block1_title">
                  <a href="https://webnauts.pro">WEBNAUTS.PRO</a>
                </div>

                <address class="footer__block1_subtitle">
                  <?= $contacts['address']; ?>
                </address>

                <div class="footer__block1_messengers a">
                    <?php 
                      foreach ($contacts['social'] as $social) {
                        ?>
                          <div class="border_bottom">
                              <a href="<?= $social['link']; ?>" class=" footer_3d_block1">
                                <?= $social['text']; ?>
                              </a>
                          </div>
                        <?php
                      }
                    ?>
                </div>

            </div>
            <div class="footer__block2">

                <div class="a">
                    <div class="footer__block2_tel ">
                        <div class="border_bottom ">                          
                            <a href="<?= $contacts['phone']['link']; ?>" class=" footer_3d_block2">
                              <?= $contacts['phone']['text']; ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="footer__block2_email a">
                    <div class="border_bottom ">
                        <div class="">
                            <a href="mailto:<?= $contacts['email']; ?>" class=" footer_3d_block2">
                              <?= $contacts['email']; ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="footer__block2_from">
                  <?= $contacts['worktime']; ?>
                </div>

            </div>
            <div class="footer__block3">
                <?php
                  $theme_location = (is_front_page(  ) && !is_home(  ) ) ? 'bottom_menu' : 'bottom_menu_inner';

                  wp_nav_menu(
                    array(
                      'theme_location'  => $theme_location,
                      'container'       => null,
                      'menu_class'      => 'footer__sidebar',
                      'depth'           => 0,
                    )
                  );	
                ?>

            </div>
            <div class="footer__footer">
                <div class="footer__block1_year">
                    (c) <?= date('Y'); ?>
                </div>
                <div class="footer_made_in">
                  <?php _e( 'made by', 'design' ); ?> <a href="https://webnauts.pro">Webnauts.pro</a>
                </div>
            </div>

        </div>
    </div>
</footer>
</div>

<?php
    wp_footer();
?>
</body>
</html>