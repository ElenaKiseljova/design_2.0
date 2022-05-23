<?php 
  get_header(  );
?>

  <main class="main" data-scroll-container>
    <section class="case" data-scroll-section>
      <div class="container">
        <div class="case__inner">
          <?php 
            get_template_part( 'templates/case/aside'); 
          ?>
          <div class="case__right">
            <?php    
              get_template_part( 'templates/case/top' );   

              get_template_part( 'templates/case/banner' );                       

              // Check value exists.
              if( have_rows('content') ):

                // Loop through rows.
                while ( have_rows('content') ) : the_row();

                    // Case: Row Text layout.
                    if( get_row_layout() == 'row_text' ):
                        get_template_part( 'templates/case/row', 'text' );

                    // Case: Row Image layout.
                    elseif( get_row_layout() == 'row_image' ):
                      get_template_part( 'templates/case/row', 'image' );
                              
                    endif;

                // End loop.
                endwhile;

              // No value.
              else :
                // Do something...
              endif;
            ?>
          </div>
        </div>
      </div>
      <?php 
        get_template_part( 'templates/case/gallery'); 
      ?>
    </section>

    <?php 
      get_template_part( 'templates/case/feedback'); 
    ?>
  </main>

<?php 
  get_footer(  );
?>