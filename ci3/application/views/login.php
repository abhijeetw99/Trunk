<?php
echo 'base url='.base_url();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	
	<script>
		$(document).ready(function(){
			$("#error-msg").hide();
			console.log('test');
			var error = '<?php echo $strErrorMessage; ?>';
			if( 0 < error.length ) {
				$("#error-msg").text(error);
				console.log('showing');
				$("#error-msg").show();
			}

		});
		function validate() {
			var username=$("#uname").val();
			var password=$("#pwd").val();

			var error = '<?php echo $strErrorMessage?>';

			$("#error-msg").hide();

			if( 0 < error.length ) {
				$("#error-msg").show();
			}

			if( '' != username ) {
				if( '' != password ) {
					return true;
				} else {
					alert("Enter valid password");
				}
			} else {
				alert("Enter valid Username");
				return false;
			}
		}
	</script>
</head>
<body>

<div class="container">

	<h2 class="text-center">Login</h2>
	<div id="error-msg" class="alert alert-danger fade in">
		<?php if( true == valStr( $strErrorMessage ) ) { 
				echo $strErrorMessage; 
				}
		?>
		
	</div>


		<form action="authenticate" method="post" onsubmit="return validate();">
			<div class="form-group w-25">
					<label for="uname">Username:</label>
					<input class="form-control" type="text" name="username" id="uname">

					<label for="pwd">Password:</label>
					<input class="form-control" type="password" name="password" id="pwd">

					<td class="text-right"><input class="btn" type="submit" name="Login" value="Login"></td><td><input class="btn" type="reset" name="Reset"></td>
			</div>		

		</form>
	</div>
</body>
</html>