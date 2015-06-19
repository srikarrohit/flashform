<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/alljquery.js"></script>
	<script src="js/validnewform.js"></script>
</head>
<body style="height:600px;">
	<div id="top-navbar">
		<img src="images/flash.png" id="logo">
		<a href="#"><span id="signup"> Request Login</span></a>
	</div>
	<div id="logindiv">
		<h2>LOGIN</h2>
		<form name="loginform" method="post" onsubmit="return validateForm()" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
		<table cellpadding="5px" cellspacing="6px">

			<tr>
				<td class="col1" >Username/Email *</td>
				<td class="col2">:</td>
				<td><input type="text" required="true" name="name" class="inputfied"></td>
			</tr>

			<tr>
				<td class="col1">Password *</td>
				<td class="col2">:</td>
				<td><input type="password" required="true" name="pass" class="inputfied"></td>
			</tr>
			
			<tr>
				<td colspan="3"><input type="submit" value="Login" class="login"></td>
			</tr>
			
		</table>
		</form>
	</div>

	<div id="request">
		<div id="close">
			Close
		</div>

		<center>
			<h2>Request Login</h2>
			<form name="newlogin" id="newlogin" method="post" onsubmit="return valnewlogin()" action="newuser.php">
			<table cellpadding="5px" cellspacing="6px">
			<tr>
				<td class="col1">Name *</td>
				<td class="col2">:</td>
				<td><input type="text" name="name" id="name" class="inputfied"></td>
				</tr><tr><td>
				<div id="name_error"></div></td>
			</tr>

			<tr>
				<td class="col1">Shop name *</td>
				<td class="col2">:</td>
				<td><input type="text" name="shop" id="shop" class="inputfied"></td>
				</tr><tr><td>
				<div id="sname_error"></div></td>
			</tr>

			<tr>
				<td class="col1">Email *</td>
				<td class="col2">:</td>
				<td><input type="text" name="email" id="email" class="inputfied"></td>
				</tr><tr>
				<td><div id="email_error"></div></td>
			</tr>
			
			<tr>
				<td class="col1">Phone *</td>
				<td class="col2">:</td>
				<td><input type="text" name="phone" id="phone"class="inputfied"></td>
				</tr><tr>
				<td><div id="phone_error"></div></td>
			</tr>

			<tr>
				<td class="col1">Address *</td>
				<td class="col2">:</td>
				<td><input type="text" name="address" id="address" class="inputfied"></td>
				</tr><tr>
				<td><div id="add_error"></div></td>
			</tr>
				
				<tr>
					<td colspan="3"><input type="submit" value="Submit" class="login"></td>
				</tr>
				
			</table>
			</form>
		</center>

	</div>
</body>
</html>
