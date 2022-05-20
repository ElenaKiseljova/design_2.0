<?php 
  $title = get_sub_field('title') ?? '';
  $list = get_sub_field('list') ?? [];
?>

<section class="team" data-scroll-section>
  <div class="team__inner">
    <h2 class="team__title title"><?= $title; ?></h2>

    <?php if ( $list && !empty($list) && is_array($list) && !is_wp_error( $list ) ) : ?>
      <div class="team__cursor cursor">
        <div class="team__slider swiper">
          <div class="team__wrapper swiper-wrapper">
            <?php foreach ($list as $key => $item) : ?>
              <?php 
                $name = $item['name'] ?? '';
                $position = $item['position'] ?? '';

                $image = $item['image'] ?? [];
              ?>
              <div class="team__slide swiper-slide">
                <div class="team__image image">
                  <img
                    src="<?= $image['gray'] ?? ''; ?>"
                    alt="Berezovskyi Dmitryi"
                  />
                  <img src="<?= $image['color'] ?? ''; ?>" alt="<?= $name ?? ''; ?>" />
                </div>
                <h3><?= $name ?? ''; ?></h3>
                <span><?= $position ?? ''; ?></span>
              </div>
            <?php endforeach; ?>            
          </div>
        </div>
      </div>
      <div class="team__pagination swiper-pagination"></div>
    <?php endif; ?>
    
  </div>
</section>