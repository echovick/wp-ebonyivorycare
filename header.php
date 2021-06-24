<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>High-quality, safe and compassionate care</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Place favicon.ico in the root directory -->
    <link rel="icon" type="image/png" href="<?php echo get_theme_file_uri('images/Ebony and Ivory Logoset.png')?>"/>
    <link rel="icon" type="image/png" href="<?php echo get_theme_file_uri('images/Ebony and Ivory Logoset.png')?>"/>
    <?php wp_head();?>
</head>

<body>
    <style>
        @media only screen and (max-width: 600px) {
           .logo-style{
                width:70% !important;
                height:auto !important;
                object-fit:contain !important;
            }
            .mobile-logo {
                width:70% !important;
            }
        }
        .logo-style{
            width:400px;
        }
    </style>
    <!-- Body main wrapper start -->
    <div class="wrapper">
        <!-- Start Header Style -->
        <div id="header" class="header">
            <!-- Start Mainmenu Area -->
            <div id="sticky-header-with-topbar" class="mainmenu__menu__wrap bg-white sticky__header hidden-xs">
                <div class="mainmenu__menu__inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-lg-4 col-sm-12">
                                <div class="logo">
                                    <a href="<?php echo site_url()?>"><img src="<?php echo get_theme_file_uri('/images/Ebony and Ivory Logoset with tagline.png')?>" alt="logo" class="logo-style" style=""></a>
                                    <!-- <p style="font-size:13px; line-height:14px; padding:0px 0px 0px 10px; font-weight:bold;">High-quality, <br>safe and compassionate care</p> -->
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-8 col-sm-10">
                                <!-- Start Mainmenu -->
                                <nav class="mainmenu__nav">
                                    <ul class="main__menu">
                                        <li class="drop"><a href="<?php echo site_url()?>">Home</a></li>
                                        <li><a href="<?php echo site_url('about')?>">About Us</a></li>
                                        <li><a href="<?php echo site_url('services')?>">Services</a></li>
                                        <li><a href="<?php echo site_url('join-us')?>">Career</a></li>
                                        <li><a href="<?php echo site_url('contact-us')?>">Contact Us</a></li>
                                    </ul>
                                </nav>
                                <!-- End Mainmenu -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Mainmenu Area -->
            <!-- Mobile-menu-area start -->
            <div class="mobile-menu-area hidden-md hidden-lg hidden-sm" style="padding-top:3% !important;">
                <div class="fluid-container mobile-menu-container" style="padding:5% 0% 3% 0% !important;">
                    <div class="mobile-logo"><a href="index.html"><img src="<?php echo get_theme_file_uri('/images/Ebony and Ivory Logoset with tagline.png')?>" class="logo-style" style="width:500px !important;" alt="Mobile logo"></a></div>
                    <div class="mobile-menu clearfix">
                        <nav id="mobile_dropdown">
                            <ul>
                                <li class="drop"><a href="<?php echo site_url()?>">Home</a></li>
                                <li><a href="<?php echo site_url('about')?>">About Us</a></li>
                                <li><a href="<?php echo site_url('services')?>">Services</a></li>
                                <li><a href="<?php echo site_url('join-us')?>">Career</a></li>
                                <li><a href="<?php echo site_url('contact-us')?>">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>  
                </div>
            </div>
            <!-- Mobile-menu-area End -->
        </div>
        <!-- End Header Style -->