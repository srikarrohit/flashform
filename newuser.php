<?php
$server="localhost";
$user="root";
$pass="krish";
$db="locmart";
$name=$_POST["name"];
$shop=$_POST["shop"];  
$email=$_POST["email"];  
$add=$_POST["address"];  
$phone=$_POST["phone"];  
$conn0=new PDO("mysql:host=$server;dbname=$db", $user, $pass);
$conn0->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt0 = $conn0->prepare( "SELECT * FROM newloginform WHERE email = :email");
$stmt0->bindParam(':email', $email);
$stmt0->execute();
$result = $stmt0->fetch();
if (empty($result)) {
try	{
	$conn=new PDO("mysql:host=$server;dbname=$db", $user, $pass);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  	$stmt = $conn->prepare("INSERT INTO newloginform (name, shop, email,address,phone) 
		VALUES (:name, :shop, :email,:add,:phone)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':shop', $shop);
    $stmt->bindParam(':email', $email);
		$stmt->bindParam(':add', $add); 
		$stmt->bindParam(':phone', $phone); 
		$stmt1 = $conn->prepare("INSERT INTO confirmedform (username,email,password) 
		VALUES (:user,:email,:pass)");
    $stmt1->bindParam(':user', $name);
		$stmt1->bindParam(':email', $email);
		$password=generatePassword();
    $stmt1->bindParam(':pass', $password);
     $stmt1->execute();
		$stmt->execute();
echo (extension_loaded('openssl')?'SSL loaded':'SSL not loaded')."\n";
$message = "Your username is".$name."/nYour Password is".$password;
require("PHPMailer-master/PHPMailerAutoload.php");

$mail = new PHPMailer();

$mail->IsSMTP();
$mail->SMTPDebug = 1;
$mail->SMTPSecure = 'tls';
$mail->Host = "smtp.gmail.com"; 
$mail->Port = 587;
$mail->SMTPAuth = true;   
$mail->Username = "";  
$mail->Password = ""; 
$mail->setFrom = "";
$mail->addReplyTo("");
$mail->AddAddress($email);

$mail->WordWrap = 50;
$mail->IsHTML(true);

$mail->Subject = "You have received feedback from your website!";
$mail->Body    = $message;
$mail->AltBody = $message;

if(!$mail->Send())
{
   echo "Message could not be sent. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo "Message has been sent";

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
$conn=null;
$conn0=null;
	function generatePassword($length = 8) {
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $count = mb_strlen($chars);

    for ($i = 0, $result = ''; $i < $length; $i++) {
        $index = rand(0, $count - 1);
        $result .= mb_substr($chars, $index, 1);
    }

    return $result;
}
?>
