
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="" name="description">
 
  <!-- Favicons -->
  <link href="<?= get_template_directory_uri(); ?>/assets/img/favicon.png" rel="icon">
  <link href="<?= get_template_directory_uri(); ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= get_template_directory_uri(); ?>/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= get_template_directory_uri(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= get_template_directory_uri(); ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= get_template_directory_uri(); ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= get_template_directory_uri(); ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= get_template_directory_uri(); ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

 

  <!-- Template Main CSS File -->
  <link href="<?= get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet">

   <meta content=
  				"
  					kévin,kevin,KEVIN,kevib,kev,quillet,Quillet,QUILLET,bigoni,Bigoni,BIGONI,portfolio,portfollio,folio,Portfolio,port,CV,cv,cV,resume,dev,developer,developpeur,develloppeur,devellopeur,HTML,CSS,JAVASCRIPT,PHP,WORDPRESS,SYMFONY,FREELANCE
	  			" 
        name="keywords">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <a href="https://www.bay-key.fr"><img src="<?= get_template_directory_uri(); ?>/assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle"></a>
        <h1 class="text-light"><a href="https://www.bay-key.fr">Kévin Bigoni</a></h1>
        <div class="social-links mt-3 text-center">
          <!-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> -->
          <a href="https://www.facebook.com/Kevin-Bigoni-Web-D%C3%A9veloppeur-105206068586281" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
          <!-- <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a> -->
          <!-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> -->
          <a href="https://www.linkedin.com/in/kevin-quillet/" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          <a href="https://github.com/heros20" target="_blank" class="github"><i class="bx bxl-github"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Accueil</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Profil</span></a></li>
		      <li><a href="#skills" class="nav-link scrollto"><i class="bx bx-bar-chart-square"></i> <span>Compétences</span></a></li>
          <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li>
          <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
          <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->
