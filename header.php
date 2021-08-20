<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <meta name="copyright" content="MACode ID, https://www.macodeid.com/">
  
  <title><?php wp_title(); ?></title>

  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon.ico" type="image/x-icon">
  
  <?php wp_head(); ?>
  
</head>
<body class="theme-red" <?php body_class(); ?>>
  
  <!-- Back to top button -->
  <div class="btn-back_to_top">
    <span class="ti-arrow-up"></span>
  </div>
  
  
  <div class="vg-page page-home" id="home" style="background-image: url(../assets/img/bg_image_1.jpg)">
    <!-- Navbar -->
    <div class="navbar navbar-expand-lg navbar-dark sticky" data-offset="500">
      <div class="container">
        <a href="" class="navbar-brand">V-Folio</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#main-navbar" aria-expanded="true">
          <span class="ti-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-navbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a href="#home" class="nav-link" data-animate="scrolling">Home</a>
            </li>
            <li class="nav-item">
              <a href="#about" class="nav-link" data-animate="scrolling">About</a>
            </li>
            <li class="nav-item">
              <a href="#portfolio" class="nav-link" data-animate="scrolling">Portfolio</a>
            </li>
            <li class="nav-item">
              <a href="#blog" class="nav-link" data-animate="scrolling">Blog</a>
            </li>
            <li class="nav-item">
              <a href="#contact" class="nav-link" data-animate="scrolling">Contact</a>
            </li>
          </ul>
          <ul class="nav ml-auto">
            <li class="nav-item">
              	<button class="btn btn-fab btn-theme no-shadow">En</button>
            </li>
          </ul>
        </div>
      </div>
    </div> <!-- End Navbar -->