<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "krish", "flashform");

$result = $conn->query("SELECT * FROM cat");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"id":"'  . $rs["id"] . '",';
    $outp .= '"Category":"'. $rs["Category"]     . '"}'; 
}
$outp ='{"Categories":['.$outp.']}';
$conn->close();

echo($outp);
?>
