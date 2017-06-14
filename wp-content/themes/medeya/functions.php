<?php
    // Add title
    add_theme_support( 'title-tag' );

    // Remove links
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'wp_generator');
    remove_filter('the_content', 'wpautop');

    // Hide admin panel
    show_admin_bar(false);

    // ACF options
    if( function_exists('acf_add_options_page') ) {

        acf_add_options_page();

    }
    // Custom menu reg
    // register_nav_menus(array(
    // 'top' => 'top-menu'
    // ));

    // Add supports
    add_theme_support('menus');
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-background');
    add_theme_support('widgets');
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-thumbnails', array( 'post' ) );          // Только для post
    add_theme_support( 'post-thumbnails', array( 'page' ) );          // Только для page
    add_theme_support( 'post-thumbnails', array( 'post', 'movie' ) ); // Для post и movie типов

    // Custom Header
    add_theme_support('custom-header', array(
     'width' => '50',
     'height' => '50',
     'flex-height' => true,
     'uploads' => true,
     'header-text' => false,
     'header-text' => array( 'site-title', 'site-description' )
    ));

    // Enqueue styles and scripts.
    function medeya_load_resources() {

        // css
        wp_enqueue_style( 'medeya_normalize', get_template_directory_uri().'/bower_components/normalize-css/normalize.css' );
        wp_enqueue_style( 'medeya_slider', get_template_directory_uri().'/bower_components/slick-carousel/slick/slick.css' );
        wp_enqueue_style( 'medeya_font_ionicons', get_template_directory_uri().'/bower_components/Ionicons/css/ionicons.css' );
        wp_enqueue_style( 'medeya_main_font', get_template_directory_uri().'/fonts/calibri/font.css' );
        wp_enqueue_style( 'medeya_select2', get_template_directory_uri().'/libs/select2/dist/css/select2.css' );
        wp_enqueue_style( 'medeya_main_style', get_template_directory_uri().'/css/main.css' );
        wp_enqueue_style( 'medeya_media', get_template_directory_uri().'/css/media.css' );
        wp_enqueue_style( 'medeya_hovers', get_template_directory_uri().'/css/hover.css' );
        wp_enqueue_style( 'medeya_slider_theme', get_template_directory_uri().'/bower_components/slick-carousel/slick/slick-theme.css' );
        wp_enqueue_style( 'medeya_font_awesome', get_template_directory_uri().'/bower_components/font-awesome/css/font-awesome.css' );
        wp_enqueue_style( 'medeya_f_grid', get_template_directory_uri().'/css/f-grid.css' );
        wp_enqueue_style( 'medeya_fancybox', get_template_directory_uri().'/bower_components/fancybox/dist/jquery.fancybox.min.css' );


        // js
        wp_enqueue_script( 'medeya_jquery', get_template_directory_uri().'/bower_components/jquery/dist/jquery.js' );
        wp_enqueue_script( 'medeya_js_slider', get_template_directory_uri().'/bower_components/slick-carousel/slick/slick.js' );
        wp_enqueue_script( 'medeya_js_parallax', get_template_directory_uri().'/bower_components/parallax.js/parallax.min.js' );
        wp_enqueue_script( 'medeya_js_headhesive', get_template_directory_uri().'/bower_components/Headhesive.js/dist/headhesive.js' );
        wp_enqueue_script( 'medeya_js_main', get_template_directory_uri().'/js/main.js' );
        wp_enqueue_script( 'medeya_js_common', get_template_directory_uri().'/js/common.js' );
        wp_enqueue_script( 'medeya_js_mixitup', get_template_directory_uri().'/libs/mixitup/dist/mixitup.js' );
        wp_enqueue_script( 'medeya_js_gallery', get_template_directory_uri().'/js/gallery.js' );
        wp_enqueue_script( 'medeya_js_google', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDZbv1pjzyub2RVVwVEn8o-gHFslKCSDSo' );
        wp_enqueue_script( 'medeya_js_google-map', get_template_directory_uri().'/js/google-map.js' );
        wp_enqueue_script( 'medeya_js_sliding_line', get_template_directory_uri().'/libs/sliding-line/menu.sliding.line.js' );
        wp_enqueue_script( 'medeya_js_fancybox', get_template_directory_uri().'/bower_components/fancybox/dist/jquery.fancybox.min.js' );
        wp_enqueue_script( 'medeya_js_select2', get_template_directory_uri().'/libs/select2/dist/js/select2.min.js' );
    }
    add_action( 'wp_enqueue_scripts', 'medeya_load_resources' );
?>
