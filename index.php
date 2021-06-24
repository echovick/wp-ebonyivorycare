<?php get_header()?>
        <style>
            @media only screen and (max-width: 600px) {
                .service__icon{
                    width:40% !important;
                    margin:0px auto;
                }
                .service-text{
                    font-size:13px !important;
                }
                .best-care-desktop{
                    display:none !important;
                }
                .best-care-mobile{
                    margin-top:-20% !important;
                    display:block !important;
                }
                .slide{
                    height:550px !important;
                }
            }
            .best-care-mobile{
                display:none;
            }
            .flickity-button{
                display:none !important;
            }
        </style>
        <!-- Start Slider Area -->
        <div class="slider__container slider__full--width">
            <div class="slider__activation__wrap slider-activetion-wrap control__style--left owl-carousel owl-theme">
                <!-- Start Single Slide -->
                <div class="slide slider__bg--1" data--black__overlay="2">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                <div class="slider__inner">
                                    <h1>welcome <br> to Ebony and Ivory Care Services</h1>
                                    <p>We are committed to providing person-centred, quality and compassionate care to vulnerable adults and children who require care in their own homes.</p>
                                    <div class="slider__btn">
                                        <a class="bst__btn" href="<?php echo site_url('services')?>">our care services</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slide -->
                <!-- Start Single Slide -->
                <div class="slide slider__bg--4 text__align--center" data--black__overlay="2">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                <div class="slider__inner">
                                    <h1>welcome <br> to Ebony and Ivory Care Services</h1>
                                    <p>We are a trusted care provider for vulnerable children</p>
                                    <div class="slider__btn">
                                        <a class="bst__btn" href="<?php echo site_url('services')?>">our care services</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slide -->
                <!-- Start Single Slide -->
                <div class="slide slider__bg--2 text__align--right" data--black__overlay="2">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                <div class="slider__inner">
                                    <h1>welcome <br> to Ebony and Ivory Care Services</h1>
                                    <p>Excellence in service delivery and a culture of mutual respect are amongst our core values in giving care to those that need it</p>
                                    <div class="slider__btn">
                                        <a class="bst__btn" href="<?php echo site_url('services')?>">our care services</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slide -->
            </div>
        </div>
        <!-- End Slider Area -->
        <!-- Start Our Service Area -->
        <section class="our__service pb--100 pt--90 bg-white">
            <div class="container">
                <div class="row htc__service">
                    <!-- Start Single Service -->
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6">
                        <div class="service bg-white text-center shadow-1" style="border:1px solid grey; border-radius:6px;">
                            <div class="service__inner">
                                <div class="service__icon">
                                    <img src="<?php echo get_theme_file_uri('/images/service/shape/1.png')?>" alt="icon images"> 
                                </div>
                                <h2 class="service-text"><a href="#">Hourly Care</a></h2>
                                <!-- <p>Lorem ipsum dolor sitbn  ipisicelit sed do eiusmod</p> -->
                            </div>
                        </div>
                    </div>
                    <!-- End Single Service -->
                    <!-- Start Single Service -->
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6">
                        <div class="service bg-white text-center shadow-1" style="border:1px solid grey; border-radius:6px;">
                            <div class="service__inner">
                                <div class="service__icon">
                                    <img src="<?php echo get_theme_file_uri('/images/service/shape/2.png')?>" alt="icon images"> 
                                </div>
                                <h2 class="service-text"><a href="#">Live-in Care</a></h2>
                                <!-- <p>Lorem ipsum dolor sitbn  ipisicelit sed do eiusmod</p> -->
                            </div>
                        </div>
                    </div>
                    <!-- End Single Service -->
                    <!-- Start Single Service -->
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6">
                        <div class="service bg-white text-center shadow-1" style="border:1px solid grey; border-radius:6px;">
                            <div class="service__inner">
                                <div class="service__icon">
                                    <img src="<?php echo get_theme_file_uri('/images/service/shape/3.png')?>" alt="icon images"> 
                                </div>
                                <h2 class="service-text"><a href="#">Respite care</a></h2>
                                <!-- <p>Lorem ipsum dolor sitbn  ipisicelit sed do eiusmod</p> -->
                            </div>
                        </div>
                    </div>
                    <!-- End Single Service -->
                    <!-- Start Single Service -->
                    <div class="col-md-3 col-lg-3 hidden-sm col-xs-6">
                        <div class="service bg-white text-center shadow-1" style="border:1px solid grey; border-radius:6px;">
                            <div class="service__inner">
                                <div class="service__icon">
                                    <img src="<?php echo get_theme_file_uri('/images/service/shape/4.png')?>" alt="icon images"> 
                                </div>
                                <h2 class="service-text"><a href="#">Companionship</a></h2>
                                <!-- <p>Lorem ipsum dolor sitbn  ipisicelit sed do eiusmod</p> -->
                            </div>
                        </div>
                    </div>
                    <!-- End Single Service -->
                </div>
            </div>
        </section>
        <!-- End Our Service Area -->
        <!-- Start Best Care Area -->
        <section class="best__care bg--white">
            <div class="container">
                <div class="row best-care-desktop">
                    <div class="best__care__wrap clearfix">
                        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 col-xs-12">
                            <div class="best__care__inner">
                                <h2><a href="#"> We Provide <br> The Best Care Support</a></h2>
                                <div class="best__care__details">
                                    <p>We are committed to <b>providing highest quality and compassionate care </b> to our service users in the comfort of their own home. We support our clients with all aspects of day to day living to achieve the best possible quality of life. Our services are flexible and responsive to individual unique needs of our service users as we literally put them in charge of their choices. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 col-xs-12">
                            <div class="vide text-center" data--black__overlay="6">
                                <div class="">
                                    <!-- <a class="video__trigger video-popup" href="https://www.youtube.com/watch?v=cDDWvj_q-o8">
                                        <i class="zmdi zmdi-play"></i>
                                    </a> -->
                                    <img src="<?php echo get_theme_file_uri('/images/matheus-ferrero-yfmjALh1S6s-unsplash.jpg')?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row best-care-mobile">
                    <div class="best__care__inner col-md-12">
                        <h2><a href="#"> We provide <br> The Best Care Support</a></h2>
                        <img src="<?php echo get_theme_file_uri('/images/matheus-ferrero-yfmjALh1S6s-unsplash.jpg')?>" alt="" style="margin-bottom:5%;">
                        <div class="best__care__details">
                            <p>We are committed to <b>providing highest quality and compassionate care </b> to our service users in the comfort of their own home. We support our clients with all aspects of day to day living to achieve the best possible quality of life. Our services are flexible and responsive to individual unique needs of our service users as we literally put them in charge of their choices. </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Best Care Area -->
        <!-- Start Our Feature Area -->
        <section class="our__top__service bg--white pb--10">
            <div class="container">
                <!-- Start Section Title -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="section__title text-center">
                            <div class="best__care__btn">
                                <a class="bst__btn btn--theme__color" data-toggle="collapse" data-target="#demo">Free Care Assessment</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="demo" class="collapse">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <div class="appoinment ptb--30">
                                    <div class="appoinment__inner">
                                        <p style="padding:0% 0% 3% 0%; font-size:15px;"><b>Please complete the following form to schedule a FREE assessment<b></p>
                                        <!-- Start Single -->
                                        <div class="single__bokking__box">
                                            <div class="appoinment__box">
                                                <input type="text" placeholder="Your Name" required>
                                            </div>
                                            <div class="appoinment__box">
                                                <input type="email" placeholder="Email Address" required>
                                            </div>
                                        </div>
                                        <!-- End Single -->
                                        <!-- Start Single -->
                                        <div class="single__bokking__box">
                                            <div class="appoinment__box">
                                                <input type="text" placeholder="Phone Number" required>
                                            </div>
                                            <div class="appoinment__box">
                                                <input type="text" placeholder="Subject" required>
                                            </div>
                                        </div>
                                        <div class="single__bokking__box">
                                            <div class="appoinment__box" style="width:100% !important;">
                                                <textarea type="text" placeholder="Your Message" required></textarea>
                                            </div>
                                        </div>
                                        <!-- End Single -->
                                        <div class="appoinment__btn">
                                            <a class="btn btn-success" href="#">Submit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Section Title -->
            </div>
        </section>
        <hr>
        <!-- End Our Feature Area -->
                <!-- Start Blog Area -->
        <section class="blog-area ptb--50 bg--white">
            <div class="container">
                <!-- Start Section Title -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="section__title text-center">
                            <h2 class="title__line">Ebony & Ivory Care Services </h2>
                            <p>How can we help you today?</p>
                        </div>
                    </div>
                </div>
                <!-- End Section Title -->
                <div class="row">
                    <div class="blog__wrap cleatfix mt--70 xs__mb--30">
                        <!-- Start Single Blog Area -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="blog" style="border:1px solid gray; padding:5% 5% 5% 5%;">
                                <div class="blog__inner">
                                    <div class="blog__thumb">
                                        <a href="<?php echo site_url('services')?>"><img src="<?php echo get_theme_file_uri('/images/blog/blog-img/1.jpg')?>" alt="blog images"></a>
                                    </div>
                                    <!-- Start Blog Hover -->
                                    <div class="blog__hover__info">
                                        <div class="blog__hover__inner">
                                            <a href="<?php echo site_url('services')?>"><i class="zmdi zmdi-link"></i></a>
                                        </div>
                                    </div>
                                    <!-- End Blog Hover -->
                                </div>
                                <div class="blog__details text-center">
                                    <h4><a href="<?php echo site_url('services')?>">looking for Care </a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Blog Area -->
                        <!-- Start Single Blog Area -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="blog" style="border:1px solid gray; padding:5% 5% 5% 5%;">
                                <div class="blog__inner">
                                    <div class="blog__thumb">
                                        <a href="#"><img src="<?php echo get_theme_file_uri('/images/blog/blog-img/2.jpg')?>" alt="blog images"></a>
                                    </div>
                                    <!-- Start Blog Hover -->
                                    <div class="blog__hover__info">
                                        <div class="blog__hover__inner">
                                            <a href="#"><i class="zmdi zmdi-link"></i></a>
                                        </div>
                                    </div>
                                    <!-- End Blog Hover -->
                                </div>
                                <div class="blog__details text-center">
                                    <h4><a href="<?php echo site_url('request-brochure')?>">Request A Brochure </a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Blog Area -->
                        <!-- Start Single Blog Area -->
                        <div class="col-md-4 col-lg-4 hidden-sm col-xs-12">
                            <div class="blog" style="border:1px solid gray; padding:5% 5% 5% 5%;">
                                <div class="blog__inner">
                                    <div class="blog__thumb">
                                        <a href="<?php echo site_url('join-us')?>"><img src="<?php echo get_theme_file_uri('/images/blog/blog-img/3.jpg')?>" alt="blog images"></a>
                                    </div>
                                    <!-- Start Blog Hover -->
                                    <div class="blog__hover__info">
                                        <div class="blog__hover__inner">
                                            <a href="<?php echo site_url('join-us')?>"><i class="zmdi zmdi-link"></i></a>
                                        </div>
                                    </div>
                                    <!-- End Blog Hover -->
                                </div>
                                <div class="blog__details text-center">
                                    <h4><a href="<?php echo site_url('join-us')?>">Looking for Work</a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Blog Area -->
                    </div>
                </div>                
            </div>
        </section>
        <!-- End Blog Area -->
        <!-- Start Testimonial Area -->
        <section class="our__testimonial ptb--100 bg--1" data--black__overlay="8">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-8 col-lg-offset-2 col-md-offset-2 col-sm-12 col-xs-12">
                        <div class="testimonial__activation" data-flickity='{ "wrapAround": true, "autoPlay": true }'>
                            <!-- Start Single Testimonial -->
                            <div class="testimonial" style="width:100%;">
                                <div class="testimonial__inner text-center">
                                    <p>"The simple act of caring is heroic"</p>
                                    <h4><a href="#">Edward Albert</a></h4>
                                    <h6>actor</h6>
                                </div>
                            </div>
                            <!-- End Single Testimonial -->
                            <!-- Start Single Testimonial -->
                            <div class="testimonial" style="width:100%;">
                                <div class="testimonial__inner text-center">
                                    <p>"One person caring about another represents life’s greatest value"</p>
                                    <h4><a href="#">Jim Rohn</a></h4>
                                    <h6>author</h6>
                                </div>
                            </div>
                            <!-- End Single Testimonial -->
                            <!-- Start Single Testimonial -->
                            <div class="testimonial" style="width:100%;">
                                <div class="testimonial__inner text-center">
                                    <p>"To care for those who once cared for us is one of the highest honours"</p>
                                    <h4><a href="#">Tia Walker</a></h4>
                                    <h6>author</h6>
                                </div>
                            </div>
                            <!-- End Single Testimonial -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Testimonial Area -->
        <!-- Start Brand Area -->
        <div class="brand__area ptb--100 bg-white">
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
<?php get_footer()?>