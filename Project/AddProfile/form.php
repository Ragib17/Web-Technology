
<?php


$fnameErr = $lnameErr = $emailErr = $mobileErr = $addressErr =$workTypeErr = "";

if(isset($_GET['fnameErr'])){
	$fnameErr = $_GET['fnameErr'];
}
if(isset($_GET['lnameErr'])){
	$lnameErr = $_GET['lnameErr'];
}
if(isset($_GET['emailErr'])){
	$emailErr = $_GET['emailErr'];
}
if(isset($_GET['mobileErr'])){
	$mobileErr = $_GET['mobileErr'];
}


if(isset($_GET['addressErr'])){
	$addressErr = $_GET['addressErr'];
}
if(isset($_GET['workTypeErr'])){
	$workTypeErr = $_GET['workTypeErr'];
}





?>

<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="../css/pageone.css">
</head>
<body>
<h2><span class = "blueColor">.........................................................................................................Welcome to Add Profile.......................................................................................................... </span></h2><br>

<div class = "one">
<h3><span class = "redColor">Please fill all the sections</span></h3>
<hr>

<form action="db.php" method="post">
	<span class = "blueColor">First name:</span><br>
	<input type="text" name="firstName"placeholder="Enter Name">
	<span class="redColor"><?php echo $fnameErr ?></span>
	<br><br/>
	<span class = "blueColor">Last name:</span><br>
	<input type="text" id = "lastName" name="lastName" placeholder="Enter Last Name">
	<span class="redColor"><?php echo $lnameErr ?></span>
	<br><br>
	  
	<span class = "blueColor">Email:</span><br>
	<input type="text" id = "email" name="email" placeholder="Enter Email">
	<span class="redColor"><?php echo $emailErr ?></span>
	<br><br>
	  
	<span class = "blueColor">Mobile:</span><br>
	<input type="text" id = "mobile" name="mobile"placeholder="Enter Mobile Number">
	<span class="redColor"> <?php echo $mobileErr ?></span>
	<br><br>

    <span class = "blueColor">address</span><br>
	<input type="text" id = "address" name="address"placeholder="Enter Address">
	<span class="redColor"><?php echo $addressErr ?></span>
	<br><br>

    <span class = "blueColor">Work Type (Part time/ Full)</span><br>
	<input type="radio" name="workType" value="Full Time"><span class = "yellowColor">Full Time</span>
	<input type="radio" name="workType" value="Part Time"><span class = "yellowColor">Part Time</span>
	<br>
	<span class="redColor"><?php echo $workTypeErr ?></span>
	<br><br>

	


	<input type="submit" id = "submit" name = "submit" value="Submit">
</form>

<h3><a class = "redColor" href="../view/pageone.php"> go back </a></h53<br> <br>
</div>
</body>
</html>
<?php
include("../Jquery/jquery.php");
?>





