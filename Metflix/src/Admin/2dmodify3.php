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

$number = $_GET['number'];

$result1 = $connection->query( "SELECT * FROM data where number = $number");

$row1 = $result1->fetch_assoc();

$number1 = $row1['number'];
$name1 = $row1['name'];
$description1 = $row1['description'];
$imagePath1 = $row1['path'];
$price1 = $row1['price'];

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $name = $_POST["name"];
    $description = $_POST["description"];
    $thumbnail = $_POST["thumbnail"];
    $price = $_POST["price"];

    $sql = "DELETE FROM `data` WHERE `number` = $number";

    if ($connection->query($sql) === TRUE) 
    {
        sleep(1);
        header("Location: 2dmodify.php");
        exit();
    }
    else 
    {
        $error_message = "Error: " . $connection->error;
        sleep(1.5);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="../Admin/universal.css">

    <link rel="shortcut icon" href="../../src/Media/Icon.png" type="image/x-icon">

    <title>Metflix</title>
</head>
<body style = "background: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url(<?php echo $imagePath1 ?>);">
    <div class="header" style = "background: transparent;">
        <nav>
            <img class = "logo"  src = "../Media/Logo.png">
            <div>
                <button onclick="history.back()"> Back </button>
            </div>
        </nav>
        <div class = "container">
            <div><h1>Delete?</h1></div>
            <form action="" method="POST">
                <h2><?php echo $name1 ?></h2>
                <button id="deleted">Delete</button>
            </form>  
        </div>
    </div>
    <script>
        let button = document.querySelector('#deleted');

        button.addEventListener('click', function(event) 
        {
            alert("The movie was deleted!")
        });
    </script>
</body>
</html>