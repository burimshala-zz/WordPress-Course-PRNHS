<!doctype html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!--Header-->
<header class="navbar navbar-fixed-top" style="padding-top: 30px;">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a id="logo" class="pull-left" href="<?php echo home_url(); ?>"></a>
            <?php
                wp_nav_menu(array(
                        'theme_location' => 'main_menu',
                        'depth' => 6,
                        'container' => 'div',
                        'container_class' => 'nav-collapse collapse pull-right',
                        'menu_class' => 'nav'
                    )
                );
            ?>
        </div>
    </div>
</header>
<!-- /header -->