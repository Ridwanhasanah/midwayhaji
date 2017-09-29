<?php

echo "<pre>";
//print_r($dbid[0]);
echo "</pre>";
//var_dump($wpdb);
$name_service    = $_POST['name_service'];
$ppp             = $_POST['ppp'];
$destination     = $_POST['destination'];
$duration        = $_POST['duration'];
$price           = $_POST['price'];
$airlines        = $_POST['airlines'];
$hotel           = $_POST['hotel'];
$hotelroom       = $_POST['hotelroom']; 
$full_name       = $_POST['full_name'];
$gender          = $_POST['gender'];
$date_birth      = $_POST['date_birth'];
$born            = $_POST['born'];
$status          = $_POST['status'];
$email           = $_POST['email'];
$hp              = $_POST['hp'];
$home_add        = $_POST['home_add'];
$city            = $_POST['city'];
$home_hp         = $_POST['home_hp'];
$office_add      = $_POST['office_add'];
$office_hp       = $_POST['office_hp'];
$ref             = $_POST['ref'];
$no_passport     = $_POST['no_passport'];
$date_passport   = $_POST['date_passport'];
$ex_passport     = $_POST['ex_passport'];
$office_passport = $_POST['office_passport'];
$fb              = $_POST['fb'];
$twit            = $_POST['twit'];
$insta           = $_POST['insta'];





if (isset($_POST['submit'])) {


   //var_dump($_POST);

	
	
	//$wpdb->update( $table, ['full_name' => $name], ['id' => $dbid[0]->id]);

   //$wpdb->update( $table, $data, $where);

   $update = $wpdb->update( 
      $table, 
      array( 
         'name_service'   => $name_service, //Ini berasal dari select option
         'ppp'            => $ppp,//$_POST['packageppp'], 
         'destination'    => $destination, 
         'duration'       => $duration, 
         'price'          => $price, 
         'airlines'       => $airlines, 
         'hotel'          => $hotel, 
         'hotelroom'      => $hotelroom, 
         'full_name'      => $full_name, 
         'gender'         => $gender, 
         'date_birth'     => $date_birth, 
         'born'           => $born, 
         'status'         => $status, 
         'email'          => $email, 
         'hp'             => $hp, 
         'home_add'       => $home_add, 
         'city'           => $city, 
         'home_hp'        => $home_hp, 
         'office_add'     => $office_add, 
         'office_hp'      => $office_hp, 
         'ref'            => $ref, 
         'no_passport'    => $no_passport, 
         'date_passport'  => $date_passport, 
         'ex_passport'    => $ex_passport, 
         'office_passport'=> $office_passport, 
         'fb'             => $fb, 
         'twit'           => $twit, 
         'insta'          => $insta
      ), 
      array( 
         'id' => $dbid[0]->id 
      ) 
   );

   echo "<pre>";
   //print_r($update);
   echo "</pre>";


   if ($update) {
      echo '<div class="updated"><p><srong>Option Saved.</p><strong></div>';
      ?>
      <script type="text/javascript">
         alert('Berhasil');
         location.reload();
      </script>
      <?php
      echo "Berhasil";

   }else{
      echo 'gagal';
   }



}

?>