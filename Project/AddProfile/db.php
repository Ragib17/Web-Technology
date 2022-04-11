<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="../css/pageone.css">	
</head>
<body>
<?php

$fname = $lname = $email = $mobile = $address = $workType = "";
$fnameErr = $lnameErr = $emailErr = $mobileErr = $addressErr = $workTypeErr = "";
$check = 0;
if($_SERVER["REQUEST_METHOD"] == "POST"){

    if (empty($_POST["firstName"])) {
        $fnameErr = "First Name Required";
        $check = 1;
    }

    if (empty($_POST["lastName"])) {
        $lnameErr = "Last Name Required";
        $check = 1;
    } 

    if (empty($_POST["email"])) {
        $emailErr = "Email Required";
        $check = 1;
    } 
    else {
        $emailx = $_POST['email'];
        if (!filter_var($emailx, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Invalid email format";
          $check = 1;
        }
    }



    if (empty($_POST["mobile"])) {
        $mobileErr = "Mobile number Required";
        $check = 1;
    } 
    


    if (empty($_POST["address"])) {
        $addressErr = "Address Required";
        $check = 1;
    } 
    if (empty($_POST["workType"])) {
       $workTypeErr = "Select work type";
        $check = 1;
    } 

     
    
}

if($check == 1){
    header("Location: http://localhost/Project_Mid_Term/AddProfile/form.php?fnameErr=$fnameErr&lnameErr=$lnameErr&emailErr=$emailErr&mobileErr=$mobileErr&addressErr=$addressErr&workTypeErr=$workTypeErr");
}

$fname = $_POST['firstName'];
$lname = $_POST['lastName'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$address =$_POST['address'];
$workType = $_POST['workType'];


include("../AddProfile/json.php");
 
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



$sql = "INSERT INTO addprofile (firstName, lastName,  email,  mobile,  addresss , workType) VALUES ('$fname', '$lname', '$email', '$mobile', '$address', '$workType')";
 
if($conn->query($sql) === TRUE) {
echo "<br><p style='color:green;'>Database data also created </p><br> <br>";
} else {
    echo "Error" .$sql . "<br>" . $conn->error;
}

$conn->close();


?>


</body>

