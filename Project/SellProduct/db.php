 
<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="../css/pageone.css">	
</head>
<body>

<?php


$pname = $pnumber  = $pprice = $pdate = $edate = $quantity = "";
$pNumberErr = $pNameErr = $pPriceErr = $pDateErr = $eDateErr = $quantityErr = "";



$check = 0;
if($_SERVER["REQUEST_METHOD"] == "POST"){

    if (empty($_POST["pName"])) {
        $pNumberErr = "Product Name Required";
        $check = 1;
    }

    if (empty($_POST["pNumber"])) {
        $pNameErr = "Product Number Required";
        $check = 1;
    } 

    if (empty($_POST["pPrice"])) {
        $pPriceErr = "Product Price Required";
        $check = 1;
    } 
    
    if (empty($_POST["pDate"])) {
        $pDateErr = "Product Date Required";
        $check = 1;
    } 
    


    if (empty($_POST["eDate"])) {
        $eDateErr = "Product Expand Required";
        $check = 1;
    } 
    if (empty($_POST["quantity"])) {
       $quantityErr = "Product Quantity Required";
        $check = 1;
    } 
   

     
    
}

if($check == 1){
    header("Location: http://localhost/Project_Mid_Term/SellProduct/form.php?pNumberErr=$pNumberErr&pNameErr=$pNameErr&pPriceErr=$pPriceErr&pDateErr=$pDateErr&eDateErr=$eDateErr&quantityErr=$quantityErr");
}





include("../SellProduct/json.php");
 
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
$pnumber = $_POST['pNumber'];
$pprice = $_POST['pPrice'];
$pdate = $_POST['pDate'];
$edate =$_POST['eDate'];
$quantity = $_POST['quantity'];

$sql = "INSERT INTO sellproduct (pname, pnumber,  pprice,  pdate,  edate, quantity) VALUES ('$pname', '$pnumber', '$pprice', '$pdate', '$edate', '$quantity')";

if($conn->query($sql) === TRUE) {
echo "<br><p style='color:green;'> Database also created </p><br>";
} else {
    echo "Error" .$sql . "<br>" . $conn->error;
}

$conn->close();

?>
</body>