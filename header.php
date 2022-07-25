<!DOCTYPE html>
<html lang="<?= function_exists( 'pll_current_language' ) ? (pll_current_language() === 'uk' ? 'ua' : pll_current_language()) : 'en'; ?>">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Hotjar Tracking Code for https://design.webnauts.pro/ --> 
    <script> 
        (function(h,o,t,j,a,r){ 
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)}; 
            h._hjSettings={hjid:3005495,hjsv:6}; 
            a=o.getElementsByTagName('head')[0]; 
            r=o.createElement('script');r.async=1; 
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv; 
            a.appendChild(r); 
        })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv='); 
    </script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NRBWL69');</script>

    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'GTM-NRBWL69');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NRBWL69"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    
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
      
