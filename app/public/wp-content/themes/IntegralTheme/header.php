<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
<meta charset ="<?php bloginfo('charset') ?>" >
  <meta name="viewport" content="width =device-width, initial-scale=1">
 <?php wp_head(); ?>

	
</head>
<body <?php body_class(); ?> >
<header class="site-header">
      <div class="container">
        <a class="school-logo-text float-left">
          <h1 href="<?php echo site_url() ?>"><strong style="color:white">INTEGRAL</strong> </h1> <h5>Business Machine <br>& Allied Services</a>
          </h5></a> 
        <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
        <div class="site-header__menu group">
          <nav class="main-navigation">
            <ul>
              
              <li <?php if (get_the_id()==9) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url() ?>">Home</a></li>
              <li <?php if (is_page('Services')) echo 'class="current-menu-item"' ?>><a href="<? echo site_url('/Services') ?>">Services</a></li>
              <li <?php if (is_page('about-us') or wp_get_post_parent_id(0)==14) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/about-Us') ?>">About Us</a></li>
              <li <?php if (is_page('contact-us')) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/Contact-Us') ?>">Contact Us</a></li>
            </ul>
          </nav>
          <div class="site-header__util">
               <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
          </div>
        </div>
      </div>
    </header>