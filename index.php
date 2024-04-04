<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="shopping_cart";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);

}
$sql = "INSERT INTO tbl_products (`Name`, `Discription`, `Price`, `Stocks`)
VALUES ('Apple', 'Red Fuji Apple', 25.10, 44)";

if ($conn->query($sql))
{
    echo "New product created successfully";

} else 
{
    echo "Error Message: " . $sql . "<br>" . $conn->error;

}
$conn->close(); 
?>
