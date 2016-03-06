<?php get_header(); ?>

    <section id="typography" class="container">
        <?php
            global $post;
            setup_postdata($post);
        ?>
        <h2 id="headings"><?php the_title(); ?></h2>
        <?php the_content(); ?>
    </section>

<?php get_footer(); ?>