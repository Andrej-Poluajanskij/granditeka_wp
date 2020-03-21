<?php
/* Template name: Contacts */
get_header();
?>
     <?php include('includes/page_title.php'); ?>
     <div class="contacts-background">
         <section class="contacts_page container container-2">
            <div class="main-contacts_page">
                <ul>
                    <li>
                        <div class="main-contacts_page-icon icon-1">
                        </div>
                        <div class="main-contacts_page-note">
                            <span>Adress</span>
                            <address>Kalvariju g. 125, 1 korp.LT-08221 Vilnius</address>
                        </div>
                    </li>
                    <li>
                        <div class="main-contacts_page-icon icon-3">
                        </div>
                        <div class="main-contacts_page-note">
                            <span>Sales department</span>
                            <a href="mailto:sales@granditeka.eu">sales@granditeka.eu</a>
                        </div>
                    </li>
                 
                    <li>
                        <div class="main-contacts_page-icon icon-4">
                        </div>
                        <div class="main-contacts_page-note">
                            <span>Working hours</span>
                            <address>I-V 9:00-18:00</address>
                        </div>
                    </li>
                 
                    <li>
                        <div class="main-contacts_page-icon icon-3">
                        </div>
                        <div class="main-contacts_page-note">
                            <span>Technical support</span>
                            <a href="mailto:support@granditeka.eu">support@granditeka.eu</a>
                        </div>
                    </li>
                    <li>
                        <div class="main-contacts_page-icon icon-2">
                        </div>
                        <div class="main-contacts_page-note">
                            <span>Phone number</span>
                            <a href="tel:+370 608 14423">+370 608 14423</a>
                        </div>
                    </li>

                    <li>
                        <div class="main-contacts_page-icon icon-3">
                        </div>
                        <div class="main-contacts_page-note">
                            <span>Information about products</span>
                            <a href="mailto:info@granditeka.eu">info@granditeka.eu</a>
                        </div>
                    </li>
                    <li>
                        <div class="main-contacts_page-icon icon-5">
                        </div>
                        <div class="main-contacts_page-note">
                            <span>VAT NUMBER</span>
                            <address>GB 223462237</address>
                        </div>
                    </li>
                   
                    
                    <li>
                        <div class="main-contacts_page-icon icon-3">
                        </div>
                        <div class="main-contacts_page-note">
                            <span>warranty</span>
                            <a href="mailto:warranty@granditeka.eu">warranty@granditeka.eu</a>
                        </div>
                    </li>
                    
                </ul>
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
                </form>
                <div class="contacts-form-button">
                    <button type="submit" class="big-button"><span>Send message</span></button>
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
                    <li><span class="payment-methods-icon icon-1"></span></li>
                    <li><span class="payment-methods-icon icon-2"></span></li>
                    <li><span class="payment-methods-icon icon-3"></span></li>
                    <li><span class="payment-methods-icon icon-4"></span></li>
                </ul>
            </div>
         </section>

<?php get_footer(); ?>