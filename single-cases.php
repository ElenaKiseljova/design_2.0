<?php 
  get_header(  );
?>

<main class="page">
  <div id="cursor">
  </div>

  <section class="stomatology_promo">
      <div class="stomatology_promo__container _container">
          <div class="stomatology_promo__body">                    
              <?php get_template_part( 'template-parts/case/sidebar'); ?>
              <?php get_template_part( 'template-parts/case/sidebar', 'mobile'); ?>
              
              <section class="stomatology_promo__stomatology _stomatology">
                  <div class="_stomatology__container _sidebar_container">
                      <div class="_stomatology__body">

                          <div class="_stomatology__body_promo">    
                              <?php    
                                get_template_part( 'template-parts/case/top' );   

                                get_template_part( 'template-parts/case/banner' );                       

                                // Check value exists.
                                if( have_rows('content') ):

                                  // Loop through rows.
                                  while ( have_rows('content') ) : the_row();

                                      // Case: Row Text layout.
                                      if( get_row_layout() == 'row_text' ):
                                          get_template_part( 'template-parts/case/row', 'text' );

                                      // Case: Row Image layout.
                                      elseif( get_row_layout() == 'row_image' ):
                                        get_template_part( 'template-parts/case/row', 'image' );
                                                
                                      endif;

                                  // End loop.
                                  endwhile;

                                // No value.
                                else :
                                  // Do something...
                                endif;
                              ?>
                          </div>

                          <?php 
                            get_template_part( 'template-parts/case/gallery' );                                  
                          ?>

                      </div>
                  </div>
              </section>

          </div>
      </div>
  </section>
</main>

<?php 
  get_footer(  );
?>