<div class="container">
	<!-- <button id="click">Me !</button> -->
<h2>List Pendaftar Umroh</h2>


<?php
include(plugin_dir_path(__FILE__) . '../Model/dbconnect.php');

/*=========================================================================================================*/

//$delete = $wpdb->get_results("DELETE FROM 'wp_regformhaji' WHERE 'wp_regformhaji'.'id' = $id");

global $pagenow;
echo "<pre>";
print_r(home_url().'/wp-admin/'.$pagenow.'?page=list-daftar');
echo "<br><br>";
print_r(get_site_url());
echo "</pre>";

?>




<table class="table1">
	<thead >
		<tr >
			<th>No Invoice</th>
			<th>Nama</th>
			<th>Nama Paket</th>
			<th>Maskapai</th>
			<th>HandPhone</th>
		</tr>
	</thead>
		<tbody >
			<?php 
			$url = admin_url('admin.php?page=zzz');
			//wp_redirect($url); 
				for ($y=0; $y < $limit; $y++) { 
					$id = $db[$y]->id;
					$dbitem = $wpdb->get_results( "SELECT * FROM $table WHERE id = '$id' ");
					if ($y<$limit&&$total) {
							?>
			<tr <?= $y%2==0?'class="white"':'class="blue"' ?>>
				<td><?= $db[$y]!=0?'INV'.$db[$y]->id:''?></td>
				<td>
					<div>
					<b>
						<a href="<?php echo $pagenow.'?page=single-'.$id;?>" > 
						<?= array_shift(explode(' ', $db[$y]->full_name));  ?>
						</a>
					</b>
               <br>
               <?php 
               if ($db[$y] != 0) {
                  ?>
                  <a href="<?php echo $pagenow.'?page=delete-'.$id;?>" onclick="return confirm(\'Yakin ?\')">Delete</a>
               <?php
            };
               ?>
               
               </div>
				</td>
				<td><?= $db[$y]->name_service; ?></td>
				<td><?= $db[$y]->airlines; ?></td>
				<td><?= $db[$y]->hp; ?></td>
			</tr>
			
			<?php			
				}
			} 
		 ?>
	</tbody>
	<tfoot>
		<tr >
			<th>Nama</th>
			<th>Nama Paket</th>
			<th>Maskapai</th>
			<th >HandPhone</th>
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

