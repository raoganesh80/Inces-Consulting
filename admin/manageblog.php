<?php require_once('../config/config.php'); 
      checkOut();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta tags ******************************************************* -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">


  <title>Inces Consulting</title>

 <!-- Google Fonts ************************************************** -->
 <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
    <!-- Fav Icon *******************************************************-->
    <link rel="shortcut icon" type="image/png" href="../img/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="../img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon-16x16.png">
    <link rel="manifest" href="../img/site.webmanifest">
  <!-- CSS Files ******************************************************-->
  <link href="../files/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../files/icofont/icofont.min.css" rel="stylesheet">
  <link href="../files/remixicon/remixicon.css" rel="stylesheet">
  <link href="../files/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../files/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../files/owl.carousel/assets/owl.theme.default.min.css">
  <link href="../files/venobox/venobox.css" rel="stylesheet">
  <link href="../files/aos/aos.css" rel="stylesheet">
  <!--Slider Files-->
  <link href="../files/slider/css/swiper.css" rel="stylesheet">
  <link href="../files/slider/css/swiper.min.css" rel="stylesheet">
  <!-- Customizes css-->
  <link href="../css/style.css" rel="stylesheet">
  <link href="../css/custom.css" rel="stylesheet">
  <link href="../css/manageblog.css" rel="stylesheet">

  <style>
    #mousebackground {
      height: 467px;
      background: url('../img/background/back2.png');
      margin-top: -336px;
    }
    .notification {
  position: absolute;
  margin-left: 2.5px;
  padding: 3.5px 7.5px;
  border-radius: 50%;
  background-color: red;
  color: white;
  font-size: 10px;
}
  </style>
</head>

