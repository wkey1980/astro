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
// Widgets
function astro_widgets_init() {

    register_sidebar(
        array(
            'name'          => esc_html__( 'Header', 'astro '),
            'id'            => 'header_widget',
            'description'   => esc_html__( 'Add widgets here', 'astro' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h1 class="widget-title">',
            'after_title'   => '<?h1>',
        )
    );

    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer', 'astro '),
            'id'            => 'footer_widget',
            'description'   => esc_html__( 'Add widgets here', 'astro' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h1 class="widget-title">',
            'after_title'   => '<?h1>',
        )
    );

    register_sidebar(
        array(
            'name'          => esc_html__( 'Sidebar', 'astro '),
            'id'            => 'sidebar_widget',
            'description'   => esc_html__( 'Add widgets here', 'astro' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h1 class="widget-title">',
            'after_title'   => '<?h1>',
        )
    );

}
add_action( 'widgets_init', 'astro_widgets_init' );

?>