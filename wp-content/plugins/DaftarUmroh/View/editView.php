<?php
include(plugin_dir_path(__FILE__) . '../Model/dbconnect.php');

echo '<h1>Edit Pendaftar Umroh</h1>';
?>
<form method="post" action="#">
   <div class="biodata">
      <h1 class="Rtitle"><u>Biodata Pendaftaran</u></h1>
      <div class="data">
         <div class="tableid">
            <h3><i><u>Layanan</u></i></h3>
            <table class="table2">
               <tr>
                  <td>Nama Paket Layanan</td>
                  <td><b><i><input type="text" name="name_service" value="<?= $dbid[0]->name_service;?>"></i></b></td>
               </tr>
               <tr>
                  <td>Periode Paket Perjalanan </td>
                  <td><input type="text" name="ppp" value="<?= $dbid[0]->ppp;?>"></td>
               </tr>
               <tr>
                  <td>Tujuan Negara </td>
                  <td><input type="text" name="destination" value="<?= $dbid[0]->destination;?>"></td>
               </tr>
               <tr>
                  <td>Durasi Perjalanan </td>
                  <td><input type="text" name="duration" value="<?= $dbid[0]->duration;?>"></td>
               </tr>
               <tr>
                  <td>Harga Paket </td>
                  <td>$ <input type="number" name="price" value="<?= $dbid[0]->price;?>"></td>
               </tr>
               <tr>
                  <td>Maskapai Penerbangan</td>
                  <td><input type="text" name="airlines" value="<?= $dbid[0]->airlines;?>"></td>
               </tr>
               <tr>
                  <td>Hotel </td>
                  <td><input type="text" name="hotel" value="<?= $dbid[0]->hotel;?>"></td>
               </tr>
               <tr>
                  <td>Kamar Hotel </td>
                  <td><input type="text" name="hotelroom" value="<?= $dbid[0]->hotelroom;?>"></td>
               </tr>
            </table>   
         </div>
         <div class="tableid">
            <h3><i><u>Data Pribadi</u></i> </h3>
            <table class="table2">
               <tr>
                  <td>Nama Lengkap </td>
                  <td><b><i><input type="text" name="full_name" value="<?= $dbid[0]->full_name?>"></i></b></td>
               </tr>
               <td>Jenis Kelamin </td>
               <td><input placeholder="Pria / Wanita" type="text" name="gender" value="<?= $dbid[0]->gender;?>"></td>
            </tr>
            <tr>
               <td>Tempat Tanggal Lahir </td>
               <td>
                  <input  type="text" name="born" value="<?= $dbid[0]->born;?>">, 
                  <input class="datePicker" type="text" name="date_birth" value="<?= $dbid[0]->date_birth;?>">
               </td>
            </tr>
            <tr>
               <td>Status </td>
               <td><input placeholder="Single / Menikah" type="text" value="<?= $dbid[0]->status;?>" name="status"></td>
            </tr>
         </table>
      </div>
      <div class="tableid">
         <h3><i><u>Data Lainnya</u></i></h3>
         <table class="table2">
            <tr>
               <td>Alamat Email</td>
               <td><b><i><input type="email" name="email" value="<?= $dbid[0]->email;?>"></i></b></td>
            </tr>
            <tr>
               <td>No Handphone</td>
               <td><input type="number" name="hp" value="<?= $dbid[0]->hp;?>"></td>
            </tr>
            <tr>
               <td>Alamat Rumah</td>
               <td><textarea name="home_add"><?= $dbid[0]->home_add;?></textarea></td>
            </tr>
            <tr>
               <td>Kota</td>
               <td><input type="text" name="city" value="<?= $dbid[0]->city;?>"></td>
            </tr>
            <tr>
               <td>No Tlp Rumah</td>
               <td><input type="number" name="home_hp" value="<?= $dbid[0]->home_hp;?>"></td>
            </tr>
            <tr>
               <td>Alamat Kantor</td>
               <td><input type="text" name="office_add" value="<?= $dbid[0]->office_add;?>"></td>
            </tr>
            <tr>
               <td>No Telepon Kantor</td>
               <td><input type="" name="office_hp" value="<?= $dbid[0]->office_hp;?>"></td>
            </tr>
            <tr>
               <td>Refrensi</td>
               <td><input type="text" name="ref" value="<?= $dbid[0]->ref;?>"></td>
            </tr>
         </table>
      </div>
      <div class="tableid">
         <h3><i><u>Data Passport</u></i></h3>
         <table class="table2">
            <tr>
               <td>No Passport</td>
               <td><b><i><input type="number" name="no_passport" value="<?= $dbid[0]->no_passport;?>"></i></b></td>
            </tr>
            <tr>
               <td>Tanggal Keluar Passport</td>
               <td><input class="datePicker" type="text" name="date_passport" value="<?= $dbid[0]->date_passport;?>"></td>
            </tr>
            <tr>
               <td>Tanggal Habis Passport</td>
               <td><input class="datePicker" type="text" name="ex_passport" value="<?= $dbid[0]->ex_passport;?>"></td>
            </tr>
            <tr>
               <td>Kantor Imigrasi Passport</td>
               <td><input type="text" name="office_passport" value="<?= $dbid[0]->office_passport;?>"></td>
            </tr>
         </table>
      </div>
      <div class="tableid">
         <h3><i><u>Sosial Media</u></i></h3>
         <table class="table2">
            <tr>
               <td>Facebook</td>
               <td><input type="text" name="fb" value="<?= $dbid[0]->fb;?>"></td>
            </tr>
            <tr>
               <td>Twitter</td>
               <td><input type="text" name="twit" value="<?= $dbid[0]->twit;?>"></td>
            </tr>
            <tr>
               <td>Instagram</td>
               <td><input type="text" name="insta" value="<?= $dbid[0]->insta;?>"></td>
            </tr>
         </table>
      </div>
   </div>
   <input class="button button-primary" type="submit" name="submit" value="Save Changes">
</form>
<dir style="clear: both;"></dir>
<?php require_once(plugin_dir_path(__FILE__) . '../Model/edit.php'); ?>