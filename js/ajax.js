	function ajax_get_cat(){
		    var cat = document.getElementById("cat");
		    var hr = new XMLHttpRequest();
		    hr.open("GET", "phpfetch.php", true);
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
		    hr.open("GET", "phpfetchsubcat.php", true);
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
		    hr.open("GET", "phpfetchsubcat.php", true);
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
