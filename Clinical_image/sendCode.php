<?php

	$conn = mysqli_connect("localhost","root","","Clinical_images"); 

	//$Stat_ID = $_POST['statsPost'];
	$Code_ID = $_POST['code_Post'];


	//add stuff for time
	$sql = "INSERT INTO Classroom (Code)
			VALUES ('".$Code_ID."')";


	$result = mysqli_query($conn, $sql);

	if(!$result) echo "error";
	else echo "good"; 


?> 