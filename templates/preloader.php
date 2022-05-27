<?php 
  $frontpage_id = get_option( 'page_on_front' );
  $preloader = get_field( 'preloader',  $frontpage_id) ?? [];
?>

<div class="loading-container">
  <div class="loading-screen">
    <div class="rounded-div-wrap top">
      <div class="rounded-div"></div>
    </div>
    <div class="loading-words">
      <?php if ( !empty($preloader) && is_array($preloader) && !is_wp_error( $preloader ) ) : ?>
        <div class="loading-words-wrap">
          <?php foreach ($preloader as $key => $hello) : ?>
            <h2 class="<?= ($key === 0) ? 'home-active home-active-first' : (($hello === end($preloader)) ? 'home-active-last' : 'home-active');?>">
              <?= $hello['text'] ?? ''; ?>
            </h2>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>      
    </div>
    <div class="rounded-div-wrap bottom">
      <div class="rounded-div"></div>
    </div>
    <div id="loader">
      <svg
        id="load-circle"
        version="1.1"
        xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink"
        x="0px"
        y="0px"
        viewBox="0 0 253.4 253.4"
        style="enable-background: new 0 0 253.4 253.4"
        xml:space="preserve"
      >
        <circle cx="126.7" cy="126.7" r="124.2"></circle>
      </svg>
      <svg
        class="load-back"
        version="1.1"
        xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink"
        x="0px"
        y="0px"
        viewBox="0 0 253.4 253.4"
        style="enable-background: new 0 0 253.4 253.4"
        xml:space="preserve"
      >
        <circle cx="126.7" cy="126.7" r="124.2"></circle>
      </svg>
    </div>
  </div>
</div>
