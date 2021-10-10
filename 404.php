<?php
/**
 * Template to display packageTitle
 * 
 * packageDescription
 * 
 * @package Astro
 */
?>


<?php get_header(); ?>

    <section class="error-404 not-found">
        <h1>This is a 404 Page</h1>
		<?php wp_nav_menu([
			'theme_location' => 'astro_header_menu',
			'theme_location' => 'astro_footer_menu',
			'theme_location' => 'astro_mobile_menu',
			'theme_location' => 'astro_social_menu'
		]);
		?>
    </section>

<?php get_footer(); ?>