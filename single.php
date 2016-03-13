<?php
get_header();
global $post;
setup_postdata($post);
?>
    <section class="title">
        <div class="container">
            <div class="row-fluid">
                <div class="span6">
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </section>
    <!-- / .title -->

    <section id="about-us" class="container">
    <div class="row-fluid">
    <div class="span8">
        <div class="blog">
            <div class="blog-item well">
                <div class="blog-meta clearfix">
                    <p class="pull-left">
                        <i class="icon-user"></i> by <?php the_author(); ?> | <i class="icon-folder-close"></i> Category <?php the_category( ', ' ); ?> | <i class="icon-calendar"></i> <?php echo get_the_date(); ?>
                    </p>
                    <p class="pull-right"><i class="icon-comment pull"></i> <a href="#comments">3 Comments</a></p>
                </div>
                <?php the_content(); ?>
                <div class="tag">
                    <?php the_tags(); ?>
                </div>

                <p>&nbsp;</p>

                <div id="comments" class="comments">

                    <h4><?php comments_number(); ?></h4>
                    <div class="comments-list">
                        <?php comments_template(); ?>
                    </div>
                </div>

            </div>
            <!-- End Blog Item -->

        </div>
    </div>
    <aside class="span4">
        <?php dynamic_sidebar('sidebar'); ?>
    </aside>
    </div>

    </section>
<?php get_footer(); ?>