<?php
/*========= MENU Start =========*/
add_action('admin_menu', 'menuDaftarUmroh' );
function menuDaftarUmroh(){
	add_menu_page(
		'Umroh',
		'Daftar Umroh', 
		'manage_options',
		'list-daftar', //Link Page
		'daftarUmroh',
		plugin_dir_url(__FILE__).'../assets/images/box.png',
		'10');

	add_submenu_page(
		'list-daftar',
		'List Daftar Umroh',
		'List Daftar Umroh',
		'manage_options',
		'list-daftar', //Link Page
		'daftarUmroh' );

	/* Menu singleView*/
	$id = $_GET['page'];
	$id2 = end(explode('-', $id));
	add_submenu_page(
		__FILE__,
		'Detail Pendaftar',
		'Detail',
		'manage_options',
		"single-$id2", //Link Page
		'singleView' );

	/* Menu Delete */
	add_submenu_page(
		__FILE__,
		'Delete Pendaftar',
		'Delete',
		'manage_options',
		"delete-$id2", //Link Page
		'deletePendaftar' );
}

function daftarUmroh(){
	
	include(plugin_dir_path(__FILE__) . 'listPendaftar.php');
}

function singleView(){
	echo '<h1>Detail Pendaftar Umroh</h1>';
	include(plugin_dir_path(__FILE__) . 'singleView.php');
}

function deletePendaftar(){
	include(plugin_dir_path(__FILE__) . 'delete.php');
}

/*========= MENU End =========*/

