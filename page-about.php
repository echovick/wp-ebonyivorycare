<?php echo get_header()?>
        <style>
            @media only screen and (max-width: 600px) {
                .section__title p{
                    padding:0px !important;
                }
                .bradcaump-title, .bradcaump-inner{
                    font-size:25px !important;
                }
                .choose__us__inner{
                    margin: 0px 0px 0px 0px !important;
                    padding: 10% 5% 5% 5% !important;
                    /* position: relative; */
                    /* z-index: 2; */
                }
                .choose-left span {
                    font-size:30px !important;
                }
                .choose h2{
                    font-size:15px !important;
                    line-height:20px !important;
                    text-align:left !important;
                    margin-left:4% !important;
                }
                .history{
                    height:auto !important;
                }
                .history__time{
                    width:35% !important;
                    padding-right:20px !important;
                }
                .history__time h4{
                    font-size:15px !important;
                }
                .history__details::before{
                    width:10px !important;
                    height:100px !important;
                    padding:0px !important;

                    content: "";
                    left: -5px;
                    position: absolute;
                    top: 0;
                    /* display:none !important; */
                }
                .history__details, .history__details p{
                    padding-left:20px !important;
                    text-align:left !important;
                }
            }
        </style>
        <!-- Start Bradcaump area -->
        <?php
            while(have_posts()):the_post();
        ?>
            <div class="ht__bradcaump__area" style="background:url('<?php echo get_metabox_image_url('header_background_image')?>') no-repeat scroll center center / cover;" data--black__overlay="8">
                <div class="ht__bradcaump__wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="bradcaump__inner text-center">
                                    <h2 class="bradcaump-title">about us</h2>
                                    <nav class="bradcaump-inner">
                                    <a class="breadcrumb-item" href="index.html">Home</a>
                                    <span class="brd-separetor">//</span>
                                    <span class="breadcrumb-item active">about us</span>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Bradcaump area -->
            <!-- Start Choose us Area -->
            <section class="choose__us__area pt--100 bg-white">
                <div class="container">
                    <!-- Start Section Title -->
                    <?php
                        foreach(rwmb_meta('page_sections')['add_page_sections'] as $page_sections){
                    ?>
                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <div class="section__title text-center">
                                    <h2 class="title__line"><?php echo $page_sections['section_title']?></h2>
                                    <p style="margin-bottom:2%;"><?php echo $page_sections['section_description']?></p>
                                </div>
                            </div>
                        </div>
                        <hr>
                    <?php
                        }
                    ?>
                    <!-- End Section Title -->
                    <?php
                        $image_overlay_section = rwmb_meta('image_overlay_section');
                    ?>
                    <div class="row mt--70">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <div class="choose__us__wrap" style="background:url('<?php echo get_metabox_group_image_url($image_overlay_section,'section_bg_image')?>') no-repeat scroll center center / cover ;">
                                <h2 class="title__lin" style="text-align:center !important; padding-top:3%; color:white;"><u><?php echo $image_overlay_section['overlay_section_title']?></u></h2>
                                <div class="row">
                                    <div class="col-md-9 col-md-offset-3 col-lg-7 col-lg-offset-5 col-sm-12">
                                        <div class="choose__us__inner">
                                            <!-- Start Single Choose -->
                                            <?php
                                                $count = 0;
                                                foreach($image_overlay_section['key_points'] as $key_points){
                                                    $count++;
                                            ?>
                                            <div class="choose">
                                                <div class="choose-left">
                                                    <span>0<?php echo $count?>.</span>
                                                </div>
                                                <div class="choose-right">
                                                    <h2><a href="#"><?php echo $key_points?></a></h2>
                                                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing eaibo lit, sed do eiusmod tempor incididunt ut labore ent dolore magna aliqua.</p> -->
                                                </div>
                                            </div>
                                            <?php
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                
                </div>
            </section>
            <!-- End Choose us Area -->
            <!-- start Our History Area -->
            <?php
                $our_values_section = rwmb_meta('our_values_section');
            ?>
            <section class="our__history__area bg-white ptb--100">
                <div class="container">
                    <!-- Start Section Title -->
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <div class="section__title text-center">
                                <h2 class="title__line">Our Values</h2>
                                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudtotnumquam e</p> -->
                            </div>
                        </div>
                    </div>
                    <!-- End Section Title -->
                    <div class="row mt--70">
                        <div class="history__wrap clearfix">
                            <!-- Start Single History -->
                            
                                    <!-- Start Single History -->
                                    <?php
                                        foreach($our_values_section['add_values'] as $add_values){
                                    ?>
                                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 sm__mb--30 mb-5" style="margin-bottom:4% !important;">
                                            <div class="history__inner">
                                                <div class="history" style="height:85px;">
                                                    <div class="history__time">
                                                        <h4 style="font-size:18px; max-width:105px;"><?php echo $add_values['value_subject']?></h4>
                                                    </div>
                                                    <div class="history__details">
                                                        <p style="font-size:13px;text-align:justify;width:90%;line-height:18px;"><?php echo $add_values['subject_description']?></p>
                                                    </div>
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
            <!-- End Our History Area -->
            <?php
                $key_features_group = rwmb_meta('key_features_group');
            ?>
            <section class="funfact__area bg--3 ptb--70" data--black__overlay="8">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <div class="funfact__wrap">
                                <!-- Start Single Fact -->
                                <?php
                                    foreach($key_features_group['key_features'] as $key_features){
                                ?>
                                    <div class="single__fact__flex">
                                        <div class="fact__icon">
                                            <img src="<?php echo get_theme_file_uri('/images/others/shape/1.png')?>" alt="icon">
                                        </div>
                                        <div class="fact__title">
                                            <h2><?php echo $key_features;?></h2>
                                        </div>
                                    </div>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
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
            endwhile;
        ?>
<?php echo get_footer()?>