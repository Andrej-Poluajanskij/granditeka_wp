<div class="product_list-right">
  <div class="product-filter">
      <h4>Product categories</h4>
      <div class="spacer"></div>
      <?php 

        $myCategories = get_terms([
            'taxonomy' => 'categories',
            'hide_empty' => false,
        ]);

        ?>
    <ul class="product-filter_list">
        <?php foreach($myCategories as $item) {?>
          <li>

            <a href="<?php echo get_term_link($item->term_id); ?>">
            <span>&#129170;</span> <?php echo $item ->name; ?>
            </a> 
            <span><?php echo $item ->count; ?></span> 

          </li>
         <?php } ?>
        </ul>
  </div>
  
  <div class="product-filter">
      <h4>Manufacturers</h4>
      <div class="spacer"></div>

      <?php 

        $myManufacturers = get_terms([
            'taxonomy' => 'manufacturer',
            'hide_empty' => false,
        ]);

        ?>

      <ul class="product-filter_list">
        <?php foreach($myManufacturers as $item) {?>
          <li>

            <a href="<?php echo get_term_link($item->term_id); ?>">
            <span>&#129170;</span> <?php echo $item ->name; ?>
            </a> 
            <span><?php echo $item ->count; ?></span> 

          </li>
        <?php } ?>
      </ul>
  </div>
</div>