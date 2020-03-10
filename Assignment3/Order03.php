<html>
<body>
<?php
$color=$_POST["color"];
$model1=$_COOKIE["model"];
$fname1=$_COOKIE["fname"];
echo $fname1."<br>";
echo "Model: ".$model1."<br>";
echo "Color: ".$color."<br>";
echo "Thank you, ".$fname1."! Here is your car: <br>";
if($color=='blue')
{
	if($model=='Prius')
	{
		echo '<img src="blueprius.png" height=150>';
	}
	else if($model=='Camry')
	{
		echo '<img src="bluecamry.png" height=150>';
	}
	else
	{
		echo '<img src="bluecorolla.png" height=150>';
	}
}
else if($color=='white')
{
	if($model=='Prius')
	{
		echo '<img src="whiteprius.png" height=150>';
	}
	else if($model=='Camry')
	{
		echo '<img src="whitecamry.png" height=150>';
	}
	else
	{
		echo '<img src="whitecorolla.png" height=150>';
	}
}
else
{
	if($model=='Prius')
	{
		echo '<img src="greyprius.png" height=150>';
	}
	else if($model=='Camry')
	{
		echo '<img src="greycamry.png" height=150>';
	}
	else
	{
		echo '<img src="greycorolla.png" height=150>';
	}
}
?>

</body>
</html>