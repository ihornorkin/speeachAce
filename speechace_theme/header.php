<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="imagetoolbar" content="no">
        <meta name="msthemecompatible" content="no">
        <meta name="cleartype" content="on">
        <meta name="HandheldFriendly" content="True">
        <meta name="format-detection" content="telephone=no">
        <meta name="format-detection" content="address=no">
        <title><?php bloginfo('name'); ?></title>
        <meta name="description" content="">
        <meta name="keywords" content="">
  </head>
  <?php wp_head(); ?>
    <body class="page">
        <div class="page__main-wrapper"></div>
        <div class="intro-section">
            <div class="intro-section__content-wrapper">
                <!-- Navigation-->
                <header id="header" class="intro-section__nav intro-section__nav--fixed">
                    <nav class="nav">
                        <div class="nav__nav-wrapper">
                            <!-- Left sie menu-->
                            <div class="nav__menu-left col-md-5 pull-left">
                                <?php wp_nav_menu( array( 'theme_location' => 'header-l-menu' ) );?>
                            </div>
                            <!-- Logo-->
                            <div class="nav__logo">
                                <?php 
                                if ( function_exists( 'the_custom_logo' ) ) {
                                    the_custom_logo();
                                }
                                ?>   
                            </div>
                            <div class="nav__secondary-logo">
                                <a href="/">
                                <?php $sec_logo = get_theme_mod('sec_logo'); ?>
                                    <img src="<?php echo esc_url($sec_logo)?>" data-rjs="3" />
                                </a>
                            </div>                            
                            <!-- Right side menu-->
                            <div class="nav__menu-right col-md-5 pull-right">
                                <?php wp_nav_menu( array( 'theme_location' => 'header-r-menu' ) );?>
                            </div>
                            <div class="nav__contact-btn text-center">
                                <button id="btn-contact-us-nav" data-toggle="modal" data-target="#contact-form" class="btn sa-btn">Contact Us</button>
                            </div>
                            <div class="nav__mobile-menu">
                                <div class="hamburger hamburger--spring">
                                    <div class="hamburger-box">
                                        <div class="hamburger-inner"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </header>