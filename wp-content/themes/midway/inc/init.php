<?php
/*Untuk Mendaftarkan JavaScript di Wordpres*/
function regishaji(){

    // Register the script like this for a theme:
    //wp_enqueue_script( 'jsregis', get_stylesheet_directory_uri().'/inc/js/jquery-3.2.1.js' );
    wp_enqueue_script( 'jsregis', get_stylesheet_directory_uri().'/inc/js/jquery-validation-1.17.0/dist/jquery.validate.min.js' );
     wp_enqueue_script( 'jsregis3', get_stylesheet_directory_uri().'/inc/js/jquery-migrate.js' );
    wp_enqueue_script( 'jsregis2', get_stylesheet_directory_uri().'/inc/js/hajiregistration.js');

    wp_enqueue_script('jsdate', get_stylesheet_directory_uri().'/inc/js/datepicker.min.js');
    
}
add_action( 'wp_enqueue_scripts', 'regishaji' );

function styleToHead(){
	?>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
	<?php

}

//add_filter('wp_head','styleToHead');
?>