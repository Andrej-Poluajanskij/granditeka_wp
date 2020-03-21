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
                        <div class="form-item">
                            <label for="message">Message<span>*</span></label>
                            <textarea name="massage" minlength="10" id="" cols="65" rows="4" placeholder="Type your message" required></textarea>
                        </div>
                    </form>
                    <div class="contacts-form-button">
                        <button type="submit" class="big-button"><span>Send message</span></button>
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
                    <li>
                        <a class="icon-1" href=""></a>
                    </li>
                    <li>
                        <a class="icon-2" href=""></a>
                    </li>
                    <li>
                        <a class="icon-3" href=""></a>
                    </li>
                    <li>
                        <a class="icon-4" href=""></a>
                    </li>
                    <li>
                        <a class="icon-5" href=""></a>
                    </li>
                    <li>
                        <a class="icon-6" href=""></a>
                    </li>
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