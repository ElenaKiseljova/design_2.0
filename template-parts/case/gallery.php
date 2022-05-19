<?php
  $gallery = get_field( 'gallery' );  

  $image_mobile = null;

  if (!empty($gallery) && !is_wp_error( $gallery )) {                                    
    ?>
      <div class="_stomatology__body_slider">
          <div class="_stomatology__body_slider__container">
              <div class="_stomatology__body_slider__container_hidden">

                  <div class="_stomatology__body_slider_swiper swiper">

                      <div class="swiper-wrapper">
                          <?php     
                            $gallery_mobile = get_field( 'gallery_mobile' );

                            for ($i=0; $i < count($gallery); $i++) { 
                              $image = $gallery[$i]['sizes']['design_gallery'];

                              if (!empty($gallery_mobile) && !is_wp_error( $gallery_mobile )) {
                                $image_mobile = $gallery_mobile[$i]['sizes']['design_gallery_mobile'];
                              }                              

                              ?>
                                <div class="_stomatology__body_slider_swiper_slide swiper-slide">
                                  <?php if ($image_mobile) : ?>
                                    <picture>
                                      <?php if ($image_mobile) : ?>
                                        <source srcset="<?= $image; ?>" media="(min-width: 500px)">
                                      <?php endif; ?>                                    

                                      <img src="<?= $image_mobile; ?>" alt="<?= get_the_title(  ); ?>">
                                    </picture>
                                  <?php else : ?>
                                    <img src="<?= $image; ?>" alt="<?= get_the_title(  ); ?>">
                                  <?php endif; ?>                                                                    
                                </div>
                              <?php
                            }
                          ?>                                                    

                      </div>

                  </div>

              </div>

          </div>
          <div class="swiper_buttons">
              <div class="swiper-button-prev1 a">
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
              <div class="swiper-button-next1 a">
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
          <div class="swiper-pagination"></div>
          <div class="swiper_pagination_progressbar">
              <div id="progress"></div>
          </div>
      </div>
    <?php                           
  }
?>
                              