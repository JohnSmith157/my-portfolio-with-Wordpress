<?php
/**
 * Virtual folio functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */


/**
 * Setup
 */



/**
 * Includes
 */

include( get_theme_file_path( '/includes/front/enqueue.php' ) );

//include( get_theme_file_path( '/includes/front/post-thumbnail.php' ) );



/**
 * Hooks
 */
add_action( 'wp_enqueue_scripts', 'virtual_folio_enqueue' );



/**
 * Shortcodes
 */