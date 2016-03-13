<?php get_header(); ?>

    <section id="about-us" class="container main">
        <div class="row-fluid">
            <div class="span8">
                <div class="blog">

                    <?php get_template_part('loop', 'posts'); ?>

                    <div class="gap"></div>

                    <!-- Paginationa -->
                    <div class="pagination">
                        <?php echo paginate_links(); ?>
                    </div>


                </div>
            </div>
            <aside class="span4">
                <?php dynamic_sidebar('sidebar'); ?>
            </aside>
        </div>

    </section>

<?php get_footer(); ?>