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

// Register menu locations

function astro_register_menu() {
    register_nav_menus(
        array(
            'header' => __( 'Header Menu', 'astro' ),
            'footer' => __( 'Footer Menu', 'astro' ),
            'mobile' => __( 'Mobile Menu', 'astro' ),
            'social' => __( 'Social Menu', 'astro' ),
        )
    );
}
add_action( 'init', 'astro_register_menu' );
?>