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

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    include_once('includes/processes.php');

    function theme_features(){
        add_theme_support('title-tag');
    }

     /* 
        ======================================================================
        METABOX SPECIFIC FUNCTIONS BEGIN
        ======================================================================
    */

    /* Function to get the direct url for a metabox image */
    function get_metabox_image_url($key){
        /* Reset */
        $image = 0;
        $images = rwmb_meta( $key, array( 'limit' => 1 ) );
        $image = reset( $images );
        
        return $image['full_url'];
    }

    /* Function to get the alt caption for a metabox image */
    function get_metabox_image_alt($key){
        /* Reset */
        $image = 0;
        $images = rwmb_meta( $key, array( 'limit' => 1 ) );
        $image = reset( $images );
        
        return $image['alt'];
    }

    /* Function to get the direct url of an image in a metabox image gallery */
    function get_metabox_image_gallery_url($key){
        /* Reset */
        $image = 0;
        $images = rwmb_meta( $key, array( 'size' => 'thumbnail' ) );
        $image = reset( $images );
        
        return $image['full_url'];
    }

    /* Function to get metabox gallery images, it returns an array */
    function get_metabox_image_gallery($key){
        $image = 0;
        $images = rwmb_meta( $key, array( 'size' => 'thumbnail' ) );
        return $images;
    }

    /* Function to get the caption of a particular image from a metabox image gallery*/
    function get_metabox_image_gallery_caption($key){
        /* Reset */
        $image = 0;
        $images = rwmb_meta( $key, array( 'limit' => '1' ) );
        $image = reset( $images );
        
        return $image['caption'];
    }

    /* Function to get the url of an image from a metabox group */
    function get_metabox_group_image_url( $array, $key ){
        /* Reset */
        $image = 0;
        $image_ids = isset( $array[$key] ) ? $array[$key] : array();

        foreach ( $image_ids as $image_id ) {
            $image = RWMB_Image_Field::file_info( $image_id, array( 'size' => 'thumbnail' ) );
        }
        
        return $image['full_url'];
    }

    /* Function to get a file url from a metabox group */
    function get_metabox_group_file_url($array, $key){
        $files = 0;
        if(isset($array[$key])){
            $files_id = $array[$key];
        }
        //  = isset($array[$key] ) ? $array[$key] : array();
        $files = rwmb_meta( $files_id, array( 'limit' => 1 ) );
        $file = reset( $files );

        return $file['url'];
    }

    /* Function to get image alt caption from a metabox group */
    function get_metabox_group_image_alt( $array, $key ){
        /* Reset */
        $image = 0;
        $image_ids = isset( $array[$key] ) ? $array[$key] : array();

        foreach ( $image_ids as $image_id ) {
            $image = RWMB_Image_Field::file_info( $image_id, array( 'size' => 'thumbnail' ) );
        }
        
        return $image['alt'];
    }

    /* 
        =======================================================================
        METABOX SPECIFIC FUNCTIONS ENDS
        =======================================================================
    */
?>