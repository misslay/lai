<?php
	session_start();
	include("config.php");
	$db_handle = new DBController();
?>

<html>
<body>
	<h2>Login Information</h2>
<?php
	
	$userName = $_POST['email']; 
	$passWord = $_POST['pass'];
	
	//sql statement
	$sql = "SELECT userID FROM user 
	WHERE email='$userName' AND 
	pass='$passWord' LIMIT 1"; 
	
	$login_data = $db_handle->runQuery($sql);
	
	if (!empty($login_data)) 
	{	
		//$result = mysqli_query($conn, $sql);
		echo "Login success. <br> Thank you for filling out the login form, <b>".$userName."</b>.<br /><br />";
		
		//$row = mysqli_fetch_assoc($result);
		$_SESSION["UID"]=$login_data[0]["userID"];
	
		header("location:index3.php");
	} 
	else 
	{
		echo "Login error, username or password is incorrect.";
	} 
	$db_handle->closeDB();
?>

</body>
</html>