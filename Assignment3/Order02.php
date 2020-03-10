<html>
<body>
<?php
$fname=$_POST["firstname"];
$model=$_POST["model"];
$name1="fname";
$name2="model";
setcookie($name1,$fname,time()+86400);
setcookie($name2,$model,time()+86400);
?>
<center><div align="center" style="text-align:center;width:95%;border:3px solid lightgrey;height:50%"> 
		<h2> Select Color </h2>
		<div style="width:90%;border:2px solid lightgrey;margin:auto">
		<br>
			<form action="Order03.php" method="post">
				<label>Car color:</label>
				<select name="color" required >
                    <option value=""></option>
                    <option style="background-color: white" value="white">White</option>
                    <option style="background-color: lightgrey" value="grey">Grey</option>
                    <option style="background-color: blue; color:white;" value="blue">Blue</option>
                </select> <br><br>
				<input type="submit" value="Next step">
			</form>
		</div>
	</div></center>
</body>
</html>