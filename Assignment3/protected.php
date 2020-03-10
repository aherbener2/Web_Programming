<html>
<body>
<?php
if(!isset($_SESSION['password']))
{
	session_start();
	header("Location:login.php");
}
echo "Hello and buh";
?>
</body>
</html>