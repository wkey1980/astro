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
function astro_enqueue_scripts() {
    wp_register_script( 'astro-theme-javascript', ASTRO_THEME_URI . '/assets/dist/js/theme.js', array(), filemtime( get_template_directory() . '/assets/dist/js/theme.js' ), true );
    wp_enqueue_script( 'astro-theme-javascript' );
}
add_action( 'wp_enqueue_scripts', 'astro_enqueue_scripts' );
?>