<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="jquery/jquery-1.11.3.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
	<script type="text/javascript" src="jquery/alljquery.js"></script>

</head>
<body style="height:600px;">
	<div id="top-navbar">
		<img src="images/flash.png" id="logo">
		<a href="#"><span id="signup"> Request Login</span></a>
	</div>
	<div id="logindiv">
		<h2>LOGIN</h2>
		<table cellpadding="5px" cellspacing="6px">

			<tr>
				<td class="col1">Username/Email *</td>
				<td class="col2">:</td>
				<td><input type="text" required="true" class="inputfied"></td>
			</tr>

			<tr>
				<td class="col1">Password *</td>
				<td class="col2">:</td>
				<td><input type="password" required="true" class="inputfied"></td>
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
				<td><input type="text" required="true" class="inputfied"></td>
			</tr>

			<tr>
				<td class="col1">Shop name *</td>
				<td class="col2">:</td>
				<td><input type="text" required="true" class="inputfied"></td>
			</tr>

			<tr>
				<td class="col1">Email *</td>
				<td class="col2">:</td>
				<td><input type="text" required="true" class="inputfied"></td>
			</tr>
			
			<tr>
				<td class="col1">Phone *</td>
				<td class="col2">:</td>
				<td><input type="text" required="true" class="inputfied"></td>
			</tr>

			<tr>
				<td class="col1">Address *</td>
				<td class="col2">:</td>
				<td><input type="text" required="true" class="inputfied"></td>
			</tr>
				
				<tr>
					<td colspan="3"><input type="submit" value="Submit" class="login"></td>
				</tr>
				
			</table>
		</center>

	</div>
</body>
</html>