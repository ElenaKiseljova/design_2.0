<!DOCTYPE html>
<html lang="<?= function_exists( 'pll_current_language' ) ? (pll_current_language() === 'uk' ? 'ua' : pll_current_language()) : 'en' ; ?>">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php
      wp_head();
    ?>
  </head>
  <body>
    <div id="cursor" data-video="<?= __( 'Play', 'design' ); ?>" data-slider="<?= __( 'Drag', 'design' ); ?>"></div>

    <?php 
      if ( is_front_page(  ) && !is_home(  ) ) {
        get_template_part( 'templates/preloader' );
        
        get_template_part( 'templates/front/marquee', 'images' );
      }      
    ?>    

    <div class="wrapper" data-scroll-container>

      <div class="wrapper__top" data-scroll-section>
        <?php 
          get_template_part( 'templates/header' );

          if ( is_front_page(  ) && !is_home(  ) ) {
            get_template_part( 'templates/front/hero' );
          }            
        ?>
      </div>
      
