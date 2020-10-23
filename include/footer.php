<footer id="footer">
    <div class="container-fluid">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-3 col-sm-3 col-12 footer-logo text-center">
         <a href="index"><img src="img/logo.png"></a>
          <p class="text-center"> &copy;Copyright 2020. All Rights Reserved.</p>
        </div>
        <div class="col-lg-9 col-sm-9 row justify-content-lg-start">
          <div class="col-lg-2 col-sm-2 my-sm-4 col-6 links">
            <h3>About</h3>
            <ul>
              <li><a href="<?php echo $active_page === 'who-we-are' ? 'footer-pages/about/who-we-are#contain-section' : 'footer-pages/about/who-we-are'; ?> ">Who We Are</a></li>
              <li><a href="<?php echo $active_page === 'what-we-do' ? 'footer-pages/about/what-we-do#contain-section': 'footer-pages/about/what-we-do' ?>">What We Do</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-sm-2 my-sm-4 col-6 links">
            <h3>Expertise</h3>
            <ul>
              <li><a href="services/marketing">Marketing</a></li>
              <li><a href="services/webdevelopment">Web Development</a></li>
              <li><a href="services/operations">Operations</a></li>
              <li><a href="services/HR">HR</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-sm-2 my-sm-4 col-6 links">
            <h3>Insights</h3>
            <ul>
              <li><a href="">Case Studies</a></li>
              <li><a href="">Grey Matter</a></li>
              <li><a href="">Coronavirus</a></li>
              <li><a href="">Retail</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-sm-2 my-sm-4 col-6 links">
            <h3>Contact Us</h3>
            <ul>
              <li>Email</li>
              <li style="color: gray;">support@designnoise.in</li>
              <li>Phone</li>
              <li style="color: gray;">+91 8095545888</li>
            </ul>
          </div>
          <div class="col-lg-2 col-sm-2 my-sm-4 col-6 links" style="margin-left: 100px">
            <h3>Follow Us </h3>
            <div class="social-links">
              <a href="https://www.facebook.com/incesconsulting" class="facebook" target="_blank"><i class="icofont-facebook"></i></a>
              <a href="https://www.linkedin.com/company/inces-consulting/" class="linkedin" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <a href="contact_us" class="go-to-contact"><i class="icofont-phone"></i></a>


  <!-- files JS Files -->
  
  <script src="files/sweetalert/sweetalert2@9"></script>
  <script src="files/jquery/jquery.min.js"></script>
  <script src="files/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="files/jquery.easing/jquery.easing.min.js"></script>
  <script src="files/php-email-form/validate.js"></script>
  <script src="files/waypoints/jquery.waypoints.min.js"></script>
  <script src="files/counterup/counterup.min.js"></script>
  <script src="files/owl.carousel/owl.carousel.min.js"></script>
  <script src="files/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="files/venobox/venobox.min.js"></script>
  <script src="files/aos/aos.js"></script>
  <script src="js/Sweets-alert.js"></script>
  <!-- font awesome icons -->
  <script src="https://kit.fontawesome.com/fe7d23a577.js" crossorigin="anonymous"></script>
  <!-- Slider Script files-->
  <script src="files/slider/js/swiper.js"></script>
  <script src="files/slider/js/script.js"></script>
  <script src="files/slider/js/swiper.min.js"></script>
  
  <script src="js/main.js"></script>
  
  <script><?php echo empty($footer_script) ? '' : $footer_script ?></script>
  
</body>

</html>