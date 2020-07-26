  <?php
  $title = 'Marekting Services | Inces Consulting';
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
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" >
            <h2>Service</h2>
            <p> Inces combines in-depth customer insights and <br>appropriate marketing solutions to reach your
              business's target customers.</p>
          </div>
        </div>
        <div class="row content"  >
          <div class="col-md-5 col-lg-5 col-xl-5 pt-5">
            <h3>Brand Consulting</h3>
            <p>
              We are brand creators – focus on innovative ideas and fresh technology solutions. </p>
            <a onclick="Brand_Consulting()"><i class="icofont-arrow-right"></i>Learn More</a>
          </div>
          <div class="col-md-7 col-lg-7 col-xl-7 pt-4 pt-lg-0" id="img-hover">
            <img src="img/services/marketing/1.jpg">
          </div>
        </div>
        <div class="row content"  >
          <div class="col-md-7 col-lg-7 col-xl-7 pt-4 pt-lg-0" id="img-hover">
            <img src="img/services/marketing/2.jpg">
          </div>
          <div style="text-align: right;" class="col-md-5 col-lg-5 col-xl-5 pt-5">
            <h3>Designing</h3>
            <p>
              First impression matters and we make it best for your business.
              We strongly believe that Great design can do a lot to help improve your marketing efforts,
              and it does more than just help your content stand in and look good. Using the right design can
              help influence more conversions, and ultimately improve your ROI.</p>
            <a onclick="designing()"><i class="icofont-arrow-right"></i>Learn More</a>
          </div>
        </div>
        <div class="row content"  >
          <div class="col-md-5 col-lg-5 col-xl-5 pt-5">
            <h3>Digital Marketing</h3>
            <p>
              At Inces, we build a platform that interacts with your prospects while at the same time,
              we create powerful online value proposition </p>
            <a onclick="Digital_Marketing()"><i class="icofont-arrow-right"></i>Learn More</a>
          </div>
          <div class="col-md-7 col-lg-7 col-xl-7 pt-4 pt-lg-0" id="img-hover">
            <img src="img/services/marketing/3.jpg">
          </div>
        </div>
        <div class="row content"  >
          <div class="col-md-7 col-lg-7 col-xl-7 pt-4 pt-lg-0" id="img-hover">
            <img src="img/services/marketing/4.jpg">
          </div>
          <div style="text-align: right;" class="col-md-5 col-lg-5 col-xl-5 pt-5">
            <h3>Website Development</h3>
            <p>
              Creating high quality websites tailored to your needs which provides best user experience and
              design which is easily adaptable in any device </p>
            <a onclick="Website_Development()"><i class="icofont-arrow-right"></i>Learn More</a>
          </div>
        </div>
        <div class="row content"  >
          <div class="col-md-5 col-lg-5 col-xl-5 pt-5">
            <h3>PR</h3>
            <p>
              Building trust and credibility for your brand is what helps you generate more leads.
              Here at Inces, you get assistance with influencer and celebrity management.
              We also manage successful execution of the campaign.
              Develop strategic communication process to build mutually beneficial relationships with the public.</p>
            <a onclick="PR()"><i class="icofont-arrow-right"></i>Learn More</a>
          </div>
          <div class="col-md-7 col-lg-7 col-xl-7 pt-4 pt-lg-0" id="img-hover">
            <img src="img/services/marketing/5.jpg">
          </div>
        </div>
        <div class="row content"  >
          <div class="col-md-7 col-lg-7 col-xl-7 pt-4 pt-lg-0" id="img-hover">
            <img src="img/services/marketing/6.jpg">
          </div>
          <div style="text-align: right;" class="col-md-5 col-lg-5 col-xl-5 pt-5">
            <h3>Production</h3>
            <p>
              Leave the creative part of Video Production and Photography to us. </p>
            <a onclick="Production()"><i class="icofont-arrow-right"></i>Learn More</a>
          </div>
        </div>
        <div class="row content"  >
          <div class="col-md-5 col-lg-5 col-xl-5 pt-5">
            <h3>E-commerce Strategy and Execution</h3>
            <p>
              Increase your business revenue with our E-commerce strategy.
              Find the right channels and marketing models to grow your e-business. </p>
          </div>
          <div class="col-md-7 col-lg-7 col-xl-7 pt-4 pt-lg-0" id="img-hover">
            <img src="img/services/marketing/7.jpg">
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