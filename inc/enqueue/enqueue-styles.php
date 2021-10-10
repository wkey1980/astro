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
function astro_setup_styles() {

    $astro_setup_style_ver = filemtime( get_template_directory() . '/assets/dist/css/theme.css' );

    // $astro_setup_style_ver_old = wp_get_theme()->get( 'Version' );

    wp_register_style( 'astro-theme-stylesheet', ASTRO_THEME_URI . '/assets/dist/css/theme.css', array(), $astro_setup_style_ver, 'all' );
    wp_enqueue_style( 'astro-theme-stylesheet' );
}
add_action( 'wp_enqueue_scripts', 'astro_setup_styles' );
?>