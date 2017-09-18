<?php
/*
Template Name: Pendaftaran
*/
get_header();
?>
<div class="row">
	<div class="full-tour clearfix">
		<div class="elevencol column">
			<h1 class="section-title">Form Pendaftaran Online Jamaah Umroh Mina Tour & divavel</h1>
			<div >
				<div class="elevencol column">
					<h4 class="section-title">Pilih Layanan</h4>

					<div class="fourcol column">Nama Paket Layanan *</div>
					<div class="field-container">
						<div class="sixcol column last">
							<select id="package">
								<option></option>
								<option value="package1">Paket Umroh Plus Istanbul Bursa Cappadocia</option>
								<option value="package2">Paket Umroh Plus Kario Mesir</option>
								<option value="package3">Paket Umroh Plus Dubai</option>
								<option value="package4">Paket Umroh Plus Istanbul Dan Bursa</option>
								<option value="package5">Paket Umroh Murah Rahmah 12 hari </option>
								<option value="package6">Paket Umroh Murah Rahmah </option>
								<option value="package7">Paket Umroh Promo Febuari 2016</option>
								<option value="package8">Paket Umroh Plus Turki Istanbul Bursa</option>
								<option value="package9">Paket Umroh Plus Turki Istanbul Bursa 2016</option>
								<option value="package10">Paket Umroh Hemat Maret 2016 </option>
							</select><br>
						</div>
					</div>

				</div>
				<div id="divResult"></div>
				<div class="elevencol column">
					<h4 class="section-title">Informasi Data Pribadi Anda</h4>

					<div class="fourcol column">Nama Lengkap (Sesuai pasport 3 suku kata) *</div>
					<div class="sixcol column last">
						<div class="field-container"><input type="text" name="name"></div>
					</div>
					<div class="fourcol column">Jenis Kelamin *</div>
					<div class="field-container">
						<div class="sixcol column last">
							<input type="radio" name="genre" value="pria" checked>Pria<br>
							<input type="radio" name="genre" value="wanita">Wanita
						</div>
					</div>


					<div class="fourcol column">Tanggal Lahir *</div>
					<div class="sixcol column last">
						<div class="field-container"><input type="text" name="borndate" placeholder="Format Date : YYYY-MM-DD"></div>
					</div>

					<div class="fourcol column">Tempat Lahir *</div>
					<div class="sixcol column last">
						<div class="field-container"><input type="text" name="birthplace"></div>
					</div>

					<div class="fourcol column">Status Menikah *</div>
					<div class="field-container">
						<div class="sixcol column last">
							<input type="radio" name="status" value="single" checked>Single<br>
							<input type="radio" name="status" value="merried">Menikah
						</div>
					</div>

				</div>
				<div class="elevencol column">
					<h4 class="section-title">Informasi Data Lainnya</h4>


					<div class="fourcol column">Alamat Email *</div>
					<div class="sixcol column last">
						<div class="field-container"><input type="text" name="email" placeholder="ex : nama@email.com"></div>
					</div>
					<div class="fourcol column">No Handphone *</div>
					<div class="sixcol column last">
						<div class="field-container"><input type="text" name="phone" placeholder="08123456789"></div>
					</div>
					<div class="fourcol column">Alamat Rumah *</div>
					<div class="sixcol column last">
						<div class="field-container"><textarea name="homeadd"></textarea></div>
					</div>
					<div class="fourcol column">Kota *</div>
					<div class="sixcol column last">
						<div class="field-container"><input type="text" name="city"></div>
					</div>
					<div class="fourcol column">No Tlp Rumah</div>
					<div class="sixcol column last">
						<div class="field-container"><input type="text" name="homephone" placeholder="021321123"></div>
					</div>
					<div class="fourcol column">Alamat Kantor</div>
					<div class="sixcol column last">
						<div class="field-container"><textarea name="officeadd"></textarea></div>
					</div>
					<div class="fourcol column">No Tlp Kantor</div>
					<div class="sixcol column last">
						<div class="field-container"><input type="text" name="officephone" placeholder="021321123"></div>
					</div>
					<div class="fourcol column">Referensi</div>
					<div class="sixcol column last">
						<div class="field-container"><input type="text" name="ref"></div>
					</div>


				</div>
				<div class="elevencol column">
					<h4 class="section-title">Informasi Data Pasport Anda</h4>

					<div class="fourcol column">No Pasport *</div>
					<div class="sixcol column last">
						<div class="field-container"><input type="text" name="nopasport" placeholder="ex : 3337976547"></div>
					</div>
					<div class="fourcol column">Tanggal Keluar Pasport *</div>
					<div class="sixcol column last">
						<div class="field-container"><input type="text" name="datepasport" placeholder="Format : YYYY-MM-DD"></div>
					</div>
					<div class="fourcol column">Tanggal Habis Pasport *</div>
					<div class="sixcol column last">
						<div class="field-container"><input type="text" name="exdatepasport" placeholder="Format : YYYY-MM-DD"></div>
					</div>
					<div class="fourcol column">Kantor Imigrasi Pasport *</div>
					<div class="sixcol column last">
						<div class="field-container"><input type="text" name="officepasport"></div>
					</div>


				</div>
				<div class="elevencol column">
					<h4 class="section-title">Sosial Media</h4>
					<div class="fourcol column">Facebook</div>
					<div class="sixcol column last">
						<div class="field-container"><input type="text" name="fb"></div>
					</div>
					<div class="fourcol column">Twitter</div>
					<div class="sixcol column last">
						<div class="field-container"><input type="text" name="twit"></div>
					</div>
					<div class="fourcol column">Instagram</div>
					<div class="sixcol column last">
						<div class="field-container"><input type="text" name="insta"></div>
					</div>
				</div>


				<div id="formhtml" class="elevencol column">
					<div class="fourcol column">Periode Paket Perjalanan *</div>
					<div class="sixcol column last">
						<select id="packageppp">
							<option id="ppp1">17 Desember 2015</option>
							<option id="ppp2">Bulan Febuari dan April 2016</option>
						</select>
					</div>
					<div class="fourcol column">Tujuan Negara *</div>
					<div class="field-container">
						<div class="sixcol column last">
							<input id="desti" type="text" value="" readonly>
						</div>
					</div>
					<div class="fourcol column">Durasi Perjalanan *</div>
					<div class="sixcol column last">
						<div class="field-container"><input id="time" type="text" value="" readonly></div>
					</div>
					<div class="fourcol column">Harga Paket *</div>
					<div class="sixcol column last">
						<div class="field-container"><input id="packageprice" type="text" value="" readonly></div>
					</div>

					<div class="fourcol column">Maskapai Penerbangan *</div>
					<div class="sixcol column last">
						<div class="field-container"><input id="airline" type="text" value="" readonly></div>
					</div>
					<div class="con-hotel fourcol column">Hotel *</div>
					<div class="sixcol column last">
						<div class="field-container"><input id="hotel" type="text" value="" readonly></div>
					</div>
					<div id="roomhotel">
						<div  class="fourcol column">Pilih Kamar Hotel *</div>
						<div class="sixcol column last">
							<select >
								<option>Quad</option>
								<option>Triple</option>
								<option>Double</option>
							</select>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
<?php
get_footer();