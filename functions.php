<?php
    function theme_files(){
        // Javascript files
        wp_enqueue_script('mordenizer', get_theme_file_uri('/js/vendor/modernizr-2.8.3.min.js'), NULL, '1.0', true);
        wp_enqueue_script('jquery', get_theme_file_uri('/js/vendor/jquery-1.12.0.min.js'), NULL, '1.0', true);
        wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js', NULL, '1.0', true);
        wp_enqueue_script('plugins-js', get_theme_file_uri('/js/plugins.js'), NULL, '1.0', true);
        wp_enqueue_script('slick-js', get_theme_file_uri('/js/slick.min.js'), NULL, '1.0', true);
        wp_enqueue_script('waypoints-js', get_theme_file_uri('/js/waypoints.min.js'), NULL, '1.0', true);
        wp_enqueue_script('main-js', get_theme_file_uri('/js/main.js'), NULL, '1.0', true);
        wp_enqueue_script('ajax', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', NULL, '1.0', true);
        wp_enqueue_script('flikity-js', 'https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js', NULL, '1.0', true);

        // CSS Files
        wp_enqueue_style('bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css');
        // wp_enqueue_style('bootstrap-cdn','https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
        wp_enqueue_style('core-css', get_template_directory_uri().'/css/core.css');
        wp_enqueue_style('shortcode-css', get_template_directory_uri().'/css/shortcode/shortcodes.css');
        wp_enqueue_style('responsive-css', get_template_directory_uri().'/css/responsive.css');
        wp_enqueue_style('custom-css', get_template_directory_uri().'/css/custom.css');
        wp_enqueue_style('flikity-css', 'https://unpkg.com/flickity@2/dist/flickity.min.css');
        wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
        wp_enqueue_style('theme_main_styles', get_stylesheet_uri());
    }

    add_action('wp_enqueue_scripts','theme_files');

    add_action('after_setup_theme', 'remove_admin_bar');
 
    function remove_admin_bar() {
        if (!current_user_can('administrator') && !is_admin()) {
        show_admin_bar(false);
        }
    }

    function theme_features(){
        add_theme_support('title-tag');
    }
?>