<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>

<link rel="stylesheet" href="assets/swal2/sweetalert2.min.css" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<div class="header-container">
        <div id="load-products"></div> <!-- products will be load here -->
</div>  
   

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="assets/swal2/sweetalert2.min.js"></script>


<script>
	$(document).ready(function(){
		
		readLaboratory(); 
		
		$(document).on('click', '#delete_laboratory', function(e){
			
			var productId = $(this).data('id');
			SwalDelete(productId);
			e.preventDefault();
		});
		
	});
	
	function SwalDelete(productId){
		
		swal({
			title: 'Estas seguro?',
			text: "Se borrará de forma permanente!",
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Si, bórralo!',
			showLoaderOnConfirm: true,
			  
			preConfirm: function() {
			  return new Promise(function(resolve) {
			       
			     $.ajax({
			   		url: 'eliminar.php',
			    	type: 'POST',
			       	data: 'delete='+productId,
			       	dataType: 'json'
			     })
			     .done(function(response){
			     	swal('Eliminado!', response.message, response.status);
					readLaboratory();
			     })
			     .fail(function(){
			     	swal('Oops...', 'Algo salió mal!', 'error');
			     });
			  });
		    },
			allowOutsideClick: false			  
		});	
		
	}
	
	function readLaboratory(){
		$('#load-products').load('panel.php');	
	}
	
</script>
</body>
</html>

