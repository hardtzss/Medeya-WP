<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <!--  <title>Home Page | Medeya</title> -->
    <?php wp_head(); ?>
</head>
<body>
    <!--[if lt IE 9]>
    <script src="libs/html5shiv/es5-shim.min.js"></script>
    <script src="libs/html5shiv/html5shiv.min.js"></script>
    <script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
    <script src="libs/respond/respond.min.js"></script>
    <![endif]-->

    <div class="main_wrap">
        <div class="content">
                

            <!-- Top Contacts -->
            <div class="top_contacts_wrap">
                <div class="row">
                    <div class="columns small-12 medium-6 large-6">
                        <div class="address">
                            <?php the_field('top_addres', 'option'); ?>
                        </div>
                    </div>
                    <div class="columns small-12 medium-6 large-6">
                        <div class="phone"><?php the_field('top_phone', 'option'); ?></div>
                    </div>
                </div>
            </div>
            <!-- Top Contacts End -->

            <!-- Page Header -->
            <header class="page_header">
                <div class="row">

                    <div class="columns small-8 medium-8 large-3">
                        <div class="logo_wrap">
                            <a href="<?php echo home_url(); ?>" class="logo_link">
                                <div class="logo">
                                    <img class="logo_img" src="<?php echo get_header_image(); ?>" height="50" width="50">
                                    <img class="logo_img_white" src="<?php echo get_header_image(); ?>" height="50" width="50">
                                    <span><?php bloginfo('name'); ?></span>
                                </div>  
                            </a>
                        </div>
                    </div>

                    <div class="columns small-4 medium-4 large-9 main_menu_md">

                    <!-- Main menu -->
                    <?php
                        wp_nav_menu( array(
                            // Slug menu
                            'menu'            => 'main_menu',
                            // Wrapp ul
                            'container'       => 'nav',
                            // Wrap nav class
                            'container_class' => 'main_menu',
                            // Ul class
                            'menu_class'      => 'main_menu_list clear_fix sliding-menu'
                        ) );
                    ?>
                    <!-- Main menu End -->

                        <div class="mobile_main_menu_wrap">
                            <div class="mobile_main_menu_btn trans clear_fix">
                                <i class="fa fa-bars mobile_main_menu_open" aria-hidden="true"></i>
                                <i class="fa fa-times mobile_main_menu_close" aria-hidden="true"></i>
                            </div>
                        </div>
                        
                    </div>

                </div>
            </header>
            <!-- Page Header End -->

            <!-- Modile | Tablet Menu -->
            <?php
                wp_nav_menu( array(
                    // Slug menu
                    'menu'            => 'mobile_menu',
                    // Wrapp ul
                    'container'       => 'nav',
                    // Wrap nav class
                    'container_class' => 'mobile_main_menu',
                    // Ul class
                    'menu_class'      => 'mobile_main_menu_list'
                ) );
                ?>
                <!-- Mobile | Tablet Menu End -->
         