<?php
/**
 * File to enqueue the scripts and the style.css file
 */

function virtual_folio_enqueue() {

    $uri            =   get_theme_file_uri();
    $script_uri     =   get_template_directory_uri();
    $ver            =   1;

    /**
     * Register and enqueue styles
     */
    // Register the style
    wp_register_style( 'bootstrap_styles', $uri . '/assets/css/bootstrap.css' );
    wp_register_style( 'maicons_styles', $uri . '/assets/css/maicons.css' );
    wp_register_style( 'minibar_virtual_styles', $uri . '/assets/css/minibar.virtual.css' );
    wp_register_style( 'themify_styles', $uri . '/assets/css/themify-icons.css' );
    wp_register_style( 'topbar_virtual_styles', $uri . '/assets/css/topbar.virtual.css' );
    wp_register_style( 'virtual_styles', $uri . '/assets/css/virtual.css' );
    wp_register_style( 'animate_styles', $uri . '/assets/vendor/aminate/aminate.css' );
    wp_register_style( 'owl_carousel_styles', $uri . '/assets/vendor/owl-carousel/owl.carousel.css' );
    wp_register_style( 'perfect_scrollbar_styles', $uri . '/assets/vendor/perfect-scrollbar/css/perfect-scrollbar.css' );
    wp_register_style( 'nice_select_styles', $uri . '/assets/vendor/perfect-scrollbar/css/perfect-scrollbar.css' );
    wp_register_style( 'jquery_fancybox_styles', $uri . '/assets/vendor/fancybox/css/jquery.fancybox.min.css' );

    // Enqueue styles
    wp_enqueue_style( 'bootstrap_styles' );
    wp_enqueue_style( 'maicons_styles' );
    wp_enqueue_style( 'minibar_virtual_styles' );
    wp_enqueue_style( 'themify_styles' );
    wp_enqueue_style( 'topbar_virtual_styles' );
    wp_enqueue_style( 'virtual_styles' );
    wp_enqueue_style( 'animate_styles' );
    wp_enqueue_style( 'owl_carousel_styles' );
    wp_enqueue_style( 'perfect_scrollbar_styles' );
    wp_enqueue_style( 'nice_select_styles' );
    wp_enqueue_style( 'jquery_fancybox_styles' );
 

    /**
     * Register and enqueue scripts
     */
    // Register scripts
    wp_register_script( 'virtual_folio_jquerymin', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js', [], false );
    wp_register_script( 'virtual_folio_bootstrap', $script_uri . '/assets/js/bootstrap.bundle.min.js', [], $ver, false  );
    wp_register_script( 'virtual_folio_owl_carousel', $script_uri . '/assets/vendor/owl-carousel/owl.carousel.min.js', [], $ver, false  );
    wp_register_script( 'virtual_folio_perfect_scrollbar', $script_uri . '/assets/vendor/perfect-scrollbar/js/perfect-scrollbar.js', [], $ver, false  );
    wp_register_script( 'virtual_folio_isotope', $script_uri . '/assets/vendor/isotope/isotope.pkgd.min.js', [], $ver, false  );
    wp_register_script( 'virtual_folio_jquery_nice_select', $script_uri . '/assets/vendor/nice-select/js/jquery.nice-select.min.js', [], $ver, false  );
    wp_register_script( 'virtual_folio_jquery_fancybox', $script_uri . '/assets/vendor/fancybox/js/jquery.fancybox.min.js', [], $ver, false  );
    wp_register_script( 'virtual_folio_wow', $script_uri . '/assets/vendor/wow/wow.min.js', [], $ver, false  );
    wp_register_script( 'virtual_folio_jquery_animate_number', $script_uri . '/assets/vendor/animateNumber/jquery.animateNumber.min.js', [], $ver, false  );
    wp_register_script( 'virtual_folio_jquery_waypoints', $script_uri . '/assets/vendor/waypoints/jquery.waypoints.min.js', [], $ver, false  );
    wp_register_script( 'virtual_folio_google_maps', $script_uri . '/assets/js/google-maps.js', [], $ver, false  );
    wp_register_script( 'virtual_folio_topbar_virtual', $script_uri . '/assets/js/topbar-virtual.js', [], $ver, false  );

    wp_register_script( 'wp-ajax-response', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap', [], $ver, false  );

    // Enqueue scripts
    wp_enqueue_script( 'jquery-scripts', $script_uri . '/js/scripts.js', [ 'jquery' ], '1.0.0', true );
    wp_enqueue_script( 'virtual_folio_jquerymin' );
    wp_enqueue_script( 'virtual_folio_bootstrap' );
    wp_enqueue_script( 'virtual_folio_owl_carousel' );
    wp_enqueue_script( 'virtual_folio_perfect_scrollbar' );
    wp_enqueue_script( 'virtual_folio_isotope' );
    wp_enqueue_script( 'virtual_folio_jquery_nice_select' );
    wp_enqueue_script( 'virtual_folio_jquery_fancybox' );
    wp_enqueue_script( 'virtual_folio_wow' );
    wp_enqueue_script( 'virtual_folio_jquery_animate_number' );
    wp_enqueue_script( 'virtual_folio_jquery_waypoints' );
    wp_enqueue_script( 'virtual_folio_google_maps' );
    wp_enqueue_script( 'virtual_folio_topbar_virtual' );
    wp_enqueue_script( 'wp-ajax-response' );

    

}