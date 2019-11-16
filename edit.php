<?php
session_start();
include("config.php");
$db_handle = new DBController();
if(!isset($_SESSION['UID']))
	header("location:login.html");

?>


<!DOCTYPE html>
<html>
<head>
<title>
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-amber.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  

  
	<link rel="stylesheet" type="text/css" href="assets/vendors/bootstrap/css/bootstrap.css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">


<style type="text/css" media="all">
  .form_table { text-align: center; }
  .full_width .segment_header { text-align: center !important; }
  .q { float:none;display: inline-block; }
  table.matrix, table.rating_ranking { margin-left:auto !important;margin-right:auto !important; }
</style>



</head>
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
        <a class="nav-link" href="news3.php">NEWS & EVENTS</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#">STUDENTS</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="logout.php"><button class="btn-primary">Admin LOGOUT</button></a>
      </li>
	 
    </ul></td></tr></table>
  </div>  
</nav>


	
            
            

	<div class="container">
	<div id="form-wrapper" style="max-width:500px;margin:auto;">
	<div class="row">
		
		<div class="panel panel-primary">
		<div class="panel-heading">Article Details</div>
<?php
	//Select from table product
	$sql = "select * from article where artID=" . $_GET["artID"];
	$article_array = $db_handle->runQuery($sql);
	
	if (!empty($article_array)) 
	{ 
		foreach($article_array as $key=>$value)
		{

?>	
		<form method="post" class="" enctype="multipart/form-data" action="edit_action.php?artID=<?php echo $article_array[$key]["artID"];?>">
		<div class="panel-body">
		
			<div class="form-group">
			<label>Article Title:</label><br><input type="text" name="title" value="<?php echo $article_array[$key]["title"]; ?>" required>
			</div>
		
			<div class="form-group">
			<label>Description:</label><br><textarea name="desc" rows="10" cols="30" required><?php echo $article_array[$key]["description"]; ?> </textarea>
			</div>
			
			
		
			<div class="form-group">
			<p align="center"><button type="submit" class="btn btn-primary">Update</button></p>
			</div>
			
		</div>
		</form>
<?php
		}
	}
	else 
	{
		echo "Error: " . $sql . "<br>" . $db_handle->error();
	}
	
$db_handle->closeDB();
?>
		</div>
	</div>
	</div>
	</div>


</body>
</html>


