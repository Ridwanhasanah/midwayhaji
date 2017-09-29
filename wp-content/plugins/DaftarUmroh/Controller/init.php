<?php
include(plugin_dir_path(__FILE__) . '../Model/dbconnect.php');

function rEnqueueScripts(){
	//global $pagenow;
	if (is_admin()) {

		wp_enqueue_style('radmin-css', plugins_url( '../assets/css/rstyle.css', __FILE__ ) );
		wp_enqueue_script('radmin-js', plugins_url( '../assets/js/jquery-migrate.js', __FILE__ ) );
		wp_enqueue_script('radmin-js2', plugins_url( '../assets/js/datepicker.min.js', __FILE__ ) );
		wp_enqueue_script('radmin-js3', plugins_url( '../assets/js/daftarUmroh.js', __FILE__ ) );
	
		}
}

add_action( 'admin_enqueue_scripts', 'rEnqueueScripts' );

include(plugin_dir_path(__FILE__) . '../View/menuDaftarUmroh.php');
?>