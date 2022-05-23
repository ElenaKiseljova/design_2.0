<?php 
  $title = get_sub_field('title') ?? '';
  $subtitle = get_sub_field('subtitle') ?? '';
  $description = get_sub_field('description') ?? '';

  $advantages = get_sub_field('advantages') ?? [];
  $image = get_sub_field('image') ?? '';
?>

<section class="mission" id="mission" data-scroll-section>
  <div class="container">
    <div class="mission__inner">
      <div class="mission__top">
        <div class="mission__info">
          <h2 class="mission__title title"><?= $title; ?></h2>
          <p>
            <?= $subtitle; ?>
          </p>
        </div>
        <div class="mission__text">
          <?= $description; ?>
        </div>
      </div>
      <div class="mission__bottom">
        <div class="mission__numbers">
          <?php if ($advantages && !empty($advantages) && is_array($advantages) && !is_wp_error( $advantages ) ) : ?>
            <ul class="mission__list">
              <?php foreach ($advantages as $key => $advantage) : ?>
                <li class="mission__item">
                  <span><?= $advantage['title'] ?? ''; ?></span>
                  <p><?= $advantage['text'] ?? ''; ?></p>
                </li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>          
        </div>

        <div class="mission__image">
          <?php if ( !empty($image) ) : ?>
            <img src="<?= $image; ?>" alt="<?= $title; ?>" />
          <?php endif; ?>          
        </div>
      </div>
    </div>
  </div>
  <div class="mission__overlay"></div>
</section>
<div class="round" data-scroll-section>
  <div class="round__wrap">
    <div class="round__div"></div>
  </div>
</div>