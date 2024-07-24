<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/app.css">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <title>Document</title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>  >

<header class="header absolute top-0 left-0 right-0 py-5 z-10">
  <div class="container">
    <div class="row flex m-auto justify-between align-center">
      <div class="logo md:max-w-full max-w-[105px]"> <a href="<?= home_url(); ?>"><?php the_custom_logo(); ?></a> </div>
      <div class="mobile-menu lg:opacity-0 opacity-100 z-20" id="mobileMenuIcon">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
      </div>
      <div class="menu-part flex lg:flex-row lg:static lg:bg-transparent lg:h-auto items-center lg:p-0 flex-col fixed top-0 left-0 right-0 bg-white h-full lg:p-0 p-[35px]" id="mainMenu">
      <div class="header-menus w-full">
        <?php
          wp_nav_menu( array(
            'menu'           => 'Main Menu', // Do not fall back to first non-empty menu.
            'theme_location' => '',
            'container'    => false,
            'menu_class' => 'flex'
          ) )
          ?>
      </div>
      <div class="register-btn lg:mt-0 lg:w-auto w-full mt-auto flex items-end flex-1">
        <a href="#" class="btn lg:w-auto w-full">REGISTER</a>
      </div>
      </div>
    </div>
  </div>
</header>
<?php if(!is_front_page()): ?>
<div class="container breadcrumbs-container">
  <div class="breadcrumbs mt-[100px] text-[11px] tracking-[0.82px] font-medium uppercase">
    <?php custom_breadcrumb(); ?>
  </div>
</div>
<?php endif; ?>