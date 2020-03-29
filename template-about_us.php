<?php
/* Template name: About us */
get_header();
?>
    <section class="">
    <?php include('includes/page_title.php'); ?>
        <div class="container container-2">
            <div class="about_us-content">
                <h3><?php the_field('about_title'); ?></h3>
                <span class="spacer"></span>
                <p><?php the_field('about_content'); ?></p>
            </div>
            <div class="about_us-image">
                 
                <?php 
                   // $image = get_field('about_image', get_the_ID());
                   // $image_url =  wp_get_attachment_image( $image, 'about-us_image' );
                    
                   //        echo  $image_url;
                ?> 
                <?php 
                    $image = get_field('about_image');
                    $size = 'about-us_image'; 
                    if( $image ) {
                        echo wp_get_attachment_image( $image, $size );
                    }
                ?>
            </div>
        </div>
        <div class="bg-decor decor-position-4"></div>
        <div class="bg-decor decor-position-5"></div>
    </section>

<?php get_footer(); ?>