<?php
/**
 * Helper utilities for 3dcart.
 *
 * @package 3dcart
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function 3dcart_helper_defaults() {
	return array(
		'cache'      => true,
		'debug'      => false,
		'version'    => '1.0.0',
	);
}
