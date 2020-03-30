<?php 
include 'server.php'; 
?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
  <link rel="stylesheet" href="assets/css/style.css"> 
</head>
<body>
	<div class="main_body">
			<div class="register">
			<h1>Happy<em>Wheels</em></h1>
			<h2>Register</h2></br>
			
			<form method="post" action="register.php">
				<?php 
				include 'errors.php'; 
				?>
				
				<label>Username</label>
				<input type="text" name="username" value="<?php echo $username; ?>">
			
			
				<label>Email</label>
				<input type="email" name="email" value="<?php echo $email; ?>">
			
				
				<label>Password</label>
				<input type="password" name="password_1">

				
				<label>Confirm password</label>
				<input type="password" name="password_2">

				
				<button type="submit" class="btn" name="reg_user">Register</button>

				<p>
					Already have an admin account? <a href="login.php">Sign in</a>
				</p>
			</form>
		</div>
	</div>
</body>
</html>
