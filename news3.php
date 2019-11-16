<?php
session_start();
include("config.php");
$db_handle = new DBController();
?>

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
        <a class="nav-link" href="index3.php">HOME</a>
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
        <?php 
			if(isset($_SESSION["UID"]))
			{
		?>
			<a href="logout.php"><button class="btn-primary">Admin Logout</button></a>
	</p>
	
		<?php
			}
	
		else{
		?>
		
			<a href="login.html"><button class="btn-primary">Admin Login</button></a>
	</p>
		<?php
			}
		?>
      </li>
	 
    </ul></td></tr></table>
  </div>  
</nav>

<div class="w3-container w3-padding-32 w3-theme-d1">
		<?php 
			if(isset($_SESSION["UID"]))
			{
		?>
			<a href="newpost.php" align="right"><h6>Post New Article</h6></a>
		<?php
			}
		?>   	
	
  <h1>News and Events</h1>
</div>

<div class="w3-row-padding w3-theme">
<?php
		$sql = "SELECT * FROM article";
		$article_array = $db_handle->runQuery($sql);
		if (!empty($article_array)) 
		{ 
			foreach($article_array as $key=>$value)
			{
?>
				<div class="w3-third w3-section">
					<div class="w3-card-4">
						<?php 
							$artID=$article_array[$key]["artID"];
							echo "<img src='getImage.php?artID=$artID' style='height:80px;'/>";
						?>
						<div class="w3-container w3-white">
						<h4><?php echo $article_array[$key]["title"]; ?></h4>
						<p><?php echo $article_array[$key]["description"]; ?></p>
						
						<?php 
								if(isset($_SESSION["UID"]))
								{
						?>
									<div class="w3-row">
										<div class="w3-half">
										<?php 
											echo '	<a href="edit.php?artID='. $article_array[$key]["artID"].'">Edit</a> || 
													<a href="delete.php?artID='. $article_array[$key]["artID"].'">Delete</a>';
										?>
										</div>		
									</div>
						<?php
								}
						?>  
						
						</div>
					</div>
				</div>		
<?php
			}			
		} 
		else 
		{
			echo "0 results";
		}
	$db_handle->closeDB();
?>	
		
</div>


<div class="w3-container w3-theme-d4">
<p class="w3-large">Europe Italy</p>
</div>

</body>
</html>


