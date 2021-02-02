<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class gdbbx_lightbox_core_info {
	public $code = 'gd-bbpress-toolbox-lightbox';

	public $version = '1.4';
	public $build = 780;
	public $updated = '2021.02.02';
	public $status = 'stable';
	public $edition = 'pro';
	public $url = 'https://plugins.dev4press.com/gd-bbpress-toolbox/';
	public $author_name = 'Milan Petrovic';
	public $author_url = 'https://www.dev4press.com/';
	public $released = '2018.07.02';

	public $install = false;
	public $update = false;
	public $previous = 0;

	function __construct() {
	}

	public function to_array() {
		return (array) $this;
	}
}
