<?php
/* Template name: Categories */
get_header();
?>
<?php include('includes/page_title.php'); ?>

<?php 

$myCategories = get_terms([
    'taxonomy' => 'categories',
    'hide_empty' => false,
]);

?>

<section class="category category_page container container-2">
            <div class="category-list">
                <ul>
                <?php foreach($myCategories as $item) {?>
                    <li class="flip-up " >
                        <a href="<?php echo get_term_link($item->term_id); ?>">
                            <div class="category-image">
                                <img src="<?php echo get_correct_image_link_thumb(get_field('categories_image', $item), 'category_image' ); ?>" alt="">
                                <div class="image-hover-effect"></div>
                            </div>
                            <div class="category-list-title">
                                <span></span>
                                <h3><?php echo $item ->name; ?></h3>
                            </div>
                        </a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="bg-decor decor-position-1"></div>
            <div class="bg-decor decor-position-2"></div>
        </section>

<?php get_footer(); ?>