<?php

get_header();
?>
<?php include('includes/page_title.php'); ?>
     <section class="product_inner-page container container-2">
        <div class="product_inner">
            <div class="product_inner-image">
                <div class="product_big-image slider-conteiner">
                    <div class="slider">
                        <a class="fancy-box" data-fancybox="gallery" href="">
                            <img class="slider-image" onclick="openModal()" src="<?php echo get_correct_image_link_thumb(get_field('product_image'), 'news_inner-page_image' ); ?>" alt="" />
                        </a>                    
                        <button class="prev" onclick="slideImage(-1)"></button>
                        <button class="next" onclick="slideImage(1)"></button>
                        <div class="image-zoom" onclick="openModal()"></div>
                    </div>
                </div>

                <div class="product_small-images">
                <?php if( have_rows('product_page_images') ): ?>
                    <?php while( have_rows('product_page_images') ): the_row(); ?>
                    <img class="slider-image_small" style="display: none" src="<?php echo get_correct_image_link_thumb(get_sub_field('image_1'), 'news_inner-page_image' ); ?>" alt="" />
                    <?php endwhile; ?>
                <?php endif; ?>
                    <div class="image-count"><span class="counter"></span></div>
                </div>

                <!-- <div class="image-modal">
                    <span class="close" onclick="closeModal()">&times;</span>
                    <img class="modal-content" src="" >
                </div> -->

            </div>
            <div class="product_inner-info">
                <div class="product_inner-info_title">
                    <h2><?php the_field('product_page_title'); ?></h2>
                    <p><?php the_field('product_page_sub_title'); ?></p>
                </div>
                <div class="spacer"></div>
                <div class="product_inner-info_price"><?php the_field('product_page_price'); ?><span class="openModal" >Offer your price</span></div>

                <div class="product_inner-info_select">
                <?php if( have_rows('optios_select') ): ?>
                    <label for="product_options">Option</label>
                    <select name="" id="product_options">
                        <option value="" selected disabled>Choose option</option> 

                        <?php while( have_rows('optios_select') ): the_row(); ?>
                        <option value="<?php the_sub_field('option'); ?>"><?php the_sub_field('option'); ?></option> 
                        <?php endwhile; ?>

                    </select>
                    <?php endif; ?>
                </div>

                <div class="product_inner-info_adds">
                <?php 
                    if( have_rows('add_for_product') ): 
                    
                    $myID = 0;
                ?>
                    
                    <?php while( have_rows('add_for_product') ): the_row(); 
                        $myID++;
                    ?>
                    <div class="product_adds">

                        <label for="ID-<?php echo $myID ?>">
                            <?php the_sub_field('add_title'); ?> 
                            <span class="checkbox "></span>
                            <input type="checkbox" id="ID-<?php echo $myID ?>" value="<?php the_sub_field('add_price'); ?>">
                            <span class="product_adds-price"><?php the_sub_field('add_price'); ?></span>
                        </label>
                    </div>
                    
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
               
            </div>
            
            <div class="modal-window-blur ">
                <div class="modal-window">
                    <h4>Offer your price</h4>
                    <form action="" id="offeerPrice">
                        <div class="form-item">
                            <label for="name">Contact name<span>*</span></label>
                            <input name="name" type="text" minlength="5" placeholder="Type your name" required>
                        </div>
                        <div class="form-item">
                            <label for="email">Email address<span>*</span></label>
                            <input name="email" type="email"  placeholder="Type your email address" required>
                        </div>
                        <div class="form-item">
                            <label for="message">Message<span>*</span></label>
                            <textarea name="massage" minlength="10" cols="65" rows="4" placeholder="Type your message" required></textarea>
                        </div>
                        <div class="contacts-form-button">
                            <button type="submit" class="big-button"><span>Send offer</span></button>
                        </div>
                    </form>
                        <div class="close-window">
                        </div>
                </div>        
            </div>

            <div class="product_inner-description" id="tabs">

            <?php if( have_rows('product_description') ):
                $tab_ID = 0;
                ?>
                <div class="description_tabs">
                <?php while( have_rows('product_description') ): the_row();
                    $tab_ID++;
                ?>

                    <div onclick="openDescription(event, 'tab-<?php echo $tab_ID ?>')" class="description-name ">
                        <?php the_sub_field('description_title'); ?>
                    </div>


                <?php endwhile; ?>
                </div>

                <div class="description-content">
                <?php  $tab_ID = 0; ?>
                <?php while( have_rows('product_description') ): the_row(); 
                    $tab_ID++;
                ?>

                    <div id="tab-<?php echo $tab_ID ?>" class="description-name-content ">
                        <p> <?php the_sub_field('description_content'); ?></p>
                    </div>

                    <?php endwhile; ?>
                </div>
                <?php endif; ?>
            </div>

        </div>
          <?php include('includes/product_list-right.php'); ?>
          <div class="bg-decor decor-position-2"></div>
     </section>
     <section class="products container container-2">
        <div class="section-header">
            <div class="line"></div>
            <h2>RELATED PRODUCTS</h2>
            <div class="clear"></div>
        </div>
        <div class="products-list">
            <ul>
                <li>
                    <div class="product-list-image">
                        <img src="<?php echo get_template_directory_uri(); ?> /images/product-1.jpg" alt="">
                    </div>
                    <div class="product-list-title">
                        <h4>Iveco EURO 6 SCR Emulator Lorem ipsum dolor sit...</h4>
                    </div>
                    <div class="product-list-price">
                        100&euro; - 200&euro;
                    </div>
                    <div class="product-list-button">
                        <p>More Information</p>
                    </div>
                </li>
                <li>
                    <div class="product-list-image">
                        <img src="<?php echo get_template_directory_uri(); ?> /images/product-1.jpg" alt="">
                    </div>
                    <div class="product-list-title">
                        <h4>Iveco EURO 6 SCR Emulator Lorem ipsum dolor sit...</h4>
                    </div>
                    <div class="product-list-price">
                        100&euro; - 200&euro;
                    </div>
                    <div class="product-list-button">
                        <p>More Information</p>
                    </div>
                </li>
                <li>
                    <div class="product-list-image">
                        <img src="<?php echo get_template_directory_uri(); ?> /images/product-1.jpg" alt="">
                    </div>
                    <div class="product-list-title">
                        <h4>Iveco EURO 6 SCR Emulator Lorem ipsum dolor sit...</h4>
                    </div>
                    <div class="product-list-price">
                        100&euro; - 200&euro;
                    </div>
                    <div class="product-list-button">
                        <p>More Information</p>
                    </div>
                </li>
                <li>
                    <div class="product-list-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/product-1.jpg" alt="">
                    </div>
                    <div class="product-list-title">
                        <h4>Iveco EURO 6 SCR Emulator Lorem ipsum dolor sit...</h4>
                    </div>
                    <div class="product-list-price">
                        100&euro; - 200&euro;
                    </div>
                    <div class="product-list-button">
                        <p>More Information</p>
                    </div>
                </li>
            </ul>
            <div class="products-button">
                <a class="big-button">All products</a>
            </div>
        </div>
        <div class="bg-decor decor-position-1"></div>
    </section>

<?php get_footer(); ?>