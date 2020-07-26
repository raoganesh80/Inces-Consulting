<?php require_once('../config/config.php'); 
      checkIn();
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
</head>

<body>

  <!-- ************************************************************* 
      ---- Header start's
  ******************************************************************-->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <!-- ************ Logo ************** -->
      <div class="logo mr-auto">
        <a href="../index"><img src="../img/logo.png" width="110px"></a>
      </div>
    </div>
  </header>

  <div class="container ">
        <div class="row">            
            <div class="login-container col-lg-4 col-md-6 col-sm-8 col-xs-12">
                <div class="login-content">
                    <div class="login-body"> 
                    <?php user_validation(); ?> 
                        <form method="POST" class="login-form">
                            <div class="form-group ">
                                <div class="pos-r">                                        
                                    <input id="form-username" type="text" name="Username" placeholder="Enter your Username" class="form-username form-control" required>
                                    <i class="fa fa-user"></i>
                                    <span></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="pos-r">                                    
                                    <input id="form-password" type="password" name="Password" placeholder="Enter your Password" class="form-password form-control" required>
                                    <i class="fa fa-lock"></i>
                                    <span></span>                                        
                                </div>
                            </div>  
                            <div class="form-group">
                                <div class="pos-r">
                                    <button type="submit" name="submit" class="btn">Login</button>
                                </div>
                            </div>    
                            <div class="form-group">
                                <div class="pos-r">
                                    Want to head to main website? <a href="../index">Click Here!</a>
                                </div>
                            </div>      
                        </form>
                    </div> 
                </div>
                <!-- end  login-body -->         
            </div>
        </div>
    </div>
    <!-- end container -->
 

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
  <!-- Slider Script files-->
  <script src="../files/slider/js/swiper.js"></script>
  <script src="../files/slider/js/script.js"></script>
  <script src="../files/slider/js/swiper.min.js"></script>

  <script src="../js/main.js"></script>
  <script src="../js/dark-mode.js"></script>
</body>

</html>