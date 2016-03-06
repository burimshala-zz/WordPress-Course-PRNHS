<?php
/*Template Name:About*/
get_header();
?>
    <section id="about-us" class="container main">
        <div class="row-fluid">
            <div class="span6">
                <h2><?php the_field("about_us_title"); ?></h2>
                <?php the_field("about_us_description"); ?>
            </div>
            <div class="span6">
                <h2><?php the_field("skills_label"); ?></h2>
                <div>
                    <?php
                        $skills = get_field("skills");
                        if($skills):
                            foreach ($skills as $skill):
                                ?>
                                <div class="progress"><div class="bar" style="width: <?php echo $skill["value"];?>%; text-align:left; padding-left:10px;background-color: <?php echo $skill["color"]; ?>
"><?php echo $skill["label"];?></div></div>
                                <?php
                            endforeach;
                        endif;
                    ?>
                </div>
            </div>
        </div>

        <hr>

        <!-- Meet the team -->
        <h1 class="center">Meet the Team</h1>

        <hr>

        <div class="row-fluid">
            <div class="span3">
                <div class="box">
                    <p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/sample/team1.jpg" alt="" ></p>
                    <h5>Leonard M. Spurlock</h5>
                    <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat.</p>
                    <a class="btn btn-social btn-facebook" href="#"><i class="icon-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="#"><i class="icon-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="#"><i class="icon-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="icon-linkedin"></i></a>
                </div>
            </div>

            <div class="span3">
                <div class="box">
                    <p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/sample/team2.jpg" alt="" ></p>
                    <h5>David J. Robbins</h5>
                    <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat.</p>
                    <a class="btn btn-social btn-facebook" href="#"><i class="icon-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="#"><i class="icon-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="#"><i class="icon-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="icon-linkedin"></i></a>
                </div>
            </div>

            <div class="span3">
                <div class="box">
                    <p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/sample/team4.jpg" alt="" ></p>
                    <h5>Thomas M. Morgan</h5>
                    <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat.</p>
                    <a class="btn btn-social btn-facebook" href="#"><i class="icon-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="#"><i class="icon-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="#"><i class="icon-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="icon-linkedin"></i></a>
                </div>
            </div>

            <div class="span3">
                <div class="box">
                    <p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/sample/team3.jpg" alt="" ></p>
                    <h5>Agustin E. Hightower</h5>
                    <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat.</p>
                    <a class="btn btn-social btn-facebook" href="#"><i class="icon-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="#"><i class="icon-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="#"><i class="icon-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="icon-linkedin"></i></a>
                </div>
            </div>
        </div>
        <p>&nbsp;</p>
        <p></p>
        <hr>

        <div class="row-fluid">
            <div class="span6">
                <h3>Why Choose Us?</h3>
                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
            </div>
            <div class="span6">
                <h3>Our Services</h3>
                <div class="accordion" id="accordion2">
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                                Professional Web Design
                            </a>
                        </div>
                        <div id="collapseOne" class="accordion-body collapse">
                            <div class="accordion-inner">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                                Premium Wordpress Themes
                            </a>
                        </div>
                        <div id="collapseTwo" class="accordion-body collapse">
                            <div class="accordion-inner">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                                PSD2XHTML Conversion
                            </a>
                        </div>
                        <div id="collapseThree" class="accordion-body collapse">
                            <div class="accordion-inner">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>