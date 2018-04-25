<!DOCTYPE html>
<html>
<body>

    <form method="post" action="welcome_visitor.php">
    
    <div>
        Name: <input type="text" name="fname">  
        <br>
        Email: <input type ="email" name="mail">
        
    </div>
    
         
    <input type="submit" >

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = htmlspecialchars($_REQUEST['fname']); 
    $email = htmlspecialchars($_REQUEST['mail']);
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name."<br>";
        echo $email;
    }
    header("Location:http://csc412sfsu.com/~mgilber1/welcome_visitor.php");
   

}
?>

</body>
</html>