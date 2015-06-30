<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/alljquery.js"></script>

</head>
<body style="height:600px;">
	<div id="top-navbar">
		<a href="http://www.flashfetch.in"><img src="images/flash.png" id="logo"></a>
		<a href="#"><span id="signup"> Request Login</span></a>
	</div>
	<form name="loginform" method="post" onsubmit="return validateForm()" action="loggedin.php" style="height:90%;">
		
		<div id="logindiv">
			<h2>LOGIN</h2>

			<table cellpadding="5px" cellspacing="6px">

				<tr>
					<td class="col1">Username/Email *</td>
					<td class="col2">:</td>
					<td><input class="form-control" aria-describedy="sizing-addon3" type="text" name="name" class="inputfied" required="true"></td>
				</tr>
				<tr><td colspan="3"><div id="n_error"></div></td></tr>
				<tr>
					<td class="col1">Password *</td>
					<td class="col2">:</td>

					<td><input class="form-control" aria-describedy="sizing-addon3" type="password" name="pass" class="inputfied"></td>
				</tr>
				<tr>
					<td colspan="3">
						<div id="pass_error"></div>
					</td>
				</tr>	
				
				<tr>
					<td colspan="3"><input type="submit" value="Login" class="login"></td>
				</tr>
				
			</table>
		</div>

		<div id="request">
			<div id="close">
				Close
			</div>

			<center>
				<h2>Request Login</h2>
				<table cellpadding="5px" cellspacing="6px">
				<tr>
					<td class="col1">Name *</td>
					<td class="col2">:</td>
					<td><input class="form-control" aria-describedy="sizing-addon3" type="text" required="true" class="inputfied"></td>
				</tr>

				<tr>
					<td class="col1">Shop name *</td>
					<td class="col2">:</td>
					<td><input class="form-control" aria-describedy="sizing-addon3" type="text" required="true" class="inputfied"></td>
				</tr>

				<tr>
					<td class="col1">Email *</td>
					<td class="col2">:</td>
					<td><input class="form-control" aria-describedy="sizing-addon3" type="text" required="true" class="inputfied"></td>
				</tr>
				
				<tr>
					<td class="col1">Phone *</td>
					<td class="col2">:</td>
					<td><input class="form-control" aria-describedy="sizing-addon3" type="text" required="true" class="inputfied"></td>
				</tr>

				<tr>
					<td class="col1">Address *</td>
					<td class="col2">:</td>
					<td><input class="form-control" aria-describedy="sizing-addon3" type="text" required="true" class="inputfied"></td>
				</tr>
					
					<tr>
						<td colspan="3"><input type="submit" value="Submit" class="login"></td>
					</tr>
					
				</table>
			</center>

		</div>

	</form>


</body>
</html>
