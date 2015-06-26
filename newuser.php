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
$conn0 = new mysqli($server, $user, $pass, $db);
// Check connection
if ($conn0->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM newloginform WHERE email='{$email}'";
$result = $conn0->query($sql);
if ($result->num_rows == 0) {
    // output data of each row
$conn0->close();
try	{
	$conn=new PDO("mysql:host=$server;dbname=$db", $user, $pass);
    // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//	$stmt0 = $conn->prepare("SELECT email from newloginform WHERE email=:email");
//	$stmt0->bindParam(':email', $email);
 // $stmt0->execute();
//  $result = $stmt0->setFetchMode(PDO::FETCH_ASSOC); 	
//	echo $result;
//	if ($result == null )
//	{
  	$stmt = $conn->prepare("INSERT INTO newloginform (name, shop, email,address,phone) 
		VALUES (:name, :shop, :email,:add,:phone)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':shop', $shop);
    $stmt->bindParam(':email', $email);
		$stmt->bindParam(':add', $add); 
		$stmt->bindParam(':phone', $phone); 
    // insert a row
		$stmt1 = $conn->prepare("INSERT INTO confirmedform (username,password) 
		VALUES (:user,:pass)");
    $stmt1->bindParam(':user', $name);
		$pass=$name . date('mY');
		$pass=md5($pass);
    $stmt1->bindParam(':pass', $pass);
    // insert a row
    $stmt1->execute();
		$stmt->execute();
//		$stmt0->execute();
//	$emailverify='';
// 	$stmt0->bind_result($emailverify)	;
//	$stmt0->fetch();
//	echo $emailverify;	 
//		}
//	else
//	{
//		echo "Email has already been taken";
//	}
   }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
}
else
{
echo "email taken";
}

//$sql="SELECT id FROM newloginform WHERE name=$name";
//$result = $conn->query($sql);
//$row = $result->fetch_assoc();
//$id=$row["id"];
$conn=null;
/*echo $id;
try	{
	$conn=new PDO("mysql:host=$server;dbname=$db", $user, $pass);
    // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("INSERT INTO confirmedform (user_id,username,password) 
		VALUES (:id,:user,:pass)");
		$stmt->bindParam(':id', $id);
    $stmt->bindParam(':user', $name);
		$pass=$name . date('mY');
		$pass=md5($key);
    $stmt->bindParam(':pass', $key);
    // insert a row
    $stmt->execute();
		echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn = null;*/
?> 
