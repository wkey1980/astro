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
		// Load Classes
		$this->setup_hooks();
	}

	protected function setup_hooks() {
		// Actions & Filters
	}
}