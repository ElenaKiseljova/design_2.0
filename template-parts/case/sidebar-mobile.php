
<?php
  $current_case_id = get_the_ID();
?>
<div class="stomatology_promo__body__sidebar_select">
  <div class="custom-select">
    <div class="custom-select__header">
      <div class="custom-select__header-current"><?= get_the_title(  ); ?></div>
      <div class="custom-select__header-arrow"></div>
    </div>
    <div class="custom-select__body">
    <div class="custom-select__body-box">
        <ul class="custom-select__list">          
            <?php
              $args = array(
                  'post_type' => 'cases',
                  'post_status' => 'publish',
                  'posts_per_page' => -1
              );
              $query = new WP_Query( $args );

              if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                  $query->the_post();
                  
                  ?>
                    <li class="custom-select__list-item <?= (get_the_ID() === $current_case_id) ? 'is-active' : ''; ?>">
                          <a href="<?= get_permalink( ); ?>">
                            <?= get_the_title(  ); ?>
                          </a>                        
                    </li>                                  
                  <?php                       
                }   
              }
              wp_reset_query();
            ?> 
        </ul>
    </div>
  </div>                        
  </div>
</div>
