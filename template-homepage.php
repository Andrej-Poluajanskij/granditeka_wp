<?php
/* Template name: Homepage */
get_header();
?>
      <main>
        <section class="intro container">
            <div class="search-bar">
                <input type="text" placeholder="Search products">
                <button type="submit"></button>
            </div>
            <!-- <div class="truck-image animated slideInRight slow "> -->
                <!-- <img class="truck-image animated slideInRight slow " src="<?php echo get_template_directory_uri(); ?>/images/truck2.jpg" alt=""> -->
            <!-- </div> -->
            <?php if( get_field('header_image') ): ?>
                <img class="truck-image animated slideInRight slow " src="<?php the_field('image'); ?>" />
            <?php endif; ?>

            <div class="container-2">
                <div class="note animated fadeInDownBig delay-2s">
                    <div class="scrollToWorks" >
                        <span>
                            <span class="arrow"></span>
                            &#8212;&#8212;&#8212;&#8212; view that we offers
                        </span>
                    </div>
                </div>
                <div class="title">
                    <h1 class="animated fadeInLeft delay-1s"><?php the_field('title'); ?></h1>
                    <p class="animated fadeIn delay-2s"><?php the_field('sub_title'); ?></p>
                </div>
                <div class="about-us animated fadeInUp delay-2s">

                <?php if( have_rows('header_about_fild') ): ?>
                    <ul>

                    <?php while( have_rows('header_about_fild') ): the_row(); ?>
                        <li>
                            <div class="icon">
                                <span class="medal-icon" style="background-image: url(<?php the_sub_field('about_icon'); ?>)"></span>
                            </div>
                            <div class="spacer"></div>
                            <div class="about-us__note">
                                <p><?php the_sub_field('about_text'); ?></p>
                            </div>
                        </li>
                        <?php endwhile; ?>
        
                    </ul>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <section class="category container container-2">
            <div class="section-header ">
                <div class="line"></div>
                <h2>choose category</h2>
                <div class="clear"></div>
            </div>
            <div class="category-list">
                <ul >
                    <li class="flip-up animated" >
                        <a href="">
                            <div class="category-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/image_1.jpg" alt="">
                                
                                <div class="image-hover-effect"></div>
                            </div>
                            <div class="category-list-title">
                                <span></span>
                                <h3>SCR SYSTEM<br>SOLUTIONS</h3>
                            </div>
                        </a>
                    </li>
                    <li class="flip-up animated" >
                        <a href="">
                            <div class="category-image">
                                <img src="<?php echo get_template_directory_uri(); ?> /images/image_2.jpg" alt="">
                                <div class="image-hover-effect"></div>
                            </div>
                            <div class="category-list-title">
                                <span></span>
                                <h3>equipment for<br>TRUCKS</h3>
                            </div>
                        </a>
                    </li>
                    <li class="flip-up animated" >
                        <a href="">
                            <div class="category-image">
                                <img src="<?php echo get_template_directory_uri(); ?> /images/image_3.jpg" alt="">
                                <div class="image-hover-effect"></div>
                            </div>
                            <div class="category-list-title">
                                <span></span>
                                <h3>industrial/<br>construction<br>equipment</h3>
                            </div>
                        </a>
                    </li>
                    <li class="flip-up animated" >
                        <a href="">
                            <div class="category-image">
                                <img src="<?php echo get_template_directory_uri(); ?> /images/image_4.jpg" alt="">
                                <div class="image-hover-effect"></div>
                            </div>
                            <div class="category-list-title">
                                <span></span>
                                <h3>equipment for<br>cars</h3>
                            </div>
                        </a>
                    </li>
                    <li class="flip-up animated" >
                        <a href="">
                            <div class="category-image">
                                <img src="<?php echo get_template_directory_uri(); ?> /images/image_5.jpg" alt="">
                                <div class="image-hover-effect"></div>
                            </div>
                            <div class="category-list-title">
                                <span></span>
                                <h3>equipment for<br>immo/keys</h3>
                            </div>
                        </a>
                    </li>
                    <li class="flip-up animated" >
                        <a href="">
                            <div class="category-image">
                                <img src="<?php echo get_template_directory_uri(); ?> /images/image_6.jpg" alt="">
                                <div class="image-hover-effect"></div>
                            </div>
                            <div class="category-list-title">
                                <span></span>
                                <h3>electrical<br>equipment repair</h3>
                            </div>
                        </a>
                    </li>
                    <li class="flip-up animated" >
                        <a href="">
                            <div class="category-image">
                                <img src="<?php echo get_template_directory_uri(); ?> /images/image_7.jpg" alt="">
                                <div class="image-hover-effect"></div>
                            </div>
                            <div class="category-list-title">
                                <span></span>
                                <h3>spare parts</h3>
                            </div>
                        </a>
                    </li>
                    <li class="flip-up animated" >
                        <a href="">
                            <div class="category-image">
                                <img src="<?php echo get_template_directory_uri(); ?> /images/image_8.jpg" alt="">
                                <div class="image-hover-effect"></div>
                            </div>
                            <div class="category-list-title">
                                <span></span>
                                <h3>turbine repair<br>services</h3>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="bg-decor decor-position-1"></div>
            <div class="bg-decor decor-position-2"></div>
        </section>

        <section class="news container container-2">
            <div class="section-header">
                <div class="line"></div>
                <h2>news</h2>
                <div class="clear"></div>
            </div>
            <div class="news-list">
                <ul>
                <?php

                    $args = array('post_type' => 'post', 'posts_per_page' => 3);
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
                                    <p><?php the_excerpt(); ?></p>
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
                <div class="news-button">
                    <a class="big-button">More news</a>
                </div>
            </div>
            <div class="bg-decor decor-position-3"></div>
        </section>

        <section class="products container container-2">
            <div class="section-header">
                <div class="line"></div>
                <h2>popular products</h2>
                <div class="clear"></div>
            </div>
            <div class="products-list">
                <ul>
                <?php

                    $product = array('post_type' => 'products', 'posts_per_page' => 4);
                    $products = new WP_Query($product);

                    if($products->have_posts()) : 
                    while($products->have_posts()) : 
                        $products->the_post();
                ?>
                    <li>
                        <div class="product-list-image">
                            <img src="<?php echo get_correct_image_link_thumb(get_field('product_image'), 'product_image' ); ?>" alt="">
                        </div>
                        <div class="product-list-title">
                            <h4><?php the_field('product_title'); ?></h4>
                        </div>
                        <div class="product-list-price">
                            <?php the_field('product_price'); ?>
                        </div>
                        <div class="product-list-button">
                            <a href="<?php the_permalink(); ?>">More Information</a>
                        </div>
                    </li>

                    <?php
                        endwhile;
                        endif;
                    ?>

  
                </ul>
                <div class="products-button">
                    <a class="big-button">All products</a>
                </div>
            </div>
            <div class="bg-decor decor-position-1"></div>
        </section>



<?php get_footer(); ?>