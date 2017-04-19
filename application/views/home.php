<?php
foreach ($css_files as $css) {
  echo("<link href=\"".$css."\" rel=\"stylesheet\">");
}
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo lang('pageTitle')?></title>

    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body id="home" class="homepage">


    <section id="main-slider">
        <div class="owl-carousel">
            <div class="item" style="background-image: url(images/slider/bg1.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2><span>Loading </span><?php echo lang('description_1')?></h2>
                                    <p><?php echo lang('pageTitle')?> </p>
                                    <a class="btn btn-primary btn-lg" href="<?php echo base_url() . 'design_sticker'?>"><?php echo lang('design_sticker')?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
             <div class="item" style="background-image: url(images/slider/bg2.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2><?php echo lang('description_2')?></h2>
                                    <p><?php echo lang('description_2_detail')?></p>
                                    <a class="btn btn-primary btn-lg" href="<?php echo base_url() . 'shopping'?>"><?php echo lang('shopping')?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
            <div class="item" style="background-image: url(images/517501441.jpg);">
               <div class="slider-inner">
                   <div class="container">
                       <div class="row">
                           <div class="col-sm-6">
                               <div class="carousel-content">
                                   <h2><span><?php echo lang('description_3')?></span></h2>
                                   <a class="btn btn-primary btn-lg" href="<?php echo base_url() . 'shopping/item/06'?>"><?php echo lang('description_3_button')?></a>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div><!--/.item-->
        </div><!--/.owl-carousel-->
    </section><!--/#main-slider-->



    <section id="features">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown"><?php echo lang('how_to_design')?></h2>
                <p class="text-center wow fadeInDown"><?php echo lang('design_des')?></p>
            </div>
            <div class="row">
                <div class="col-sm-6 wow fadeInLeft">
                    <img class="img-responsive" src="images/main-feature.png" alt="">
                </div>
                <div class="col-sm-6">
                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-pencil"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><?php echo lang('design_step_1')?></h4>
                            <p><?php echo lang('design_step_1_des')?></p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-cubes"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><?php echo lang('design_step_2')?></h4>
                            <p><?php echo lang('design_step_2_des')?></p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-adjust"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><?php echo lang('design_step_3')?></h4>
                            <p><?php echo lang('design_step_3_des')?></p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-money"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><?php echo lang('design_step_4')?></h4>
                            <p><?php echo lang('design_step_4_des')?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section><!--features-->

    <section id="portfolio">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown"><?php echo lang('shop_list')?></h2>
                <p class="text-center wow fadeInDown"><?php echo lang('shop_des')?></p>
            </div>

            <div class="portfolio-items">
                <div class="portfolio-item creative">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/01.jpg" alt="">
                        <div class="portfolio-info">
                            <h3><?php echo lang('item_name_1')?></h3>
                            <?php echo lang('item_des')?>
                            <a class="preview" href="images/portfolio/full.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item corporate portfolio">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/02.jpg" alt="">
                        <div class="portfolio-info">
                            <h3><?php echo lang('item_name_2')?></h3>
                            <?php echo lang('item_des')?>
                            <a class="preview" href="images/portfolio/full.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item creative">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/03.jpg" alt="">
                        <div class="portfolio-info">
                            <h3><?php echo lang('item_name_3')?></h3>
                            <?php echo lang('item_des')?>
                            <a class="preview" href="images/portfolio/full.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item corporate">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/04.jpg" alt="">
                        <div class="portfolio-info">
                            <h3><?php echo lang('item_name_4')?></h3>
                            <?php echo lang('item_des')?>
                            <a class="preview" href="images/portfolio/full.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item creative portfolio">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/05.jpg" alt="">
                        <div class="portfolio-info">
                            <h3><?php echo lang('item_name_5')?></h3>
                            <?php echo lang('item_des')?>
                            <a class="preview" href="images/portfolio/full.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item corporate">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/06.jpg" alt="">
                        <div class="portfolio-info">
                            <h3><?php echo lang('item_name_6')?></h3>
                            <?php echo lang('item_des')?>
                            <a class="preview" href="images/portfolio/full.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item creative portfolio">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/07.jpg" alt="">
                        <div class="portfolio-info">
                            <h3><?php echo lang('item_name_7')?></h3>
                            <?php echo lang('item_des')?>
                            <a class="preview" href="images/portfolio/full.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item corporate">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/08.jpg" alt="">
                        <div class="portfolio-info">
                            <h3><?php echo lang('item_name_8')?></h3>
                            <?php echo lang('item_des')?>
                            <a class="preview" href="images/portfolio/full.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
            </div>
        </div><!--/.container-->
    </section><!--/#portfolio-->


    <section id="about">
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown"><?php echo lang('about_us')?></h2>
            </div>

            <div class="row">
                <div class="col-sm-6 wow fadeInLeft">
                    <h3 class="column-title"><?php echo lang('video_intro')?></h3>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/VD7kb778sqU" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="col-sm-6 wow fadeInRight">
                    <h3 class="column-title"><?php echo lang('company_aim')?></h3>
                    <?php echo lang('company_mission')?>
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="nostyle">
                                <li><i class="fa fa-check-square"></i> <?php echo lang('mission1')?></li>
                                <li><i class="fa fa-check-square"></i> <?php echo lang('mission2')?></li>
                                <li><i class="fa fa-check-square"></i> <?php echo lang('mission3')?></li>
                            </ul>
                        </div>

                </div>
            </div>
        </div>
    </section><!--/#about-->


    <section id="get-in-touch">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown"><?php echo lang('get_in_touch')?></h2>
                <p class="text-center wow fadeInDown"><?php echo lang('get_in_touch_info')?></p>
            </div>
        </div>
    </section><!--/#get-in-touch-->


    <section id="contact">
        <div id="google-map" style="height:650px" data-latitude="22.31615429" data-longitude="114.179826"></div>
        <div class="container-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-8">
                        <div class="contact-form">
                            <h3><?php echo lang('contact_info')?></h3>

                            <address>
                              <?php echo lang('address')?>
                              <?php echo lang('phone')?>
                            </address>

                            <form id="main-contact-form" name="contact-form" method="post" action="#">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                                </div>
                                <div class="form-group">
                                    <textarea name="message" class="form-control" rows="8" placeholder="Message" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#bottom-->



    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/mousescroll.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
