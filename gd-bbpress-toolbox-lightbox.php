<?php

/*
Plugin Name: GD bbPress Toolbox Pro: Lightbox
Plugin URI: https://plugins.dev4press.com/gd-bbpress-toolbox/
Description: Simple Lightbox implementation using responsive lightbox 'Swipebox' implementation for the GD bbPress Toolbox Pro attachments images.
Version: 1.3
Author: Milan Petrovic
Author URI: https://www.dev4press.com/
Text Domain: gd-bbpress-toolbox-lightbox

== Copyright ==
Copyright 2008 - 2020 Milan Petrovic (email: milan@gdragon.info)

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program. If not, see <http://www.gnu.org/licenses/>
*/

$gdbbx_lightbox_dirname_basic = __DIR__ . '/';
$gdbbx_lightbox_urlname_basic = plugins_url( '/', __FILE__ );

define( 'GDBBX_LIGHTBOX_PATH', $gdbbx_lightbox_dirname_basic );
define( 'GDBBX_LIGHTBOX_URL', $gdbbx_lightbox_urlname_basic );

require_once( GDBBX_LIGHTBOX_PATH . 'core/plugin.php' );
