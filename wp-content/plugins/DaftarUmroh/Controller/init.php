<?php
function rEnqueueScripts(){
	//global $pagenow;

	//if ($pagenow.'?page=list-daftar') {
		wp_enqueue_style('radmin-css', plugins_url( '../assets/css/style.css', __FILE__ ) );
		wp_enqueue_scripts('radmin-scripts', plugins_url( '../assets/js/hajiRegistration.js', __FILE__ ) );
		
	//}else{
	//	echo " huh ";
	//}
}

add_action( 'admin_enqueue_scripts', 'rEnqueueScripts' );

include(plugin_dir_path(__FILE__) . '../View/menuDaftarUmroh.php');

?>