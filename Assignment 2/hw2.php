<?php>
<?>
<html>
<head>
<title> Assignment 2 </title>
</head>
<body>
<h3> Question 1 </h3>
<?php
function isBitten()
{
	$number=rand(0,1);
	return $number;
}
for($x=0;$x<10;$x++)
{
	$test=isBitten();
	if($test==0)
	{
		echo "Charlie ate my lunch!";
	}
	else
	{
		echo "Charlie did not eat my lunch!";
	}
	echo "<html><br></html>";
}
echo "<html><br></html>";
?>
<h3> Question 2 </h3>
<table width="300px" cellspacing="1px" cellpadding="1px" border="1px">
<?php
	for($i=0;$i<8;$i++)
	{
    echo "<tr>";
    for($j=0;$j<8;$j++)
	{
		if($j%2==$i%2)
		{
			echo "<td height=35px width=35px bgcolor=black></td>";
		}
		else
		{
			echo "<td height=35px width=35px bgcolor=red></td>";
		}
    }
    echo "</tr>";
}
?>
</table>
<h3> Question 3 </h3>
<?php
$month=array('January','February','March','April','May','June','July','August','September','October','November','December'); 
for($i=0;$i<count($month);$i++)
{
	echo " ".$month[$i]."<br />";
}
sort($month);
echo "<html><br><br></html>";
foreach($month as $value)
{
	echo "$value<br />";
}
?>
<h3> Question 4 </h3>
<?php
$restaurants=array("Chama Gaucha"=>"40.50","Aviva by Kameel"=>"15.00","Bone's Restaurant"=>"65.00","Umi Sushi Buckhead"=>"40.50","Fandangles"=>"30.00","Capital Grille"=>"60.50","Canoe"=>"35.50","One Flew South"=>"21.00","Fox Bros. BBQ"=>"15.00","South City Kitchen Midtown"=>"29.00");
foreach($restaurants as $key=>$value)
{
	echo "$key<br />";
}
echo "<html><br></html>";
$sum=0;
foreach($restaurants as $value)
{
	$sum+=$value;
}
$average=$sum/count($restaurants);
echo "Average cost of all the restaurants is $".$average."<br />";
arsort($restaurants);
foreach($restaurants as $key=>$value)
{
	echo "$key: $$value<br />";
}
ksort($restaurants);
echo "<html><br></html>";
foreach($restaurants as $key=>$value)
{
	echo "$$value: $key<br />";
}
?>
<h3> Question 5 </h3>
<form action="calcTotal.php" method="post">
	<label for="burgers">Burgers: </label>
	<input type="number" id="burgers" name="burgers" style="width:2cm"><br>
	<label for="milkshake">Chocolate Milkshakes: </label>
	<input type="number" id="milkshake" name="milkshake" style="width:2cm"><br>
	<label for="cokes">Cokes: </label>
	<input type="number" id="cokes" name="cokes" style="width:2cm"><br>
	<input type="submit" value="Calculate my Total">
</form>
</body>
</html>