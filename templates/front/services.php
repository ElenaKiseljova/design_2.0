<?php 
  $title = get_sub_field('title') ?? '';
  $description = get_sub_field('description') ?? '';

  $current_service = get_sub_field('current');
?>

<section class="services" id="services" data-scroll-section>
  <div class="services__container" data-scroll data-scroll-speed="5">
    <div class="services__circle"></div>
  </div>
  <div class="services__inner">
    <div class="services__left">
      <h2 class="services__title title"><?= $title; ?></h2>

      <?php 
        $current_service_object = get_term_by( 'id', $current_service, 'cases_services' );        
      ?>

      <?php if ($current_service_object && is_a( $current_service_object, WP_Term ) && !is_wp_error( $current_service_object )) : ?>
        <?php 
          $service_image_gray = get_field('image_gray', $current_service_object) ?? '';
          $service_image_color = get_field('image_color', $current_service_object) ?? '';  
        ?>

        <div class="services__item">
          <div class="services__image image" data-displacement="<?= get_template_directory_uri(  ); ?>/assets/img/pattern.png">
            <img src="<?= $service_image_gray; ?>" alt="<?= $current_service_object->name ?? ''; ?>" />
            <img src="<?= $service_image_color; ?>" alt="<?= $current_service_object->name ?? ''; ?>" />
          </div>
          <span><?= $current_service_object->name ?? ''; ?></span>
        </div>
      <?php endif; ?>
      
      <div class="services__btns">
        <button class="services__btn services__btn--prev a">
          <svg width="50" height="50">
            <use xlink:href="<?= get_template_directory_uri(  ); ?>/assets/img/sprite.svg#arrow"></use>
          </svg>
        </button>
        <button class="services__btn services__btn--next a">
          <svg width="50" height="50">
            <use xlink:href="<?= get_template_directory_uri(  ); ?>/assets/img/sprite.svg#arrow"></use>
          </svg>
        </button>
      </div>
    </div>

    <div class="services__right">
      <?= $description; ?>

      <div class="services__point"></div>
      <div class="services__cursor cursor">
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
        <?php if ( $services && !empty($services) && is_array($services) && !is_wp_error( $services ) ) : ?>
          <div class="services__slider swiper">
            <div class="services__wrapper swiper-wrapper">
              <?php foreach ($services as $key => $service) : ?>
                <?php 
                  $service_image_gray = get_field('image_gray', $service) ?? '';
                  $service_image_color = get_field('image_color', $service) ?? '';  
                ?>
                <div class="services__item swiper-slide">
                  <div class="services__image image" data-displacement="<?= get_template_directory_uri(  ); ?>/assets/img/pattern.png">
                    <img src="<?= $service_image_gray; ?>" alt="<?= $service->name ?? ''; ?>" />
                    <img src="<?= $service_image_color; ?>" alt="<?= $service->name ?? ''; ?>" />
                  </div>
                  <span><?= $service->name ?? ''; ?></span>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        <?php endif; ?>        
      </div>
    </div>
  </div>
</section>