<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>Registration</title>
  <script src="/trunk/ci/application/libraries/js/jquery-3.1.0.js" type="text/javascript"></script>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
  <script>
  	var firstName;
  	var lastName;
  	var userName;
  	var password;
	$(document).ready(function(){
		
	});

	function validate(){
		firstName = $("#firstNameText").val();
		lastName = $("#lastNameText").val();
		userName = $("#userNameText").val();
		password = $("#passwordText").val();
		

		if( '' != firstName ){
			if( '' != lastName ) {
				if( '' != userName ) {
					if( '' != password ) {
						return true;
					} else {
						alert("Enter valid password");
					}

				} else {
					alert("Enter valid user name");
				}

			} else {
				alert('Enter valid last name');
			}
		} else {
			alert("Enter valid First Name");
		}
		return false;
	}
  </script>
</head>
<body>
	<div id="content" align="center">
	<h2>Registration</h2>	
	<form action="saveUser" method="post" onsubmit="return validate()">
		<table>
			<tr><td align="right">Enter First Name:</td><td><input type="text" name="firstname" id="firstNameText"></td></tr>
			<tr><td align="right">Enter Last Name:</td><td><input type="text" name="lastname" id="lastNameText"></td></tr>
			<tr><td align="right">Enter User Name:</td><td><input type="text" name="username" id="userNameText"></td></tr>
			<tr><td align="right">Enter Password:</td><td><input type="password" name="password" id="passwordText"></td></tr>
			<tr><td align="right"><input type="submit" name="Submit" value="submit"></td><td><input type="reset" value="reset"></td></tr>
		</table>
	</form>	
	</div>
</body>
</html>