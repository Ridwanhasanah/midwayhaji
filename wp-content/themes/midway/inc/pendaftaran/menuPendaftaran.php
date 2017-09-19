<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<style type="text/css"><?php  ?></style>
</head>
<body>


<h2 class="number">List Pendaftar Umroh</h2>
<?php
global $wpdb;

$table = $wpdb->prefix."regformhaji";

$pagenum = isset( $_GET['pagenum'] ) ? absint( $_GET['pagenum'] ) : 1;

/*Find total numbers of records*/
$limit = 10; // number of rows in page
$offset = ( $pagenum - 1 ) * $limit;
$total = $wpdb->get_var( "SELECT COUNT('id') FROM $table" );
$num_of_pages = ceil( $total / $limit );

/*GIve Limit*/
$db = $wpdb->get_results( "SELECT * FROM $table LIMIT $offset, $limit" );



/*=========================================================================================================*/

//$delete = $wpdb->get_results("DELETE FROM 'wp_regformhaji' WHERE 'wp_regformhaji'.'id' = $id");


echo "<pre>";
//print_r($id);
echo "</pre>";

?>
<table class="wp-list-table widefat fixed striped posts">
	<thead>
		<tr>
			<th class="tables">Nama</th>
			<th style="width: 255px; ">Nama Paket</th>
			<th style="width: 255px;">Maskapai</th>
			<th >HandPhone</th>
			<!-- <th style="width: 55px;">Lihat</th>
			<th style="width: 55px;">Delete</th>
			<th style="width: 55px;">Edit</th> -->
		</tr>
	</thead>
		<tbody >
		<?php 
				for ($y=0; $y < $limit; $y++) { 
					if ($y<$limit&&$total) {
			?>
			<tr>
				<td style="padding: 20px 0px 20px 20px;"><b><?= array_shift(explode(' ', $db[$y]->full_name));  ?></b></td>
				<td style="padding: 20px 0px 20px 20px;"><?= $db[$y]->name_service; ?></td>
				<td style="padding: 20px 0px 20px 20px;"><?= $db[$y]->airlines; ?></td>
				<td style="padding: 20px 0px 20px 20px;"><?= $db[$y]->hp; ?></td>
				<!-- <td><input id="doaction" class="button action" type="submit" value="Lihat" name=""></td>
				<td><input id="doaction" class="button action" type="submit" value="Delete" name=""></td>
				<td><input id="doaction" class="button action" type="submit" value="Edit" name=""></td> -->
			</tr>
			<?php
				}
			} 
		 ?>
	</tbody>
	<tfoot style="border-top: 2px solid #E1E1E1;">
		<tr >
			<th style="padding: 20px 0px 20px 20px;">Nama</th>
			<th style="width: 255px;">Nama Paket</th>
			<th style="width: 255px;">Maskapai</th>
			<th >HandPhone</th>
			<!-- <th style="width: 55px;">Lihat</th>
			<th style="width: 55px;">Delete</th>
			<th style="width: 55px;">Edit</th> -->
		</tr>
	</tfoot> 
	
</table>
<?php
$page_links = paginate_links( array(
    'base' => add_query_arg( 'pagenum', '%#%' ),
    'format' => '',
    'prev_text' => __( '&laquo;', 'text-domain' ),
    'next_text' => __( '&raquo;', 'text-domain' ),
    'total' => $num_of_pages,
    'current' => $pagenum
) );

if ( $page_links ) {
    echo '<div class="tablenav"><div class="tablenav-pages" style="margin: 1em 0">' . $page_links . '</div></div>';
}


/*
$pageLink = "<nav><ul class='ulli'>";
for ($pagi=1; $pagi <= $page; $pagi++) { 

	$pageLink .= "<li><button id='show'>".$pagi."</button></li>";
}

echo $pageLink."</ul></nav>";
?>
<script type="text/javascript">
	jQuery(document).ready(function() {
  
     jQuery("#show").click(function() { //event click
       jQuery("#box").before("<tbody><tr><td>Ridwan</td><td>qwerty</td><td>asdfg</td><td>zxcvb</td><td>vfredc</td><td>12345678</td><td>243235</td></tr></tbody>"); //tampilkan pada id div box di bawah teks
     });
  
     jQuery("#tombol_before").click(function() {
       jQuery("#box").before("<p>Learning jQuery...</p>"); //tampilkan pada id div box di atas teks
     });
  
   });
</script>*/
?>
</body>
</html>
