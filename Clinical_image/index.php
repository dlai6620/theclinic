<?php

   
   /* TO DO
   		- RANDOMISATION 
   		- INTEGRATE LEVELS --> EXTRACT BASED ON LEVEL OR WHAT WE CAN DO IS 
   			get the image from different PHP files depending on what level you are on 

   		- */

    /*define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_DATABASE", "Clinical_images");

    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);*/

	//check connection 
	
	/*if(!$conn){
		die("Connection Failed". mysqli_connect_error());
	}
	
	else echo("Connection Success");*/
	
	//header('Content-type: image/jpeg');
	//$sql= "SELECT ID FROM Normal WHERE ID=1";
	//$result = mysqli_query($conn, $sql);
	
		$conn = mysqli_connect("localhost","root","","Clinical_images"); 
		$image_id = $_POST["Clinical_imagesPost"];
		//make a random thingo using mySQL --> ID = %rand; do something like this 
		//$sql = "SELECT * FROM Normal";
		$sql2 = "SELECT * FROM Normal WHERE ID='".$image_id."'";
		//".$image_id."'";
		//$result = mysqli_query($conn, $sql);
		$result2 = mysqli_query($conn, $sql2);
		$row2 =mysqli_fetch_assoc($result2);

			
		if(mysqli_num_rows($result2)>0){

			echo "".base64_encode($row2['Image']);


		}

?>