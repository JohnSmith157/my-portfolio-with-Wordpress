<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <meta name="copyright" content="MACode ID, https://www.macodeid.com/">
  
  <title>Virtual Folio - Portfolio HTML5 Template</title>

  <link rel="shortcut icon" href="../assets/favicon.ico" type="image/x-icon">
  
  <link rel="stylesheet" type="text/css" href="../assets/css/themify-icons.css">
  
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" type="text/css" href="../assets/vendor/animate/animate.css">
  
  <link rel="stylesheet" type="text/css" href="../assets/vendor/owl-carousel/owl.carousel.css">
  
  <link rel="stylesheet" type="text/css" href="../assets/vendor/perfect-scrollbar/css/perfect-scrollbar.css">
  
  <link rel="stylesheet" type="text/css" href="../assets/vendor/nice-select/css/nice-select.css">
  
  <link rel="stylesheet" type="text/css" href="../assets/vendor/fancybox/css/jquery.fancybox.min.css">
  
  <link rel="stylesheet" type="text/css" href="../assets/css/virtual.css">
  
  <link rel="stylesheet" type="text/css" href="../assets/css/topbar.virtual.css">
</head>
<body class="theme-red">
  
  <!-- Back to top button -->
  <div class="btn-back_to_top">
    <span class="ti-arrow-up"></span>
  </div>
  
  <!-- Setting button -->
  <div class="config">
    <div class="template-config">
      <!-- Settings -->
      <div class="d-block">
        <button class="btn btn-fab btn-sm" id="sideel" title="Settings"><span class="ti-settings"></span></button>
      </div>
      <!-- Puschase -->
      <div class="d-block">
        <a href="https://macodeid.com/projects/virtual-folio/" class="btn btn-fab btn-sm" title="Get this template" data-toggle="tooltip" data-placement="left"><span class="ti-download"></span></a>
      </div>
      <!-- Help -->
      <div class="d-block">
        <a href="#" class="btn btn-fab btn-sm" title="Help" data-toggle="tooltip" data-placement="left"><span class="ti-help"></span></a>
      </div>
    </div>
    <div class="set-menu">
      <p>Select Color</p>
      <div class="color-bar" data-toggle="selected">
        <span class="color-item bg-theme-red selected" data-class="theme-red"></span>
        <span class="color-item bg-theme-blue" data-class="theme-blue"></span>
        <span class="color-item bg-theme-green" data-class="theme-green"></span>
        <span class="color-item bg-theme-orange" data-class="theme-orange"></span>
        <span class="color-item bg-theme-purple" data-class="theme-purple"></span>
      </div>
      <select class="custom-select d-block my-2" id="change-page">
        <option value="">Choose Page</option>
        <option value="index">Topbar</option>
        <option value="blog-topbar">Blog (Topbar)</option>
        <option value="index-2">Minibar</option>
        <option value="blog-minibar">Blog (Minibar)</option>
      </select>
    </div>
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