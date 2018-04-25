<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
 <?php
         $conn = new mysqli('localhost', 'csc412', 'csc412', 'csc412');


// Check connection
            if (mysqli_connect_errno($con)) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
     $name = $_POST['fname'];
     $quote = $_POST['quote'];
        
            $sql = "INSERT INTO MyTable (`name`,`quote`) VALUES ('$name', '$quote')";

        if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
  ?>