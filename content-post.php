<?php
global $post;
setup_postdata($post);
?>
<div class="blog-item well">
    <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
    <div class="blog-meta clearfix">
        <p class="pull-left">
            <i class="icon-user"></i> by <?php the_author(); ?> | <i class="icon-folder-close"></i> Category <?php the_category( ', ' ); ?> | <i class="icon-calendar"></i> <?php echo get_the_date(); ?>
        </p>
        <p class="pull-right"><i class="icon-comment pull"></i> <a href="<?php the_permalink(); ?>#comments"><?php comments_number(); ?></a></p>
    </div>
    <p>
        <?php
            $img = um_get_post_featured_image_src();
            if($img):
        ?>
            <img src="<?php echo aq_resize($img, 730, 296, true); ?>" width="100%" alt="<?php the_title(); ?>" />
        <?php endif; ?>
    </p>
    <?php the_excerpt(); ?>
    <a class="btn btn-link" href="<?php the_permalink(); ?>">Read More <i class="icon-angle-right"></i></a>
</div>
<!-- End Blog Item -->