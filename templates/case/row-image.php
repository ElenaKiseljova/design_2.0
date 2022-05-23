<?php
  $margin_top = get_sub_field('margin_top') ?? 80;

  $position_image = get_sub_field('position_image');
  $position_text = get_sub_field('position_text');

  $image = get_sub_field('image');
  $content = get_sub_field('content');
?>
<div class="content content--full content--image content--image-<?= $position_image; ?> content--mt-<?= $margin_top; ?> content--position-<?= $position_text; ?>">  
  <div class="content__column content__column--image">
    <img src="<?= $image; ?>" alt="<?= get_the_title(  ); ?>">
  </div>
  <div class="content__column content__column--text">
    <?= $content; ?>
  </div>
</div>