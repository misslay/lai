<?php
session_start();
include("config.php");
$db_handle = new DBController();

	//$c=$db_handle->connectDB();
	//$artID= mysqli_real_escape_string($c,$_GET['artID']);
	$sql = "SELECT * FROM article where artID=". $_GET["artID"];
	$img_array = $db_handle->runQuery($sql);
	
	 
			foreach($img_array as $key=>$value)
			{
				$imageData=$img_array[$key]["image"];
				
			}
		
		
	header("content-type:image/jpeg");
	echo $imageData;
}
   
   

?>