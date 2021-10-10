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

define( 'ASTRO_THEME_DIR', get_template_directory() );
define( 'ASTRO_THEME_URI', get_template_directory_uri() );

if ( ! function_exists( 'astro_setup' ) ):
    function astro_setup() {
        load_theme_textdomain( 'astro', ASTRO_THEME_DIR . '/Languages' );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'title-tag' );

        add_theme_support( 'post-thumbnails' );
        add_image_size( 'astro-large', 500, 400, true ); // width, height, crop

        add_theme_support( 'customize-selective-refresh-widgets' );

        add_theme_support(
            'post-formats',
            array(
                'link',
                'aside',
                'gallery',
                'image',
                'quote',
                'status',
                'video',
                'audio',
                'chat',
            )
        );

        add_theme_support(
            'html5',
            array(
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
                'navigation-widgets',
            )
        );

        // Custom header, custom background, custom logo
        $header_width  = 100;
        $header_height  = 100;
        add_theme_support(
            'custom-header',
            apply_filters( 'kiwi_custom_header_args',
            array(
                'default-color' => 'ffffff',   // Customize > Colors > Header Text Color
                'default-image' => '',
                'width'         => $header_width,
                'height'        => $header_height,
                'flex-height'   => true,
                'flex-width'    => true,
                )
            )
        );
        add_theme_support(
            'custom-background',
            apply_filters(
                'kiwi_custom_background_args',
                array(
                    'default-color' => 'ffffff',   // Customize > Colors > Background Color
                    'default-image' => '',
                )
            )
        );
        $logo_width = 50;
        $logo_height = 50;
        add_theme_support(
            'custom-logo',
            array(
                'width'       => $logo_width,
                'height'      => $logo_height,
                'flex-width'  => true,
                'flex-height' => true,
                'header-text' => array( 'title-tag', 'site-description' ),
            )
        );

        add_theme_support( 'customize-selective-refresh-widgets' );
    }
endif;
add_action( 'after_setup_theme', 'astro_setup' );


function astro_content_width() {
    $GLOBALS[ 'content-width' ] = apply_filters( 'astro_content_width', 1024 );
}
add_action( 'after_setup_theme', 'astro_content_width', 0 );

// Register Google Fonts
require ASTRO_THEME_DIR . '/inc/google-fonts/google-fonts.php';

// Enqueue Styles
require ASTRO_THEME_DIR . '/inc/enqueue/enqueue-bootstrap-styles.php';
require ASTRO_THEME_DIR . '/inc/enqueue/enqueue-styles.php';

// Enqueue Scripts
require ASTRO_THEME_DIR . '/inc/enqueue/enqueue-bootstrap-scripts.php';
require ASTRO_THEME_DIR . '/inc/enqueue/enqueue-scripts.php';

// Register Menus
require ASTRO_THEME_DIR . '/inc/menus/menus.php';

// Register Widgets areas
require ASTRO_THEME_DIR . '/inc/widgets/widgets.php';