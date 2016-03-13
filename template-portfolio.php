<?php
/*Template Name:Portfolios*/
get_header();
?>
    <section id="portfolio" class="container main">

        <?php
        $arguments = [];
        $arguments['post_type'] = 'portfolio';
        $arguments['posts_per_page'] = -1;

        $the_query = new WP_Query($arguments);

        if ($the_query->have_posts()) :
            ?>
            <ul class="gallery col-4">
                <?php
                    while ($the_query->have_posts()) : $the_query->the_post();
                        global $post;
                        setup_postdata($post);
                        $img = um_get_post_featured_image_src($post->ID);
                ?>
                <!--Item 1-->
                <li>
                    <div class="preview">
                        <img alt=" " src="<?php echo $img; ?>">

                        <div class="overlay">
                        </div>
                        <div class="links">
                            <a data-toggle="modal" href="#modal-1"><i class="icon-eye-open"></i></a><a href="#"><i
                                    class="icon-link"></i></a>
                        </div>
                    </div>
                    <div class="desc">
                        <h5><?php the_title(); ?></h5>
                    </div>
                    <div id="modal-1" class="modal hide fade">
                        <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i
                                class="icon-remove"></i></a>

                        <div class="modal-body">
                            <img src="<?php echo $img; ?>" alt=" " width="100%" style="max-height:400px">
                        </div>
                    </div>
                </li>
                <!--/Item 1-->
                <?php endwhile; wp_reset_postdata(); ?>
            </ul>
        <?php endif; ?>
    </section>

<?php get_footer(); ?>