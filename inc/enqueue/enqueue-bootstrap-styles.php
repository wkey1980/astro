<?php
/**
 * Template to display packageTitle
 * 
 * packageDescription
 * 
 * @package Astro
 */
?>


<?php
function astro_bootstrap_setup_styles() {

    $astro_setup_style_ver = filemtime( get_template_directory() . '/assets/src/vendors/bootstrap/css/bootstrap.min.css' );

    // $astro_setup_style_ver_old = wp_get_theme()->get( 'Version' );

    wp_register_style( 'astro-bootstrap-stylesheet', ASTRO_THEME_URI . '/assets/src/vendors/bootstrap/css/bootstrap.min.css', array(), $astro_setup_style_ver, 'all' );
    wp_enqueue_style( 'astro-bootstrap-stylesheet' );
}
add_action( 'wp_enqueue_scripts', 'astro_bootstrap_setup_styles' );
?>