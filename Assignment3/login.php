<html>
<body style="text-align:center">
<?php
$postback=true;
?>
<h2> Login Page: </h2>

<form action="processing.php" method="post">
	<label for="username"> Username: </label> <br>
	<input type="text" id="username" name="username" required><br>
	<label for="password"> Password: </label> <br>
	<input type="password" id="password" name="password"><br>
	<input type="submit" value="Log in">
</form>
</body>
</html>