<?php echo get_header()?>
        <style>
            @media only screen and (max-width: 600px){
                .last-col{
                    margin:0% 0% 0% 0% !important;
                }
                .bradcaump-title, .bradcaump-inner{
                    font-size:25px !important;
                }
            }
            .last-col{
                margin:0% 33.7% 0% 33.7%;
            }
        </style>
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg--2" data--black__overlay="8">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Our Care Services</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.html">Home</a>
                                  <span class="brd-separetor">//</span>
                                  <span class="breadcrumb-item active">service</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Our Feature Area -->
        <section class="our__top__service bg--white ptb--100">
            <div class="container">
                <!-- Start Section Title -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="section__title text-center">
                            <h2 class="title__line"><?php echo rwmb_meta('services_section')['service_section_title']?></h2>
                            <p><?php echo rwmb_meta('services_section')['service_section_description']?></p>
                        </div>
                    </div>
                </div>
                <!-- End Section Title -->
            </div>
            <div class="container">
                <hr>
                <?php
                    $elderly_care_services_section = rwmb_meta('elderly_care_services_section');
                ?>
                <div class="row text-center">
                    <h2 class="title__line" style="margin-top:3%; margin-bottom:3%; border-bottom:2px solid rgb(52, 190, 52);"><?php echo $elderly_care_services_section['elderly_section_title']?></h2>
                </div>
                <!-- End Section Title --> 
                <div class="row justify-content-center" style="display:inline-block; justify-content:center;">
                    <!-- Start Single Feature -->
                    <?php
                        $elderly_add_service_group = $elderly_care_services_section['elderly_add_service_group'];
                        foreach($elderly_add_service_group as $elderly_care_services){
                    ?>
                        <div class="col-md-4">
                            <!-- Start Single feature -->
                            <div class="top__service__inner text-center">
                                <div class="top__service__icon">
                                    <img src="<?php echo get_metabox_group_image_url($elderly_care_services,'service_icon')?>" alt="feature icon">
                                </div>
                                <div class="top__service__details">
                                    <h4><a href="#"><?php echo $elderly_care_services['service_title']?></a></h4>
                                    <p><?php echo $elderly_care_services['service_description']?></p>
                                </div>
                            </div>
                            <!-- End Single feature -->
                        </div>
                    <?php
                        }
                    ?>
                    <!-- End Single Feature -->
                    <div class="container">
                        <!-- Start Section Title -->
                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <div class="section__title text-center">
                                    <div class="best__care__btn">
                                        <a class="bst__btn btn--theme__color" data-toggle="collapse" data-target="#demo1">Free Care Assessment</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="demo1" class="collapse">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                        <div class="appoinment ptb--30">
                                            <div class="appoinment__inner">
                                                <p style="padding:0% 0% 3% 0%; font-size:15px;"><b>Please complete the following form to schedule a FREE assessment<b></p>
                                                <!-- Start Single -->
                                                <form action="" method="">
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
                    <hr>
                </div>             
                <?php
                    $child_care_service_section = rwmb_meta('child_care_service_section');
                ?>
                <div class="row text-center">
                    <h2 class="title__line" style="margin-top:3%; margin-bottom:1%; border-bottom:2px solid rgb(52, 190, 52);"><?php echo $child_care_service_section['child_service_title']?></h2><br>
                    <!-- <label for="">(Community Enabling)</label> -->
                    <div class="row" style="margin-top:2%;">
                        <p style="width:50%;margin:0px auto;"><?php echo $child_care_service_section['child_service_description']?></p>
                        <p style="margin-bottom:2%;"><b>Our services for children include: </b></p>

                        <div class="container">
                            <div class="row" style="margin-bottom:5%;">
                                <?php
                                    $child_add_services_group = $child_care_service_section['child_add_services_group'];
                                    foreach($child_add_services_group['child_service'] as $child_services){
                                ?>
                                    <div class="col-md-6">
                                        <p class="xteristics" style="background: rgb(52, 190, 52); padding:4% 4% 4% 4%; color:whitesmoke;border-radius:4px; margin-bottom:4%;"><?php echo $child_services?></p>
                                    </div>
                                <?php
                                    }
                                ?>
                            </div>
                        </div> 

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
                                                    <form action="" method="">
                                                        <div class="single__bokking__box">
                                                            <div class="appoinment__box">
                                                                <input type="text" style="color:black !important;" placeholder="Your Name" required>
                                                            </div>
                                                            <div class="appoinment__box">
                                                                <input type="email" style="color:black !important;" placeholder="Email Address" required>
                                                            </div>
                                                        </div>
                                                        <!-- End Single -->
                                                        <!-- Start Single -->
                                                        <div class="single__bokking__box">
                                                            <div class="appoinment__box">
                                                                <input type="text" style="color:black !important;" placeholder="Phone Number" required>
                                                            </div>
                                                            <div class="appoinment__box">
                                                                <input type="text" style="color:black !important;" placeholder="Subject" required>
                                                            </div>
                                                        </div>
                                                        <div class="single__bokking__box">
                                                            <div class="appoinment__box" style="width:100% !important;">
                                                                <textarea type="text" style="color:black !important;" placeholder="Your Message" required></textarea>
                                                            </div>
                                                        </div>
                                                        <!-- End Single -->
                                                        <div class="appoinment__btn">
                                                            <button class="btn btn-success" href="#">Submit</button>
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
                        <hr>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Our Feature Area -->
<?php echo get_footer();?>