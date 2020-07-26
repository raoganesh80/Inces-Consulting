<?php require_once('../config/config.php'); 
      checkOut();
      editCheckOut();
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

</head>

<body>
 <!-- ************************************************************* 
      ---- Header start's
  ******************************************************************-->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <!-- ************ Logo ************** -->
      <div class="logo mr-auto">
        <a><img src="../img/logo.png" width="110px"></a>
      </div>

  </header>
  
   <!-- ************************************************************* 
      ---- Main-section start's
  ******************************************************************-->
  <main id="main">
      <!-- ************************************************************* 
      ---- Add Section Start's
    ****************************************************************-->
    <section id="add" class="contact-us-area section-padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title text-center">
                        <h2>Edit blog</h2>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 no-padding">
                
                    <!-- START BLOG FROM -->
                    <div class="contact-form">
                        <form method="POST" enctype="multipart/form-data">
                        <?php editblog(); ?>
                            <div class="form-group col-md-6">
                                <input type="text" name="Title" class="form-control" id="title" placeholder="Title (Max. 100 characters)" value="<?php valedit(1); ?>" required />
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" name="Author" class="form-control" id="author" placeholder="Author (Max. 100 characters)" value="<?php valedit(2); ?>" required />
                            </div>
                            <div class="form-group col-md-6">
                                <label for="image" class="col-md-4">Cover Image<br>[Less than 5MB]</label> Image cannot be changed. 
                            </div>
                            <div class="form-group col-md-6">
                                <input type="date" name="Date" class="form-control" id="date" placeholder="Date" value="<?php valedit(3); ?>" required />
                            </div>
                            <div class="form-group col-md-12">
                                <textarea rows="6" name="Content" class="form-control" id="content" placeholder="Content" required><?php valedit(4); ?></textarea>
                            </div>
                            <div class="col-md-12">
                                <button class="btn-get-started" type="submit" name="submitblog"> Edit and Save</button>
                                <button class="btn-get-started" type="submit" name="goback"> Cancel</button>
                            </div>
                        </form>
                    </div>
                    <!-- END BLOG FROM -->
                </div>
            </div>
        </div>
    </section>
    <!-- END ADD BLOG AREA -->

  
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