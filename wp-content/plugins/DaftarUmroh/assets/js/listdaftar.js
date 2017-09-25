jQuery(document).ready(function(){
 jQuery('#textTampil').click(function(){
    var nilai = jQuery('#text').text();
    alert(nilai);
  });
  // show popup
  jQuery('.popup-show').click(function(e) {
   e.preventDefault();
   jQuery('.popup').fadeIn();
    
  });
 
  // close
  jQuery('.bg,.close').click(function(e){
   e.preventDefault();
   jQuery('.popup').fadeOut('slow');
  });
    
 });
