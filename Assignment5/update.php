<?php
$servername = "localhost";
$username = "aherbener2";
$password = "aherbener2";
$dbname = "aherbener2";
$supplierID = $_POST["supplierID"];
$date = $_POST["date"];
$quantity = $_POST["quantity"];
$description = $_POST["description"];
$price = $_POST["price"];
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO data (supplierID,dateOfPurchase,quantityPurchased,descriptionOfItem,price) VALUES ('".$supplierID."','".$date."',".$quantity.",'".$description."','".$price."')";
if ($conn->query($sql) === TRUE) 
{
    echo "New purchase entered successfully";
	header("Location: display.php");
} 
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>