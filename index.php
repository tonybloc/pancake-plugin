<?php
/**
* Plugin Name: pancake-plugin
* Plugin URI: https://github.com/tonybloc/pancake-plugin
* Description: Wordpress plugin
* Version: 0.1
* Author: Anthony MOCHEL
* Author URI: https://github.com/tonybloc
**/

function pancake_notices() {
    echo '<p id="pancake">Pancake Plugin</p>';
}
add_action( 'admin_notices', 'pancake_notices' );

function pancake_notices_css() {
	// This makes sure that the positioning is also good for right-to-left languages
	$x = is_rtl() ? 'left' : 'right';

	echo "
	<style type='text/css'>
	#pancake {
		float: $x;
		padding-$x: 15px;
		padding-top: 5px;		
		margin: 0;
		font-size: 11px;
	}
	</style>
	";
}
add_action( 'admin_head', 'pancake_notices_css' );