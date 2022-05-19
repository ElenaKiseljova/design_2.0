<?php
    /**
    * Template Name: Главная
    *
    */
?>
<?php 
  get_header(  );
?>

<main class="page">
    <div id="cursor"></div>

    <?php 
      // Check value exists.
      if( have_rows('content') ):

        // Loop through rows.
        while ( have_rows('content') ) : the_row();

            // Case: Main layout.
            if( get_row_layout() == 'main' ):
                get_template_part( 'template-parts/front/main' );
            
            // Case: Mission layout.
            elseif( get_row_layout() == 'mission' ):
              get_template_part( 'template-parts/front/mission' );
            
            // Case: Works layout.
            elseif( get_row_layout() == 'works' ):
              get_template_part( 'template-parts/front/works' );

            // Case: Services layout.
            elseif( get_row_layout() == 'services' ):
              get_template_part( 'template-parts/front/services' );

            // Case: Contacts layout.
            elseif( get_row_layout() == 'contacts' ): 
                get_template_part( 'template-parts/front/contacts' ); 
                      
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