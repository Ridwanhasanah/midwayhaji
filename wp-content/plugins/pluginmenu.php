<?php
/*
Plugin Name: Ridwan Hasanah
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description: This is not just a plugin, it symbolizes the hope and enthusiasm of an entire generation summed up in two words sung most famously by Louis Armstrong: Hello, Dolly. When activated you will randomly see a lyric from <cite>Hello, Dolly</cite> in the upper right of your admin screen on every page.
Author: Matt Mullenweg
Version: 1.6
Author URI: http://ma.tt/
*/

add_action('admin_menu','menuku' );

function menuku(){
	add_menu_page('INi Menu','Ini Menu','manage_options',__FILE__,'isi_menu','dashicons-palmtree','7' );

	add_submenu_page(__FILE__,'Submenu','Title Menu','manage_options','','isimenu' );
}

function isi_menu(){
	echo "Hello WOrd";
}
?>