<?php
$server="localhost";
$user="root";
$pass="ragasree";
$db="locmart";
$name=$_POST["name"];
$pwd=$_POST["pass"];
$conn=new PDO("mysql:host=$server;dbname=$db", $user, $pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $conn->prepare( "SELECT * FROM confirmedform WHERE username = :name AND password = :pass");
$stmt->bindParam(':name', $name);
$stmt->bindParam(':pass', $pwd);
$stmt->execute();
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
$_SESSION["name"]=$name;
?>
