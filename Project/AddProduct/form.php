<?php





$pNumberErr = $pNameErr = $pPriceErr = $pDateErr = $eDateErr = $quantityErr = "";

if(isset($_GET['pNameErr'])){
	$pNameErr = $_GET['pNameErr'];
}
if(isset($_GET['pNumberErr'])){
	$pNumberErr = $_GET['pNumberErr'];
}
if(isset($_GET['pPriceErr'])){
	$pPriceErr = $_GET['pPriceErr'];
}
if(isset($_GET['pDateErr'])){
	$pDateErr = $_GET['pDateErr'];
}


if(isset($_GET['eDateErr'])){
	$eDateErr = $_GET['eDateErr'];
}
if(isset($_GET['quantityErr'])){
	$quantityErr = $_GET['quantityErr'];
}





?>

<!DOCTYPE html>
<html>
	<head>
	
	<link rel="stylesheet" href="../css/pageone.css">	
</head>
<body>
<h2><span class = "blueColor">............................................................................................Welcome TO Add product...........................................................................................</span></h2><br>

<div class = "one">

<h3><span class = "redColor">Please fill up all the sections</span></h3>
<hr>
<br>

<form action="db.php" method="POST">
<span class = "blueColor">Product name: </span><br>
<input type="text" name="pName"placeholder="Product Name">
	<span class="redColor"><?php echo $pNameErr ?></span>
	<br><br/>
	<span class = "blueColor">Product Id: </span><br>
	<input type="text" name="pNumber"placeholder="Product Id">
	<span class="redColor"><?php echo $pNumberErr ?></span>
	<br><br>
	  
	<span class = "blueColor">Product Price (Each):</span><br>
	 <input type="text" name="pPrice"placeholder="Price">
	<span class="redColor"><?php echo $pPriceErr ?></span>
	<br><br>
	  
	<span class = "blueColor">Production Date:</span><br>
	 <input type="text" name="pDate"placeholder="Production Date">
	<span class="redColor"><?php echo $pDateErr ?></span>
	<br><br>

	<span class = "blueColor"> Expire Date:</span><br>
	 <input type="text" name="eDate"placeholder="Expire Date">
	<span class="redColor"><?php echo $eDateErr ?></span>
	<br><br>

    <span class = "blueColor">Quantity:</span> <br>
	<input type="text" name="quantity"placeholder="Quantity">
	<span class="redColor"><?php echo $quantityErr ?></span>
	<br><br>

	<input  type="submit" value="Add">

	<h3><a class = "redColor" href="../view/pageone.php"> go back </a></h53<br> <br>
</div>
</form>
</body>
</html>

<?php
include("../Jquery/jquery.php");
?>

