<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "metflix";

$connection = new mysqli($servername, $username, $password, $database);

if ($connection->connect_error) 
{
    die("Connection failed: " . $connection ->connect_error);
} 

$result1 = $connection->query("SELECT * FROM imax");
$row1 = $result1->fetch_assoc();

$number1 = $row1['number'];
$name1 = $row1['name'];
$description1 = $row1['description'];
$imagePath1 = $row1['path'];
$price1 = $row1['price'];
$longdescribe = $row1['longdescribe'];

$result2 = mysqli_query($connection, "SELECT * FROM data");
?>