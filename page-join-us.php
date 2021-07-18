<?php echo get_header();?>
        <style>
            .myform{
                padding:1% 3% 1% 3%;
                border:1px solid gray;
                font-size:14px;
                border-radius:6px;
            }
            @media only screen and (max-width: 600px) {
                .section__title p{
                    padding:0px 0px 0px 0px !important;
                }
                .bradcaump-title, .bradcaump-inner{
                    font-size:25px !important;
                }
                .pt--100{
                    padding-top:10px !important;
                }
                .container{
                    width:100% !important;
                }
                .a_items{
                    margin-bottom:10% !important;
                }
            }
        </style>
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg--2" data--black__overlay="8">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Career</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.html">Home</a>
                                  <span class="brd-separetor">//</span>
                                  <span class="breadcrumb-item active">Career</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Our Appoinment Area -->
        <section class="our__appoinment__area pt--100 bg--white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="section__title text-center">
                            <p style="margin-bottom:2%;"><?php echo rwmb_meta('section_description');?></p>
                        </div>
                        <div class="container">
                            <div class="row" style="width:80%;margin:0px auto; text-align:center;padding-top:5%;padding-bottom:5%;">
                                <?php
                                    foreach(rwmb_meta('recruitment_process') as $recruitment_process){
                                ?>
                                    <div class="col-md-4 a_items" style="">
                                        <img src="<?php echo get_theme_file_uri('/images/feature/shape/5.png')?>" alt="feature icon" style="margin-bottom:7%;">
                                        <p style="font-size:13px;line-height:20px;"><?php echo $recruitment_process;?></p>
                                    </div>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>

                        <hr>

                        <div class="section__title text-center">
                            <p style="margin-bottom:2%;"><b>We are looking for care assistance team who can: </b></p>
                            <div class="container">
                                <div class="row" style="margin-bottom:5%;">
                                    <?php 
                                        foreach(rwmb_meta('skills_required') as $skills_required){
                                    ?>
                                        <div class="col-md-6">
                                            <p class="xteristics" style="background: rgb(52, 190, 52); padding:4% 4% 4% 4%; color:whitesmoke;border-radius:4px;"><?php echo $skills_required?></p>
                                        </div>
                                    <?php
                                        }
                                    ?>                                </div>
                            </div> 

                            <div class="section__title text-center">
                                <p style="margin-bottom:0%;">Do you want to join us to make a difference to people’s lives? Are you passionate about delivering great care?</p>
                            </div>
                            <div class="container">
                                <!-- Start Section Title -->
                                <div class="row">
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                        <div class="section__title text-center">
                                            <div class="best__care__btn">
                                                <a class="bst__btn btn--theme__color" data-toggle="collapse" data-target="#demo">Join us now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="demo" class="collapse">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                <div class="appoinment ptb--30">
                                                    <form action="#" method="POST">
                                                        <div class="appoinment__inner">
                                                            <!-- <p style="padding:0% 0% 3% 0%; font-size:15px;"><b>Please complete the following form below if you<b></p> -->
                                                            <!-- Start Single -->
                                                            <div class="single__bokking__box">
                                                                <div class="appoinment__box">
                                                                    <input style="color:black;" type="text" placeholder="Your Name" style="border:1px solid rgb(52, 190, 52);" required>
                                                                </div>
                                                                <div class="appoinment__box">
                                                                    <input style="color:black;" type="email" placeholder="Email Address" style="border:1px solid rgb(52, 190, 52);" required>
                                                                </div>
                                                            </div>
                                                            <!-- End Single -->
                                                            <!-- Start Single -->
                                                            <div class="single__bokking__box">
                                                                <div class="appoinment__box">
                                                                    <input style="color:black;" type="text" placeholder="Phone Number" style="border:1px solid rgb(52, 190, 52);" required>
                                                                </div>
                                                                <div class="appoinment__box">
                                                                    <input style="color:black;" type="text" placeholder="Role" style="border:1px solid rgb(52, 190, 52);" required>
                                                                </div>
                                                            </div>
                                                            <div class="single__bokking__box">
                                                                <div class="appoinment__box" style="width:100% !important;">
                                                                    <textarea type="text" placeholder="Message" style="background:transparent !important; color:black;" required></textarea>
                                                                </div>
                                                            </div>
                                                            <!-- End Single -->
                                                            <div class="appoinment__btn">
                                                                <button class="btn btn-success" href="#">Submit</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Section Title -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Our Appoinment Area -->
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