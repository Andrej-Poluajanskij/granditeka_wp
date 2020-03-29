<?php
/* Template name: News */
get_header();
?>
<?php include('includes/page_title.php'); ?>
  <section class="news news_page container container-2">
            <div class="news-list">
                <ul>
                <?php

                    $args = array('post_type' => 'post', 'posts_per_page' => 6);
                    $news = new WP_Query($args);

                    if($news->have_posts()) : 
                    while($news->have_posts()) : 
                        $news->the_post();
                ?>
                    <li>
                        <a href="<?php the_permalink(); ?>">
                            <div class="news-image">
                                <img src="<?php  echo get_the_post_thumbnail_url($post->ID, 'news_image' ); ?>" alt="">
                            </div>
                            <div class="news-list-title">
                                <span></span>
                                <div class="news-list-title-content">
                                    <h3><?php the_title(); ?></h3>
                                    <p><?php echo excerpt(15); ?></p>
                                    <a href="<?php the_permalink(); ?>">Read more</a>
                                </div>
                            </div>
                        </a>
                    </li>
                    <?php
                        endwhile;
                        endif;
                    ?>

                </ul>
            </div>
            <div class="bg-decor decor-position-2"></div>
            <div class="bg-decor decor-position-1"></div>
        </section>

<?php get_footer(); ?>