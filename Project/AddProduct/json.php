

<h2><p style='color:blue;'>......................................................................................................Add product.....................................................................................................................</p></h2>
<?php
   	

	   //Get form data
	   $formdata = array(
	      'Product Name'=> $_POST["pName"],
	      'Product Number'=> $_POST["pNumber"],
	      'Product Price'=> $_POST["pPrice"],
	      'Production Date'=> $_POST["pDate"],
          'Expire Date'=> $_POST["eDate"],
          'Quantity'=> $_POST["quantity"]
          
	   );
       $existingdata = file_get_contents('data.json');
       $tempJSONdata = json_decode($existingdata);
       $tempJSONdata[] =$formdata;
       //Convert updated array to JSON
	   $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
	   
	  
	   if(file_put_contents("data.json", $jsondata)) {
	        echo "<p style='color:green;'>Data successfully saved</p> <br>";
	    }
	   else 
	        echo "no data saved";

     $data = file_get_contents("data.json");
	 $mydata = json_decode($data);

    
?>


<h3><a href="../AddProduct/data.json"> <p style='color:red;'>View add product requests </p></a></h53<br> <br>
<h3><a href="../AddProduct/form.php"> <p style='color:red;'>Add More ?</p> </a></h53<br> <br>