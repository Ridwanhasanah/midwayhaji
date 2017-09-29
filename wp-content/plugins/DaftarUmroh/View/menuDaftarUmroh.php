<?php
/*========= MENU Daftar Start =========*/
add_action('admin_menu', 'menuDaftarUmroh' );
function menuDaftarUmroh(){
	add_menu_page(
		'Umroh', //title
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

	/* Menu Edit */
	add_submenu_page(
		__FILE__,
		'Edit Pendaftar',
		'Edit',
		'manage_options',
		"edit-$id2", //Link Page
		'editPendaftar' );
}

function daftarUmroh(){
	
	include(plugin_dir_path(__FILE__) . 'listPendaftar.php');
}

function singleView(){
	include(plugin_dir_path(__FILE__) . 'singleView.php');
	//require_once(plugin_dir_path(__FILE__) . '../assets/blue/biodata.php');
}

function deletePendaftar(){
	include(plugin_dir_path(__FILE__) . 'delete.php');
}

function editPendaftar(){
	require_once(plugin_dir_path(__FILE__ ) . 'editView.php');
}
/*========= MENU Daftar End =========*/

/*========= Menu Edit Form Paket Start =========*/

function settingForm(){
	add_menu_page(
		'setting',
		'Sett' );
}
/*========= Menu Edit Form Paket End =========*/

