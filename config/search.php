<?php
    $key=$_GET['key'];
    $array = array();
    $con=mysqli_connect("localhost","root","");
    $db=mysqli_select_db("demo",$con);
    $query=mysqli_query("select * from employee where name LIKE '%{$key}%'");
    while($row=mysqli_fetch_assoc($query))
    {
      $array[] = $row['title'];
    }
    echo json_encode($array);
?>