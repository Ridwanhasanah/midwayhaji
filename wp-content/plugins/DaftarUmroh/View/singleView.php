<?php
include(plugin_dir_path(__FILE__) . '../Model/dbconnect.php');
?>
</div>

<div class="popup">
     <div class="bg"></div>
     <div class="content">
      <div class="content-text">
         <div class="biodata">
            <h1 class="Rtitle"><u>Biodata Pendaftar</u></h1>
            <div class="data">
               <div class="tableid">
                  <h3><i><u>Layanan</u></i></h3>
                  <table class="table2">
                     <tr>
                        <td>Nama Paket Layanan</td>
                        <td><b><u><i><?= $dbid[0]->name_service;?></i></u></b></td>
                     </tr>
                     <tr>
                        <td>Periode Paket Perjalanan </td>
                        <td><?= $dbid[0]->ppp;?></td>
                     </tr>
                     <tr>
                        <td>Tujuan Negara </td>
                        <td><?= $dbid[0]->destination;?></td>
                     </tr>
                     <tr>
                        <td>Durasi Perjalanan </td>
                        <td><?= $dbid[0]->duration;?></td>
                     </tr>
                     <tr>
                        <td>Harga Paket </td>
                        <td><?= $dbid[0]->price;?></td>
                     </tr>
                     <tr>
                        <td>Maskapai Penerbangan</td>
                        <td><?= $dbid[0]->airlines;?></td>
                     </tr>
                     <tr>
                        <td>Hotel </td>
                        <td><?= $dbid[0]->hotel;?></td>
                     </tr>
                     <tr>
                        <td>Kamar Hotel </td>
                        <td><?= $dbid[0]->hotelroom;?></td>
                     </tr>
                  </table>   
               </div>
               <div class="tableid">
                  <h3><i><u>Data Pribadi</u></i> </h3>
                  <table class="table2">
                     <tr>
                        <td>Nama Lengkap </td>
                        <td><?= $dbiditem[0]->full_name?></td>
                     </tr>
                     <tr>
                        <td>Jenis Kelamin </td>
                        <td><?= $dbid[0]->gender;?></td>
                     </tr>
                     <tr>
                        <td>Tempat Tanggal Lahir </td>
                        <td><?= $dbid[0]->born;?>, <?= $dbid[0]->date_birth;?></td>
                     </tr>
                     <tr>
                        <td>Status </td>
                        <td><?= $dbid[0]->status;?></td>
                     </tr>
                  </table>
               </div>
               <div class="tableid">
                  <h3><i><u>Data Lainnya</u></i></h3>
                  <table class="table2">
                     <tr>
                        <td>Alamat Email</td>
                        <td><?= $dbid[0]->email;?></td>
                     </tr>
                     <tr>
                        <td>No Handphone</td>
                        <td><?= $dbid[0]->hp;?></td>
                     </tr>
                     <tr>
                        <td>Alamat Rumah</td>
                        <td><?= $dbid[0]->home_add;?></td>
                     </tr>
                     <tr>
                        <td>Kota</td>
                        <td><?= $dbid[0]->city;?></td>
                     </tr>
                     <tr>
                        <td>No Tlp Rumah</td>
                        <td><?= $dbid[0]->home_hp;?></td>
                     </tr>
                     <tr>
                        <td>Alamat Kantor</td>
                        <td><?= $dbid[0]->office_add;?></td>
                     </tr>
                     <tr>
                        <td>No Tepon Kantor</td>
                        <td><?= $dbid[0]->office_hp;?></td>
                     </tr>
                     <tr>
                        <td>Refrensi</td>
                        <td><?= $dbid[0]->ref;?></td>
                     </tr>
                  </table>
               </div>
               <div class="tableid">
                  <h3><i><u>Data Passport</u></i></h3>
                  <table class="table2">
                     <tr>
                        <td>No Passport</td>
                        <td><?= $dbid[0]->no_passport;?></td>
                     </tr>
                     <tr>
                        <td>Tanggal Keluar Passport</td>
                        <td><?= $dbid[0]->date_passport;?></td>
                     </tr>
                     <tr>
                        <td>Tanggal Habis Passport</td>
                        <td><?= $dbid[0]->ex_passport;?></td>
                     </tr>
                     <tr>
                        <td>Kantor Imigrasi Passport</td>
                        <td><?= $dbid[0]->office_passport;?></td>
                     </tr>
                  </table>
               </div>
               <div class="tableid">
                  <h3><i><u>Sosial Media</u></i></h3>
                  <table class="table2">
                     <tr>
                        <td>Facebook</td>
                        <td><?= $dbid[0]->fb;?></td>
                     </tr>
                     <tr>
                        <td>Twitter</td>
                        <td><?= $dbid[0]->twit;?></td>
                     </tr>
                     <tr>
                        <td>Instagram</td>
                        <td><?= $dbid[0]->insta;?></td>
                     </tr>
                  </table>

               </div>

            </div>
            
         </div>
   </div>
  
</div>