<!DOCTYPE html>
<html lang="en">

<head>
  <title><?= $siteData->site_title; ?></title>
  <link rel="canonical" href="<?= base_url(); ?>" />
  <link rel="shortcut icon" href="<?= base_url('admin/assets/'); ?>images/<?= $siteData->favicon; ?>" />

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?= $siteData->meta_description; ?>">
  <meta name="keywords" content="<?= $siteData->meta_keyword; ?>">

  <!-- Css Files -->
  <link href="<?= base_url('admin/assets/'); ?>css/bootstrap.css" rel="stylesheet">
  <link href="<?= base_url('admin/assets/'); ?>css/font-awesome.css" rel="stylesheet">
  <link href="<?= base_url('admin/assets/'); ?>css/animate.css" rel="stylesheet">
  <link href="<?= base_url('admin/assets/'); ?>css/select2.css" rel="stylesheet">
  <link href="<?= base_url('admin/assets/'); ?>css/smoothness/jquery-ui-1.10.0.custom.css" rel="stylesheet">
  <link href="<?= base_url('admin/assets/'); ?>css/style.css" rel="stylesheet">
  <link href="<?= base_url('admin/assets/'); ?>css/custom.css" rel="stylesheet">

  <!-- JS Files -->
  <script src="<?= base_url('admin/assets/'); ?>js/jquery.js"></script>
  <script src="<?= base_url('admin/assets/'); ?>js/jquery-ui.js"></script>
  <script src="<?= base_url('admin/assets/'); ?>js/jquery-migrate-1.2.1.min.js"></script>
  <script src="<?= base_url('admin/assets/'); ?>js/jquery.easing.1.3.js"></script>
  <script src="<?= base_url('admin/assets/'); ?>js/superfish.js"></script>
  <script src="<?= base_url('admin/assets/'); ?>js/select2.js"></script>
  <script src="<?= base_url('admin/assets/'); ?>js/jquery.parallax-1.1.3.resize.js"></script>
  <script src="<?= base_url('admin/assets/'); ?>js/SmoothScroll.js"></script>
  <script src="<?= base_url('admin/assets/'); ?>js/jquery.appear.js"></script>
  <script src="<?= base_url('admin/assets/'); ?>js/jquery.caroufredsel.js"></script>
  <script src="<?= base_url('admin/assets/'); ?>js/jquery.touchSwipe.min.js"></script>
  <script src="<?= base_url('admin/assets/'); ?>js/jquery.ui.totop.js"></script>
  <script src="<?= base_url('admin/assets/'); ?>js/script.js"></script>

</head>
<body class="front">
  <div id="main">
    <div class="top1_wrapper">
      <div class="container">
        <div class="top1 clearfix">
          <div class="email1"><a href="<?php echo $siteAddress->email;?>"><?php echo $siteAddress->email;?></a></div>
          <div class="phone1"><?php echo $siteAddress->phone_no_1; ?></div>
          <div class="phone1"><?php echo $siteAddress->phone_no_1; ?></div>
          <div class="social_wrapper">
            <ul class="social clearfix">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              <!-- <li><a href="#"><i class="fa fa-vimeo-square"></i></a></li> -->
            </ul>
          </div>
          <div class="lang1">
            <!-- <div class="dropdown">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">English<span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a class="ge" href="#">German</a></li>
                <li><a class="ru" href="#">Russian</a></li>
              </ul>
            </div> -->
          </div>
        </div>
      </div>
    </div>

    <div class="top2_wrapper">
      <div class="container">
        <div class="top2 clearfix">
          <header>
            <div class="logo_wrapper">
              <a href="<?= base_url(); ?>" class="logo">
                <img src="<?= base_url('admin/assets/'); ?>images/<?= $siteData->logo; ?>" alt="" class="img-responsive">
              </a>
            </div>
          </header>
          <div class="navbar navbar_ navbar-default">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <div class="navbar-collapse navbar-collapse_ collapse">

              <ul class="nav navbar-nav sf-menu clearfix">
                <li <?php if($active == 'home'): echo 'class="active"'; endif; ?>><a href="<?= base_url(); ?>">Home</a></li>
                <li <?php if($active == 'about'): echo 'class="active"'; endif; ?>><a href="<?= base_url(); ?>about">About Us</a></li>
                <li><a href="#">Gallery</a></li>
                <li <?php if($active == 'destination'): echo 'class="active"'; endif; ?>><a href="<?= base_url();?>destinations">Destinations</a></li>
                <li><a href="hotels.html">Hotels</a></li>
                <li><a href="contacts.html">Contacts</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
