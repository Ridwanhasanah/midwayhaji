jQuery(document).ready(function(){

	/*===== Date Picker Start =====*/
	jQuery(".datePicker").datepicker({
		dateFormat:"yy-mm-dd",
		changeMonth: true,
		changeYear: true,
		yearRange: "1900:2222"});
	/*===== Date Picker End =====*/

	jQuery('#rdelete').click(function(){
		alert('reload');
		location.reload();
	});
})