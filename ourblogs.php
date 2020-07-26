<?php require_once('config/config.php'); ?>

<?php
  $title = 'Our Blogs | Inces Consulting';
  $active_page = 'ourblogs';
  $base_url = '/';
  include('include/header.php');
?>



 <!-- ************************************************************* 
      ---- contain-section start's
  ******************************************************************-->
  <section id="contain-section" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div
          class="col-md-12 col-lg-12 col-xl-12 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Our blogs</h1>
          <h2>Click on the title to expand the article</h2>
        </div>
      </div>
    </div>
  </section>

    <!-- ************************************************************* 
      ---- mouse wheel section start's
  ******************************************************************-->
  <section id="mousebackground">
      <div class="mouse" style="top: 60%;">
      <a href="/ourblogs#blog" class="mouse-icon scrollto">
        <div class="mouse-wheel"><i class="icofont-long-arrow-down"></i></div>
      </a>
      </div>
  </section>

  <!-- ************************************************************* 
      ---- Main-section start's
  ******************************************************************-->
  <main id="main">
  <section id="blog" class="about">
    <div class="container">
      <?php blog_display(); ?>
    </div>
  </section>


  </main>

  <!-- ************************************************************* 
      ---- Footer-section start's
    ******************************************************************-->
   <?php
  include('include/footer.php');
?>