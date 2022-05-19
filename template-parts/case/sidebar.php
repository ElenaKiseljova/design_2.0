<div class="stomatology_promo__body__sidebar">
  <?php
    $current_case_id = get_the_ID();

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
          <div class="border_bottom a <?= (get_the_ID() === $current_case_id) ? '_active' : ''; ?>">
            <div class=" sidebar_input_3d ">
                <a href="<?= get_permalink( ); ?>">
                  <div class="label">
                    <?= get_the_title(  ); ?>
                  </div>
                </a>
              </div>
          </div>                                   
        <?php                       
      }   
    }
    wp_reset_query();
  ?>                    
</div>
