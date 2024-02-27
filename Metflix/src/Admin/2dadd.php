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

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $name = $_POST["name"];
    $description = $_POST["description"];
    $thumbnail = $_POST["thumbnail"];
    $price = $_POST["price"];

    $sql = "INSERT INTO data (name, description, path, price) VALUES ('$name', '$description', '$thumbnail', $price)";

    if ($connection->query($sql) === TRUE) 
    {
        sleep(1);
        header("Location: 2dadd.php");
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
<body>
    <div class="header">
        <nav>
            <img class = "logo"  src = "../Media/Logo.png">
            <div>
                <button id = "back"> Back </button>
            </div>
        </nav>
        <div class = "container">
            <div><h1>Add a 2D Movie</h1></div>
            <form action="" method="POST">
                <input class="input" type="text" name="name" id="name" placeholder="Name of the Movie">
                <textarea name="description" id="description" placeholder="Description"></textarea>
                <input class="input" type="text" name="thumbnail" id="thumbnail" placeholder="Thumbnail Path">
                <input class="input" type="text" name="price" id="price" placeholder="Price">

                <div class = "result"><p>The movie was added</p></div>

                <button id="add">Add</button>
            </form>  
        </div>
    </div>
    <script>
        let name = document.querySelector('#name');
        let description = document.querySelector('#description');
        let thumbnail = document.querySelector('#thumbnail');
        let price = document.querySelector('#price');
        let result = document.querySelector('.result');
        let button = document.querySelector('#add');

        button.addEventListener('click', function(event) 
        {
            setTimeout(function(){alert("The movie was added!");}, 500);
            
            event.preventDefault();
            if (name.value.trim() !== '' && description.value.trim() !== '' && thumbnail.value.trim() !== '' && price.value.trim() !== '') 
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

        let back = document.querySelector('#back');
        back.addEventListener('click', function(event)
        {
            window.location.href = "adminindex.php";
        });
    </script>
</body>
</html>