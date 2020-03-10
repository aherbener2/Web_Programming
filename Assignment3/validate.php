<?php>
<?>
<html>
<head>
	<title> validate.php </title>
</head>
<body>
	<center><div align="center" style="text-align:center;width:95%;border:3px solid lightgrey;height:50%"> 
	<p><h3 style="margin-top:1cm"> Form Validation </h3>
	HTML5 and server-side validation
	<div style="width:90%;border:2px solid lightgrey;margin:auto">
		<form action="validateConfirm.php" method="post">
			<label for="email" style="vertical-align:30%">Email: </label>
			<input type="text" id="email" name="email" placeholder="Email" style="width:5cm;vertical-align:40%;margin-top:0.5cm;margin-bottom:0.25cm" required><br>
			<label for="firstname" style="vertical-align:30%">First name: </label>
			<input type="text" id="firstname" name="firstname" placeholder="First name" style="width:5cm;vertical-align:40%;margin-bottom:0.25cm" required><br>
			<label for="birthday" style="vertical-align:30%">Birthday: </label>
			<input type="text" id="birthday" name="birthday" placeholder="Birthday" style="width:5cm;vertical-align:40%;margin-bottom:0.25cm" required><br>
			<label for="age" style="vertical-align:30%">Age: </label>
			<input type="number" id="age" name="age" placeholder="Age" style="width:2cm;vertical-align:40%;margin-bottom:0.25cm" required><br>
			 <label for="state" style="vertical-align:30%">State: </label>
			<input type="text" id="state" name="state" placeholder="State" style="width:2cm;vertical-align:40%;margin-bottom:0.25cm" required><br>
			<label for="zip" style="vertical-align:30%">Zip: </label>
			<input type="number" id="zip" name="zip" placeholder="Zip" style="width:2cm;vertical-align:40%;margin-bottom:0.25cm" required><br>
			<input type="submit" value="Submit form"><br><br>
			<input type="submit" value="Submit without HTML5 validation">
		</form>
	</div>
	<a href="validate.php">Reload page</a></p></div></center>
</body>
</html>