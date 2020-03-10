<html>
<body>
<?php
$username=$_POST["username"];
$password=$_POST["password"];
if($password=='guest')
{
	$_SESSION['username']=$username;
	$_SESSION['password']=$password;
}
?>
</body>

</html>