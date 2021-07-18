<?php
    echo get_header();
?>
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg--2" data--black__overlay="8">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">team details</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.html">Home</a>
                                  <span class="brd-separetor">//</span>
                                  <span class="breadcrumb-item active">team details</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Team Details Area -->
        <section class="team__details pt--100 bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-7 col-sm-12 col-xs-12">
                        <div class="team__details__thumb">
                            <img src="<?php echo get_metabox_image_url('team_member_picture')?>" alt="team details">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5 col-sm-12 col-xs-12">
                        <div class="bt__team__details">
                            <div class="bt__team__details__inner">
                                <h2><a href="#"><?php echo rwmb_meta('name')?></a></h2>
                                <h4><?php echo rwmb_meta('role')?></h4>
                                <p><?php echo rwmb_meta('description')?></p>
                                <div class="team__address">
                                    <p><i class="zmdi zmdi-phone-paused"></i><span>Phone :</span><a href="phone:+061012345678">+061012345678</a></p>
                                    <p><i class="zmdi zmdi-email"></i><a href="mailto:www.kathsmith@outlook.com">kathsmith@outlook.com</a></p>
                                </div>
                                <div class="team__social__icon">
                                    <ul class="social__icon social__icon__bg--transparent">
                                        <li><a href="https://dribbble.com/devitemsllc" target="_blank"><i class="zmdi zmdi-dribbble"></i></a></li>
                                        <li><a href="https://www.pinterest.com/devitemsllc/" target="_blank"><i class="zmdi zmdi-pinterest"></i></a></li>
                                        <li><a href="https://twitter.com/devitemsllc" target="_blank"><i class="zmdi zmdi-twitter"></i></a></li>
                                        <li><a href="https://www.instagram.com/devitems/" target="_blank"><i class="zmdi zmdi-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt--100 xs__mt--40">
                    <!-- Start Progress Bar Area -->
                    <div class="progress__bar__container clearfix">
                        <div class="col-md-5">
                            <div class="progress__bar__wrap">
                                <div class="progress__bar__inner">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed dabuuo eius mod tempor incid idunt ut labore et dolore magna aliqua. Uttan enim amd minim veniam, quins nostrud exercitation ullamco laboris nisi ut </p>
                                    <div class="fs-skill-container">
                                        <!-- Start single skill -->
                                        <div class="single-skill">
                                            <p>Costomic</p>
                                            <div class="progress">
                                                <div class="progress-bar wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay=".5s" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%"><span class="pen-lable">90%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End single skill -->
                                        <!-- Start single skill -->
                                        <div class="single-skill">
                                            <p>General</p>
                                            <div class="progress">
                                                <div class="progress-bar wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay=".5s" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width:95%"><span class="pen-lable">95%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End single skill -->
                                        <!-- Start single skill -->
                                        <div class="single-skill">
                                            <p>Dental</p>
                                            <div class="progress">
                                                <div class="progress-bar wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay=".5s" role="progressbar" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100" style="width:93%"><span class="pen-lable">93%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End single skill -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="progress__bar__thumb">
                                <img src="<?php echo get_theme_file_uri('images/team/big-img/2.jpg')?>" alt="progress images">
                            </div>
                        </div>
                    </div>
                    <!-- End Progress Bar Area -->
                </div>
            </div>
        </section>
        <!-- End Team Details Area -->
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
<?php
    echo get_footer();
?>