<?php
  $video = get_sub_field('video');
?>
<section class="home_video">
  <div class="home_video__container _container">
    <div class="home_video__body">

      <h1 class="home_video__title">
        <?php 
          // Check rows exists.
          if( have_rows('title') ):
          
              // Loop through rows.
              while( have_rows('title') ) : the_row();
          
                  // Load sub field value.
                  $string = get_sub_field('string');
                  ?>
                  <span>
                    <?= $string; ?>
                  </span>
                  <?php
                        
              // End loop.
              endwhile;
          
          // No value.
          else :
              // Do something...
          endif;
        ?>
      </h1>

      <div class="home_video__video">
        <div class="my_video_container home_video_img">
          <?php if ($video['file'] && !empty($video['file'])) : ?>
            <video class=" video_hover">
              <source src="<?= $video['file']; ?>" type="video/mp4" />
            </video>
          <?php endif; ?>
          
          <div class="my-div">
            <div class="grid__item grid__item--bg ">
              <div class="grid__item-img" data-displacement="<?= get_template_directory_uri(  ); ?>/assets/img/4.png"
                data-intensity="0.2" data-speedIn="1.6" data-speedOut="1.6">
                <img src="<?= $video['image_gray']; ?>" alt="Image" />
                <img src="<?= $video['image_color']; ?>" alt="Image" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="home_video__arrow">
        <img src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/arrow_home.svg" alt="">
      </div>
    </div>
  </div>
</section>