<?php if(!is_page_template('template-contacts.php')) { ?>
<div class="contacts-background">
            
    <section class="main-contacts container container-2">
        <div class="section-header">
            <div class="line"></div>
            <h2>contacts</h2>
            <div class="clear"></div>
        </div>
        <div class="main-contacts-bg">
            <div class="contacts-container container-2">
                <div class="contacts-container-left">
                    <ul>
                        <li>
                            <div class="contacts-container-left-icon icon-1">
                            </div>
                            <div class="contacts-container-left-note">
                                <span>adress</span>
                                <address>Kalvariju g. 125, 1 korp.LT-08221 Vilnius</address>
                            </div>
                        </li>
                        <li>
                            <div class="contacts-container-left-icon icon-2">
                            </div>
                            <div class="contacts-container-left-note">
                                <span>phone number</span>
                                <address>+370 608 14423</address>
                            </div>
                        </li>
                        <li>
                            <div class="contacts-container-left-icon icon-3">
                            </div>
                            <div class="contacts-container-left-note">
                                <span>email</span>
                                <address>info@grindateka.eu</address>
                            </div>
                        </li>
                        <li>
                            <div class="contacts-container-left-icon icon-4">
                            </div>
                            <div class="contacts-container-left-note">
                                <span>working hours</span>
                                <address>I-V 9:00-18:00</address>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="contacts-container-right">
                    <form id="form" action="" method="post">
                        <div class="form-item">
                            <label for="name">Contact name<span>*</span></label>
                            <input name="name" type="text" minlength="5" placeholder="Type your name" >
                        </div>
                        <div class="form-item">
                            <label for="subject">Subject<span>*</span></label>
                            <input name="subject" type="text" minlength="2" placeholder="Type your last name" >
                        </div>
                        <div class="form-item">
                            <label for="number">Phone numer<span>*</span></label>
                            <input name="number" type="number" minlength="7" placeholder="Type your phone number" >
                        </div>
                        <div class="form-item">
                            <label for="email">Email address<span>*</span></label>
                            <input name="email" type="email"  placeholder="Type your email address" >
                        </div>
                        <div class="form-item">
                            <label for="message">Message<span>*</span></label>
                            <textarea name="massage" minlength="10" id="" cols="65" rows="4" placeholder="Type your message" ></textarea>
                        </div>

                        <div class="contacts-form-button">
                        <button type="submit" class="big-button"><span>Send message</span></button>
                    </div>
                    </form>

                    <div class="loader display-none">
                        <div class="circles">
                            <span class="one"></span>
                            <span class="two"></span>
                            <span class="three"></span>
                        </div>
                        <div class="pacman">
                            <span class="top"></span>
                            <span class="bottom"></span>
                            <span class="left"></span>
                            <div class="eye"></div>
                        </div>
                        <div class="send">Sending...</div>
                    </div>
                   
                </div>
            </div>
        </div>
    </section>
</div>
<?php } ?>
        </main>
  <footer>
  <div class="contacts_us-icons animated zoomIn delay-2s ">
                <ul>
                    <?php 
                        $Supremo = get_field('Supremo', 'options');
                        $messenger = get_field('messenger', 'options');
                        $telegram = get_field('telegram', 'options');
                        $viber = get_field('viber', 'options');
                        $whatsapp = get_field('whatsapp', 'options');
                        $facebook = get_field('facebook', 'options');
                    ?> 

                    <?php if($Supremo){ ?>
                    <li>
                        <a class="icon-1" href="<?php echo $Supremo; ?>" target="_blank"></a>
                    </li>
                    <?php } ?>
                    <?php if($messenger){ ?>
                    <li>
                        <a class="icon-2" href="<?php echo $messenger; ?>" target="_blank"></a>
                    </li>
                    <?php } ?>
                    <?php if($telegram){ ?>
                    <li>
                        <a class="icon-3" href="<?php echo $telegram; ?>" target="_blank"></a>
                    </li>
                    <?php } ?>
                    <?php if($viber){ ?>
                    <li>
                        <a class="icon-4" href="<?php echo $viber; ?>" target="_blank"></a>
                    </li>
                    <?php } ?>
                    <?php if($whatsapp){ ?>
                    <li>
                        <a class="icon-5" href="<?php echo $whatsapp; ?>" target="_blank"></a>
                    </li>
                    <?php } ?>
                    <?php if($facebook){ ?>
                    <li>
                        <a class="icon-6" href="<?php echo $facebook; ?>" target="_blank"></a>
                    </li>
                    <?php } ?>

                </ul>
            </div>
          <?php include('includes/bottom_meniu.php'); ?>
          <div class="go-on-top" >
                <span class="go-on-top-arrow"></span>
            </div>
      </footer>
    <?php wp_footer(); ?>
  </body>
</html>