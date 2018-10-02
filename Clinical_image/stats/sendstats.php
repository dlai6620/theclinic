<?php

	$conn = mysqli_connect("localhost","root","","Clinical_images"); 

	//$Stat_ID = $_POST['statsPost'];
	$Image_ID = $_POST['imagePost'];
	$Level = $_POST['levelPost'];
	$Level_Completed= $_POST['completedPost'];
	//need to implement this for time
	//$Time = $_POST['timePost'];
	$Confidence_Level = $_POST['confidencePost'];
	$T_pos = $_POST['tpPost'];
	$T_neg = $_POST['tnPost'];
	$F_pos = $_POST['fpPost'];
	$F_neg = $_Post['fnPost'];


		/*$Image_ID = 2;
		$Level = 1;
		$Level_Completed= 3;
		//need to implement this for time
		//$Time = $_POST['timePost'];
		$Confidence_Level = 4;
		$T_pos = 1;
		$T_neg = 0;
		$F_pos = 0;
		$F_neg = 0;*/



	//add stuff for time
	$sql = "INSERT INTO Statistics 
			(Image_ID, Level, Level_Completed,Confidence_Level,T_Pos, T_Neg, F_Pos, F_Neg) 
			VALUES ('".$Image_ID."', '".$Level."', '".$Level_Completed."','".$Confidence_Level."','".$T_pos."','".$T_neg."', '".$F_pos."', '".$F_neg."')";


	$result = mysqli_query($conn, $sql);

	if(!$result) echo "error";
	else echo "good"; 


?> 