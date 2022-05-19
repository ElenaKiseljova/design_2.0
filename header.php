<!DOCTYPE html>
<html lang="<?= function_exists( 'pll_current_language' ) ? (pll_current_language() === 'uk' ? 'ua' : pll_current_language()) : 'en' ; ?>">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.min.css" />
    <link rel="shortcut icon" href="<?= get_template_directory_uri(  ); ?>/assets/img/icons/favicon.svg" type="image/x-icon" />

    <?php
      wp_head();
    ?>
  </head>
  <body>
    <div id="cursor" data-video="Play" data-slider="Drag"></div>

    <?php 
      get_template_part( 'templates/preloader' );

      get_template_part( 'templates/front/marquee', 'images' );
    ?>

    

    <div class="wrapper" data-scroll-container>

      <section class="hero" data-scroll-section>
        <header class="header white">
          <div class="header__inner">
            <?php 
              get_template_part( 'templates/logo' );
            ?> 

            <div class="header__right">
              <?php 
                get_template_part( 'templates/language' );

                get_template_part( 'templates/menu', 'header' );
              ?>
            </div>
            <button class="header__hamburger hamburger">
              <span class="line"></span>
              <span class="line"></span>
              <span class="line"></span>
            </button>
          </div>
        </header>
        <div class="hero__center">
          <a href="#feedback" class="hero__btn a_white">
            <p>Contact <br />us</p>
            <div class="hero__icon">
              <svg width="30" height="30">
                <use xlink:href="<?= get_template_directory_uri(  ); ?>/assets/img/sprite.svg#letter"></use>
              </svg>
            </div>
          </a>
          <div class="hero__text">
            <p>
              Smart Design <br />
              For your business
            </p>
          </div>
        </div>
        <div class="hero__container">
          <div
            class="hero__image"
            data-scroll
            data-scroll-speed="-3"
            data-scroll-position="top"
          >
            <img src="<?= get_template_directory_uri(  ); ?>/assets/img/hero/iPhone_13.png" alt="" />
          </div>
        </div>
        <div class="hero__container circle">
          <div
            class="hero__image"
            data-scroll
            data-scroll-speed="5"
            data-scroll-position="top"
          >
            <div class="hero__circle"></div>
          </div>
        </div>

        <div class="hero__bottom">
          <div
            class="hero__wrap"
            data-scroll
            data-scroll-direction="horizontal"
            data-scroll-speed="4"
            data-scroll-position="top"
          >
            <div class="hero__wrap">
              <h1 class="hero__profession">
                Webnauts design <span class="hero__spacer">—</span>
              </h1>
            </div>
          </div>
        </div>
      </section>
