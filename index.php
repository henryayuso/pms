<!DOCTYPE html>
<html>
<head>
<style>
-
</style>
	<meta charset="utf-8">
	<title>Login Form Design</title>
	
	<link rel="stylesheet" href="login.css">
</head>
	
<body class="body2">
<header>
<h1>Welcome to PMS</h1>
	<nav>
		<div class="main-wrapper">
			 <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="appointmentform.html">ppointment</a></li>
    <li><a href="appointments.html">Appointments</a></li>
    <li style="float:right">
     <!-- <a class="active" href="login.html">Login</a></li>  this was change to  BUTTON-->
     <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
    </li>
</ul>
		</div>
		<div class="nav-login">
			<form action="connect.php" method="POST">
			<div class="inputBox">
				<input type="text" name="username" required="" placeholder="Username/ e-mail">
				<label for="">Username</label>
			</div>
			<div class="inputBox">
				<input type="password" name="password" required="">
				<label for="">Password</label>
			</div>
			/*<input type="submit" name="submit" value="Login"> */
				<button type="submit" name="submit" value="Login"></button>
		</form>
			<a href="signup.php">Sign Up</a>
		</div>
	</nav>
</header>
/* too
	<div class="box">
		<h2>Login</h2>
		<form action="connect.php" method="POST">
			<div class="inputBox">
				<input type="text" name="username" required="">
				<label for="">Username</label>
			</div>
			<div class="inputBox">
				<input type="password" name="password" required="">
				<label for="">Password</label>
			</div>
			<input type="submit" name="" value="Login">
		</form>
	</div>
	*/
<section>

</section>
	
</body>
</html>

