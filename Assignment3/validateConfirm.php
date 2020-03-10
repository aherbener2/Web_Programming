<html>
<body>
<?php
$email=$_POST["email"];
$firstname=$_POST["firstname"];
$birthday=$_POST["birthday"];
$age=$_POST["age"];
$state=$_POST["state"];
$zip=$_POST["zip"];
include("validationUtilities.php");
echo "<br><br><h3> Input information: </h3><p>";
echo "Email: ".$email; 
echo "<br>";
echo "First Name: ".$firstname;
echo "<br>";
echo "Birthday: ".$birthday." ";
if(!isValidDate($birthday))
{
	echo " This was an invalid innput";
}
echo "<br>";
echo "Age: ".$age." ";
if(!flsValidRange($age,0,100))
{
	echo " This was an invalid innput";
}
echo "<br>";
echo "State: ".$state;
echo "<br>";
echo "Zip: ".$zip." ";
if(!flsValidZipcode($zip))
{
	echo " This was an invalid innput";
}
echo "<br></p>";
?>
</body>
</html>