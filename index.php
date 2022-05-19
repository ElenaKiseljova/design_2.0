<?php 
  get_header(  );
?>

<main class="page">
  <div id="cursor"></div>

  <section class="text-page">
    <div class="_container">

      <div class="text-page__content">
        <h1><?php the_title( ); ?></h1>
        
        <?php the_content( ); ?>
      </div>
    </div>
  </section>
</main>

<?php 
  get_footer(  );
?>