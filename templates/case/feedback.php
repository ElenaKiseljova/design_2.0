<?php 
    $frontpage_id = (int) get_option( 'page_on_front' );

    // Check value exists.
    if( have_rows('content', $frontpage_id) ):

      // Loop through rows.
      while ( have_rows('content', $frontpage_id) ) : the_row();

          // Case: feedback layout.
          if( get_row_layout() == 'feedback' ):
            
            get_template_part( 'templates/front/feedback' );              
                    
          endif;

      // End loop.
      endwhile;

    // No value.
    else :
      // Do something...
    endif;
  ?> 