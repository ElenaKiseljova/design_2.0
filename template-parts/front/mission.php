<?php 
  $title = get_sub_field('title');
  $content = get_sub_field('content');
  $circles = get_sub_field('circles');
?>
<section class="our_mission" id="our-mission">
  <div class="our_mission__container _container">
      <div class="our_mission__body">
          <div class="our_mission__body_title">

              <h2 class="our_mission__title">
                <?= $title; ?>
              </h2>
              <div class="our_mission__subtitle ">

                  <div class="our_mission__subtitle_title">                                
                    <?= $content['text_top']; ?>
                  </div>
                  <div class="our_mission__subtitle_block">
                      <div class="our_mission__subtitle_p">                                    
                        <?= $content['text_left']; ?>
                      </div>
                      <div class="our_mission__subtitle_p">                                    
                        <?= $content['text_right']; ?>
                      </div>
                  </div>

              </div>

          </div>
          <div class="our_mission__body_circles">
            <?php
              foreach ($circles as $key => $circle) {
                ?>
                  <div class="our_mission__body_circle circle_<?= $key ; ?>">
                      <div class="circle">
                          <div class="circle_title">
                            <?= $circle['title']; ?>
                          </div>
                          <div class="circle_subtitle">
                            <?= $circle['description']; ?>
                          </div>
                      </div>
                  </div>
                <?php
              }
            ?>
          </div>
          <div class="our_mission__body__circle circle_20 a">
              <div class="" id="circle_20"></div>
          </div>
      </div>
  </div>
</section>