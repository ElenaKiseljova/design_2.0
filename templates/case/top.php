<?php 
  $current_case_id = get_the_ID();
  $case_type = wp_get_post_terms( $current_case_id, 'cases_types', array('fields' => 'names') ) ? wp_get_post_terms( $current_case_id, 'cases_types', array('fields' => 'names') )[0] : '';
  $case_services = wp_get_post_terms( $current_case_id, 'cases_services', array('fields' => 'names') ) ? implode(', ', wp_get_post_terms( $current_case_id, 'cases_services', array('fields' => 'names') )) : '';
?>
<div class="case__top">
  <h1 class="case__title"><?= get_the_title(  ); ?></h1>
  <div class="case__categories">
    <div class="case__category">
      <span><?= __( 'Type:', 'design' ); ?></span>
      <p><?= $case_type ?? ''; ?></p>
    </div>
    <div class="case__category">
      <span><?= __( 'Services:', 'design' ); ?></span>
      <p><?= $case_services ?? ''; ?></p>
    </div>
  </div>
</div>