<?php require_once('config/config.php'); ?>

<?php
  $title = 'Contact us | DesignNoise';
  $active_page = 'contact';
  $base_url = '/';
  include('include/header.php');
?>


    <!-- ************************************************************* 
      ---- contain-section start's
  ******************************************************************-->
    <section id="contact-section" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div
                    class="col-md-12 col-lg-12 col-xl-12 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1>Contact us</h1>
                    <h2>Connect. Meet. Move.</h2>
                    <h3 style="font-size: 17px;">Please fill out the form below to get in touch. We will contact you shortly.</h3>
                </div>
            </div>
        </div>
    </section>

    <main id="main">

        <!-- ************************************************************* 
      ---- Main-section start's
  ******************************************************************-->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-4 col-xl-4">
                        <div class="title">
                            <h2>Get In Touch</h2>
                        </div>
                        <div class="contact-about">
                            <div class="info">
                                <div>
                                    <i class="ri-mail-send-line"></i>
                                    <p>support@designnoise.in</p>
                                </div>
                                <div>
                                    <i class="ri-phone-line"></i>
                                    <p>+91-8095545888</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-8 col-xl-8">
                        <div class="contact-box">
                            <h2>Message</h2>
                           <!-- <form action="#" method="post" role="form" class="php-email-form">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Full Name" data-rule="minlen:4"
                                        data-msg="Please enter at least 4 chars" />
                                    <div class="validate"></div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="phoneno" id="phoneno"
                                        placeholder="Your Phone Number" data-rule="email"
                                        data-msg="Please enter a Phone Number" />
                                    <div class="validate"></div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" data-rule="email"
                                        data-msg="Please enter a valid email" />
                                    <div class="validate"></div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" id="subject"
                                        placeholder="Subject" data-rule="minlen:4"
                                        data-msg="Please enter at least 8 chars of subject" />
                                    <div class="validate"></div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="5" data-rule="required"
                                        data-msg="Please write something for us" placeholder="Message"></textarea>
                                    <div class="validate"></div>
                                </div>
                                <div class="mb-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>
                                <div class="text-center"><button type="submit">Send Message</button></div> -->
                                <?php message_contact(); ?>
                        <form method="POST" class="login-form">
                            <div class="form-group">                                      
                                <input id="form-name" type="text" name="fullname" placeholder="Full Name" class="form-control" required>
                            </div>    
                            <div class="form-group">                                      
                                <input id="form-number" type="text" name="phoneno" placeholder="Your Phone Number" class="form-control" required>
                            </div>    
                            <div class="form-group">    
                                <input id="form-username" type="email" name="email" placeholder="Your Email" class="form-control" required>
                            </div>
                            <div class="form-group">    
                                <input id="form-username" type="text" name="subject" placeholder="Subject" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" required placeholder="Message"></textarea>
                            </div>
                            <div class="form-group php-email-form">
                                <button type="submit" id="new" name="submit">Send Message</button>
                            </div>
                        </form>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Section -->
    </main>


    <!-- ************************************************************* 
      ---- Footer-section start's
    ******************************************************************-->
   <?php
  include('include/footer.php');
?>