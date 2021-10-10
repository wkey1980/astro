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

class ASTRO_THEME {
	use Singleton;

	protected function __construct() {

		// wp_die( 'Hello World!' );

		// Load Classes
		$this->setup_hooks();
	}

	protected function setup_hooks() {
		// Actions & Filters
	}
}
