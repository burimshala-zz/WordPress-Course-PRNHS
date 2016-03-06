<?php
/*Template Name:Home*/
get_header();
?>

    <!--Slider-->
    <section id="slide-show">
        <div id="slider" class="sl-slider-wrapper">

            <!--Slider Items-->
            <div class="sl-slider">
                <!--Slider Item1-->
                <div class="sl-slide item1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                    <div class="sl-slide-inner">
                        <div class="container">
                            <img class="pull-right" src="<?php echo get_template_directory_uri(); ?>/assets/images/sample/slider/img1.png" alt="" />
                            <h2>Creative Ideas</h2>
                            <h3 class="gap">Tincidunt condimentum eros</h3>
                            <a class="btn btn-large btn-transparent" href="#">Learn More</a>
                        </div>
                    </div>
                </div>
                <!--/Slider Item1-->

                <!--Slider Item2-->
                <div class="sl-slide item2" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                    <div class="sl-slide-inner">
                        <div class="container">
                            <img class="pull-right" src="<?php echo get_template_directory_uri(); ?>/assets/images/sample/slider/img2.png" alt="" />
                            <h2>Planning &amp; Analysis</h2>
                            <h3 class="gap">Aenean ultricies mi vitast</h3>
                            <a class="btn btn-large btn-transparent" href="#">Learn More</a>
                        </div>
                    </div>
                </div>
                <!--Slider Item2-->

                <!--Slider Item3-->
                <div class="sl-slide item3" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                    <div class="sl-slide-inner">
                        <div class="container">
                            <img class="pull-right" src="<?php echo get_template_directory_uri(); ?>/assets/images/sample/slider/img3.png" alt="" />
                            <h2>Unique Solutions</h2>
                            <h3 class="gap">Breatures who have been utterly</h3>
                            <a class="btn btn-large btn-transparent" href="#">Learn More</a>
                        </div>
                    </div>
                </div>
                <!--Slider Item3-->

            </div>
            <!--/Slider Items-->

            <!--Slider Next Prev button-->
            <nav id="nav-arrows" class="nav-arrows">
                <span class="nav-arrow-prev"><i class="icon-angle-left"></i></span>
                <span class="nav-arrow-next"><i class="icon-angle-right"></i></span>
            </nav>
            <!--/Slider Next Prev button-->

        </div>
        <!-- /slider-wrapper -->
    </section>
    <!--/Slider-->

    <!--Clients-->
    <section id="clients" class="main">
        <div class="container">
            <div class="row-fluid">
                <div class="span2">
                    <div class="clearfix">
                        <h4 class="pull-left">OUR PARTNERS</h4>
                    </div>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                </div>
                <div class="span10">
                    <div id="myCarousel" class="carousel slide clients">
                        <!-- Carousel items -->
                        <div class="carousel-inner">
                            <div class="active item">
                                <div class="row-fluid">
                                    <ul class="thumbnails">
                                        <li class="span3"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/sample/clients/client1.png"></a></li>
                                        <li class="span3"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/sample/clients/client2.png"></a></li>
                                        <li class="span3"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/sample/clients/client3.png"></a></li>
                                        <li class="span3"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/sample/clients/client4.png"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /Carousel items -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Clients-->
<?php get_footer(); ?>