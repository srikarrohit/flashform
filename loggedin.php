<?php
$server="localhost";
$user="root";
$pass="ragasree";
$db="locmart";
$pwd=$_POST["pass"];
$conn=new PDO("mysql:host=$server;dbname=$db", $user, $pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if(preg_match("/[\.0-9a-zA-Z]{6,30}@[a-zA-Z0-9]+\.[a-zA-Z]+/i",$_POST["name"]))
{
	$email=$_POST["name"];
	$stmt = $conn->prepare( "SELECT * FROM confirmedform WHERE email = :email AND password = :pass");
	$stmt->bindParam(':email', $email);
	$stmt->bindParam(':pass', $pwd);
	$stmt->execute();
}
else
{
	$name=$_POST["name"];
	$stmt = $conn->prepare( "SELECT * FROM confirmedform WHERE username = :name AND password = :pass");
	$stmt->bindParam(':name', $name);
	$stmt->bindParam(':pass', $pwd);
	$stmt->execute();
}
$result = $stmt->fetch();
if(empty($result))
{
echo "No such user";
}
else
{
echo "welcome";

}
$conn=null;
?>
