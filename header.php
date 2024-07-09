<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/app.css">
  <title>Document</title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>  >

<header class="header absolute top-0 left-0 right-0 py-5 z-10">
  <div class="container">
    <div class="row flex m-auto justify-between align-center">
      <div class="logo md:max-w-full max-w-[105px]"> <a href=""><?php the_custom_logo(); ?></a> </div>
      <div class="mobile-menu md:opacity-0 opacity-100 z-20" id="mobileMenuIcon">
        <!-- <img src="</?= get_template_directory_uri().'/assets/images/menu-bar.svg'; ?>" alt="" class="w-[20px]" id="menuIcon">
        <img src="</?= get_template_directory_uri().'/assets/images/close-icon.svg'; ?>" alt="" class="w-[30px] hidden" id="closeIcon"> -->
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
      </div>
      <div class="menu-part md:flex md:flex-row md:static md:bg-transparent md:h-auto items-center md:p-0 flex-col hidden fixed top-0 left-0 right-0 bg-white h-full p-[15px]" id="mainMenu">
      <div class="header-menus">
        <?php
          wp_nav_menu( array(
            'menu'           => 'Main Menu', // Do not fall back to first non-empty menu.
            'theme_location' => '',
            'container'    => false,
            'menu_class' => 'flex'
          ) )
          ?>
      </div>
      <div class="register-btn md:mt-0 mt-5">
        <a href="#" class="btn">REGISTER</a>
      </div>
      </div>
    </div>
  </div>
</header>
<div class="container breadcrumbs-container">
  <div class="breadcrumbs mt-[100px] text-[11px] tracking-[0.82px] font-medium uppercase">
    <?php custom_breadcrumb(); ?>
  </div>
</div>