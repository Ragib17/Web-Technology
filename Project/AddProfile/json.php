<h2><p style='color:blue;'>.....................................................................................................Request to add profile.......................................................................................................</p></h2><br>
<?php
   	

	   //Get form data
	   $formdata = array(
	      'firstName'=> $_POST["firstName"],
	      'lastName'=> $_POST["lastName"],
	      'email'=>$_POST["email"],
	      'mobile'=> $_POST["mobile"],
          'address'=> $_POST["address"],
          'workType'=> $_POST["workType"],
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
<br>


<h3><a href="../AddProfile/data.json"><p style='color:red;'> View add profile requests</p></a></h53<br>
<h3><a href="../AddProfile/form.php"><p style='color:red;'> Add More?</p> </a></h53<br> <br>