<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">  
		<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui.min.js"></script>
		<script type="text/javascript" src="js/alljquery.js"></script>
	 	<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/index.js"></script>
	<!--	<link rel="stylesheet" type="text/css" href="css/index.css"> -->
	<!--	<link rel="stylesheet" type="text/css" href="css/summernote.css">-->
		<script type="text/javascript" src="js/ajax.js"></script> 
		<script type="text/javascript" src="js/flowtype.js"></script>
	<!--	<script type="text/javascript" src="js/summernote.min.js"></script> -->
	<!--	<script type="text/javascript" src="//code.jquery.com/jquery-1.9.1.min.js"></script> -->
<link rel="stylesheet" href="css/bootstrap.min.css" />
<!-- <script type="text/javascript" src="js/bootstrap.min.js"></script> -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />  
<link href="summernote.css" rel="stylesheet">
<script src="summernote.min.js"></script> 

	</head>

	<body>
		<div class="top-navbar">
			<a href="#"><img src="images/flash.png" id="logo"></a>
		</div>

		<div id="glyphy-pos-div1" class="glyphicons" title="Home Page">
			<span class="glyphicon glyphicon-home gly" aria-hidden="true" ></span>
		</div>
		
		<div id="glyphy-pos-div2" class="glyphicons" title="Profile">
			<span class="glyphicon glyphicon-user gly" aria-hidden="true"></span>
		</div>
		
		<div id="glyphy-pos-div3" class="glyphicons" title="List of Products">
			<span class="glyphicon glyphicon-list gly" aria-hidden="true"></span>
		</div>

		<div id="glyphy-pos-div4" class="glyphicons" title="Log out">
			<span class="glyphicon glyphicon-log-out gly" aria-hidden="true"></span>
		</div>
		<div id="topmenubar">
			<div id="catselect">

				<span id="cattitle">Select the category :</span><br>
				<select id = "cat" class="button form-control"></select>
				<input type="button" value="Browse" onclick="getsubcat();" class="browse button btn btn-info" id="catsubmit">

			</div>
		</div>

		<div id="subcatselect">
			<span id="subcattitle" style="visibility:hidden" >Select the Sub-Category :</span><br>
			<select id="subcat" name="subcat" class="button form-control" style="visibility:hidden"></select>
			<input type="button" id="submit" value="Submit" style="visibility:hidden" class="button btn btn-info" onclick="getdata();">
		</div>

		<div id="prodtype">
			<span class="titlename">Select Product Type</span>
			<br>
			<select id="subcateg" class="button form-control">
						
			</select>
		</div>
		
		<form method="post" action="success.php" class="form">
			
			<div id="description">
				<span id="destitlename">Title</span><br>
				<input type="text" id="destitle" placeholder="Title of the Product" class="form-control ab" aria-describedy="sizing-addon3">
				<span id="desname">Description</span>
				
				<div id='descriptiontext'></div>
			</div>

			<div id="laterform">
					
					<span id="tabletitle">Product Details</span>

					<table id="formforsports" cellspacing="5em">
						<tr>
							<td class="names">Brand*</td><td>:</td><td class="fields"><input class="form-control" aria-describedy="sizing-addon3" type="text" name="title" placeholder="Title of the Product" required="true"></td>
						</tr>
						
						<tr>
							<td class="names">Details*</td><td>:</td><td class="fields"><input class="form-control" aria-describedy="sizing-addon3" type="text" name="details" placeholder="Details" required="true"></td>
						</tr>
						
						<tr>
							<td class="names">Waranty*</td><td>:</td><td class="fields"><input class="form-control" aria-describedy="sizing-addon3" type="text" name="waranty" placeholder="Eg: 1 year" required="true"></td>
						</tr>
						
						<tr>
							<td class="names">Price* (Rs)</td><td>:</td><td class="fields"><input class="form-control" aria-describedy="sizing-addon3" type="text" name="price" placeholder="Eg: 1000" required="true"></td>
						</tr>
						
						<tr>
							<td class="names">Discount</td><td>:</td><td class="fields"><input class="form-control" aria-describedy="sizing-addon3" type="text" name="discount" placeholder="Eg:10%"></td>
						</tr>
						
						<tr>
							<td class="names">Price After Discount</td><td>:</td><td class="fields"><input class="form-control" aria-describedy="sizing-addon3" type="text" name="discoutprice" placeholder="Eg: 900"></td>
						</tr>
						
						<tr>
							<td class="names">Quantity*</td><td>:</td><td class="fields"><input class="form-control" aria-describedy="sizing-addon3" type="text" name="quantity" placeholder="Eg: 15" required="true"></td>
						</tr>
					</table>
					
					<input type="submit" value="Submit" class="btn btn-info" id="subcatsubmit">

			</div>
	
			<div id="profile" class="layer two">

				<div id="personinfo" style="word-wrap:break-word">
					<h3>Krishna Chaitanya</h3>
					<img src="images/bg.png" id="prof-pic" class="img-wrapper">
					<ul>
						<li><span class="glyphicon glyphicon-tag glyphys"></span>Shop Name</li>
						<li><span class="glyphicon glyphicon-map-marker glyphys"></span>Street No: 1234, CSIR road , Chennai, 600036</li>
						<li><span class="glyphicon glyphicon-earphone glyphys"></span>9003118838</li>
						<li><span class="glyphicon glyphicon-send glyphys"></span>krishna.krishna.k75@gmail.com</li>
					</ul>
				</div>

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

