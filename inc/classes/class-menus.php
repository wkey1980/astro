<?php
/**
 * Template to display packageTitle
 * 
 * packageDescription
 * 
 * @package Astro
 */



namespace ASTRO_THEME\Inc;

use ASTRO_THEME\Inc\Traits\Singleton;

class Menus {
	use Singleton;

	protected function __construct() {

		// Load Classes
		$this->setup_hooks();
	}

	protected function setup_hooks() {
		// Actions & Filters
		add_action( 'init', [ $this, 'register_menus' ] );
	}

	public function register_menus() {
		register_nav_menus([
			'astro-header-menu' => esc_html__( 'Header Menu', 'astro' ),
			'astro-footer-menu' => esc_html__( 'Footer Menu', 'astro' )
		]);
	}

	public function get_menu_id( $location ) {
		// Get all the locations
		$locations = get_nav_menu_locations();

		// Get object id by location
		$menu_id = $locations[$location];

		return ! empty( $menu_id ) ? $menu_id : '';
	}
}