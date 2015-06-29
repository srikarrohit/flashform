function validateForm(){
var name = document.forms["loginform"]["name"].value;
var pass = document.forms["loginform"]["pass"].value;
var n_error=pass_error="";
var count=0;
if(name === "")
{
//	alert(2);
	count++;
	n_error="Name/Email cannot be empty";
	document.getElementById('n_error').innerHTML = n_error;
}
else
{
	n_error="";
	document.getElementById('n_error').innerHTML = n_error;
}
if(pass === "")
{
//	alert(2);
	count++;
	pass_error="Password cannot be empty";
	document.getElementById('pass_error').innerHTML = pass_error;
}
else if( pass.match(/[\.0-9a-zA-Z\s]+/gi) != pass )
{
	count++;
	pass_error="Only letters,numbers,spaces and dots are allowed";
	document.getElementById('pass_error').innerHTML = pass_error;
}
else if( pass.length!=8 )
{
	count++;
	pass_error="Password is of 8 characters in length";
	document.getElementById('pass_error').innerHTML = pass_error;
}
else
{
	pass_error="";
	document.getElementById('pass_error').innerHTML = pass_error;
}
if(count!=0)
{
	return false;
}
else
{
	return true;
}
}
function valnewlogin(){
//alert(1);
var name = document.forms["newlogin"]["name"].value;
var shop = document.forms["newlogin"]["shop"].value;
var add = document.forms["newlogin"]["address"].value;
var email = document.forms["newlogin"]["email"].value;
var phone = document.forms["newlogin"]["phone"].value;  
var name_error=sname_error=add_error=email_error=phone_error="";
var count=0;
if(name === "")
{
//	alert(2);
	count++;
	name_error="Name cannot be empty";
	document.getElementById('name_error').innerHTML = name_error;
}
else if( name.match(/[\.0-9a-zA-Z\s]+/gi) != name )
{
	count++;
	name_error="Only letters,numbers,spaces and dots are allowed";
	document.getElementById('name_error').innerHTML = name_error;
}
else
{
	name_error="";
	document.getElementById('name_error').innerHTML = name_error;
}
if(shop === "")
{
//	alert(3);
	count++;
	sname_error="Shop Name cannot be empty";
	document.getElementById('sname_error').innerHTML = sname_error;
}
else if( shop.match(/[\.0-9a-zA-Z\s]+/gi) != shop )
{
	count++;
	sname_error="Only letters,numbers,spaces and dots are allowed";
	document.getElementById('sname_error').innerHTML = sname_error;
}
else
{
	sname_error="";
	document.getElementById('sname_error').innerHTML = sname_error;
}
if(add === "")
{
//	alert(4);
	count++;
	add_error="Address cannot be empty";
	document.getElementById('add_error').innerHTML = add_error;
}
else
{
	add_error="";
	document.getElementById('add_error').innerHTML = add_error;
}
if(email === "")
{
//	alert(5);
	count++;
	email_error="Email id cannot be empty";
	document.getElementById('email_error').innerHTML = email_error;
}
else if( email.match(/[\.0-9a-zA-Z]{1,30}@[a-zA-Z0-9]+\.[a-zA-Z]+/gi) != email )
{
	count++;
	email_error="Email id is invalid";
	document.getElementById('email_error').innerHTML = email_error;
	console.log(email.match(/[\.0-9a-zA-Z]{6,30}@[a-zA-Z0-9]+\.[a-zA-Z]+/gi));
}
else
{
	email_error="";
	document.getElementById('email_error').innerHTML = email_error;
}
if(phone === "")
{
//	alert(6);
	count++;
	phone_error="Phone number cannot be empty";
	document.getElementById('phone_error').innerHTML = phone_error;
}
else if( phone.match(/[0-9]{10}/g) != phone)
{
	count++;
	phone_error="Phone number is invalid";
	document.getElementById('phone_error').innerHTML = phone_error;
}
else
{
	phone_error="";
	document.getElementById('phone_error').innerHTML = phone_error;
}
if(count!=0)
{
	return false;
}
else
{
	return true;
}
}

