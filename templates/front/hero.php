<?php
  $hero = get_field('hero');
  $contact_us = $hero['contact_us'] ?? [];
  $text = $hero['text'] ?? '';
  $image = $hero['image'] ?? '';
?>

<section class="hero">
  <h1 class="visually-hidden"><?= get_bloginfo( 'name' ); ?></h1>

  <div class="hero__center">
    <a href="<?= $contact_us['link'] ?? ''; ?>" class="hero__btn a_white">
      <p>
          <?= $contact_us['text'] ?? ''; ?>
      </p>
      <div class="hero__icon">
        <svg width="30" height="30">
          <use xlink:href="<?= get_template_directory_uri(  ); ?>/assets/img/sprite.svg#letter"></use>
        </svg>
      </div>
    </a>
    
    <div class="hero__text">
      <p>
        <?= $text; ?>
      </p>
    </div>
  </div>
  <div class="hero__container">
    <div
      class="hero__image"
      data-scroll
      data-scroll-speed="-3"
      data-scroll-position="top"
    >
      <img src="<?= $image; ?>" alt="<?= get_bloginfo( 'name' ); ?>" />
    </div>
  </div>
  <div class="hero__container circle">
    <div
      class="hero__image"
      data-scroll
      data-scroll-speed="5"
      data-scroll-position="top"
    >
      <div class="hero__circle"></div>
    </div>
  </div>

  <div class="hero__bottom">
    <div
      class="hero__wrap"
      data-scroll
      data-scroll-direction="horizontal"
      data-scroll-speed="4"
      data-scroll-position="top"
    >
      <div class="hero__wrap">
        <p class="hero__profession">
          <?= get_bloginfo( 'name' ); ?> <span class="hero__spacer">—</span>
        </p>
      </div>
    </div>
  </div>
</section>