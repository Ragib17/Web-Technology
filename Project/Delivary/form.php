<!DOCTYPE html>
<html>
<head>
<h2><span class = "blueColor">.................................................................................................................Add delivary man..........................................................................................................</span></h1>

<link rel="stylesheet" href="../css/pageone.css">
</head>
<body>


<br>
<div class = "one";>
<h3><span class = "redColor">Please fill all the sections</span></h3>
<hr>
<form action="db.php" onsubmit="return validateForm()" method="POST">
<span class = "blueColor">Delivery Person Name:</span><br>
	<input type="text" id = "pName" name="pName" placeholder="Enter Name">
	<span class="redColor" id="errorPName"></span>
	<br><br/>
	<span class = "blueColor">Mobie Number (Delivary man): </span><br>
	<input type="text" id = "mNumber" name="mNumber"placeholder="Enter Mobile Number">
	<span class="redColor" id="errorMNumber"></span>
	<br><br>
	  
	<span class = "blueColor">Email:</span><br>
	<input type="text" id = "email" name="email" placeholder="Enter Email">
	<span class="redColor" id="errorEmail"></span>
	<br><br>
	  
  <span class = "blueColor">Delivary Address:</span><br>
	<input type="text" id = "address" name="address"  placeholder="Enter Delivary address">
	<span class="redColor" id="errorAddress"></span>
	<br><br>

	<input type="submit" value="Submit" name="submit">
	<h3><a class = "redColor" href="../view/pageone.php"> go back </a></h53<br> <br>
</div>
</form>
</body>
</html>



<script>
function validateForm() {
  var pName = document.getElementById("pName").value;
  var mNumber = document.getElementById("mNumber").value;
  var email = document.getElementById("email").value;
  var address = document.getElementById("address").value;

  var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
  var res = patt.test(email);
  
  if (pName == "" ) {
   document.getElementById("errorPName").innerHTML="Please fill out Product name";
    return false;
  }
  else{
	document.getElementById("errorPName").innerHTML="";
  }


 if ( mNumber == "") {
   document.getElementById("errorMNumber").innerHTML="Please fill out Mobile Number name";
    return false;
  }
  else{
	document.getElementById("errorMNumber").innerHTML="";
  }



  if ( email == "") {
   document.getElementById("errorEmail").innerHTML="Please fill out Email";
    return false;
  }
 else if(!res)
  {
    document.getElementById("errorEmail").innerHTML="Email format is not correct";
    return false; 
  }
  else{
	document.getElementById("errorEmail").innerHTML="";
  }



  if ( address == "") {
   document.getElementById("errorAddress").innerHTML="Please fill out Address";
    return false;
  }
  else{
	document.getElementById("errorAddress").innerHTML="";
  }
  
}
</script>
<?php
include("../Jquery/jquery.php");
?>