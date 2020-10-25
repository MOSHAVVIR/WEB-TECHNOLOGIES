<!DOCTYPE html>

<html>
	<head>
		<title>
			My Form
		</title>
	</head>

	<body>

		<?php
	  	$StudentIdError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["StudentId"])) {
				  $StudentIdError = "StudentId is required";
			}
			else {
				echo "StudentId is: " . $_REQUEST["StudentId"];
			}
		} 
		?>

		<?php
	  	$StudentNameError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["StudentName"])) {
				  $StudentNameError = "StudentName is required";
			}
			else {
				echo "StudentName is: " . $_REQUEST["StudentName"];
			}
		} 
		?>

		<?php
	  	$GenderError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["Gender"])) {
				  $GenderError = "Gender is required";
			}
			else {
				echo "Gender is: " . $_REQUEST["Gender"];
			}
		} 
		?>

		<?php
	  	$studentemailError= "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["studentemail"])) {
				  $studentemailError = "Student email is required";
			}
			else {
				echo "Student email is: " . $_REQUEST["studentemail"];
			}
		} 
		?>

		<?php
	  	$addressError= "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["address"])) {
				  $addressError = "Address is required";
			}
			else {
				echo "Address is: " . $_REQUEST["address"];
			}
		} 
		?>

		<?php
	  	$cityError= "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["city"])) {
				  $cityError = "city is required";
			}
			else {
				echo "city is: " . $_REQUEST["city"];
			}
		} 
		?>

		<?php
	  	$StateError= "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["State"])) {
				  $StateError = "State is required";
			}
			else {
				echo "State is: " . $_REQUEST["State"];
			}
		} 
		?>

		<?php
	  	$CountryError= "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["Country"])) {
				  $CountryError = "Country is required";
			}
			else {
				echo "Country is: " . $_REQUEST["Country"];
			}
		} 
		?>



		<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

		Student Id:
		<br/>
		<input type="string" name="StudentId" required>
		<br/>
		<span><?php echo $StudentIdError; ?></span>
		<br/>

		Student Name:
		<br/>
		<input type="text" name="StudentName" required>
		<br/>
		<span><?php echo $StudentNameError; ?></span>
		<br/>

		Gender:
		<br/>
		<input type="checkbox" id="Gender" name="Gender" value="Male" required>
		<label for="Gender"> Male</label>
		<span><?php echo $GenderError; ?></span>
		<br/>


		<input type="checkbox" id="Gender" name="Gender" value="Female" required>
		<label for="Gender"> Female</label><br>
		<span><?php echo $GenderError; ?></span>
		<br/>

		Student Email:
		<br/>
		<input type="text" name="studentemail" value="@" required>
		<br/>
		<span><?php echo $studentemailError; ?></span>
		<br/>

		Address:
		<br/>
		<input type="text" name="address" required>
		<br/>
		<span><?php echo $addressError; ?></span>
		<br/>

		Street Address:
		<br/>
		<input type="text" name="streetaddress">
		<br/>

		Address line 2:
		<br/>
		<input type="text" name="addressline2"> <input type="text" name="addressline2">
		<br/>

		City:
		<br/>
		<input type="text" name="city" required>
		<br/>
		<span><?php echo $cityError; ?></span>
		

		State / Province / Region:
		<br/>
		<input type="text" name="State" required>
		<br/>
		<span><?php echo $StateError; ?></span>
		<br/>

		Zip / postal Code:
		<br/>
		<input type="text" name="Zip / postal Code">
		<br/>

		Country:
		<br/>
		<select name="country">
    	<option value="Bangladesh">Bangladesh</option>
    	<option value="Australia">Australia</option>
    	<option value="America">America</option>
    	<option value="Canada">Canada</option>
    	<option value="Italy">Italy</option>
    	</select>
		<br/>
		<span><?php echo $CountryError; ?></span>
		<br/>

		<button name="subject" type="submit" value="Save Form">Save Form</button>



	</body>

			

</html>

      	