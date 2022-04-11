<h2><p style='color:blue;'>..........................................Add delivary man............................................</p></h2>
<br>
<?php
   	

	  
	   $formdata = array(
	      'Name'=> $_POST["pName"],
	      'Number'=> $_POST["mNumber"],
	      'email'=>$_POST["email"],
          'address'=> $_POST["address"],
         
	   );
       $existingdata = file_get_contents('data.json');
       $tempJSONdata = json_decode($existingdata);
       $tempJSONdata[] =$formdata;
       
	   $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
	   
	  
	   if(file_put_contents("data.json", $jsondata)) {
	        echo "<p style='color:green;'>Data successfully saved </p>";
	    }
	   else 
	        echo "no data saved";

     $data = file_get_contents("data.json");
	 $mydata = json_decode($data);

    
?>

<br>
<br>

<br><h3><a href="../Delivary/data.json"> <p style='color:red;'>View all details</p></a></h53<br>
<h3><a href="../Delivary/form.php"> <p style='color:red;'>Add More? </p></a></h53<br> <br>
