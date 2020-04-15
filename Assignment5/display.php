<html>
<head>
<title> View Past Orders </title>
<style>
.menu {
	font-family:fantasy;
	font-style:bold;
	width:3cm;
	margin-left:1cm;
	display:inline-block;
}
body {
	text-align:center;
}
a {
	color:black;
}
</style>
</head>
<body>
<a href="index.html"><img src="nike.PNG" style="float:left"></a>
<a href="display.php"><div class="menu">View Past Orders</div></a>
<a href="newpurchase.html"><div class="menu">Make a Purchase</div></a>
<a href="query.html"><div class="menu">Look Up a Supplier</div></a>
<a href="http://codd.cs.gsu.edu/~aherbener2/index.html"><div class="menu">My Homepage</div></a><br><br><br>
<?php
$servername = "localhost";
$username = "aherbener2";
$password = "aherbener2";
$dbname = "aherbener2";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM data";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
    echo "<table border=\"1\"><tr><th>Purchase Number</th><th>Supplier ID</th><th>Purchase Date</th><th>Quantity</th><th>Description</th><th>Price</th></tr>";
    while($row = $result->fetch_assoc()) 
	{
        echo "<tr><td>".$row["purchaseNo"]."</td><td>".$row["supplierID"]."</td><td>".$row["dateOfPurchase"]."</td><td>".$row["quantityPurchased"]."</td><td>".$row["descriptionOfItem"]."</td><td>$".$row["price"]."</td></tr>";
    }
	echo "</table><br>";
} 
else 
{
    echo "0 results";
}
$conn->close();
?>
</body>
</html>