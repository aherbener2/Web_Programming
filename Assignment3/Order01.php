<html>
<head>
	<title> Question 2 </title>
</head>
<body>
	<center><div align="center" style="text-align:center;width:95%;border:3px solid lightgrey;height:50%"> 
		<h2> Select Model </h2>
		<div style="width:90%;border:2px solid lightgrey;margin:auto">
		<br>
			<form action="Order02.php" method="post">
				<label for="firstname">First Name: </label><br>
				<input type="text" id="firstname" name="firstname" style="width:5cm" required placeholder="First name" maxlength=20><br><br>
				<label> Car model: </label><br>
				<input type="radio" name="model" required value="Prius">Toyota Prius<br>
                <input type="radio" name="model" required value="Camry">Toyota Camry<br>
                <input type="radio" name="model" required value="Corolla">Toyota Corolla<br>
				<input type="submit" value="Next step">
			</form>
		</div>
	</div></center>
</body>
</hmtl>