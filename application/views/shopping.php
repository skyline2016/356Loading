<?php
foreach ($css_files as $css) {
  echo("<link href=\"".$css."\" rel=\"stylesheet\">");
}
?>
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

<section id="portfolio">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown"><?php echo lang('shop_title')?></h2>
            <p class="text-center wow fadeInDown">Click to see more</p>
        </div>

        <div class="text-center">
            <ul class="portfolio-filter">
                <li><a class="active" href="#" data-filter="*">All Works</a></li>
                <li><a href="#" data-filter=".creative">Creative</a></li>
                <li><a href="#" data-filter=".corporate">Corporate</a></li>
                <li><a href="#" data-filter=".portfolio">Portfolio</a></li>
            </ul><!--/#portfolio-filter-->
        </div>

        <div class="portfolio-items">
            <div class="portfolio-item creative">
                <div class="portfolio-item-inner">
                    <a href="shopping/item/01"><img class="img-responsive" src="images/portfolio/01.jpg" alt=""></a>
                    <div class="portfolio-info">
                        Lorem Ipsum Dolor Sit
                        <a class="preview" href="images/portfolio/01.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div><!--/.portfolio-item-->

            <div class="portfolio-item corporate portfolio">
                <div class="portfolio-item-inner">
                    <a href="shopping/item/02"><img class="img-responsive" src="images/portfolio/02.jpg" alt=""></a>
                    <div class="portfolio-info">
                        Lorem Ipsum Dolor Sit
                        <a class="preview" href="images/portfolio/02.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div><!--/.portfolio-item-->

            <div class="portfolio-item creative">
                <div class="portfolio-item-inner">
                    <a href="shopping/item/03"><img class="img-responsive" src="images/portfolio/03.jpg" alt=""></a>
                    <div class="portfolio-info">
                        Lorem Ipsum Dolor Sit
                        <a class="preview" href="images/portfolio/03.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div><!--/.portfolio-item-->

            <div class="portfolio-item corporate">
                <div class="portfolio-item-inner">
                    <a href="shopping/item/04"><img class="img-responsive" src="images/portfolio/04.jpg" alt=""></a>
                    <div class="portfolio-info">
                        Lorem Ipsum Dolor Sit
                        <a class="preview" href="images/portfolio/04.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div><!--/.portfolio-item-->

            <div class="portfolio-item creative portfolio">
                <div class="portfolio-item-inner">
                    <a href="shopping/item/05"><img class="img-responsive" src="images/portfolio/05.jpg" alt=""></a>
                    <div class="portfolio-info">
                        Lorem Ipsum Dolor Sit
                        <a class="preview" href="images/portfolio/05.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div><!--/.portfolio-item-->

            <div class="portfolio-item corporate">
                <div class="portfolio-item-inner">
                    <a href="shopping/item/06"><img class="img-responsive" src="images/portfolio/06.jpg" alt=""></a>
                    <div class="portfolio-info">
                        Lorem Ipsum Dolor Sit
                        <a class="preview" href="images/portfolio/06.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div><!--/.portfolio-item-->

            <div class="portfolio-item creative portfolio">
                <div class="portfolio-item-inner">
                    <a href="shopping/item/07"><img class="img-responsive" src="images/portfolio/07.jpg" alt=""></a>
                    <div class="portfolio-info">
                        Lorem Ipsum Dolor Sit
                        <a class="preview" href="images/portfolio/07.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div><!--/.portfolio-item-->

            <div class="portfolio-item corporate">
                <div class="portfolio-item-inner">
                    <a href="shopping/item/08"><img class="img-responsive" src="images/portfolio/08.jpg" alt=""></a>
                    <div class="portfolio-info">
                        Lorem Ipsum Dolor Sit
                        <a class="preview" href="images/portfolio/08.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div><!--/.portfolio-item-->
        </div>
    </div><!--/.container-->
</section><!--/#portfolio-->
