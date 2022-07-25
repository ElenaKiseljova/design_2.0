<?php 
  $frontpage_id = get_option( 'page_on_front' );
  $contacts = get_field( 'contacts',  $frontpage_id) ?? [];
?>

      <footer class="footer" data-scroll-section>
        <div class="container">
          <div class="footer__inner">
            <div class="footer__top">
              <div class="footer__left">

                <?php if (function_exists( 'pll_current_language' ) && pll_current_language() === 'en') : ?>
                  <a href="https://wnauts.com/" class="footer__logo a" target="_blank">
                    wnauts.com
                  </a>
                <?php else : ?>
                  <a href="https://webnauts.pro/" class="footer__logo a" target="_blank">
                    WEBNAUTS.PRO
                  </a>
                <?php endif; ?>                

                <address>
                  <?= $contacts['address'] ?? ''; ?>
                </address>

                <div class="footer__social social links">
                  <?php if ($contacts['social'] && !empty($contacts['social']) && is_array($contacts['social']) && !is_wp_error( $contacts['social'] ) ) : ?>
                    <ul class="social__list">
                      <?php 
                        foreach ($contacts['social'] as $social) {
                          ?>                          
                            <li class="social__item">
                              <a href="<?= $social['link'] ?? ''; ?>" class="social__link links__hover a" target="_blank">
                                <span class="links__front"><?= $social['text'] ?? ''; ?></span>
                                <span class="links__back"><?= $social['text'] ?? ''; ?></span>
                              </a>
                            </li>
                          <?php
                        }
                      ?>
                    </ul>
                  <?php endif; ?>                  
                </div>
              </div>

              <div class="footer__center links">
                <div class="footer__contacts contacts">
                  <ul class="contacts__list">
                    <li class="contacts__item">
                      <a
                        href="<?= ($contacts['phone'] && $contacts['phone']['link']) ? $contacts['phone']['link'] : ''; ?>"
                        class="contacts__link links__hover a"
                      >
                        <span class="links__front"><?= ($contacts['phone'] && $contacts['phone']['text']) ? $contacts['phone']['text'] : ''; ?></span>
                        <span class="links__back"><?= ($contacts['phone'] && $contacts['phone']['text']) ? $contacts['phone']['text'] : ''; ?></span>
                      </a>
                    </li>
                    <li class="contacts__item">
                      <a
                        href="mailto:<?= $contacts['email'] ?? ''; ?>"
                        class="contacts__link links__hover a"
                      >
                        <span class="links__front"><?= $contacts['email'] ?? ''; ?></span>
                        <span class="links__back"><?= $contacts['email'] ?? ''; ?></span>
                      </a>
                    </li>
                  </ul>
                  <div class="footer__schedule">
                    <p><?= $contacts['worktime'] ?? ''; ?> <span>GMT+3</span></p>
                  </div>
                </div>
              </div>
              <div class="footer__right">
                <?php design_show_menu( 'bottom_menu' ); ?>
              </div>
            </div>
            <div class="footer__bottom">
              <span>(c) <?= date('Y'); ?></span>
              <p>
                <?= __( 'made by', 'design' ); ?> <a href="https://webnauts.pro/" class="a" target="_blank">Webnauts.pro</a>
              </p>
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
