<?php
namespace ElementorPro\Core\Data\Endpoints;

use ElementorPro\Core\Data\Controller;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Base {

	protected $controller;

	protected function register() {}

	/**
	 * Endpoint constructor.
	 *
	 * runs `$this->register()`.
	 *
	 * @param Controller $controller
	 */
	public function __construct( Controller $controller ) {
		$this->controller = $controller;

		$this->register();
	}
}
