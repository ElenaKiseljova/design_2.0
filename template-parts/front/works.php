<?php 
  $title = get_sub_field('title');
  $cases = get_sub_field('cases');
  $button = get_sub_field('button');
?>
<section class="our_works" id="our-works">
  <div class="our_works__container _container">
      <div class="our_works__body">
          <h2 class="our_works__body_title">
            <?= $title; ?>
          </h2>
          <div class="our_works_strings <?= ($button && !empty($button['text']) && !empty($button['link'])) ? 'our_works_strings--more' : ''; ?>">
            <?php 
              if ($cases): 

                foreach ($cases as $index => $post): 
                  // Setup this post for WP functions (variable must be named $post).
                  setup_postdata($post);
                  ?>
                    <div class="img_container_rotate">
                      <div class="img_container_rotate_img">
                          <div id="img">
                              <div class="dop_img">
                                <?php 
                                  if ( has_post_thumbnail()) { 
                                    the_post_thumbnail('large'); 
                                  } 
                                ?>
                              </div>
                          </div>
                      </div>
                      <div class="our_works_string_hover1 a_white">

                          <a href="<?php the_permalink(); ?>" class="our_works_string string">
                              <?php 
                                $case_type = wp_get_post_terms( $post->ID, 'cases_types', array('fields' => 'names') ) ? wp_get_post_terms( $post->ID, 'cases_types', array('fields' => 'names') )[0] : '';
                                $case_services = wp_get_post_terms( $post->ID, 'cases_services', array('fields' => 'names') ) ? implode(', ', wp_get_post_terms( $post->ID, 'cases_services', array('fields' => 'names') )) : '';
                              ?>
                              <div class="string_type">
                                  <div class="string_p">
                                      <?php _e( 'Type:', 'design' ); ?>
                                  </div>
                                  <div class="string_h4">
                                      <?= $case_type; ?>
                                  </div>
                              </div>
                              <div class="string_services">
                                  <div class="string_p">
                                      <?php _e( 'Services', 'design' ); ?>
                                  </div>
                                  <div class="string_h4">
                                    <?= $case_services; ?>
                                  </div>
                              </div>
                              <div class="string_title">
                                  <h3>
                                    <?php the_title(); ?>
                                  </h3>
                              </div>
                          </a>
                          <a id="marquee<?= $index + 1; ?>" href="<?php the_permalink(); ?>" class="marquee our_works_string_hover our_works_string_hover_stomatology">
                              <div class="our_works_string_hover_title marquee__inner">

                                  <h3>
                                    <?php the_title(); ?>
                                  </h3>

                              </div>
                          </a>

                      </div>
                    </div>
                  <?php
                endforeach; 

                // Reset the global post object so that the rest of the page works correctly.
                wp_reset_postdata();
              endif;
            ?>
          </div>
          <?php 
            if ($button && !empty($button['text']) && !empty($button['link'])) {
              ?>
                <div class="our_works__body_button border_bottom a">
                    <a class=" our_works__body_button_3d" href="<?= $button['link']; ?>">
                      <?= $button['text']; ?>
                    </a>
                </div>
              <?php
            }
          ?>                    
      </div>
  </div>
</section>