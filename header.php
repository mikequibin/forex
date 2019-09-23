<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shapely
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:400,600,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <?php wp_head(); ?>
</head>

<body><?php //body_class(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'shapely' ); ?></a>
    <header class="" id="masthead" class="site-header" role="banner">

        <div class="nav-container">
            <nav id="site-navigation" class="main-navigation navbar-fixed-top" role="navigation">
                <div class="nav-bar">
                    <div class="row">
                        <div class="module left site-title-container">
                            <?php shapely_get_header_logo(); ?>
                        </div>
                        <div class="module widget-handle mobile-toggle right visible-sm visible-xs">
                            <i class="fa fa-bars"></i>
                        </div>
                        <div class="module-group right">
                            <div class="module left">
                                <?php shapely_header_menu(); // main navigation ?>
                                
                                <div class="stem-logo">
                                    <a href="http://www.stemedia.org" target="_blank"><img src="https://www.freefxcourse.com/wp-content/themes/forex/assets/images/cropped-stem-logo.png"></a>
                                </div>
                            </div>

                            <div class="module widget-handle search-widget-handle left hidden-xs hidden-sm">
                                 
                                <div class="search">
                                    <i class="fa fa-search"></i>
                                    <span class="title"><?php esc_html_e( "Site Search", 'shapely' ); ?></span>
                                </div>
                                <div class="function"><?php
                                    get_search_form(); ?>
                                </div>
                            </div>
                            
                           
                            
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>