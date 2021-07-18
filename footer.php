        <!-- Start Footer Area -->
        <?php
            $settings = get_page_by_title( 'Settings' );
        ?>
        <footer id="footer__area" class="footer__area">
            <div class="footer-wrap pt--40 pb--70 ftr-bg bg__cat--1 smptb--60 xsptb--40">
                <div class="container">
                    <div class="row">
                        <div class="footer__container clearfix mt--40">
                            <!--Start Single Footer wrap -->
                            <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                                <div class="single__footer__widget">
                                    <h2 class="footer-title">Contact Us</h2>
                                    <div class="footer__details">
                                        <?php
                                            $site_contact_information = $settings->site_contact_information;
                                            $social_media_settings = $settings->social_media_settings;
                                            $contact_address = $site_contact_information['contact_address'] ?? '';
                                            $contact_email = $site_contact_information['contact_email'] ?? '';
                                            $add_quick_links = $settings->add_quick_links;
                                            $add_usefull_links = $settings->add_usefull_links;
                                        ?>
                                        <!--Start Single Footer address -->
                                        <?php
                                            if(is_array($contact_address)){
                                            foreach($contact_address as $contact_address){
                                        ?>
                                            <div class="single__footer__address">
                                                <div class="footer__icon">
                                                    <i class="zmdi zmdi-pin"></i>
                                                </div>
                                                <div class="footer__address" style="color:white !important;">
                                                    <?php echo $contact_address;?>
                                                </div>
                                            </div>
                                        <?php
                                                }
                                            }
                                        ?>
                                        <!--End Single Footer address -->
                                        <!--Start Single Footer address -->
                                        <div class="single__footer__address">
                                            <div class="footer__icon">
                                                <i class="zmdi zmdi-email"></i>
                                            </div>
                                            <div class="footer__address">
                                                <?php
                                                    if(is_array($contact_email)){
                                                        foreach($contact_email as $email){
                                                ?>
                                                    <p><a href="mailto:<?php echo $email?>" target="_top"
                                                            style="font-size:14px;"><?php echo $email?></a>
                                                    </p>
                                                <?php
                                                        }
                                                    }
                                                ?>
                                                <!-- <p><a href="mailto:demo@gmail.com" target="_top">Demo@gmail.com</a></p> -->
                                            </div>
                                        </div>
                                        <!--End Single Footer address -->
                                        <!--Start Single Footer address -->
                                        <div class="single__footer__address">
                                            <div class="footer__icon">
                                                <i class="zmdi zmdi-phone"></i>
                                            </div>
                                            <div class="footer__address">
                                                <?php
                                                    $contact_phone = $site_contact_information['contact_phone'];
                                                    if(is_array($contact_phone)){
                                                        foreach($contact_phone as $phone){
                                                ?>
                                                    <p><a href="tel:<?php echo $phone?>"><?php echo $phone?></a></p>
                                                <?php
                                                        }
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                        <!--End Single Footer address -->
                                    </div>
                                </div>
                            </div>
                            <!--End Single Footer wrap -->
                            <!--Start Single Footer wrap -->
                            <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                                <div class="single__footer__widget our--links">
                                    <h2 class="footer-title">Quick links</h2>
                                    <ul class="footer-menu">
                                        <?php
                                            if(is_array($add_quick_links)){
                                                foreach($add_quick_links as $quick_links){
                                                    if($quick_links['menu_source'] == 'Page'){
                                                        $url = get_permalink($quick_links['page_quick_link']);
                                                    }else if($quick_links['menu_source'] == 'Link'){
                                                        $url = $quick_links['menu_url'];
                                                    }
                                        ?>
                                            <li><a href="<?php echo $url?>"><i class="zmdi zmdi-caret-right"></i><?php echo $quick_links['menu_label']?></a></li>
                                        <?php
                                                }
                                            }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                            <!--End Single Footer wrap -->
                            <!--Start Single Footer wrap -->
                            <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                                <div class="single__footer__widget useful--links">
                                    <h2 class="footer-title">Useful Links</h2>
                                    <ul class="footer-menu">
                                        <?php
                                            if(is_array($add_usefull_links)){
                                                foreach($add_usefull_links as $useful_links){
                                                    if($useful_links['useful_links_source'] == 'Page'){
                                                        $url = get_permalink($useful_links['useful_link_page']);
                                                    }else if($useful_links['useful_links_source'] == 'Link'){
                                                        $url = $useful_links['usefull_link_url'];
                                                    }
                                        ?>
                                            <li><a href="<?php echo $url?>"><i class="zmdi zmdi-caret-right"></i><?php echo $useful_links['useful_link_label']?></a></li>
                                        <?php
                                                }
                                            }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                            <!--End Single Footer wrap -->
                            <!--Start Single Footer wrap -->
                            <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                                <div class="single__footer__widget newsletter">
                                    <h2 class="footer-title">Email Newsletters</h2>
                                    <div class="newsletter__area">
                                        <p>Enter your email address below to receive our e-newsletter.</p>

                                        <div id="mc_embed_signup">
                                            <form
                                                action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef"
                                                method="post" id="mc-embedded-subscribe-form"
                                                name="mc-embedded-subscribe-form" class="validate" target="_blank"
                                                novalidate>
                                                <div id="mc_embed_signup_scroll">
                                                    <div class="footer__input">
                                                        <input type="email" value="" name="EMAIL" class="email"
                                                            id="mce-EMAIL" placeholder="Email Address" required>
                                                    </div>
                                                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                                    <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                                        <input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef"
                                                            tabindex="-1" value=""></div>
                                                    <div class="clearfix subscribe__btn"><input type="submit"
                                                            value="Subscribe" name="subscribe"
                                                            id="mc-embedded-subscribe"
                                                            class="bst__btn btn--white__color"></div>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--End Single Footer wrap -->
                        </div>
                    </div>
                </div>
            </div>
            <!--End Footer Area  -->
            <!--Start Footer Botter Area  -->
            <div class="footer__bottom__area bg__cat--2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="footer__bottom">
                                <div class="ft__btm__inner">
                                    <!-- <img src="<?php echo get_theme_file_uri('/images/Ebony and Ivory Logoset with tagline.png')?>" alt=""> -->
                                    <p>Copyright © 2021 <a href="#">Ebony and Ivory Care Services. </a>All Right
                                        Reserved.</p>
                                </div>
                                <ul class="ft__btm__social__icon">
                                    <?php
                                        if(!empty($social_media_settings['facebook'])){
                                            echo '<li><a href="'.$social_media_settings['facebook'].'"><i class="zmdi zmdi-facebook"></i></a></li>';
                                        }
                                        if(!empty($social_media_settings['twitter'])){
                                            echo '<li><a href="'.$social_media_settings['twitter'].'"><i class="zmdi zmdi-twitter"></i></a></li>';
                                        }
                                        if(!empty($social_media_settings['instagram'])){
                                            echo '<li><a href="'.$social_media_settings['instagram'].'"><i class="zmdi zmdi-instagram"></i></a></li>';
                                        }
                                        if(!empty($social_media_settings['pinterest'])){
                                            echo '<li><a href="'.$social_media_settings['pinterest'].'"><i class="zmdi zmdi-pinterest"></i></a></li>';
                                        }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer Area -->
        </div>
        <!-- Body main wrapper end -->

        <!-- Placed js at the end of the document so the pages load faster -->
        <!-- Google Map js -->
        <script>
// When the window has finished loading create our google map below
google.maps.event.addDomListener(window, 'load', init);

function init() {
    // Basic options for a simple Google Map
    // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
    var mapOptions = {
        // How zoomed in you want the map to start at (always required)
        zoom: 12,

        scrollwheel: false,

        // The latitude and longitude to center the map (always required)
        center: new google.maps.LatLng(23.7286, 90.3854), // New York

        // How you would like to style the map. 
        // This is where you would paste any style found on Snazzy Maps.
        styles: [

            {
                "featureType": "administrative.locality",
                "elementType": "all",
                "stylers": [{
                        "hue": "#2c2e33"
                    },
                    {
                        "saturation": 7
                    },
                    {
                        "lightness": 19
                    },
                    {
                        "visibility": "on"
                    }
                ]
            },
            {
                "featureType": "landscape",
                "elementType": "all",
                "stylers": [{
                        "hue": "#ffffff"
                    },
                    {
                        "saturation": -100
                    },
                    {
                        "lightness": 100
                    },
                    {
                        "visibility": "simplified"
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "all",
                "stylers": [{
                        "hue": "#ffffff"
                    },
                    {
                        "saturation": -100
                    },
                    {
                        "lightness": 100
                    },
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "geometry",
                "stylers": [{
                        "hue": "#bbc0c4"
                    },
                    {
                        "saturation": -93
                    },
                    {
                        "lightness": 31
                    },
                    {
                        "visibility": "simplified"
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "labels",
                "stylers": [{
                        "hue": "#bbc0c4"
                    },
                    {
                        "saturation": -93
                    },
                    {
                        "lightness": 31
                    },
                    {
                        "visibility": "on"
                    }
                ]
            },
            {
                "featureType": "road.arterial",
                "elementType": "labels",
                "stylers": [{
                        "hue": "#bbc0c4"
                    },
                    {
                        "saturation": -93
                    },
                    {
                        "lightness": -2
                    },
                    {
                        "visibility": "simplified"
                    }
                ]
            },
            {
                "featureType": "road.local",
                "elementType": "geometry",
                "stylers": [{
                        "hue": "#e9ebed"
                    },
                    {
                        "saturation": -90
                    },
                    {
                        "lightness": -8
                    },
                    {
                        "visibility": "simplified"
                    }
                ]
            },
            {
                "featureType": "transit",
                "elementType": "all",
                "stylers": [{
                        "hue": "#e9ebed"
                    },
                    {
                        "saturation": 10
                    },
                    {
                        "lightness": 69
                    },
                    {
                        "visibility": "on"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "all",
                "stylers": [{
                        "hue": "#e9ebed"
                    },
                    {
                        "saturation": -78
                    },
                    {
                        "lightness": 67
                    },
                    {
                        "visibility": "simplified"
                    }
                ]
            }
        ]
    };

    // Get the HTML DOM element that will contain your map 
    // We are using a div with id="map" seen below in the <body>
    var mapElement = document.getElementById('googleMap');

    // Create the Google Map using our element and options defined above
    var map = new google.maps.Map(mapElement, mapOptions);

    // Let's also add a marker while we're at it
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(23.7286, 90.3854),
        map: map,
        title: 'Ramble!',
        icon: 'images/icons/map.png',
        animation: google.maps.Animation.BOUNCE

    });
}
        </script>
        <script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
        </script>
        <?php wp_footer();?>
        </body>


        <!-- Mirrored from preview.hasthemes.com/bcare/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Jan 2021 23:48:14 GMT -->

        </html>