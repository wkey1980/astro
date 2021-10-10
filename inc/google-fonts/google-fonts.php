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

// Enqueue google fonts
function astro_google_fonts() {

    // font-family: 'Caveat', cursive;
    wp_enqueue_style( 'Caveat_google_fonts', 'https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&display=swap', false );

}
add_action( 'wp_enqueue_scripts', 'astro_google_fonts' );