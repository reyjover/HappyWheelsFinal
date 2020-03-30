<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>HappyWheels | Car Rental System</title>
  <link rel="stylesheet" href="assets/css/style.css"> 
</head>
<body>
	<div class="main_body">
		<div class="register">
			<h1>Happy<em>Wheels</em></h1>
			<h3>Admin Login</h3></br>
			
			<form method="post" action="login.php">
				<?php include('errors.php'); ?>
				
					<label>Username</label>
					<input type="text" name="username" >

				
					<label>Password</label>
					<input type="password" name="password">

				
					<button type="submit" class="btn" name="login_user">Login</button>

				<p>
					Don't have an admin account? <a href="register.php">Sign up</a>
				</p>
			</form>
		</div>
	</div>
</body>
</html>
