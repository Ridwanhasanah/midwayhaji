<?php
include(plugin_dir_path(__FILE__) . '../Model/dbconnect.php');


$delete = $wpdb->query("DELETE FROM $table WHERE id = '$id2' ");
if ($dbid == true) {
	if ($delete) {
		$berhasil = $dbid[0]->full_name;?>
		<script>
			alert("Pendaftar <?= $berhasil; ?> Berhasil di hapus");
			window.history.back();
			
		</script>
		<?php
	}else{
		//echo "";
	}
}else{
	echo "<script>window.history.back()</script>";
		
}
?>