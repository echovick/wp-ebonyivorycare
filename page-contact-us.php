<?php echo get_header();?>
        <style>
            @media only screen and (max-width: 600px) {
                .grey-boxes{
                    display:inline-block !important;
                    overflow:hidden !important;
                    width:100% !important;
                    padding-bottom:5% !important;
                    height:auto !important;
                }   
                .section__title p{
                    padding:0px !important;
                } 
                .bradcaump-title, .bradcaump-inner{
                    font-size:25px !important;
                }
                .bradcaump-title, .bradcaump-inner{
                    font-size:25px !important;
                }
            }
            .grey-boxes{
                padding:3% 7% 3% 7%;
                height:100px;
                display:flex;
                margin-bottom:5%;
                overflow:hidden;
            }
        </style>
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg--2" data--black__overlay="8">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Contact Us</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.html">Home</a>
                                  <span class="brd-separetor">//</span>
                                  <span class="breadcrumb-item active">Contact</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Contact Address -->
        <section class="ct__address pt--100 bg-white">
            <div class="container">
                <!-- Start Section Title -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="section__title text-center">
                            <h2 class="title__line">Get In Touch</h2>
                            <p>Do you have a question for us? We will be delighted to hear from you.</p>
                        </div>
                    </div>
                </div>
                <!-- End Section Title -->
                <div class="row">
                    <div class="ct__address__wrap mt--70 xs__mt--40">
                        <!-- Start Single Address -->
                        <div class="col-md-4 col-lg-4 col-sm-6">
                            <div class="bg--gray grey-boxes">
                                <div class="ct__icon">
                                    <i class="zmdi zmdi-pin"></i>
                                </div>
                                <div class="ct__address__content">
                                    <p>4 Imperial Place Maxwell Road, Borehamwood, Hertfordshire</p>
                                    <p>WD6 1JN, United Kingdom</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Address -->
                        <!-- Start Single Address -->
                        <div class="col-md-4 col-lg-4 col-sm-6">
                            <div class="bg--gray grey-boxes">
                                <div class="ct__icon">
                                    <i class="zmdi zmdi-email"></i>
                                </div>
                                <div class="ct__address__content">
                                    <a href="mailto:www.enquiry@ebonyandivorycareservice.com">enquiry@ebonyandivorycareservice.com</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Address -->
                        <!-- Start Single Address -->
                        <div class="col-md-4 col-lg-4 col-sm-6 sm__mt--30">
                            <div class="bg--gray grey-boxes">
                                <div class="ct__icon">
                                    <i class="zmdi zmdi-phone"></i>
                                </div>
                                <div class="ct__address__content">
                                    <p><a href="tel:07985536432">07985536432</a></p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Address -->
                    </div>
                </div>                
            </div>
        </section>
        <!-- End Contact Address -->
        <!-- Start Contact Form Area -->
        <section class="contact__form__area ptb--100 bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="contact-form-wrap bg-cat-3">
                            <h2 class="contact__title">Contact Us</h2>
                            <form id="contact-form" action="" method="post">
                                <div class="single-contact-form">
                                    <div class="contact-box">
                                        <input type="text" name="name" placeholder="Your Name*">
                                        <input type="email" name="email" placeholder="Your Email*">
                                    </div>
                                </div>
                                <div class="single-contact-form">
                                    <div class="contact-box subject">
                                        <input type="text" name="subject" placeholder="Subject*">
                                    </div>
                                </div>
                                <div class="single-contact-form">
                                    <div class="contact-box message">
                                        <textarea name="message"  placeholder="Message text"></textarea>
                                    </div>
                                </div>
                                <div class="contact-btn">
                                    <button type="submit" class="bst__btn btn--theme__color">SEND message</button>
                                </div>
                            </form>
                        </div>
                        <div class="form-output">
                            <p class="form-messege"></p>
                        </div>
                    </div>
                </div>
            </div>            
        </section>
        <!-- End Contact Form Area -->
        <!-- Start Map Area -->
        <!-- <div class="map-contacts pb--100">
            <div id="googleMap"></div>
         </div> -->
        <!-- End Map Area -->
        <!-- Start Brand Area -->
        <div class="brand__area pb--100 bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <ul class="brand__list bg-white">
                            <li><a href="#"><img src="<?php echo get_theme_file_uri('/images/cqc.jpg')?>" alt="brand images"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Brand Area -->
<?php echo get_footer();?>