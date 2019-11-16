<?php
session_start();
include("config.php");
$db_handle = new DBController();


if(!isset($_SESSION["UID"]))
	header("location:login.html");

$sql = "DELETE FROM article WHERE artID=" . $_GET["artID"];
$result = $db_handle->runQuery($sql);

if($result){
	echo "Record deleted successfully";
	header("location:news3.php");
}
else{
	echo "Error: " . $sql . "<br>" . $db_handle->error();
}	
$db_handle->closeDB();
?>