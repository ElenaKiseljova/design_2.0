<?php
    /**
    * Template Name: Главная
    *
    */
?>
<?php 
  get_header(  );
?>

<main class="main" data-scroll-container>
    <?php 
      // Check value exists.
      if( have_rows('content') ):

        // Loop through rows.
        while ( have_rows('content') ) : the_row();

            // Case: team layout.
            if( get_row_layout() == 'team' ):
                get_template_part( 'templates/front/team' );
            
            // Case: Mission layout.
            elseif( get_row_layout() == 'mission' ):
              get_template_part( 'templates/front/mission' );
            
            // Case: Works layout.
            elseif( get_row_layout() == 'works' ):
              get_template_part( 'templates/front/works' );

            // Case: Services layout.
            elseif( get_row_layout() == 'services' ):
              get_template_part( 'templates/front/services' );

            // Case: feedback layout.
            elseif( get_row_layout() == 'feedback' ): 
                get_template_part( 'templates/front/feedback' ); 
                      
            endif;

        // End loop.
        endwhile;

      // No value.
      else :
        // Do something...
      endif;
    ?>  
</main>

<?php 
  get_footer(  );
?>