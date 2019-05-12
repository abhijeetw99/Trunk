<?php
echo 'base url='.base_url();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<script type="text/javascript" src="<?= base_url() ?>/application/libraries/js/jquery-3.1.1.js"></script>
	
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
<center>
<h2>Login</h2>
	<div id="error-msg">
		<?php if( true == valStr( $strErrorMessage ) ) { 
				echo $strErrorMessage; 
				}
		?>
		
	</div>

	<form action="authenticate" method="post" onsubmit="return validate();">
		<table>
			<tr>
				<td>Username:</td><td><input type="text" name="username" id="uname"></td>
			</tr>
			<tr>	
				<td>Password:</td><td><input type="password" name="password" id="pwd"></td>
			</tr>
			<tr>	
				<td><input type="submit" name="Login" value="Login"></td><td><input type="reset" name="Reset"></td>
			</tr>
		</table>
	</form>
</center>
</body>
</html>