<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">  
		<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui.min.js"></script>
			<script type="text/javascript" src="js/alljquery.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>

	<!--	<link rel="stylesheet" type="text/css" href="css/summernote.css">-->
		<script type="text/javascript" src="js/ajax.js"></script> 
	<!--	<script type="text/javascript" src="js/summernote.min.js"></script> -->
	<!--	<script type="text/javascript" src="//code.jquery.com/jquery-1.9.1.min.js"></script> -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />
<script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />  
<link href="summernote.css" rel="stylesheet">
<script src="summernote.min.js"></script> 

	</head>

	<body>
		<div class="top-navbar">
			<a href="#"><img src="images/flash.png" id="logo"></a>
		</div>

		<div id="topmenubar">
			<div id="catselect">

				<span id="cattitle">Select the category :</span><br>
				<select id = "cat" class="button"></select>
				<input type="button" value="Browse" onclick="getsubcat();" class="browse button" id="catsubmit">

			</div>
		</div>

		<div id="subcatselect">
			<span id="subcattitle" style="visibility:hidden" >Select the Sub-Category :</span><br>
			<select id="subcat" name="subcat" class="button" style="visibility:hidden"></select>
			<input type="button" id="submit" value="Submit" style="visibility:hidden" class="button" onclick="getdata();">
		</div>

		<div id="prodtype">
			<span class="titlename">Select Product Type</span>
			<br>
			<select id="subcateg" class="button">
						
			</select>
		</div>
		
		<form method="post" action="success.php">
			
				<div id="description">
					<span id="destitlename">Title</span><br>
					<input type="text" id="destitle" placeholder="Title of the Product">
					<span id="desname">Description</span>
					<!--<textarea id="descriptiontext" placeholder="Enter the description here"></textarea>-->
					<div id='descriptiontext'></div>
				</div>

				<div id="laterform">
						
						<span id="tabletitle">Product Details</span>

						<table id="formforsports" cellspacing="5em">
							<tr>
								<td>Brand*</td><td>:</td><td><input class="textfields" type="text" name="title" placeholder="Title of the Product" required="true"></td>
							</tr>
							
							<tr>
								<td>Details*</td><td>:</td><td><input class="textfields" type="text" name="details" placeholder="Details" required="true"></td>
							</tr>
							
							<tr>
								<td>Waranty*</td><td>:</td><td><input class="textfields" type="text" name="waranty" placeholder="Eg: 1 year" required="true"></td>
							</tr>
							
							<tr>
								<td>Price* (Rs)</td><td>:</td><td><input class="textfields" type="text" name="price" placeholder="Eg: 1000" required="true"></td>
							</tr>
							
							<tr>
								<td>Discount</td><td>:</td><td><input class="textfields" type="text" name="discount" placeholder="Eg:10%"></td>
							</tr>
							
							<tr>
								<td>Price After Discount</td><td>:</td><td><input class="textfields" type="text" name="discoutprice" placeholder="Eg: 900"></td>
							</tr>
							
							<tr>
								<td>Quantity*</td><td>:</td><td><input class="textfields" type="text" name="quantity" placeholder="Eg: 15" required="true"></td>
							</tr>
						</table>
						
						<input type="submit" value="Submit" id="subcatsubmit">

				</div>
		</form>
		<script>ajax_get_cat();</script>

	</body>
	
	<script type="text/javascript">
    		$(document).ready(function() {
  			$('#descriptiontext').summernote();
			});
  		</script>
		
</html>

