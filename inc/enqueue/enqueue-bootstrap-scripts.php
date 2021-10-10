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
function astro_bootstrap_enqueue_scripts() {
    wp_register_script( 'astro-bootstrap-javascript', ASTRO_THEME_URI . '/assets/src/vendors/bootstrap/js/bootstrap.bundle.min.js', array(), filemtime( get_template_directory() . '/assets/src/vendors/bootstrap/js/bootstrap.bundle.min.js' ), true );
    wp_enqueue_script( 'astro-bootstrap-javascript' );
}
add_action( 'wp_enqueue_scripts', 'astro_bootstrap_enqueue_scripts' );
?>