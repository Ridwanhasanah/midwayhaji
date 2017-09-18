$(document).ready(function(){
	$('#package').change(function(){

		var selectedOption = $('#package option:selected');

		var formhtml  = $("#formhtml").show();
		var ppp1      = $('#ppp1');
		var ppp2      = $('#ppp2');
		var desti     = $('#desti');
		var time      = $('#time');
		var price     = $('#packageprice');
		var airline   = $('#airline');
		var hotel     = $('#hotel');
		var roomhotel = $('#roomhotel');
		var conhotel  = $('#con-hotel');

		function ppp( fppp1, fppp2, fdesti, ftime, fprice, fairline, fhotel){
			ppp1.text(fppp1);
			ppp2.text(fppp2);
			desti.val(fdesti);
			time.val(ftime);
			price.val(fprice);
			airline.val(fairline);
			hotel.val(fhotel);

			return $('#divResult').html(formhtml);
		}

		if (selectedOption.val() == "package1") {
			ppp('Bearngkat Tanggal 11 26 Des 2015',
				'Keberangkatan Berikutnya bulan Febuari & April 2016',
				'Mekah, Madinah & Turkey',
				'13 Hari',
				'$2,700',
				'TURKISH AIR',
				'');
				conhotel.hide();
				roomhotel.hide();
		}else if (selectedOption.val() == "package2") {
			ppp('17 Desember 2015',
				'Bulan Febuari dan April 2016',
				'Mekah, Madinah & Turkey',
				'11 Hari',
				'$2,050',
				'Saudia/Emirates/Ettihad/Egypt Air',
				'Hotel Setaraf Bintang 4,Hotel Madinah');
			conhotel.show();
			roomhotel.show();
		}else if (selectedOption.val() == "package3") {
			ppp('Desember 2015',
				'',
				'Dubai, Mekkah, Madinah',
				'11 Hari',
				'$2,050',
				'Emirates/ Garuda/ Ettihad/Saudia Air',
				'Hotel Setaraf Bintang 3 Mekkah,Hotel Mekkah');
			conhotel.show();
			roomhotel.show();
		}else if (selectedOption.val() == "package4") {
			ppp('Bearngkat Tanggal 11, 26 Desember 2015',
				'',
				'Mekah, Madinah & Turkey',
				'12 Hari',
				'$2,500',
				'SAUDI ARABIA , TURKIS AIRLANES',
				'');
			conhotel.hide();
			roomhotel.hide();
		}else if (selectedOption.val() == "package5") {
			ppp('Bearngkat Tanggal 11 26 Des 2015',
				'Keberangkatan Berikutnya bulan Febuari & April 2016',
				'Mekah, Madinah & Turkey',
				'13 Hari',
				'$2,700',
				'TURKISH AIR',
				'');
				conhotel.hide();
				roomhotel.hide();
		}else if (selectedOption.val() == "package6") {
			ppp('17 Desember 2015',
				'Bulan Febuari dan April 2016',
				'Mekah, Madinah & Turkey',
				'11 Hari',
				'$2,050',
				'Saudia/Emirates/Ettihad/Egypt Air',
				'Hotel Setaraf Bintang 4,Hotel Madinah');
			conhotel.show();
			roomhotel.show();
		}else if (selectedOption.val() == "package7") {
			ppp('Desember 2015',
				'',
				'Dubai, Mekkah, Madinah',
				'11 Hari',
				'$2,050',
				'Emirates/ Garuda/ Ettihad/Saudia Air',
				'Hotel Setaraf Bintang 3 Mekkah,Hotel Mekkah');
			conhotel.show();
			roomhotel.show();
		}else if (selectedOption.val() == "package8") {
			ppp('Bearngkat Tanggal 11, 26 Desember 2015',
				'',
				'Mekah, Madinah & Turkey',
				'12 Hari',
				'$2,500',
				'SAUDI ARABIA , TURKIS AIRLANES',
				'');
			conhotel.hide();
			roomhotel.hide();
		}else if (selectedOption.val() == "package9") {
			ppp('Desember 2015',
				'',
				'Dubai, Mekkah, Madinah',
				'11 Hari',
				'$2,050',
				'Emirates/ Garuda/ Ettihad/Saudia Air',
				'Hotel Setaraf Bintang 3 Mekkah,Hotel Mekkah');
			conhotel.show();
			roomhotel.show();
		}else if (selectedOption.val() == "package10") {
			ppp('Bearngkat Tanggal 11, 26 Desember 2015',
				'',
				'Mekah, Madinah & Turkey',
				'12 Hari',
				'$2,500',
				'SAUDI ARABIA , TURKIS AIRLANES',
				'');
			conhotel.hide();
			roomhotel.hide();
		}


		
//html('Value = ' + selectedOption.val() +", Text = "+selectedOption.text());
	});
});