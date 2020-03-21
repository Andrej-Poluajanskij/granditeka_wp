<?php
/* Template name: News */
get_header();
?>
<?php include('includes/page_title.php'); ?>
  <section class="news container container-2">
            <div class="news-list">
                <ul>
                    <li>
                        <a href="">
                            <div class="news-image">
                                <img src="<?php echo get_template_directory_uri(); ?> /images/news-1.jpg" alt="">
                            </div>
                            <div class="news-list-title">
                                <span></span>
                                <div class="news-list-title-content">
                                    <h3>Lorem ipsum dolor sit amet.</h3>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus excepturi molestiae, esse, ipsum error, et libero eveniet doloremque sequi nisi incidunt!</p>
                                    <a href="http://">Read more</a>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <div class="news-image">
                                <img src="<?php echo get_template_directory_uri(); ?> /images/news-2.jpg" alt="">
                            </div>
                            <div class="news-list-title">
                                <span></span>
                                <div class="news-list-title-content">
                                    <h3>Lorem ipsum dolor sit amet.</h3>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus excepturi molestiae, esse, ipsum error, et libero eveniet doloremque sequi nisi incidunt!</p>
                                    <a href="http://">Read more</a>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <div class="news-image">
                                <img src=" <?php echo get_template_directory_uri(); ?>/images/news-3.jpg" alt="">
                            </div>
                            <div class="news-list-title">
                                <div class="news-list-title-content">
                                    <h3>Lorem ipsum dolor sit amet.</h3>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus excepturi molestiae, esse, ipsum error, et libero eveniet doloremque sequi nisi incidunt!</p>
                                    <a href="http://">Read more</a>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="bg-decor decor-position-3"></div>
        </section>

<?php get_footer(); ?>