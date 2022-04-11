<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="../css/pageone.css">	
</head>
<body>

<?php
include("../Delivary/json.php");
 
$servername = "localhost";
$username =  "root";
$password = "";
$dbname = "project";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//check connection
if($conn->connect_error){

    die("Connection failed:" .$conn->connect_error);
}


$pname = $_POST['pName'];
$mnumber = $_POST['mNumber'];
$email = $_POST['email'];
$address = $_POST['address'];


$sql = "INSERT INTO delivary (pName, mNumber,  email,  dAddress) VALUES ('$pname', '$mnumber', '$email', '$address')";
 
if($conn->query($sql) === TRUE) {
echo "<br><p style='color:green;'>Database also created</p> <br>";
} else {
    echo "Error" .$sql . "<br>" . $conn->error;
}

$conn->close();


?>
</body>

