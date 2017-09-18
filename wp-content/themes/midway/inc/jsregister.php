<?php
/*Untuk Mendaftarkan JavaScript di Wordpres*/
function regishaji(){

    // Register the script like this for a theme:
    wp_enqueue_script( 'jsregis', get_stylesheet_directory_uri().'/inc/js/jquery-3.2.1.js' );
    wp_enqueue_script( 'jsregis2', get_stylesheet_directory_uri().'/inc/js/hajiregistration.js');
 
    // For either a plugin or a theme, you can then enqueue the script:
    //wp_enqueue_script( 'jsregis' );
}
add_action( 'wp_enqueue_scripts', 'regishaji' );
?>