<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<!-- * *                               SB Forms JS                               * *-->
<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
<!-- Rooom seater and fees auto selector -->
 <script>
  $('.select_room').change(function(){
	  let room_id= $(this).val();
	  //alert(room_id);
	  $.ajax({
	  method: "POST",
	  url: "room_details.php",
	  data: { rid: room_id}
	})
	  .done(function( msg ) {
		var obj = jQuery.parseJSON(msg);
		$('.Seater').val(obj.seater);		
		$('.Fees').val(obj.fees);		
	  });	  
  }) 
 </script>
