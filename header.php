<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>High-quality, safe and compassionate care</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico in the root directory -->
        <link rel="icon" type="image/png"
            href="<?php echo get_theme_file_uri('images/Ebony and Ivory Logoset.png')?>" />
        <link rel="icon" type="image/png"
            href="<?php echo get_theme_file_uri('images/Ebony and Ivory Logoset.png')?>" />
        <?php wp_head();?>
        <style>
        .topnav {
            overflow: hidden;
            background-color: #ffffff;
            position: fixed;
            /* Set the navbar to fixed position */
            top: 0 !important;
            /* Position the navbar at the top of the page */
            width: 100%;
            /* Full width */
            z-index: 100 !important;
            padding-left:5%;
            padding-right:5%;
        }
        .logo-style{
            width:300px; 
            object-fit:cover !important;
        }
        .topnav a {
            font-family: 'Lato', sans-serif !important;
            float: left;
            display: block;
            color: #000000;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
            vertical-align:center !important;
            font-size: 13px;
            font-weight: 400;
            line-height: 30px;
            position: relative;
            text-transform: uppercase;
            color: #444;
        }

        .topnav a:hover {
            background-color: inherit;
            color: black;
        }

        .topnav a.active {
            background-color: #ffffff;
            color: black;
        }

        .topnav .icon {
            display: none;
        }

        .first{
            margin-left:30%;
        }

        .mt{
            margin-top:2%;
        }

        @media screen and (max-width: 1024px){
            .first{
                margin-left:0% !important;
            }
            .logo-style{
                width:190px !important; 
                object-fit:cover !important;
            }
        }

        @media screen and (max-width: 1220px){
            .first{
                margin-left:5% !important;
            }
            .logo-style{
                width:190px !important; 
                object-fit:cover !important;
            }
        }

        @media screen and (max-width: 806px) {
            .topnav a:not(:first-child) {
                display: none;
            }

            .topnav a.icon {
                float: right;
                display: block;
                color:black;
                font-size:20px !important;
                padding:7% 7% 5% 5% !important;
            }
        }

        @media screen and (max-width: 806px) {
            .topnav.responsive {
                position: relative;
            }

            .topnav.responsive .icon {
                position: absolute;
                right: 0;
                top: 0;
            }

            .topnav.responsive a {
                float: none;
                display: block;
                text-align: left;
            }
            .logo-style{
                width:200px !important; 
                object-fit:cover !important;
            }
        }
        </style>
    </head>

    <body>
        <div class="topnav" id="myTopnav">
            <a href="<?php echo site_url()?>" class="active">
                <img src="<?php echo get_theme_file_uri('/images/Ebony and Ivory Logoset with tagline.png')?>"
                    alt="logo" class="logo-style" style="">
            </a>
            <a href="<?php echo site_url()?>" class="first mt">Home</a>
            <a href="<?php echo site_url('about')?>" class="mt">About Us</a>
            <a href="<?php echo site_url('services')?>" class="mt">Services</a>
            <a href="<?php echo site_url('join-us')?>" class="mt">Career</a>
            <a href="<?php echo site_url('contact-us')?>" class="mt">Contact Us</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
        <div style="margin-top:8%;"></div>