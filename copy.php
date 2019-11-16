<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
	<link rel="stylesheet" type="text/css" href="pages/assets/css/login.css">
	<link rel="stylesheet" type="text/css" href="pages/assets/css/index.css">

      

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


    </head>
    <body>
        <div class="flex-center position-ref full-height">
            
    <div class="top-right links">
	
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container2">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
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


		<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Login/SignUp as BUYER</button>
		<div id="id02" class="modal">
			<form class="modal-content animate" action="pages/buyer_login.php" method="post">
				<div class="imgcontainer">
					<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
					<img src="img_avatar2.png" alt="Avatar" class="avatar">
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
					<span class="psw">New Buyer? Please<a href="pages/bregister.php"> Sign up</a></span>
				</div>
			</form>
		</div>

		<script>
			// Get the modal
			var modal = document.getElementById('id02');

			// When the user clicks anywhere outside of the modal, close it
			window.onclick = function(event) 
			{
				if (event.target == modal) 
				{
					modal.style.display = "none";
				}
			}
			
		</script>
					
		
		
    </div>


            <div class="content">
                <div class="title m-b-md">
                    VIRTUAL SHOPS
                </div>

                <div class="links">
                    <a href="pages/food.php">Food</a>
                    <a href="pages/electronics.php">Electronics</a>
                    <a href="pages/clothes.php">Clothes</a>
                    <a href="pages/explore.php">Explore More...</a>
                </div>
				
            </div>
			
        </div>
    </body>
</html>
