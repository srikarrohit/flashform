<?php
$server="localhost";
$user="root";
$pass="ragasree";
$db="locmart";
$name=$_POST["name"];
$shop=$_POST["shop"];  
$email=$_POST["email"];  
$add=$_POST["address"];  
$phone=$_POST["phone"];  
try	{
	$conn=new PDO("mysql:host=$server;dbname=$db", $user, $pass);
    // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("INSERT INTO newloginform (name, shop, email,address,phone) 
		VALUES (:name, :shop, :email,:add,:phone)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':shop', $shop);
    $stmt->bindParam(':email', $email);
		$stmt->bindParam(':add', $add); 
		$stmt->bindParam(':phone', $phone); 
    // insert a row
    $stmt->execute();
		echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn = null;
?> 
