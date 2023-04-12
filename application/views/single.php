<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Alstar Bootstrap Template - Index</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url();?>assets/img/favicon.png" rel="icon">
  <link href="<?php echo base_url();?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/venobox/venobox.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Alstar - v2.1.0
  * Template URL: https://bootstrapmade.com/alstar-free-parallax-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-page bg-secondary">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <!-- <h1 class="text-light"><a href="index.html"><span>Limo</span></a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="<?php echo base_url('home/')?>"><img src="<?php echo base_url();?>assets/images/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
        </li>
										<li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active' : '' ?>">
										<a href="<?php echo base_url('home/')?>">Home</a>
										</li>

										<li class="nav-item <?php echo $this->uri->segment(2) == 'tentang' ? 'active' : '' ?>">
										<a href="<?php echo base_url('home/tentang')?>">About</a>
										</li>	

										<li class="nav-item <?php echo $this->uri->segment(2) == 'galeri_room' ? 'active' : '' ?>">
										<a href="<?php echo base_url('home/galeri_room/1')?>">Product</a>
										</li>

										<li class="nav-item <?php echo $this->uri->segment(2) == 'galleri' ? 'active' : '' ?>">
										<a href="<?php echo base_url('home/galleri')?>">Gallery</a>
										</li>	

										<li class="nav-item <?php echo $this->uri->segment(2) == 'hubungi' ? 'active' : '' ?>">
										<a href="<?php echo base_url('home/hubungi')?>">Contact</a>
										</li>	
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->



    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Product Details</h2>
          <ol>
            <li><a href="<?php echo base_url('home/')?>">Home</a></li>
            <li><a href="<?php echo base_url('home/galeri_room/1')?>">Product</a></li>
            <li>Product Details</li>
          </ol>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section class="portfolio-details">
      <div class="container">

        <div class="portfolio-details-container">

          <div class="owl-carousel portfolio-details-carousel">
            <img src="<?php echo base_url().'assets/images/' ?><?php echo $room->detail_gambar?>" class="img-fluid" alt="">
          </div>

        </div>

        <div class="portfolio-description">
          <h2><?php echo $room->detail_judul?></h2>
          <p>
          <?php echo $room->detail_deskripsi;?>
          </p>
        </div>
      </div>
    </section><!-- End Portfolio Details Section -->

 