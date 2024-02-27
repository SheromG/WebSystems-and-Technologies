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

    $sql = "UPDATE `data` SET `name` = '$name', `description` = '$description', `path` =  '$thumbnail', `price` = $price  WHERE `number` = $number ;";

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
            <div><h1>Modify 2D Movie</h1></div>
            <form action="" method="POST">
                <input class="input" type="text" name="name" id="name" placeholder="Name of the Movie" value = "<?php echo $name1 ?>">
                <textarea name="description" id="descriptionimex" placeholder="Description" value = "<?php echo $description1 ?>"><?php echo $description1 ?></textarea>
                <input class="input" type="text" name="thumbnail" id="thumbnail" placeholder="Thumbnail Path" value = "<?php echo $imagePath1 ?>">
                <input class="input" type="text" name="price" id="price" placeholder="Price" value = "<?php echo $price1 ?>">

                <div class = "result"><p>The movie was added</p></div>

                <button id="update">Update</button>
            </form>  
        </div>
    </div>
    <script>
        let name = document.querySelector('#name');
        let description = document.querySelector('#description');
        let thumbnail = document.querySelector('#thumbnail');
        let price = document.querySelector('#price');
        let result = document.querySelector('.result');
        let button = document.querySelector('#update');

        button.addEventListener('click', function(event) 
        {
            setTimeout(function(){alert("The Movie was updated!");}, 500);
            
            event.preventDefault();
            if (name.value.trim() !== '' && thumbnail.value.trim() !== '' && price.value.trim() !== '' ) 
            {
                button.closest('form').submit();
                name.value = "";
                description.value = "";
                thumbnail.value = "";
                price.value = "";
                result.style.opacity = "1";
            }
            else 
            {
                result.innerHTML = "The input is not complete";
                result.style.opacity = "1";
                setTimeout(function(){window.location.reload();}, 1500);
            }
        });
    </script>
</body>
</html>