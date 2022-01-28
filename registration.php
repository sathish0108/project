<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Registration | PHP</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<div>
	<?php
	
	?>	
</div>

<div>
	<form action="registration.php" method="post">
		<div class="container">
			
			<div class="row">
				<div class="col-sm-3">
					<h1>Registration</h1>
					<p>Fill up the form with correct values.</p>
					<hr class="mb-3">
					<label for="productname"><b>Product name</b></label>
					<input class="form-control" id="productname" type="text" name="productname" required>

					<label for="productid"><b>Product ID</b></label>
					<input class="form-control" id="productid"  type="text" name="productid" required>

					<label for="category"><b>category</b></label>
					<input class="form-control" id="category"  type="text" name="category" required>

					<label for="link"><b>Purchase link</b></label>
					<input class="form-control" id="link"  type="text" name="link" required>

					<label for="image"><b>image</b></label>
					<input class="form-control" id="image"  type="text" name="image" required>
					<hr class="mb-3">
					<input class="btn btn-primary" type="submit" id="register" name="create" value="Sign Up">
				</div>
			</div>
		</div>
	</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
	$(function(){
		$('#register').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){


			var productname 	= $('#productname').val();
			var productid		= $('#productid').val();
			var category 		= $('#category').val();
			var link 			= $('#link').val();
			var image 			= $('#image').val();
			

				e.preventDefault();	

				$.ajax({
					type: 'POST',
					url: 'process.php',
					data: {productname: productname,productid: productid,category: category,link: link,image: image},
					success: function(data){
					Swal.fire({
								'title': 'Successful',
								'text': data,
								'type': 'success'
								})
							
					},
					error: function(data){
						Swal.fire({
								'title': 'Errors',
								'text': 'There were errors while saving the data.',
								'type': 'error'
								})
					}
				});

				
			}else{
				
			}

			



		});		

		
	});
	
</script>
</body>
</html>