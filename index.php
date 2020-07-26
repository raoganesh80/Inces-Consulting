<?php require_once('config/config.php'); 
?>

<?php
  $title = 'Inces Consulting';
  $active_page = 'home';
  $base_url = '';
  $google = "<script async src='https://www.googletagmanager.com/gtag/js?id=UA-167446818-1'></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-167446818-1');
  </script>";
  include('include/header.php');
?>

  <!-- ************************************************************* 
      ---- contain-section start's
  ******************************************************************-->
  <section id="contain-section" class="d-flex align-items-center" >
    <div class="container">
      <div class="row">
        <div
          class="col-md-12 col-lg-12 col-xl-12 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Providing personalized solutions.</h1>
          <h2>We are a business consulting firm that aims to assist the MSMEs and Start-ups <br>to help them overcome
            their managerial and operational issues
          </h2>
          <div>
            <a href="#services" class="btn-get-started scrollto">Services</a>
            <a href="contact_us" class="btn-get-started2 scrollto">Contact Us</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ************************************************************* 
      ---- mouse wheel section start's
  ******************************************************************-->
  <section id="mousebackground">
  </section>
  <!-- ************************************************************* 
      ---- Main-section start's
  ******************************************************************-->
  <main id="main">
    <!-- ************************************************************* 
      ---- About Us Section Start's
    ****************************************************************-->
    <section id="about-us" class="about-us">
      <div class="container">
        <div class="section-title">
          <h2>About Us</h2>
        </div>
        <div class="row">
          <div class="col-md-4 col-lg-4 col-xl-4 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="img/about/OurVision.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h3>Our Vision</h3>
                <p>To be the leading consulting company in India, focused on providing effective and sustainable
                  solutions to add tangible value for all stakeholders.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-lg-4 col-xl-4 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="img/about/OurMission2.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h3>Our Mission</h3>
                <p>To ensure that we provide personalized, executable and sustainable recommenda-<br>-tions with the
                  right resources to maximize our clients' business potential.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-lg-4 col-xl-4 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="img/about/OurValues2.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h3>Our Values</h3>
                 <p>Commitment, Excellence, People focused, Always learning, Team spirit and Respect are the values that
                  defines who we are and the pillars which we believe in.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Team Section -->
    <!-- ************************************************************* 
      ---- services Section Start's
    ****************************************************************-->
    <section id="services" class="services">
      <div class="container">
        <div class="section-title">
          <h2>OUR SERVICES</h2>
          <p>We offer a wide range of customized, high-quality, research-based effective<br> and sustainable solutions
            to help our clients achieve their goals.</p>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-6 col-xl-6 d-flex align-items-stretch mb-5 mb-lg-0">
            <a href="services/marketing">
              <div class="icon-box item1">
                <div class="icon"><i class="fas fa-chart-line"></i></i></div>
                <h4 class="title">Marketing</h4>
                <p class="description">Inces combines in-depth customer insights and appropriate marketing solutions to
                  reach your business's target customers.</p>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-6 d-flex align-items-stretch mb-5 mb-lg-0">
            <a href="services/webdevelopment">
              <div class="icon-box item2">
                <div class="icon"><i class="fas fa-code"></i></div>
                <h4 class="title">Web Development</h4>
                <p class="description">Communicate vision and goal of your business through your website.We create
                  amazing
                  digital experience for your customers.</p>
              </div>
            </a>
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-6 col-lg-6 col-xl-6 d-flex align-items-stretch mb-5 mb-lg-0">
            <a href="services/operations">
              <div class="icon-box item3">
                <div class="icon"><i class="fas fa-users-cog"></i></div>
                <h4 class="title">Operations</h4>
                <p class="description">Improve your business operation performance with our innovative and
                  transformational
                  strategies.</p>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-6 d-flex align-items-stretch mb-5 mb-lg-0">
            <a href="services/HR">
              <div class="icon-box item4">
                <div class="icon"><i class="fas fa-people-arrows"></i></div>
                <h4 class="title">Human Resources</h4>
                <p class="description">Maximise the efficiency of your HR operations in the best possible way.</p>
              </div>
            </a>
          </div>
        </div>
      </div>
      </div>
      </div>
    </section>
    <!-- End Services Section -->

    <!-- ************************************************************* 
      ---- Clients Section start's
    ******************************************************************-->
    <section class="clients1">
      <div class="container">
        <h3>WE ARE READY TO HELP YOU</h3>
        <h3>GET THE BEST SOLUTION FOR YOUR BUSINESS</h3>
      </div>
    </section><!-- End Clients Section -->

    <!-- ************************************************************* 
      ---- Team Section start's
  ******************************************************************-->
    <section id="team" class="team">
      <div class="container-fluid">
        <div class="section-title">
          <h2>Our Team</h2>
        </div>
        <div class="row">
          <div class="col-sm-6 col-lg-3 col-xl-3 col-12 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="img/team/Nitesh-Agarwal.jpg" class="img-fluid" alt="Nitesh Agarwal">
              </div>
              <div class="member-info">
                <h4>NITESH AGRAWAL</h4>
                <span>FOUNDER</span>
              </div>
              <div class="social">
                <a href="https://www.linkedin.com/in/niteshagrawal08/" target="_blank"><i
                    class="fab fa-linkedin-in"></i></a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3 col-xl-3 col-12 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="img/team/Abhisek-Agarwal.jpg" class="img-fluid" alt="Abhishek Agarwalla">
              </div>
              <div class="member-info">
                <h4>ABHISHEK AGRAWALLA</h4>
                <span>CO-FOUNDER</span>
              </div>
              <div class="social">
                <a href="https://www.linkedin.com/in/abhisekagrawalla/" target="_blank"><i
                    class="fab fa-linkedin-in"></i></a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3 col-xl-3 col-12 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="img/team/Adarsh-Agarwal.jpg" class="img-fluid" alt="Adarsh Agarwal">
              </div>
              <div class="member-info">
                <h4>ADARSH AGRAWAL</h4>
                <span>CO-FOUNDER</span>

              </div>
              <div class="social">
                <a href="https://www.linkedin.com/in/adarsh-agrawal-144a98198/" target="_blank">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3 col-xl-3 col-12 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="img/team/Bijay-Kawar.jpg" class="img-fluid" alt="Bijay Kawar">
              </div>
              <div class="member-info">
                <h4>BIJAY KAWAR</h4>
                <span>CO-FOUNDER</span>
              </div>
              <div class="social">
                <a href="https://www.linkedin.com/in/bijay-kawar/" target="_blank"><i
                    class="fab fa-linkedin-in"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Team Section -->


    <!-- ************************************************************* 
      ---- Blog Section start's
  ******************************************************************-->
    <section id="blog" class="silder-bg">
      <div class="container">
        <div class="swiper-container">
          <div class="swiper-title">
            <h2>Our Blogs</h2>
          </div>
          <div class="swiper-wrapper"> 
            <!-- <div class="swiper-slide" data-aos="fade-up" data-aos-delay="400">
              <div class="imgBx">
                <img src="img/about/about-mission.jpg">
                <div class="blog-date">
                  23<br>June
                </div>
              </div>
              <div class="details">
                <h2>Heading-1</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
                <button>Read More</button>
              </div>
            </div> -->
            <?php  if(count_upblog(0)>0 || count_upblog(1)>0 || count_upblog(2)>0 || count_upblog(3)>0) { 
                main_display(1); 
                main_display(2); 
            }   else {
              echo "<p class='error'>No blogs at this time! Check in later!</p>";   
            }?>
          </div>
          
        </div>
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      
    </section>

    <!-- ************************************************************* 
      ---- clients Section Start's
    ****************************************************************-->
    <section id="clients" class="clients">
      <div class="container">
        <div class="client-title">
          <p>Our Clients</p>
        </div>

        <div class="brands my-lg-5">
          <div class="owl-carousel owl-theme">
            <div class="item"><img src="img/clients/cognisun-logo-3.png" alt=""></div>
            <div class="item"><img src="img/clients/logo (1).png" alt=""></div>
            <div class="item"><img src="img/clients/logo.png" alt=""></div>
            <div class="item"><img src="img/clients/logoDSM.png" alt=""></div>
            <div class="item"><img src="img/clients/sadbhav-logo.png" alt=""></div>

            <div class="item"><img src="img/clients/cognisun-logo-3.png" alt=""></div>
            <div class="item"><img src="img/clients/logo (1).png" alt=""></div>
            <div class="item"><img src="img/clients/logo.png" alt=""></div>
            <div class="item"><img src="img/clients/logoDSM.png" alt=""></div>
            <div class="item"><img src="img/clients/sadbhav-logo.png" alt=""></div>
          </div>
        </div>

      </div>
    </section><!-- End Clients Section -->


    <!-- ************************************************************* 
      ---- testimonials Section start's
  ******************************************************************-->
    <section id="testimonials" class="testimonials">
      <div class="container">
        <div class="section-title">
          <h2>Testimonials</h2>
        </div>
        <div class="owl-carousel testimonials-carousel">
          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <h3>Aman Agrawal</h3>
              <h4>MD, Utkal Plast Ltd.</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Inces Consultanting did an excellent job in carrying out a comprehensive operational transformation
                across our plants. We were very impressed by the increase in the productivity of our resources in a
                very short period of time.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>
          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <h3>Soumya Mohapatra</h3>
              <h4>GM, Sadbhav Engg. Ltd.</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                We find them quite professional. They are able to provide need base solutions
                and customizing our requirements as per the current industry trend & technology.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                <br><br>
              </p>
            </div>
          </div>
          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <h3>Yogesh Patadia </h3>
              <h4>CTO, Cognisun Technologies</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Nothing this cool has ever been designed before in such a short time.
                Throughout the entire process, the team has demonstrated high professionalism, subject matter expertise
                and
                exceeded our expectations in every way.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Testimonials Section -->
  </main>
  <!-- ************************************************************* 
      ---- Main-section end
  ******************************************************************-->

  <!-- ************************************************************* 
      ---- Footer-section start's
    ******************************************************************-->
   <?php
   $footer_script = "
  //Navigation active state on scroll
  var nav_sections = $('section');
  var main_nav = $('.nav-menu, #mobile-nav');

  $(window).on('scroll', function() {
    var cur_pos = $(this).scrollTop() + 80;

    nav_sections.each(function() {
      var top = $(this).offset().top,
        bottom = top + $(this).outerHeight();

      if (cur_pos >= top && cur_pos <= bottom) {
        if (cur_pos <= bottom) {
          main_nav.find('li').removeClass('active');
        }
        main_nav.find('a[href=\"#' + $(this).attr('id') + '\"]').parent('li').addClass('active');
      }
      if (cur_pos < 300) {
        $(\".nav-menu ul:first li:first\").addClass('active');
      }
    });
  });
  ";
  include('include/footer.php');
?>