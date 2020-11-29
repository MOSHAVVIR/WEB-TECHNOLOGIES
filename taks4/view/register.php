<?php
require_once "../pdo.php";
?>

<!DOCTYPE html>
<html>
<head>
	
	<title>REGISTER</title>

</head>
<body>
	<center>
		<div>
			<h1>REGISTER HERE</h1>
			<form action="../controller/register_new_user.php" method="post">

				<label>ID:  </label>
				<input type="integer" name="id" placeholder="Enter ID" required>
				<br><br>
				<label>Password:</label>
				<input type="text" name="password" placeholder="Enter your password" required>
				<br><br>
				<label>Balance:</label>
				<input type="text" name="balance" placeholder="Enter your balance" required>
				<br><br>
				<input type="submit" value="Register" name="register" >
	    		
	    		<br/> <br/>
	    		<center><a href="login.php">Login</a> </center>
			</form>
		</div>
	    
	</center>  

</body>
</html>

