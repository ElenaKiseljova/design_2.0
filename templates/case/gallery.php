<?php
  $gallery = get_field( 'gallery' ) ?? [];  

  $image_mobile = null;
?>

<?php if ( !empty($gallery) && is_array($gallery) && !is_wp_error( $gallery ) ) : ?>
  <div class="case__cursor cursor">
    <div class="case__slider swiper">
      <div class="case__container swiper-wrapper">
        <?php     
          $gallery_mobile = get_field( 'gallery_mobile' ) ?? [];

          for ($i=0; $i < count($gallery); $i++) { 
            $image = $gallery[$i]['sizes']['design_gallery'];

            if (!empty($gallery_mobile) && !is_wp_error( $gallery_mobile )) {
              $image_mobile = $gallery_mobile[$i]['sizes']['design_gallery_mobile'];
            }                              

            ?>
              <div class="swiper-slide">
                <?php if ($image_mobile) : ?>
                  <picture class="case__picture">
                    <?php if ($image_mobile) : ?>
                      <source srcset="<?= $image; ?>" media="(min-width: 550px)">
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
  <div class="case__options">
      <div class="case__btns">
        <button class="case__btn case__btn--prev a">
          <svg width="50" height="50">
            <use xlink:href="<?= get_template_directory_uri(  ); ?>/assets/img/sprite.svg#arrow"></use>
          </svg>
        </button>
        <button class="case__btn case__btn--next a">
          <svg width="50" height="50">
            <use xlink:href="<?= get_template_directory_uri(  ); ?>/assets/img/sprite.svg#arrow"></use>
          </svg>
        </button>
      </div>
      <div class="case__pagination">
        <div id="progress"></div>
      </div>
      <div class="case__count"></div>
    </div>
<?php endif; ?>                            