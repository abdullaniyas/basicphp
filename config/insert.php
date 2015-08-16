<!doctype html>
<html>
    <head>
        
    </head>
    <body>
<?php
include_once "dbconnection.php";

if(isset($_POST["name"])){                            //isset — Determine if a variable is set and is not NULL
	$name=$_POST["name"];} else {$name="";}
if(isset($_POST["employid"])){
	$employid=$_POST["employid"];} else {$employid="";}
if(isset($_POST["email"])){
	$email=$_POST["email"];} else {$email="";}
if(isset($_POST["phone"])){
	$phone=$_POST["phone"];} else {$phone="";}
if(isset($_POST["companyname"])){
	$companyname=$_POST["companyname"];} else {$companyname="";}
	


$sql="INSERT INTO employee (name, employid, email, phone, companyname)
        VALUES ('$name', '$employid', '$email', '".$phone."', '$companyname')";


if (!mysqli_query($con, $sql))
  {
	  //console.log('failed');
  //die('Error: ' . mysql_error($con));
  echo " Sorry for the inconvenience, please insert again.";
  } else {
      echo "Thank you for contacting, Will get back to you soon. ";
      header('Location: ../index.php?success=1'); 
  }
  
//  echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.html">';    
exit;
?>
    </body>
</html>
