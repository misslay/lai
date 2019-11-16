<?php
session_start();
include("config.php");
$db_handle = new DBController();
?>
<!DOCTYPE html>

<html>
<head>
<title>FKI</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-amber.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  

<style>
.top-right {
                position: absolute;
                right: 100px;
                top: 0px;
            }

.mySlides {display:none;}
.w3-left, .w3-right, .w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0}
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
        <a class="nav-link" href="news3.php">NEWS & EVENTS</a>
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

<div class="w3-content w3-section">
<img class="mySlides w3-animate-fading" src="pic1.jpg" style="width:100%">
<img class="mySlides w3-animate-fading" src="pic2.jpg" style="width:100%">
<img class="mySlides w3-animate-fading" src="pic3.jpeg" style="width:100%">
<img class="mySlides w3-animate-fading" src="pic4.png" style="width:100%">
<img class="mySlides w3-animate-fading" src="pic5.jpg" style="width:100%">
</div>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 10000); // Change image every 2 seconds
}
</script>


<footer class="jumbotron">
<p align= "center">Email us : students@fki.ums.edu.my <br>
Call us : +60134061310 <br>
<i>Copyright &copy 2019 : Students</i></p>
</footer>
</body>

</html>