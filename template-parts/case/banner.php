<?php 
  $background = get_field( 'background' );  
  
  if ( has_post_thumbnail(  ) ) {
    if ( $background && !empty($background) ) {
      ?>
        <div class="_stomatology__body_promo_macbook" style="background-color: <?= $background; ?>;">
          <?= get_the_post_thumbnail(  ); ?>
        </div>
      <?php
    }    
  }
?>