<?php
  global $menu_name;
  
  $menu_name = $menu_name && !empty($menu_name) ? $menu_name : 'top_menu';
  
  $class = 'header__nav';

  if ($menu_name === 'bottom_menu') {
    $class = 'footer__nav';
  }

  $locations = get_nav_menu_locations();

  $menu_items = null;
  
  if( $locations && isset( $locations[ $menu_name ] ) ) {
  
    // получаем элементы меню
    $menu_items = wp_get_nav_menu_items( $locations[ $menu_name ] );
  }
?>

<?php if ($menu_items && !empty($menu_items) && is_array($menu_items) && !is_wp_error( $menu_items )) : ?>
  <nav class="<?= $class; ?> nav links">
    <ul class="nav__list">
      <?php foreach ($menu_items as $key => $menu_item) : ?>
        <li class="nav__item">
          <a href="<?= $menu_item->url; ?>" class="nav__link links__hover a">
            <span class="nav__text links__front"><?= $menu_item->title; ?></span>
            <span class="nav__text links__back"><?= $menu_item->title; ?></span>
          </a>
        </li>
      <?php endforeach; ?>    
    </ul>
  </nav>
<?php endif; ?>
