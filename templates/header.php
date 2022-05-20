<header class="header white">
  <div class="header__inner">
    <?php 
      get_template_part( 'templates/logo' );
    ?> 

    <div class="header__right">
      <?php 
        get_template_part( 'templates/language' );

        design_show_menu( 'top_menu' );
      ?>
    </div>
    <button class="header__hamburger hamburger">
      <span class="line"></span>
      <span class="line"></span>
      <span class="line"></span>
    </button>
  </div>
</header>