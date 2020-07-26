<?php
  $title = 'Web Development Services | Inces Consulting';
  $base_url = '../';
  $active_page = 'service';
  include('../include/header.php');
?>


  <!-- ************************************************************* 
      ---- Main-section start's
  ******************************************************************-->
  <main id="main">
    <!-- *************************************************************  
      ---- Service-section type-1 start's
    ******************************************************************-->
    <section id="marketing-service" class="about m-5">
      <div class="container">
        <div class="row section-title">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <h2>Service</h2>
            <p> Communicate vision and goal of your business through your website.<br>We create amazing digital
              experience for your customers.</p>
          </div>
        </div>
        <div class="row content">
          <div class="col-md-5 col-lg-5 col-xl-5 pt-5">
            <h3>Website Design and Development</h3>
            <p>
              Get a spectacular website for your business to advertise and sell products and services to customers.
            </p>
            <a onclick="Website_Design()"><i class="icofont-arrow-right"></i>Learn More</a>
          </div>
          <div class="col-md-7 col-lg-7 col-xl-7 pt-4 pt-lg-0" id="img-hover">
            <img src="img/services/web_dev/1.jpg">
          </div>
        </div>
        <div class="row content">
          <div class="col-md-7 col-lg-7 col-xl-7 pt-4 pt-lg-0" id="img-hover">
            <img src="img/services/web_dev/2.jpg">
          </div>
          <div style="text-align: right;" class="col-md-5 col-lg-5 col-xl-5 pt-5">
            <h3>Mobile App Development</h3>
            <p>
              Develop mobile app to convert your vision into reality with our latest technological approach.
            </p>
            <a onclick="Mobile_App_Development()"><i class="icofont-arrow-right"></i>Learn More</a>
          </div>
        </div>
        <div class="row content">
          <div class="col-md-5 col-lg-5 col-xl-5 pt-5">
            <h3>E-Commerce Development</h3>
            <p>
              We provide innovative E-commerce solutions for your business. </p>
            <a onclick="E_Commerce_Development()"><i class="icofont-arrow-right"></i>Learn More</a>
          </div>
          <div class="col-md-7 col-lg-7 col-xl-7 pt-4 pt-lg-0" id="img-hover">
            <img src="img/services/web_dev/3.jpg">
          </div>
        </div>
        <div class="row content">
          <div class="col-md-7 col-lg-7 col-xl-7 pt-4 pt-lg-0" id="img-hover">
            <img src="img/services/web_dev/4.jpg">
          </div>
          <div style="text-align: right;" class="col-md-5 col-lg-5 col-xl-5 pt-5">
            <h3>Tech Support</h3>
            <p>
              Stay ahead with your competitors with our tech tools like SEO optimization, Payment gateway, Analytics
              dashboard, CRM Solutions. </p>
            <a onclick="Tech_Support()"><i class="icofont-arrow-right"></i>Learn More</a>
          </div>
        </div>
      </div>
    </section>
    <!-- End Service Section type-1 -->
  </main>
  <!-- ************************************************************* 
      ---- Footer-section start's
    ******************************************************************-->
  <?php
  include('../include/footer.php');
?>