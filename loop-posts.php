<?php
if ($wp_query->have_posts()) :
    while ($wp_query->have_posts()) : $wp_query->the_post();
        get_template_part('content', 'post');
    endwhile;
endif;
?>