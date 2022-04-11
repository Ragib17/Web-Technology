<?php
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: ../control/login.php"); 
}

?>


<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="../css/pageone.css">

</head>
<body>
 

<h2> <span class = "blueColor">..................................................................................................Welcome to home page for staff members..............................................................................</span></h2>
<hr>

<div class = "one">

    <h3> <a class = "button" href="../AddProfile/form.php"> Request to add profile</a> <span class = "redColor">---------></span> <a class = "button"  href="../AddProfile/data.json">See History</a></h3><br>
    <h3><a class = "button" href="../AddProduct/form.php"> Request to add product</a> <span class = "redColor">---------></span> <a class = "button" href="../AddProduct/data.json"> See History</a></h3><br>
    <h3><a class = "button" href="../Delivary/form.php"> Request to assign delivary man information</a> <span class = "redColor">---------></span> <a class = "button" href="../Delivary/data.json"> See History</a></h3><br>
    <h3><a class = "button" href="../SellProduct/form.php"> Request to sell product</a> <span class = "redColor">---------></span> <a class = "button" href="../SellProduct/data.json">See History</a></h3><br>

    <h3> <a class = "redColor" href="../control/logout.php">logout</a></h3>

</div>



</body>
</html>

<?php


?>   
<?php
include("../Jquery/jquery.php");
?>

