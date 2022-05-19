<?php 
  $current_case_id = get_the_ID();
  $case_type = wp_get_post_terms( $current_case_id, 'cases_types', array('fields' => 'names') ) ? wp_get_post_terms( $current_case_id, 'cases_types', array('fields' => 'names') )[0] : '';
  $case_services = wp_get_post_terms( $current_case_id, 'cases_services', array('fields' => 'names') ) ? implode(', ', wp_get_post_terms( $current_case_id, 'cases_services', array('fields' => 'names') )) : '';
?>
<div class="_stomatology__body_promo_title">
  <?= get_the_title(  ); ?>
</div>
<div class="_stomatology__body_promo_title_sub">
  <div class="_stomatology__body_promo_subtitle">
    <p>
      <?php _e( 'Type:', 'design' ); ?>
    </p>
    <p>
      <?= $case_type; ?>
    </p>
  </div>
  <div class="_stomatology__body_promo_subtitle1">
    <p>
      <?php _e( 'Services', 'design' ); ?>
    </p>
    <p>
      <?= $case_services; ?>
    </p>
  </div>
</div>