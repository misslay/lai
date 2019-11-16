<!DOCTYPE html>
<html>
<title>News and Events</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-amber.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  

<body>

<div class="w3-row w3-padding w3-theme-d2 w3-xlarge">
  <div class="w3-half">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button"><img src="ums3.png" style="height:80px;"></a>
    </div>
  </div>


  <div class="w3-half">
    <div class="w3-bar w3-xlarge"> 
      <a href="#" class="w3-bar-item w3-button w3-right"><img class="w3-hide-small" src="fki2.png" style="height:80px;"></a>
    </div>
  </div>
  
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  
  
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
  <table align="center">
   <tr><td> <ul class="navbar-nav">
	
      <li class="nav-item">
        <a class="nav-link" href="#">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">ABOUT US</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">ADMISSION</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">RESEARCH</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#">INNOVATION</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#">NEWS & EVENTS</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#">STUDENTS</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="login.html"><button class="btn-primary">Admin LOGOUT</button></a>
      </li>
	 
    </ul></td></tr></table>
  </div>  
</nav>

<div class="w3-container w3-padding-32 w3-theme-d1">
  <H6 align="right"><a href="newpost.html">Post New Article</a></H6>
  <h1 align="center">News and events</h1>
</div>




<?php
session_start();
include("config.php");
$db_handle = new DBController();

if(!isset($_SESSION["UID"]))
	{header("location:login.html");}
	
	$sql = "SELECT * FROM article";
	$result = $db_handle->runQuery($sql);
	$resultCheck = $db_handle->numRows($sql);
	
	if($resultCheck>0){
	while($row=mysqli_fetch_assoc($result))
	{
		$aid = $row['artID'];
		$tit = $row['title'];
		$desc = $row['description'];
		$image = $row['image'];
		
		echo"<div class='w3-row-padding w3-theme'>
		
				<div class='w3-third w3-section'>
				<div class='w3-card-4'>
					{$image}
					<div class='w3-container w3-white'>
					<h4>{$tit}</h4>
					<p>{$desc}</p>
					</div>
				</div>
				</div>
				
			</div>";
	}}
?>




<div class="w3-container w3-theme-d4">
<p class="w3-large">Europe Italy</p>
</div>

</body>
</html>
