<?php
  $position = get_sub_field('position'); // right, center, full

  $columns = get_sub_field('columns');

  $margin_top = get_sub_field('margin_top') ?? 80;
?>
<div class="content content--<?= $position; ?> content--mt-<?= $margin_top; ?>">  
  <?php
    if ($columns) {
      foreach ($columns as $column) {      
        ?>
          <div class="content__column content__column--<?= count($columns); ?>">
            <?= $column['content']; ?>
          </div>
        <?php
      }
    }    
  ?>
</div>