<!DOCTYPE html>
<html>
    <body>

        <form method="post" action="entry.php" >

            <div>
                Name: <input type="text" name="fname">  
                <br>
                Quote: <input type ="text" name="quote">

            </div>


            <input type="submit" >

        </form>

        <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = htmlspecialchars($_REQUEST['fname']); 
    $quote = htmlspecialchars($_REQUEST['quote']);
    
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name."<br>";
        echo $quote;
    }
   
   

}
?>

    </body>
</html>