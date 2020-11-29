<?php
require_once "../pdo.php";
?>

<!DOCTYPE html>
<html>
<head>
	
	<title>LOGIN</title>

</head>
<body>
	<center>
		<div>
			<h1>LOGIN HERE</h1>
			<form action="../controller/login_validation.php" method="post">

				<label>ID:  </label>
				<input type="integer" name="id" placeholder="Enter your ID" required>
				<br><br>
				<label>Password:</label>
				<input type="text" name="password" placeholder="Enter The Password" required>
				<br><br>
				<input type="submit" value="Login" name="login" >
<!-- 				<br/> <br/>
	    		<center><a href="FORGETPASSWORD.php">FORGET PASSWORD </a> </center> -->
	    		<br/> <br/>
	    		<center><a href="register.php">Register</a> </center>
			</form>
		</div>
	    
	</center>  

</body>
</html>

