<?php
/**
 * Template to display packageTitle
 * 
 * packageDescription
 * 
 * @package Astro
 */

/* Vid 23 */

namespace ASTRO_THEME\Inc;

use ASTRO_THEME\Inc\Traits\Singleton;

class Menus {
	use Singleton;

	protected function __construct() {

		// wp_die( 'Hello World!' );

		// Load Classes
		$this->setup_hooks();
	}

	protected function setup_hooks() {
		// Actions & Filters

		add_action( 'init', [ $this, 'register_menus' ] );
	}

	public function register_menus() {
		register_nav_menus([
			'astro_header_menu' => esc_html__( 'Header Menu', 'astro' ),
            'astro_footer_menu' => esc_html__( 'Footer Menu', 'astro' ),
            'astro_mobile_menu' => esc_html__( 'Mobile Menu', 'astro' ),
            'astro_social_menu' => esc_html__( 'Social Menu', 'astro' )
		]);
	}

	public function get_menu_id( $location ) {
	
	}
}