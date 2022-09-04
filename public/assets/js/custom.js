$(document).ready(function() {
  $('body').on('change', '#profileShorting', function(e){
    var sabcat =$('#profileShorting').serialize();
    //alert(sabcat);  
    $.ajax({
      type: "POST",
      url: '/user-filter',
      data: $('#profileShorting').serialize(),
      success: function(data){ 
       $('#fiterUser').html(data);
      }  
    });
  });
});