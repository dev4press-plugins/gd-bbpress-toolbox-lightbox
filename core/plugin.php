<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class gdbbx_lightbox_core_plugin {
	public function __construct() {
		add_action( 'gdbbx_plugin_settings_loaded', array( $this, 'settings' ) );
		add_action( 'gdbbx_modules_enqueue', array( $this, 'enqueue' ) );
	}

	public function settings() {
		if ( gdbbx()->get( 'image_thumbnail_rel', 'attachments' ) != 'lightbox' ) {
			gdbbx()->set( 'image_thumbnail_rel', 'lightbox', 'attachments', true );
		}
	}

	public function enqueue() {
		wp_enqueue_style( 'lightbox-swipebox', GDBBX_LIGHTBOX_URL . 'swipebox/css/swipebox.min.css' );
		wp_enqueue_script( 'lightbox-swipebox', GDBBX_LIGHTBOX_URL . 'swipebox/js/swipebox.min.js', array( 'jquery' ) );
	}
}

new gdbbx_lightbox_core_plugin();
