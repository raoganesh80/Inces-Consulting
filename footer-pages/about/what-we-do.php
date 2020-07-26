<?php
  $title = 'What we do | Inces Consulting';
  $base_url = '../../';
  $active_page = 'about';
  include('../../include/header.php');
?>

  <!-- ************************************************************* 
      ---- contain-section start's
  ******************************************************************-->
  <section id="contain-section" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-12 pt-lg-5 mb-5 d-flex flex-column justify-content-center">
          <h1>What we do?</h1>
          <h2 class="sub-heading font-weight-bold ">
            Creating Adaptive Strategies</h2>
          <h2>We develop distinctive and adaptive strategies that help
            you succeed in today’s complex and uncertain world.</h2>
        </div>
      </div>
    </div>
  </section>


  <!-- our values -->
  <section id="sub-contain-section" class="pt-0 mt-5" >
    <div class="container">
      <div class="row m-5">

        <div class="col-lg-6 col-12 m-auto mx-0 order-1 article-left text-right">
          <h2>Where we work?</h2>
          <h2 class="sub-heading">We provide strategic expertise where
            it matters most.</h2>
          <p>Our actions are guided by the five foundational values of
            our firm. Lorem ipsum dolor
            sit amet consectetur adipisicing elit. Eligendi quidem nam deleniti ratione. A ducimus,
            asperiores
            expedita impedit perspiciatis repudiandae ab minus. Eius sint impedit, sed consequuntur fugiat
            officia molestias!</p>
        </div>
        <div class="col-lg-6 col-12 order-2 image"  >
          <object class="svg mx-5" id="svg-success" data="footer-pages/footer-svg/success.svg"
            type="image/svg+xml"></object>
        </div>

        <div class="col-lg-6 col-12 order-4 order-lg-3 image "  >
          <object class="svg mx-5 " id="svg-help" data="footer-pages/footer-svg/help.svg" type="image/svg+xml"></object>
        </div>
        <div class="col-lg-6 col-12 order-3 m-auto article-right text-left">
          <h2>How we help?</h2>
          <h2 class="sub-heading">We give you a whole new perspective.
          </h2>
          <p>Our unique and proven approach to problem-solving
            addresses your most difficult
            challenges from three distinct angles. As a result, our strategies are future-oriented, market
            tested
            and built to create lasting advantage for your business.</p>
        </div>
      </div>
    </div>
  </section>
  <section id="division" class=" text-center mb-5">
    <div class="container">
      <h3 class=" text-uppercase">Talk to us</h3>
      <h3 class=" text-uppercase">What would you like to achieve?</h3>
      <a href="../../contact-us" class="btn">GET IN TOUCH</a>
    </div>
  </section>

  <!-- ************************************************************* 
      ---- Footer-section start's
    ******************************************************************-->
    <?php
    $active_page = 'what-we-do';
  include('../../include/footer.php');
?>