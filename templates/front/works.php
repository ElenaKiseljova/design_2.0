<?php 
  $title = get_sub_field('title') ?? '';
  $cases = get_sub_field('cases') ?? [];
  $button = get_sub_field('button') ?? [];
?>

<section class="works" id="works" data-scroll-section>
  <div class="container">
    <div class="works__inner">
      <h4 class="works__title title"><?= $title; ?></h4>

      <?php 
        if ($cases && !empty($cases) && is_array($cases) && !is_wp_error( $cases )): 
          ?>
            <ul class="works__list links">
              <?php 
                foreach ($cases as $index => $post): 
                  // Setup this post for WP functions (variable must be named $post).
                  setup_postdata($post);

                  $marquee_image = get_field( 'marquee_image' ) ?? '';

                  $case_type = wp_get_post_terms( 
                    $post->ID, 
                    'cases_types', 
                    array('fields' => 'names') 
                    ) ? 
                    wp_get_post_terms( 
                      $post->ID, 
                      'cases_types', 
                      array('fields' => 'names') )[0] : 
                    '';
                  $case_services = wp_get_post_terms( 
                    $post->ID, 
                    'cases_services', 
                    array('fields' => 'names') ) ? 
                    implode(', ', wp_get_post_terms( $post->ID, 'cases_services', array('fields' => 'names') )) : 
                    '';
                  ?>
                    <li class="works__item visible">
                      <a href="<?= get_the_permalink(  ); ?>" class="works__link a_white">
                        <div class="works__image">
                          <img src="<?= $marquee_image; ?>" alt="<?= get_the_title(  ); ?>" />
                        </div>
                        <h2 class="works__head"><?= get_the_title(  ); ?></h2>
                        <div class="works__bottom">
                          <div class="works__category">
                            <span><?= __( 'Type:', 'design' ); ?></span>
                            <p><?= $case_type; ?></p>
                          </div>
                          <div class="works__category">
                            <span><?= __( 'Services', 'design' ); ?></span>
                            <p><?= $case_services; ?></p>
                          </div>
                        </div>
      
                        <div
                          class="marquee hero__ticker-init"
                          data-speed="1.5"
                          data-direction="left"
                        >
                          <div class="marquee__wrapper">
                            <ul class="marquee__list hero__ticker-init__list">
                              <li><?= get_the_title(  ); ?></li>
                            </ul>
                          </div>
                        </div>
                      </a>
                    </li>
                  <?php
                endforeach; 
      
                // Reset the global post object so that the rest of the page works correctly.
                wp_reset_postdata();
              ?>
            </ul>
          <?php          
        endif;
      ?>

      <?php 
        if ($button && !empty($button['text']) && !empty($button['link'])) {
          ?>
            <a href="<?= $button['link'] ?? ''; ?>" class="works__more a links__hover" target="_blank">
              <span class="links__front"><?= $button['text'] ?? ''; ?></span>
              <span class="links__back"><?= $button['text'] ?? ''; ?></span>
            </a>
          <?php
        }
      ?>       
    </div>
  </div>
</section>