<html>
<body>
<?php
$numBurgers=$_POST["burgers"];
$numShakes=$_POST["milkshake"];
$numCoke=$_POST["cokes"];
$total=(4.95*$numBurgers)+(1.95*$numShakes)+(0.85*$numCoke);
$afterTip=$total*1.16;
$afterTax=$afterTip*1.075;
$final=(round($afterTax,2));
echo "Your total with tax and tip is $".$final;
?>
</body>
</html>