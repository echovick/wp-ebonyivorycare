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
                            <h2 class="title__line"><?php echo rwmb_meta('page_title')?></h2>
                            <p><?php echo rwmb_meta('page_description')?></p>
                        </div>
                    </div>
                </div>
                <!-- End Section Title -->
                <?php
                    $settings = get_page_by_title( 'Settings' );
                    $site_contact_information = $settings->site_contact_information;
                    $contact_address = $site_contact_information['contact_address'] ?? '';
                    $contact_email = $site_contact_information['contact_email'] ?? '';
                ?>
                <div class="row">
                    <div class="ct__address__wrap mt--70 xs__mt--40">
                        <!-- Start Single Address -->
                        <div class="col-md-4 col-lg-4 col-sm-6">
                            <?php
                                if(is_array($contact_address)){
                                foreach($contact_address as $contact_address){
                            ?>
                            <div class="bg--gray grey-boxes">
                                <div class="ct__icon">
                                    <i class="zmdi zmdi-pin"></i>
                                </div>
                                <div class="ct__address__content">
                                    <?php echo $contact_address;?>
                                </div>
                            </div>
                            <?php
                                    }
                                }
                            ?>
                        </div>
                        <!-- End Single Address -->
                        <!-- Start Single Address -->
                        <div class="col-md-4 col-lg-4 col-sm-6">
                            <div class="bg--gray grey-boxes">
                                <div class="ct__icon">
                                    <i class="zmdi zmdi-email"></i>
                                </div>
                                <div class="ct__address__content">
                                    <?php   
                                        if(is_array($contact_email)){
                                            foreach($contact_email as $email){
                                    ?>
                                    <a href="mailto:<?php echo $email?>"><?php echo $email?></a>
                                    <?php
                                            }
                                        }
                                    ?>
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
                            <form action="#" method="post">
                                <div class="single-contact-form">
                                    <div class="contact-box">
                                        <input type="text" name="full_name" placeholder="Your Name*">
                                        <input type="email" name="email_address" placeholder="Your Email*">
                                    </div>
                                </div>
                                <div class="single-contact-form">
                                    <div class="contact-box subject">
                                        <input type="text" name="email_subject" placeholder="Subject*">
                                    </div>
                                </div>
                                <div class="single-contact-form">
                                    <div class="contact-box message">
                                        <textarea name="email_message" placeholder="Message text"></textarea>
                                    </div>
                                </div>
                                <div class="contact-btn">
                                    <button type="submit" name="contact_us" class="bst__btn btn--theme__color">SEND message</button>
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
<?php echo get_footer();?>