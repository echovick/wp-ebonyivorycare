<?php echo get_header()?>
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg--2" data--black__overlay="8">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">team members</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.html">Home</a>
                                  <span class="brd-separetor">//</span>
                                  <span class="breadcrumb-item active">team members</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Our Exprienced Area -->
        <section class="experienced__team__area bg--white pt--100">
            <div class="container">
                <!-- Start Section Title -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="section__title text-center">
                            <h2 class="title__line"><?php echo rwmb_meta('page_header')?></h2>
                            <p><?php echo rwmb_meta('page_description')?></p>
                        </div>
                    </div>
                </div>
                <!-- End Section Title -->
                <div class="row">
                    <div class="experienced__team__wrap team__area clearfix mt--40 xs__mt--10">
                        <?php
                            $team = new WP_Query(array('post_type' => 'team-member','posts_per_page'=>-1));
                            while($team->have_posts()):$team->the_post();
                        ?>
                        <!-- Start Single Team -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="experienced__team">
                                <div class="experienced__team__inner">
                                    <div class="experience__thumb">
                                        <img src="<?php echo get_metabox_image_url('team_member_picture')?>" alt="team images">
                                    </div>
                                    <!--Start Team Hover Info -->
                                    <div class="experience__hover__info">
                                        <div class="experience__hover__inner">
                                            <h2><a href="team-details.html"><?php echo rwmb_meta('name')?></a></h2>
                                            <h4><?php echo rwmb_meta('role')?></h4>
                                            <div class="team__btn">
                                                <a class="read__more__btn" href="<?php echo get_permalink()?>">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Team Hover Info -->
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team -->
                        <?php
                            endwhile;
                        ?>
                    </div>
                </div>                
            </div>
        </section>
        <!-- End Our Exprienced Area -->
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
        <!-- Start Footer Area -->
<?php echo get_footer();?>