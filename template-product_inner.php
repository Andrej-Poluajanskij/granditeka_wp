<?php
/* Template name: Product inner */
get_header();
?>
<?php include('includes/page_title.php'); ?>
     <section class="product_inner-page container container-2">
        <div class="product_inner">
            <div class="product_inner-image">
                <div class="product_big-image slider-conteiner">
                    <div class="slider">
                        <img src="<?php echo get_template_directory_uri(); ?> /images/product-2.jpg" alt="" />
                    </div>
                    <!-- <div class="slider">
                        <img src="  <?php echo get_template_directory_uri(); ?>/images/product-2.jpg" alt="" />
                    </div>
                    <div class="slider">
                        <img src="<?php echo get_template_directory_uri(); ?> /images/product-2.jpg" alt=" "/>
                    </div> -->
                 
                </div>
                <div class="product_small-images">

                </div>
            </div>
            <div class="product_inner-info">
                <div class="product_inner-info_title">
                    <h2>SCR Emulator V5 NOx</h2>
                    <p>SCR Emulator V5 NOx can override SCR NOx and cut off usage of DEF fluid on DAF, Iveco, MAN, Mercedes-Benz, Renault, Volvo and FORD trucks. It emulates the whole system safely including NOx sensor so there will be no OBD DTC errors.</p>
                </div>
                <div class="spacer"></div>
                <div class="product_inner-info_price">1500&euro;<span class="openModal" >Offer your price</span></div>

                <div class="product_inner-info_select">
                    <label for="product_options">Option</label>
                    <select name="" id="product_options">
                        <option value="" selected disabled>Choose option</option> 
                        <option value="">Option-1</option> 
                        <option value="">Option-2</option>
                        <option value="">Option-3</option>
                        <option value="">Option-4</option>
                        <option value="">Option-5</option>
                        <option value="">Option-6</option>
                        <option value="">Option-7</option>
                    </select>
                </div>

                <div class="product_inner-info_adds">
                    <div class="product_adds">
                        <label for="add-1">99331043 38-pin cable
                            <span class="checkbox "></span>
                            <input type="checkbox" id="add-1" value="50">
                            <span class="product_adds-price">50&euro;</span>
                        </label>
                    </div>
                    <div class="product_adds">
                        <label for="add-2">99
                            <span class="checkbox "></span>
                            <input type="checkbox" id="add-2" value="50">
                            <span class="product_adds-price">50&euro;</span>
                        </label>
                    </div>
                    <div class="product_adds">
                        <label for="add-3">99331043 -pin cable
                            <span class="checkbox "></span>
                            <input type="checkbox" id="add-3" value="50">
                            <span class="product_adds-price">50&euro;</span>
                        </label>
                    </div>
                    <div class="product_adds">
                        <label for="add-4">99331043 3
                            <span class="checkbox "></span>
                            <input type="checkbox" id="add-4" value="50">
                            <span class="product_adds-price">50&euro;</span>
                        </label>
                    </div>
                </div>
            </div>
            
            <div class="modal-window-blur ">
                <div class="modal-window">
                    <h4>Offer your price</h4>
                    <form action="">
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
                    </form>
                        <div class="contacts-form-button">
                            <button type="submit" class="big-button"><span>Send offer</span></button>
                        </div>
                        <div class="close-window">
                        </div>
                </div>        
            </div>

            <div class="product_inner-description" id="tabs">
                <div class="description_tabs">
                    <div onclick="openDescription(event, 'tab-1')" class="description-name active">
                       Descrioption
                    </div>
                    <div onclick="openDescription(event, 'tab-2')" class="description-name">
                       Additional information
                    </div>
                    <div onclick="openDescription(event, 'tab-3')" class="description-name">
                       Warranty
                    </div>
                </div>

                <div class="description-content">
                    <div id="tab-1" class="description-name-content content-block">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero in labore fugit vitae, dolore obcaecati hic ipsum dolorem perferendis tenetur beatae, accusantium laudantium sequi debitis ducimus? Rerum corrupti voluptatibus illum consequuntur eveniet neque? Maxime sit placeat ex, accusamus ratione iusto ipsam sapiente tempora nesciunt? Distinctio eos fugit et sed sit dicta tenetur accusamus aspernatur dolorum, ab quae eaque laboriosam architecto at unde exercitationem ipsam quidem? Distinctio fuga expedita possimus vel non sequi rerum ut sint pariatur quia dignissimos, et quos obcaecati placeat, reprehenderit a perspiciatis? Fugit obcaecati ipsum possimus labore ducimus laboriosam molestias recusandae, maiores deleniti natus expedita perferendis vitae?</p>
                    </div>
                    <div id="tab-2" class="description-name-content">
                        <p>Lorem ipsum dolor sit, Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde doloribus excepturi aliquid ab dignissimos culpa, quasi id nam perferendis atque. Recusandae tempora quos eaque soluta? Suscipit perferendis vero illo.</p>
                    </div>
                    <div id="tab-3" class="description-name-content">
                        <p>Warranty</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium unde, voluptatibus est praesentium ducimus corporis hic, qui voluptatum dolore rerum et perferendis eveniet pariatur commodi cumque error saepe tempora architecto accusamus minima. Sequi consequuntur maiores, molestiae nisi tempora saepe dignissimos aut magni dolorum quaerat tempore.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, nihil. Facere a illum veniam quia similique in culpa corrupti eligendi vel nisi explicabo magnam sunt maxime fuga ad officia provident maiores, quod cupiditate tempore consequuntur!</p>
                        <p>Lorem ipsum dolor sit, Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde doloribus excepturi aliquid ab dignissimos culpa, quasi id nam perferendis atque. Recusandae tempora quos eaque soluta? Suscipit perferendis vero illo.</p>
                    </div>
                </div>

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
                        <a>More Information</a>
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
                        <a>More Information</a>
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
                        <a>More Information</a>
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
                        <a>More Information</a>
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