<body>
 <!-- ************************************************************* 
      ---- Header start's
  ******************************************************************-->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <!-- ************ Logo ************** -->
      <div class="logo mr-auto">
        <a href="dashboard"><img src="../img/logo.png" width="110px"></a>
      </div>

      <!-- ********* Navigation bar ********** -->
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="../admin/dashboard">Dashboard</a></li>
          <li><a href="../admin/manageblog">Blogs</a></li>
          <li>
            <a href="../admin/managemessage">Messages <span class="notification"><?php echo count_mess(); ?></span></a>
          </li> 
          <li><a href="../admin/logout.php">Logout</a></li>
        </ul>
      </nav>
      <!-- Navigation bar end's -->
    </div>
  </header>
  
    <!-- ************************************************************* 
      ---- contain-section start's
  ******************************************************************-->
  <section id="contain-section" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div
          class="col-md-12 col-lg-12 col-xl-12 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Managing Blogs?</h1>
          <h2>You can add a new blog or update them. Scroll down to find the summarized report.</h2>
          <div>
            <a href="#summary" class="btn-get-started scrollto">Summary</a>
            <a href="#add" class="btn-get-started scrollto">Add</a>
            <a href="#manage" class="btn-get-started scrollto">Manage</a>
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
      ---- Summary Section Start's
    ****************************************************************-->
    <section id="summary" class="summary about section-bg">
      <div class="container">
        <div class="section-title">
          <h2>Summary</h2>
        </div>
        <div style="margin-top: 60px;" class="row">
          <div class="col-md-12" style="text-align: justify;">
            <?php summary_report(); ?>
            <br>
        <h4> Note:</h4>
        <button class='btn-up'>
            <i class='fa fa-plus'></i>
        </button> - Added to the blogs in <b>Our Blogs</b><br>
        <button class='btn-up'>
            <i class='fa fa-arrow-up'></i>
        </button> - Added to the blogs in the <b>slider</b> of the <b>Main Page</b><br>
        <button class='btn-up'>
            <i class='fa fa-thumb-tack'></i>
        </button> - Pinned to the blogs in the <b>silder</b> of the <b>Main Page</b><br>
        <button class='btn-up'>
            <i class='fa fa-trash'></i>
        </button> - <b>Permanently deletes</b> from blogs in the database</b>
        
          </div>
        </div>

      </div>
    </section>
    <!-- END SUMMARY AREA -->
  
    <!-- ************************************************************* 
      ---- Add Section Start's
    ****************************************************************-->
    <section id="add" class="contact-us-area section-padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title text-center">
                        <h2>Add a blog</h2>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 no-padding">
                    <!-- START BLOG FROM -->
                    <div class="contact-form">
                    <?php insert_into_blog();  ?>
                        <form method="POST" enctype="multipart/form-data">
                            <div class="form-group col-md-6">
                                <input type="text" name="Title" class="form-control" id="title" placeholder="Title (Max. 100 characters)" required />
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" name="Author" class="form-control" id="author" placeholder="Author (Max. 100 characters)" required />
                            </div>
                            <div class="form-group col-md-6">
                                <label for="image" class="col-md-4">Cover Image<br>[Less than 5MB]</label><input type="file" name="image" required accept=".gif,.jpg,.jpeg,.png">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="date" name="Date" class="form-control" id="date" placeholder="Date" required />
                            </div>
                            <div class="form-group col-md-12">
                                <textarea rows="6" name="Content" class="form-control" id="content" placeholder="Content" required></textarea>
                            </div>
                            <div class="col-md-12">
                                <button class="btn-get-started" type="submit" name="submitblog"> Upload</button>
                            </div>
                        </form>
                    </div>
                    <!-- END BLOG FROM -->
                </div>
            </div>
        </div>
    </section>
    <!-- END ADD BLOG AREA -->

    <!-- ************************************************************* 
      ---- Manage Section Start's
    ****************************************************************-->
         <!-- START MANAGE AREA -->
         <section id="manage" class="section-padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title text-center">
                        <h2>Manage blogs</h2>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 no-padding">
                    <table class="table">
                        <tr>
                            <th>Cover Image</th>
                            <th width="7%">Author</th>
                            <th width="7%">Date</th>
                            <th width="60%"><p align='center'>Content</p></th>
                            <th><p align='center'>Delete</p></th>
                            <th><p align='center'>Upload</p></th>
                        </tr>
                        <?php if(count_upblog(0)>0 || count_upblog(1)>0 || count_upblog(2)>0 || count_upblog(3)>0) {
                                display();
                                echo "</table>";
                            } else {
                                echo " </table>";
                                echo "<p class='error'>No blogs! Add a blog!</p>";   
                            }
                        ?>
                </div>
            </div>
        </div>
    </section>
    <!-- END MANAGE AREA -->
  <?php update_row(); ?>


 
  <!-- ************************************************************* 
      ---- Footer-section start's
    ******************************************************************-->
    <footer id="footer">
    <div class="container-fluid">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-3 col-sm-3 col-12 footer-logo text-center">
         <a href="dashboard"><img src="../img/logo.png"></a>
          <p class="text-center"> &copy;Copyright 2020. All Rights Reserved.</p>
        </div>
        <div class="col-lg-9 col-sm-9 row justify-content-lg-start">
          <div class="col-lg-2 col-sm-2 my-sm-4 col-6 mx-auto links">
            <h3>About</h3>
            <ul>
              <li><a href="../footer-pages/about/who-we-are">Who We Are</a></li>
              <li><a href="../footer-pages/about/what-we-do">What We Do</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-sm-2 my-sm-4 col-6 mx-auto links">
            <h3>Expertise</h3>
            <ul>
              <li><a href="../services/marketing">Marketing</a></li>
              <li><a href="../services/webdevelopment">Web Development</a></li>
              <li><a href="../services/operations">Operations</a></li>
              <li><a href="../services/HR">HR</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-sm-2 my-sm-4 col-6 mx-auto links">
            <h3>Insights</h3>
            <ul>
              <li><a href="#">Case Studies</a></li>
              <li><a href="#">Grey Matter</a></li>
              <li><a href="#">Coronavirus</a></li>
              <li><a href="#">Retail</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-sm-2 my-sm-4 col-6 mx-auto links">
            <h3>Contact Us</h3>
            <ul>
              <li>Email</li>
              <li style="color: gray;">support@incesconsulting.com</li>
              <li>Phone</li>
              <li style="color: gray;">+91 8095545888</li>
            </ul>
          </div>
          <div class="col-lg-2 col-sm-2 my-sm-4 col-6 mx-auto links">
            <h3>Follow Us </h3>
            <div class="social-links">
              <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
              <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


  <!-- files JS Files -->
  <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.6/lib/darkmode-js.min.js"></script>
  <script src="../files/jquery/jquery.min.js"></script>
  <script src="../files/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../files/jquery.easing/jquery.easing.min.js"></script>
  <script src="../files/php-email-form/validate.js"></script>
  <script src="../files/waypoints/jquery.waypoints.min.js"></script>
  <script src="../files/counterup/counterup.min.js"></script>
  <script src="../files/owl.carousel/owl.carousel.min.js"></script>
  <script src="../files/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../files/venobox/venobox.min.js"></script>
  <script src="../files/aos/aos.js"></script>
  <!-- font awesome icons -->
  <script src="https://kit.fontawesome.com/fe7d23a577.js" crossorigin="anonymous"></script>
  <!-- Slider Script files-->
  <script src="../files/slider/js/swiper.js"></script>
  <script src="../files/slider/js/script.js"></script>
  <script src="../files/slider/js/swiper.min.js"></script>

  <script src="../js/main.js"></script>
  <script src="../js/dark-mode.js"></script>
</body>

</html>