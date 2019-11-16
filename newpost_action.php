<?php
session_start();
include("config.php");
$db_handle = new DBController();

if(!isset($_SESSION["UID"]))
	header("location:login.html");


	$check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
	
	
	$sql = "INSERT INTO article (artID, title, description, image) 
        VALUES ('',
		'" . $_POST["title"] . "',
		'" . $_POST["desc"] . "',
		'" . $imgContent . "')";

	$result = $db_handle->runQuery($sql);	

	if($result){
	echo "New record created successfully";
	header("location:news3.php");
	}
	
	
	else{
	echo "Error: " . $sql . "<br>" . $db_handle->error();
	}
	}
	
$db_handle->closeDB();
	
		
?>