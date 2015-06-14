<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
		<script src="jquery/jquery-1.11.3.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
		<script type="text/javascript" src="jquery/alljquery.js"></script>

		<script>
		
		function ajax_get_cat(){
		    var cat = document.getElementById("cat");
		    var hr = new XMLHttpRequest();
		    hr.open("GET", "cat.json", true);
		    hr.setRequestHeader("Content-type", "application/json", true);
		    hr.onreadystatechange = function() {
			    if(hr.readyState == 4 && hr.status == 200) {
				    var data = JSON.parse(hr.responseText);
					cat.innerHTML = "";
					for( var obj in data)
					{
						for(var i=0; i< data[obj].length;i++)
						{
							cat.innerHTML += "<option value="+data[obj][i].id+"> "+ data[obj][i].Category +"</option>";
						}
					}	
			    }
		    }
		    hr.send(null);
		    cat.innerHTML = "requesting...";
		}
		function getsubcat(){
		    var subcat = document.getElementById("subcat");
		    var ev = document.getElementById("cat");
		    document.getElementById("subcattitle").style.visibility="visible"
		    var cat_id = ev.options[ev.selectedIndex].value;
		var x=0;
		    var hr = new XMLHttpRequest();
		    hr.open("GET", "subcat.json", true);
		    hr.setRequestHeader("Content-type", "application/json", true);
		    hr.onreadystatechange = function() {
			    if(hr.readyState == 4 && hr.status == 200) {
				    var data = JSON.parse(hr.responseText);
					subcat.innerHTML ="" ;
					subcat.style.visibility="visible";
					submit=document.getElementById("submit");
					submit.style.visibility="visible";
					for( var obj in data)
					{
						for(var i=0; i< data[obj].length;i++)
						{
							x=data[obj][i].catid;
							y=data[obj][i].Sport;
							if(x == cat_id)
								{
									subcat.innerHTML += "<option value="+y+" id="+y+"> "+ data[obj][i].Sport +"</option>";
								}
						}
					}	
			    }
		    }
		    hr.send(null);
		    subcat.innerHTML = "requesting...";
		}
		function getdata(){
		    document.getElementById("laterform").style.visibility="visible";
		    var ev = document.getElementById("subcat");
		    var subname = ev.options[ev.selectedIndex].value;
		    var x=0;
		    var subcat = document.getElementById("subcateg");
		    var hr = new XMLHttpRequest();
		    hr.open("GET", "subcat.json", true);
		    hr.setRequestHeader("Content-type", "application/json", true);
		    hr.onreadystatechange = function() {
			    if(hr.readyState == 4 && hr.status == 200) {
				    var data = JSON.parse(hr.responseText);
					subcat.innerHTML ="" ;
					for( var obj in data)
					{
						for(var i=0; i< data[obj].length;i++)
						{
							x=data[obj][i].Sport;
							subname = subname.replace(/\s+/g, '');
							if(!x.localeCompare(subname))
								{
									for(var j=0 ; j<data[obj][i].Items.length ; j++)
									{
										x=data[obj][i].Items[j];
										console.log(typeof(x));
										subcat.innerHTML += "<option>" + x +"</option>";
									}
								}
						}
					}	
			    }
		    }
		    hr.send(null);
		    subcat.innerHTML = "requesting...";
		}
		</script>


		
		<link rel="stylesheet" type="text/css" href="css/style.css">

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
					<textarea id="descriptiontext" placeholder="Enter the description here"></textarea>				
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
	
	
		
</html>

