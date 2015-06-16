<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "ragasree", "flashform");

$result = $conn->query("SELECT * FROM subcat");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"id":"'  . $rs["id"] . '",';
    $outp .= '"catid":"'   . $rs["catid"]        . '",';
    $outp .= '"Sport":"'   . $rs["Sport"]        . '",';
    $outp .= '"Items":'. $rs["Items"]     . '}'; 
}
$outp ='{"Subcats":['.$outp.']}';
$conn->close();

echo($outp);
?>
