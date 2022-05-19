<?php 
  $title = get_sub_field('title');
  $subtitle = get_sub_field('subtitle');
  $current_service = get_sub_field('current');
?>
<section class="home_slider" id="services">
  <div class="home_slider__container _container">
      <div class="home_slider__body">
          <h2 class="home_slider__body_SERVICES"><?= $title; ?></h2>
          <div class="home_slider_title">                        
              <?= $subtitle; ?>
              <div class="home_slider_title_after circle_20 a">
                  <div class="" id="circle_20"></div>
              </div>
          </div>

          <?php 
            $current_service_object = get_term_by( 'id', $current_service, 'cases_services' );
            $service_image_gray = get_field('image_gray', $current_service_object);
            $service_image_color = get_field('image_color', $current_service_object);
          ?>
          <div class="_active_slide ">
              <div class="animation_transition_double_effect">
                  <div class="grid__item grid__item--bg ">
                      <div class="grid__item-img" data-displacement="<?= get_template_directory_uri(  ); ?>/assets/img/4.png" data-intensity="0.2"
                            data-speedIn="1.6" data-speedOut="1.6">
                            <img src="<?= $service_image_gray; ?>" alt="<?= $current_service_object->name; ?>"/>
                            <img src="<?= $service_image_color; ?>" alt="<?= $current_service_object->name; ?>"/>
                      </div>
                  </div>
              </div>
              <p>
                <?= $current_service_object->name; ?>
              </p>

          </div>


          <div class="swiper_buttons a">
              <div class="swiper-button-prev1 ">
                  <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_321:639)">
                          <path d="M20.35 43.7468L22.2903 41.5518L5.22325 26.465L50 26.465L50 23.5353L5.22325 23.5353L22.2903 8.44848L20.35 6.25346L1.31492e-05 24.2422L1.30167e-05 25.7581L20.35 43.7468Z"
                                fill="#212121"/>
                      </g>
                      <defs>
                          <clipPath id="clip0_321:639">
                              <rect width="50" height="50" fill="white"/>
                          </clipPath>
                      </defs>
                  </svg>
              </div>
              <div class="swiper-button-next1 ">
                  <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_321:644)">
                          <path d="M29.65 43.7468L27.7097 41.5518L44.7767 26.465L-1.51083e-06 26.465L-1.76695e-06 23.5353L44.7767 23.5353L27.7097 8.44848L29.65 6.25346L50 24.2422L50 25.7581L29.65 43.7468Z"
                                fill="#212121"/>
                      </g>
                      <defs>
                          <clipPath id="clip0_321:644">
                              <rect width="50" height="50" fill="white"
                                    transform="matrix(-1 0 0 1 50 0)"/>
                          </clipPath>
                      </defs>
                  </svg>

              </div>
          </div>
          <?php 
            $exclude = [];
            if ($current_service) {
              $exclude[] = $current_service;
            }

            $services = get_terms( [
              'taxonomy' => 'cases_services',
              'hide_empty' => false,
              'exclude' => $exclude,
            ] );                      

            $services = $services ?? [];
          ?>
          <div class="home_slider_swiper__container">
              <div class="swiper_buttons_hidden">

                  <div class="home_slider_swiper swiper">

                      <div class="swiper-wrapper">
                          <?php
                            foreach ($services as $key => $service) {
                                $service_image_gray = get_field('image_gray', $service);
                                $service_image_color = get_field('image_color', $service);
                              ?>
                              <div id="swiper-slide" class="home_slider_swiper_slide swiper-slide">
                                  <div class="animation_transition_double_effect2">
                                      <div class="grid__item grid__item--bg ">
                                          <div class="grid__item-img" data-displacement="<?= get_template_directory_uri(  ); ?>/assets/img/4.png" data-intensity="0.2"
                                              data-speedIn="1.6" data-speedOut="1.6">
                                              <img src="<?= $service_image_gray; ?>" alt="<?= $service->name; ?>"/>
                                              <img src="<?= $service_image_color; ?>" alt="<?= $service->name; ?>"/>
                                          </div>
                                      </div>
                                  </div>
                                  <p>
                                    <?= $service->name; ?>
                                  </p>
                              </div>
                              <?php
                            }
                          ?>                                   

                      </div>

                  </div>

              </div>

          </div>
      </div>

  </div>
</section>