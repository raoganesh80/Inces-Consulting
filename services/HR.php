<?php
  $title = 'HR Services | DesignNoise';
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
            <p> Maximise the efficiency of your HR operations in the best possible way.</p>
          </div>
        </div>
        <div class="row content">
          <div class="col-md-5 col-lg-5 col-xl-5 pt-5">
            <h3>HR CONSULTING</h3>
            <p>
              We provide strategic integration of HR programs, processes, policies or practices. </p>
            <a onclick="HR_CONSULTING()"><i class="icofont-arrow-right"></i>Learn More</a>
          </div>
          <div class="col-md-7 col-lg-7 col-xl-7 pt-4 pt-lg-0" id="img-hover">
            <img src="img/services/hr/1.jpg">
          </div>
        </div>
        <div class="row content">
          <div class="col-md-7 col-lg-7 col-xl-7 pt-4 pt-lg-0" id="img-hover">
            <img src="img/services/hr/2.jpg">
          </div>
          <div style="text-align: right;" class="col-md-5 col-lg-5 col-xl-5 pt-5">
            <h3>HR OPERATIONS</h3>
            <p>
              Let our experts manage your tedious HR operations.</p>
            <a onclick="HR_OPERATIONS()"><i class="icofont-arrow-right"></i>Learn More</a>
          </div>
        </div>
        <div class="row content">
          <div class="col-md-5 col-lg-5 col-xl-5 pt-5">
            <h3>HR TECHNOLOGY</h3>
            <p>
              Our HR technological systems help keep track of hiring, monitor employee attendance, and
              improve retention rates.</p>
            <a onclick="HR_TECHNOLOGY()"><i class="icofont-arrow-right"></i>Learn More</a>
          </div>
          <div class="col-md-7 col-lg-7 col-xl-7 pt-4 pt-lg-0" id="img-hover">
            <img src="img/services/hr/3.jpg">
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