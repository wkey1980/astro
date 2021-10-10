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

class Assets {
	use Singleton;

	protected function __construct() {

		// Load Classes
		$this->setup_hooks();
	}

	protected function setup_hooks() {
		// Actions & Filters

		add_action( 'wp_enqueue_scripts', [ $this, 'register_styles' ] );
		add_action( 'wp_enqueue_scripts', [ $this, 'register_scripts' ] );
	}

	public function register_styles() {

		// Register Styles
		$astro_setup_style_ver = filemtime( get_template_directory() . '/assets/dist/css/theme.css' );
		wp_register_style( 'astro-theme-stylesheet', ASTRO_THEME_URI . '/assets/dist/css/theme.css', array(), $astro_setup_style_ver, 'all' );

		$astro_bootstrap_setup_style_ver = filemtime( get_template_directory() . '/assets/src/vendors/bootstrap/css/bootstrap.min.css' );
		wp_register_style( 'astro-bootstrap-stylesheet', ASTRO_THEME_URI . '/assets/src/vendors/bootstrap/css/bootstrap.min.css', array(), $astro_bootstrap_setup_style_ver, 'all' );

		// Enqueue Styles
		wp_enqueue_style( 'astro-bootstrap-stylesheet' );
		wp_enqueue_style( 'astro-theme-stylesheet' );
	}

	public function register_scripts() {

		// Register Scripts
		wp_register_script( 'astro-bootstrap-javascript', ASTRO_THEME_URI . '/assets/src/vendors/bootstrap/js/bootstrap.bundle.min.js', array(), filemtime( get_template_directory() . '/assets/src/vendors/bootstrap/js/bootstrap.bundle.min.js' ), true );
		wp_register_script( 'astro-theme-javascript', ASTRO_THEME_URI . '/assets/dist/js/theme.js', array(), filemtime( get_template_directory() . '/assets/dist/js/theme.js' ), true );

		// Enqueue Scripts
		wp_enqueue_script( 'astro-bootstrap-javascript' );
		wp_enqueue_script( 'astro-theme-javascript' );
	}
}