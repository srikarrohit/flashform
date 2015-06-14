<!DOCTYPE html>
<html>
<head>
<script>
function getdata(){
    var subname = document.getElementById("subname").innerHTML;
var x=0;
	var subcat = document.getElementById("subcat");
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
				//	console.log(1);
					x=data[obj][i].Sport;
				//	console.log(x);
					subname = subname.replace(/\s+/g, '');
				//	console.log(subname);
				//	console.log(typeof(subname));
				//	console.log(typeof(x));
				//	console.log(x.localeCompare(subname));
					if(!x.localeCompare(subname))
						{
						//	console.log(data[obj][i][x]);
						//	var l = data[obj][i][x].length;
						//	console.log(l);
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
</head>
<body>
<div id="subname" style="display:none;">
<?php
$subcat=$_GET["subcat"];
echo $subcat;
?>
</div>
<form method="post" action="success.php">
<table>
<tr>
<td>Title:</td><td><input type="text" name="title"></td>
</tr>
<tr>
<td>Details:</td><td><input type="text" name="details"></td>
</tr>
<select id="subcat">
</select>
<tr>
<td>Waranty:</td><td><input type="text" name="waranty"></td>
</tr>
<tr>
<td>Price:</td><td><input type="text" name="price"></td>
</tr>
<tr>
<td>Discount:</td><td><input type="text" name="discount"></td>
</tr>
<tr>
<td>Price After Discount:</td><td><input type="text" name="discoutprice"></td>
</tr>
<tr>
<td>Quantity:</td><td><input type="text" name="quantity"></td>
</tr>
</table>
<input type="submit" value="Submit">
</form>
<script>getdata();</script>
</body>
</html>

