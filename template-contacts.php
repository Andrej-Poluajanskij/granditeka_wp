<?php
/* Template name: Contacts */
get_header();
?>
     <?php include('includes/page_title.php'); ?>
     <div class="contacts-background">
         <section class="contacts_page container container-2">
            <div class="main-contacts_page">

            <!-- <?php //if( have_rows('contacts_items') ): ?>
                <ul>

                <?php //while( have_rows('contacts_items') ): the_row(); ?>
                    <li>
                        <div class="main-contacts_page-icon" style="background-image: url(<?php the_sub_field('contact_icon'); ?>)">
                        </div>
                        <div class="main-contacts_page-note">
                            <span><?php the_sub_field('contact_title'); ?></span>
                            <a href="mailto:<?php the_sub_field('contact_text'); ?>"><?php the_sub_field('contact_text'); ?></a>
                        </div>
                    </li>
                    <?php// endwhile; ?> -->

                    <?php if( have_rows('main_contacts_fields') ): ?>
                    <ul class="main-contacts_page-left">
                        <?php while( have_rows('main_contacts_fields') ): the_row(); ?>
                            <li>
                                <div class="main-contacts_page-icon" style="background-image: url(<?php the_sub_field('contact_icon'); ?>)" > 
                                </div>
                                <div class="main-contacts_page-note">
                                    <span><?php the_sub_field('contact_title'); ?></span>
                                    <a><?php the_sub_field('contact_text'); ?></a>
                                </div>
                        </li>
                        <?php endwhile; ?> 
                    </ul>
                    <?php endif; ?>

                    <?php if( have_rows('email_contacts_fields') ): ?>
                    <ul class="main-contacts_page-right">
                        <?php while( have_rows('email_contacts_fields') ): the_row(); ?>
                            <li>
                                <div class="main-contacts_page-icon" style="background-image: url(<?php the_sub_field('contacts_icon'); ?>)">
                                </div>
                                <div class="main-contacts_page-note">
                                    <span><?php the_sub_field('contact_title'); ?></span>
                                    <a href="mailto:<?php the_sub_field('contact_text'); ?>"><?php the_sub_field('contact_text'); ?></a>
                                </div>
                            </li>
                        <?php endwhile; ?>                 
                    </ul>
                <?php  endif; ?>
             </div>
             <div class="contacts_page-deliver">
                <div>WE DELIVER <span>WORLDWIDE!</span></div>
                <span class="spacer"></span>
                <div class="deliver-dhl"></div>
                <div class="deliver-dpd"></div>
             </div>
         </section>
    </div>   
         <section class="write_us container container-2">
            <div class="section-header">
                <div class="line"></div>
                <h2>write us</h2>
                <div class="clear"></div>
            </div>
            <div class="bg-decor decor-position-6"></div> 
            <div class="bg-decor decor-position-7"></div> 
 
                <form id="form" action="" method="post">
                    <div class="form-left">
                        <div class="form-item">
                            <label for="name">Contact name<span>*</span></label>
                            <input name="name" type="text" minlength="5" placeholder="Type your name" required>
                        </div>
                        <div class="form-item">
                            <label for="subject">Subject<span>*</span></label>
                            <input name="subject" type="text" minlength="2" placeholder="Type your last name" required>
                        </div>
                        <div class="form-item">
                            <label for="number">Phone numer<span>*</span></label>
                            <input name="number" type="number" minlength="7" placeholder="Type your phone number" required>
                        </div>
                        <div class="form-item">
                            <label for="email">Email address<span>*</span></label>
                            <input name="email" type="email"  placeholder="Type your email address" required>
                        </div>
                    </div>
                    <div class="form-right">
                        <div class="form-item">
                            <label for="message">Message<span>*</span></label>
                            <textarea name="massage" minlength="10" id="" cols="65" rows="7" placeholder="Type your message" required></textarea>
                        </div>
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
         </section>
         <section class="payment container container-2">
            <div class="section-header">
                <div class="line"></div>
                <h2>payment methods</h2>
                <div class="clear"></div>
            </div>
            <div class="payment-methods">
                <ul>
                    <?php 
                        $moneygram = get_field('moneygram');
                        $westernunion = get_field('westernunion');
                        $paypal = get_field('paypal');
                        $bank = get_field('bank');
                    ?>
                    <?php if($moneygram){ ?>
                        <li><span class="payment-methods-icon icon-1"></span></li>
                    <?php } ?>

                    <?php if($westernunion){ ?>
                        <li><span class="payment-methods-icon icon-2"></span></li>
                    <?php } ?>

                    <?php if($paypal){ ?>
                        <li><span class="payment-methods-icon icon-3"></span></li>
                    <?php } ?>
                    
                    <?php if($bank){ ?>
                        <li><span class="payment-methods-icon icon-4"></span></li>
                    <?php } ?>
                </ul>
            </div>
         </section>

<?php get_footer(); ?>