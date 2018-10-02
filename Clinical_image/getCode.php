<?php
   
   /* 
   		The following code enables you to get statistics from the database according to the input in c#. 

   		To use this you need access to the database, which has been made on PHPMyAdmin 
   		- Download XAMPP create a connection 
   		- Go into the XAMPP contents and find the htdocs folder 
   		- make a folder named Clinical_image
   		- make sure the path on the url is correct for it to run, so adjust it accordingly
   		- add the stats.cs scrip to the object you would like to use it with  
   		- Ensure the URL is correct, if the php file's name is changed, change the corresponding URL in both this file and stats.cs
   		- 

   */
		//currently connected to local host so you need to set up XAMPP and run this locally. 
		$conn = mysqli_connect("localhost","root","","Clinical_images"); 
		//variable allows you to create a post request from Unity (look at getCode.cs)
		$code_id = $_POST["code_Post"];

		//this the SQL query 
		//stats_id variable value will come from the value posted in unity
		$sql = "SELECT * FROM Classroom WHERE code_ID='".$code_id."'";
		//result captures the result
		$result = mysqli_query($conn, $sql);
		
		//check if there is a result
		if(mysqli_num_rows($result)>0){

			//$row is the row containing the values from result
			$row =mysqli_fetch_assoc($result);

			//Prints out the values from the row, corresponding to their name in the databse
			echo "".$row['Code'];
			
		}


?>