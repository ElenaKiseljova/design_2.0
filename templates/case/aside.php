<aside class="case__left aside links">
  <div class="case__select select links">
    <div class="select__header">
      <div class="select__header-current"><?= get_the_title(  ); ?></div>
      <div class="select__header-arrow"></div>
    </div>
    <div class="select__body">
      <div class="select__body-box">
        <ul class="select__list">
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
                  <li class="select__list-item <?= (get_the_ID() === $current_case_id) ? 'is-active' : ''; ?>">
                    <a href="<?= get_permalink( ); ?>" class="links__hover">
                      <span class="links__front"><?= get_the_title(  ); ?></span>
                      <span class="links__back"><?= get_the_title(  ); ?></span>
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
</aside>