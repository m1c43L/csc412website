<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
$servername = "localhost";
$username = "csc412";
$password = "csc412";


$con=mysqli_connect('localhost','csc412','csc412','csc412');


// Check connection
if (mysqli_connect_errno($con)) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM MyTable");

while($row = mysqli_fetch_array($result)) {
  echo $row['name'] . " " . $row['age'] . " " . $row['quote'] . $row['country'];
  echo "<br>";
}

mysqli_close($con);
?>



