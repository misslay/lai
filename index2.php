<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="pages/assets/css/login2.css">
<link rel="stylesheet" type="text/css" href="pages/assets/css/index.css">

<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
<style>
	body{
  background-image: url("bg1.jpg"); /* The image used */
  background-color: #cccccc; /* Used if the image is unavailable */
  height: 100%; /* You must set a specified height */
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; /* Resize the background image to cover the entire container */
}
</style>
<body>


<div class="flex-center position-ref full-height">
<div class="top-right links">
	<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login/SignUp as BUYER</button>
	<div id="id01" class="modal">
		<form class="modal-content animate"  action="pages/buyer_login.php" method="post">
		<div class="imgcontainer">
		<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
		</div>

		<div class="container">
			<label for="uname"><b>Username</b></label>
			<input type="text" placeholder="Enter Username" name="email" required>

			<label for="psw"><b>Password</b></label>
			<input type="password" placeholder="Enter Password" name="pass" required>
        
			<button type="submit">Login</button>
			<label>
			<input type="checkbox" checked="checked" name="remember"> Remember me
			</label>
		</div>

		<div class="container" style="background-color:#f1f1f1">
			<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
			<span class="psw">New Buyer? Please <a href="pages/bregister.php">Sign Up</a></span>
		</div>
		</form>
	</div>

	<script>
		// Get the modal
		var modal = document.getElementById('id01');

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
		if (event.target == modal) {
        modal.style.display = "none";
		}
		}
	</script>
	
	<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Login/SignUp as SELLER</button>
	<div id="id02" class="modal">
		<form class="modal-content animate"  action="pages/seller_login.php" method="post">
		<div class="imgcontainer">
		<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
		</div>

		<div class="container">
			<label for="uname"><b>Username</b></label>
			<input type="text" placeholder="Enter Username" name="email" required>

			<label for="psw"><b>Password</b></label>
			<input type="password" placeholder="Enter Password" name="pass" required>
        
			<button type="submit">Login</button>
			<label>
			<input type="checkbox" checked="checked" name="remember"> Remember me
			</label>
		</div>

		<div class="container" style="background-color:#f1f1f1">
			<button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
			<span class="psw">New Seller? Please <a href="pages/sregister.php">Sign Up</a></span>
		</div>
		</form>
	</div>

	<script>
		// Get the modal
		var modal = document.getElementById('id02');

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
		if (event.target == modal) {
        modal.style.display = "none";
		}
		}
	</script>

</div>
	<div class="content">
                <div class="title m-b-md">
                    <p style="color:blue;"><b>VIRTUAL SHOPS</b></p>
					
                </div>

                <div class="links">
                   <!-- <a href="pages/food.php">Food</a>
                    <a href="pages/electronics.php">Electronics</a>
                    <a href="pages/clothes.php">Clothes</a> -->
                    <a href="pages/explore_all.php"><p align="right" style="color:red; font-size:25px; font-weight: 1800;">Explore Our Products...</p></a>
                </div>
				
    </div>
</div>
</body>
</html>
