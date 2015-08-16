<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once "../config/dbconnection.php";

$result = $con->query("SELECT * FROM employee");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"Name":"'  . $rs["name"] . '",';
    $outp .= '"EmployID":"'   . $rs["employid"]        . '",';
    $outp .= '"Email":"'   . $rs["email"]        . '",';
    $outp .= '"Phone":"'   . $rs["phone"]        . '",';
    $outp .= '"Companyname":"'. $rs["companyname"]     . '"}'; 
}
$outp ='{"records":['.$outp.']}';
$con->close();

echo($outp);
?>