<?php
/* Template name: Products List */
get_header();
?>
<?php include('includes/page_title.php'); ?>
<section class="products product_list-page container container-2">
    <div class="product_list-left">
        <div class="products-list">
            <ul>
            <?php

                $product = array('post_type' => 'products', 'posts_per_page' => -1);
                $products = new WP_Query($product);

                if($products->have_posts()) : 
                while($products->have_posts()) : 
                    $products->the_post();
            ?>

                <li>
                  <a href="<?php the_permalink(); ?>">
                    <div class="product-list-image">
                        <img src="<?php echo get_correct_image_link_thumb(get_field('product_image'), 'product_page_image' ); ?>" alt="">
                    </div>
                    <div class="product-list-title">
                        <h4><?php the_field('product_title'); ?></h4>
                    </div>
                    <div class="product-list-price">
                        <?php the_field('product_price'); ?>
                    </div>
                    <div class="product-list-button">
                        <p>More Information</p>
                    </div>
                  </a>
                </li>

                <?php
                    endwhile;
                    endif;
                ?>
            </ul>

        </div>
    </div>

    <?php include('includes/product_list-right.php'); ?>
    <div class="bg-decor decor-position-1"></div>
    <div class="bg-decor decor-position-2"></div>
</section>

<?php get_footer(); ?>