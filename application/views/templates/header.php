<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Shopsnack Betawi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href=" <?php base_url();?> assets/fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?php base_url();?> assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php base_url();?> assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php base_url();?> assets/css/jquery-ui.css">
    <link rel="stylesheet" href="<?php base_url();?> assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php base_url();?> assets/css/owl.theme.default.min.css">


    <link rel="stylesheet" href="<?php base_url();?> assets/css/aos.css">

    <link rel="stylesheet" href="<?php base_url();?> assets/css/style.css">



    
  </head>
  <body>
  
  <div class="site-wrap">
    <header class="site-navbar" role="banner">
      <div class="site-navbar-top">
        <div class="container">
          <div class="row align-items-center">

            <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
              <form action="" class="site-block-top-search">
                <span class="icon icon-search2"></span>
                <input type="text" class="form-control border-0" placeholder="Search">
              </form>
            </div>

            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
              <div class="site-logo">
                <a href="<?php base_url();?>home" class="js-logo-clone">MakananKite</a>
              </div>
            </div>

            <div class="col-6 col-md-4 order-3 order-md-3 text-right">
              <div class="site-top-icons">


                <ul >


                   <!-- login -->

                   <?php  if ($this->session->userdata('username')){ ?>
                        <li>
                          <div>selamat datang <?php echo $this->session->userdata('username') ?> ! </div>
                        </li>
                        <li class="ml-2">
                          <?php echo anchor('auth/logout', 'Logout') ?>
                        </li>
                        <?php } else {?>
                        <li class="ml-2">
                          <?php echo anchor('auth/login', 'Login')  ?>
                        </li>
                    <?php } ?>



                  
                  <li>
                    <a href="<?php base_url();?>cart" class="site-cart">
                      <span class="icon icon-shopping_cart"></span>
                      <span class="count">2</span>
                    </a>
                  </li> 
                  
                  <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a>
                  </li>


                </ul>

                
              


              </div> 
            </div>

          </div>
        </div>
      </div> 
      <nav class="site-navigation text-right text-md-center" role="navigation">
        <div class="container">
          <ul class="site-menu js-clone-nav d-none d-md-block">
            <li><a href="<?php echo base_url();?>home">Home</a> </li>
            <li><a href="<?php echo base_url();?>shop">Shop</a></li>
            <li><a href="<?php echo base_url();?>about">About</a> </li>
            <li><a href="<?php echo base_url();?>contact">Contact</a></li>
          </ul>
        </div>
      </nav>
    </header>
