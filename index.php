<?php get_header()?>
        <?php
            while(have_posts()):the_post();
                $slider_section = rwmb_meta('slider_section');
                $featured_highlight_boxes = rwmb_meta('featured_highlight_boxes');
                $about_summary_section = rwmb_meta('about_summary_section');
                $services_section = rwmb_meta('services_section');
                $expert_quotes_section = rwmb_meta('expert_quotes_section');
            endwhile;
        ?>
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
                <?php
                    if(is_array($slider_section)){
                        $count = 0;
                        foreach($slider_section as $slider){
                            $count++;
                            $slider_image = get_metabox_group_image_url($slider,'slider_image');
                ?>
                    <div class="slide" style="background-image: url('<?php echo $slider_image?>');" data--black__overlay="2">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                    <div class="slider__inner">
                                        <h1><?php echo $slider['slider_title']?></h1>
                                        <p><?php echo $slider['slider_snippet']?></p>
                                        <div class="slider__btn">
                                            <?php
                                                if($slider['redirect_destination'] == "Existing Page"){
                                                    $url = get_permalink($slider['select_page']);
                                                }else if($slider['redirect_destination'] == "External Link"){
                                                    $url = $slider['redirect_url'];
                                                }
                                            ?>
                                            <a class="bst__btn" href="<?php echo $url?>"><?php echo $slider['slider_button_label']?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                        }
                    }
                ?>
            </div>
        </div>
        <!-- End Slider Area -->
        <!-- Start Our Service Area -->
        <section class="our__service pb--100 pt--90 bg-white">
            <div class="container">
                <div class="row htc__service">
                    <?php
                        $count = 0;
                        foreach($featured_highlight_boxes as $boxes){
                            $count++;
                    ?>
                        <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6">
                            <div class="service bg-white text-center shadow-1" style="border:1px solid grey; border-radius:6px;">
                                <div class="service__inner">
                                    <div class="service__icon">
                                        <img src="<?php echo get_theme_file_uri('/images/service/shape/'.$count.'.png')?>" alt="icon images"> 
                                    </div>
                                    <h2 class="service-text"><a href="#"><?php echo $boxes?></a></h2>
                                    <!-- <p>Lorem ipsum dolor sitbn  ipisicelit sed do eiusmod</p> -->
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                    ?>
                    <!-- Start Single Service -->
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
                                <h2><a href="#"> <?php echo $about_summary_section['summary_section_title']?></a></h2>
                                <div class="best__care__details">
                                    <p><?php echo $about_summary_section['summary_section_content']?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 col-xs-12">
                            <div class="vide text-center" data--black__overlay="6">
                                <div class="">
                                    <!-- <a class="video__trigger video-popup" href="https://www.youtube.com/watch?v=cDDWvj_q-o8">
                                        <i class="zmdi zmdi-play"></i>
                                    </a> -->
                                    <img src="<?php echo get_metabox_group_image_url($about_summary_section,'summary_section_image')?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row best-care-mobile">
                    <div class="best__care__inner col-md-12">
                        <h2><a href="#"> <?php echo $about_summary_section['summary_section_title']?></h2>
                        <img src="<?php echo get_metabox_group_image_url($about_summary_section,'summary_section_image')?>" alt="" style="margin-bottom:5%;">
                        <div class="best__care__details">
                            <p><?php echo $about_summary_section['summary_section_content']?></p>
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
                                        <form action="#" method="POST">
                                            <div class="single__bokking__box">
                                                <div class="appoinment__box">
                                                    <input style="color:black;" type="text" placeholder="Your Name" required>
                                                </div>
                                                <div class="appoinment__box">
                                                    <input style="color:black;" type="email" placeholder="Email Address" required>
                                                </div>
                                            </div>
                                            <!-- End Single -->
                                            <!-- Start Single -->
                                            <div class="single__bokking__box">
                                                <div class="appoinment__box">
                                                    <input style="color:black;" type="text" placeholder="Phone Number" required>
                                                </div>
                                                <div class="appoinment__box">
                                                    <input style="color:black;" type="text" placeholder="Subject" required>
                                                </div>
                                            </div>
                                            <div class="single__bokking__box">
                                                <div class="appoinment__box" style="width:100% !important;">
                                                    <textarea style="color:black;" type="text" placeholder="Your Message" required></textarea>
                                                </div>
                                            </div>
                                            <!-- End Single -->
                                            <div class="appoinment__btn">
                                                <button type="submit" class="btn btn-success">Submit</button>
                                            </div>
                                        </form>
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
                            <h2 class="title__line"><?php echo $services_section['services_section_title']?></h2>
                            <p><?php echo $services_section['services_section_snippet']?></p>
                        </div>
                    </div>
                </div>
                <!-- End Section Title -->
                <div class="row">
                    <div class="blog__wrap cleatfix mt--70 xs__mb--30">
                        <!-- Start Single Blog Area -->
                        <?php
                            $add_service_box = $services_section['add_service_box'] ?? '';
                            foreach($add_service_box as $service_box){
                        ?>
                            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                                <div class="blog" style="border:1px solid gray; padding:5% 5% 5% 5%; height:340px; width:auto;">
                                    <div class="blog__inner">
                                        <div class="blog__thumb">
                                            <a href="<?php echo site_url('services')?>"><img src="<?php echo get_metabox_group_image_url($service_box,'service_image')?>" alt="blog images"></a>
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
                                        <h4><a href="<?php echo site_url('services')?>"><?php echo $service_box['service_title']?> </a></h4>
                                    </div>
                                </div>
                            </div>    
                        <?php
                            }
                        ?>
                    </div>
                </div>                
            </div>
        </section>
        <!-- End Blog Area -->
        <!-- Start Testimonial Area -->
        <section class="our__testimonial ptb--100" style="background:url('<?php echo get_metabox_group_image_url($expert_quotes_section,'section_image')?>') no-repeat scroll center center / cover ;" data--black__overlay="8">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-8 col-lg-offset-2 col-md-offset-2 col-sm-12 col-xs-12">
                        <div class="testimonial__activation" data-flickity='{ "wrapAround": true, "autoPlay": true }'>
                            <!-- Start Single Testimonial -->
                            <?php
                                $add_quote = $expert_quotes_section['add_quote'] ?? '';
                                if(is_array($add_quote)){
                                    foreach($add_quote as $quote){
                            ?>
                                <div class="testimonial" style="width:100%;">
                                    <div class="testimonial__inner text-center">
                                        <p>"<?php echo $quote['quote']?>"</p>
                                        <h4><a href="#"><?php echo $quote['person_name']?></a></h4>
                                        <h6><?php echo $quote['person_title']?></h6>
                                    </div>
                                </div>
                            <?php
                                    }
                                }
                            ?>
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
                            <?php
                                $partners = new WP_Query(
                                    array(
                                        'post_type' => 'partner',
                                        'posts_per_page' => -1,
                                    )
                                );
                                while($partners->have_posts()):$partners->the_post();
                            ?>
                                <li><a href="#"><img src="<?php echo get_metabox_image_url('partner_logo')?>" class="partner-logo" alt="brand images"></a></li>
                            <?php
                                endwhile;
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Brand Area -->
<?php get_footer()?>