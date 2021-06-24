/*-----------------------------------------------------------------------------------

  Template Name: Best Care HTML Template.
  Template URI: #
  Description: Best Care is a unique website template designed in HTML with a simple & beautiful look. There is an excellent solution for creating clean, wonderful and trending material design corporate, corporate any other purposes websites.
  Author: HasTech
  Author URI: https://themeforest.net/user/hastech/portfolio
  Version: 1.0

-----------------------------------------------------------------------------------*/

/*-------------------------------
[  Table of contents  ]
---------------------------------
  01. jQuery MeanMenu
  02. wow js active
  03. Portfolio  Masonry (height)
  04. Sticky Header
  05. ScrollUp
  06. Testimonial Slick Carousel
  07. CounterUp
  08. Magnific Popup
  09. Home Slider
  10. Shopping Basket
  11. Slider Range  

/*--------------------------------
[ End table content ]
-----------------------------------*/


(function ($) {
    'use strict';


    /*-------------------------------------------
      01. jQuery MeanMenu
    --------------------------------------------- */

    $('.mobile-menu nav').meanmenu({
        meanMenuContainer: '.mobile-menu-area',
        meanScreenWidth: "767",
        meanRevealPosition: "right",
    });

    /*-------------------------------------------
      02. wow js active
    --------------------------------------------- */
    new WOW().init();

    /*-------------------------------------------
      03. Portfolio  Masonry (height)
    --------------------------------------------- */
    $('.htc__portfolio__container').imagesLoaded(function () {
        var $container = $('.htc__portfolio__container');
        $container.isotope({
            itemSelector: '.pro__item',
            filter: '*',
            transitionDuration: '0.7s',
            masonry: {
                columnWidth: '.pro__item:not(.wide__item)'
            }
        });

        // filter items on button click
        $('#htc__filters').on('click', 'li', function () {
            var filterValue = $(this).attr('data-filter');
            $container.isotope({ filter: filterValue });
        });

        // change is-checked class on buttons
        $('#htc__filters li').on('click', function () {
            $('#htc__filters li').removeClass('is-checked');
            $(this).addClass('is-checked');
            var selector = $(this).attr('data-filter');
            $container.isotope({ filter: selector });
            return false;
        });
    });


    /*-------------------------------------------
      04. Sticky Header
    --------------------------------------------- */
    $(window).on('scroll', function () {
        var scroll = $(window).scrollTop();
        if (scroll < 245) {
            $("#sticky-header-with-topbar").removeClass("scroll-header");
        } else {
            $("#sticky-header-with-topbar").addClass("scroll-header");
        }
    });


    /*--------------------------
      05. ScrollUp
    ---------------------------- */
    $.scrollUp({
        scrollText: '<i class="zmdi zmdi-chevron-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });


    /*---------------------------------------------
      06. Testimonial Slick Carousel
    ---------------------------------------------*/

    $('.our-testimonial-active').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        draggable: true,
        autoplay: false,
        // fade: true,
        dots: false,
    });

    /*-----------------------------
      07. CounterUp
    -----------------------------*/
    $('.count').counterUp({
        delay: 60,
        time: 3000
    });



    /*--------------------------------
      08. Magnific Popup
    ----------------------------------*/

    $('.video-popup').magnificPopup({
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        zoom: {
            enabled: true,
        }
    });

    $('.image-popup').magnificPopup({
        type: 'image',
        mainClass: 'mfp-fade',
        removalDelay: 100,
        gallery: {
            enabled: true,
        }
    });



    /*-----------------------------------------------
      09. Home Slider
    -------------------------------------------------*/

    if ($('.slider-activetion-wrap').length) {
        $('.slider-activetion-wrap').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            smartSpeed: 5000,
            autoplayTimeout: 10000,
            autoplayHoverPause: false,
            autoplay: true,
            navText: ['<i class="zmdi zmdi-arrow-left"></i>', '<i class="zmdi zmdi-arrow-right"></i>'],
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                800: {
                    items: 1
                },
                1024: {
                    items: 1
                },
                1200: {
                    items: 1
                },
                1400: {
                    items: 1
                },
                1920: {
                    items: 1
                }
            }
        });
    }


    /*--------------------------    
      10. Shopping Basket
    ---------------------------- */

    $('.cart__menu').on('click', function () {
        if ($('.dropdown__shopping__basket').hasClass('active')) {
            $('.dropdown__shopping__basket').removeClass('active').slideUp();
            $(this).removeClass('active');
        }
        else {
            $('.dropdown__shopping__basket').removeClass('active').slideUp();
            $('.dropdown__shopping__basket').removeClass('active');
            $(this).addClass('active');
            $('.dropdown__shopping__basket').addClass('active').slideDown();

        }
        return false;
    });
    $('.shopping__basket_notices .icon-clear').on('click', function () {
        $('.dropdown__shopping__basket').removeClass('active').slideUp();
    });

    // End  site info

    /*--------------------------    
      11. Slider Range
    ---------------------------- */

    $(function () {
        $("#slider-range").slider({
            range: true,
            min: 0,
            max: 500,
            values: [75, 300],
            slide: function (event, ui) {
                $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
            }
        });
        $("#amount").val("$" + $("#slider-range").slider("values", 0) +
            " - $" + $("#slider-range").slider("values", 1));
    });







})(jQuery);




