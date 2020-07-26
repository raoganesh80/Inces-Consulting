<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta tags ******************************************************* -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <base href="<?php echo empty($base_url) ? '' : $base_url ?>">

  

  <title><?php echo empty($title) ? '' : $title ?></title>


  <!-- Google Fonts ************************************************** -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
    <!-- Fav Icon ******************************************************-->
<!--    <link rel="apple-touch-icon" sizes="57x57" href="img/icon/apple-icon-57x57.png">-->
<!--<link rel="apple-touch-icon" sizes="60x60" href="img/icon/apple-icon-60x60.png">-->
<!--<link rel="apple-touch-icon" sizes="72x72" href="img/icon/apple-icon-72x72.png">-->
<!--<link rel="apple-touch-icon" sizes="76x76" href="img/icon/apple-icon-76x76.png">-->
<!--<link rel="apple-touch-icon" sizes="114x114" href="img/icon/apple-icon-114x114.png">-->
<!--<link rel="apple-touch-icon" sizes="120x120" href="img/icon/apple-icon-120x120.png">-->
<!--<link rel="apple-touch-icon" sizes="144x144" href="img/icon/apple-icon-144x144.png">-->
<!--<link rel="apple-touch-icon" sizes="152x152" href="img/icon/apple-icon-152x152.png">-->
<!--<link rel="apple-touch-icon" sizes="180x180" href="img/icon/apple-icon-180x180.png">-->
<!--<link rel="icon" type="image/png" sizes="192x192"  href="img/icon/android-icon-192x192.png">-->
<!--<link rel="icon" type="image/png" sizes="32x32" href="img/icon/favicon-32x32.png">-->
<!--<link rel="icon" type="image/png" sizes="96x96" href="img/icon/favicon-96x96.png">-->
<!--<link rel="icon" type="image/png" sizes="16x16" href="img/icon/favicon-16x16.png">-->
<!--<link rel="manifest" href="img/icon/manifest.json">-->
<!--<meta name="msapplication-TileColor" content="#ffffff">-->
<!--<meta name="msapplication-TileImage" content="img/icon/ms-icon-144x144.png">-->
<!--<meta name="theme-color" content="#ffffff">-->

<link rel="icon" href="img/fav-icon.png">

<!--Files-->

  <link href="files/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="files/icofont/icofont.min.css" rel="stylesheet">
  <link href="files/remixicon/remixicon.css" rel="stylesheet">
  <link href="files/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="files/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link rel="stylesheet" href="files/owl.carousel/assets/owl.theme.default.min.css">
  <link href="files/venobox/venobox.css" rel="stylesheet">
  <link href="files/aos/aos.css" rel="stylesheet">
  <!--Slider Files-->
  <link href="files/slider/css/swiper.css" rel="stylesheet">
  <link href="files/slider/css/swiper.min.css" rel="stylesheet">
  <!-- Customizes css-->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/myabout.css" rel="stylesheet">
  <link href="css/blog.css" rel="stylesheet">
  <link href="css/ourblog.css" rel="stylesheet">
  <link href="css/manageblog.css" rel="stylesheet">
  <link rel="stylesheet" href="footer-pages/footer-css/footer-style.css">
  <link rel="stylesheet" href="contact-us/contact.css">

  <?php echo empty($google) ? '' : $google ?>
</head>

<body>
  <!-- ************************************************************* 
      ---- Header start's
  ******************************************************************-->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <!-- ************ Logo ************** -->
      <div class="logo mr-auto">
        <a href="index"><img src="img/logo.png" width="110px"></a>
      </div>

      <!-- ********* Navigation bar ********** -->
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="<?php echo $active_page === 'home' ? 'active' : '' ?>"><a href="<?php echo $active_page === 'home' ? '/#contain-section' : '/' ?>">Home</a></li>
          <li class="<?php echo $active_page === 'about' ? 'active' : '' ?>"><a href="#about-us">About</a></li>
          <li class="<?php echo $active_page === 'service' ? 'active' : '' ?>"><a href="#services">Services</a></li>
          <li><a href="#team">Team</a></li>
          <li class="<?php echo $active_page === 'ourblogs' ? 'active' : '' ?>"><a href="ourblogs">Blogs</a></li>
          <li><a href="#testimonials">Testimonials</a></li>
          <li class="<?php echo $active_page === 'contact' ? 'active' : '' ?>"><a href="contact_us">Contact</a></li>
        </ul>
      </nav>
      <!-- Navigation bar end's -->
    </div>
  </header>