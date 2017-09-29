<?php

global $wpdb;

$table = $wpdb->prefix."regformhaji";

/*========= Pagination Start========*/
$pagenum = isset( $_GET['pagenum'] ) ? absint( $_GET['pagenum'] ) : 1;

/*Find total numbers of records*/
$limit = 10; // number of rows in page
$offset = ( $pagenum - 1 ) * $limit;
$total = $wpdb->get_var( "SELECT COUNT('id') FROM $table" );
$num_of_pages = ceil( $total / $limit );

/*GIve Limit*/
$db = $wpdb->get_results( "SELECT * FROM $table ORDER BY id DESC LIMIT $offset, $limit" );
//$db = $wpdb->get_results( "SELECT * FROM $table LIMIT $offset, $limit" );
//$id = $db[$y]->id;
/*========= Pagination End========*/

/*===== GET ID Start =====*/
$id1 = $_GET['page'];
$id2 = end(explode('-', $id1));
$dbid = $wpdb->get_results( "SELECT * FROM $table WHERE id = '$id2' ");
/*===== GET ID Start =====*/

?>