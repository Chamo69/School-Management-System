<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="css/homestyle.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<style>
#togglePassword {
	position: absolute;
	right: 20px;
	top: 50%;
	transform: translateY(-50%);
	color: #b9b8b8;
}
  
#togglePassword:hover {
	color: #38d39f;
}
</style>

<body>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content">
			<form method="POST" action="login.php">
				<img src="img/avatar.svg">
				<h2 class="title1">Welcome <br></h2>
				<h3 class="title2">ADMIN LOGIN</h3>
				<div class="error">
				
					<?php 
						session_start();
				
					if(isset($_SESSION['status']))
					{
						?>
						<div>
							<?php echo $_SESSION['status']; ?>
						</div>
						<?php 
						unset($_SESSION['status']);
					}
			
					?>
				</div>
				<br>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" class="input" name="user" required>
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name="pass" id="password" required>
						<i class="fas fa-eye-slash" id="togglePassword" style="cursor: pointer;"></i>
            	   </div>
            	</div>
            	<a href="#">Forgot Password?</a>
            	<input type="submit" class="btn" name="login" value="Login">
            </form>
        </div>
    </div>

    <script type="text/javascript" src="js/homescript.js"></script>

	<script>

		const togglePassword = document.querySelector("#togglePassword");
		const password = document.querySelector("#password");

		togglePassword.addEventListener("click", function () {
  		// Toggle the type attribute
  		const type = password.getAttribute("type") === "password" ? "text" : "password";
  		password.setAttribute("type", type);
  
  		// Toggle the eye icon
		  this.classList.toggle("fa-eye");
		});

	</script>

</body>
</html>
