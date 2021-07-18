<?php echo get_header();?>
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg--2" data--black__overlay="8">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Media</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.html">Home</a>
                                  <span class="brd-separetor">//</span>
                                  <span class="breadcrumb-item active">Request Brochure</span>
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
                            <h2 class="title__line">Request Our Brochure</h2>
                            <p>Fill the form below to request for our brochure</p>
                        </div>
                    </div>
                </div>
                <!-- End Section Title -->               
            </div>
        </section>
        <!-- End Contact Address -->
        <!-- Start Contact Form Area -->
        <section class="contact__form__area ptb--100 bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="contact-form-wrap bg-cat-3">
                            <form id="contact-form" action="http://preview.hasthemes.com/bcare/mail.php" method="post">
                                <div class="single-contact-form">
                                    <div class="contact-box">
                                        <input type="text" name="name" placeholder="Your Full Name*">
                                        <input type="email" name="email" placeholder="Email*">
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
                                <?php
                                    $upload_brochure = rwmb_meta('upload_brochure');
                                    foreach($upload_brochure as $brochure){
                                        $url = $brochure['url'];
                                    }
                                ?>
                                <div class="contact-btn">
                                    <button type="submit" class="bst__btn btn--theme__color" style="margin-right:5%;">Request Physical Brochure</button>
                                    <a href="<?php echo $url?>" target="_blank" class="bst__btn btn--theme__color" download>Download Digital Brochure</a>
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
<?php echo get_footer();?>