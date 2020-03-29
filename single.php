<?php get_header(); ?>

<?php include('includes/page_title.php'); ?>

<section class="news_inner-page container container-2">
    <div class="news_inner">
        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
            <div class="news_inner-content">
                 <p>
                     <?php the_content(); ?>
                 </p>   

            </div>
            <div class="news_inner-image">
                <img src="<?php  echo get_the_post_thumbnail_url($post->ID, 'news_inner-page_image' ); ?>" alt="">
            </div>
        <?php endwhile; endif; ?>
    </div>
</section>




<?php get_footer(); ?>