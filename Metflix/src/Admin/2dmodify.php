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

$result2 = mysqli_query($connection, "SELECT * FROM data");
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
        <div class="container">
            <div><h1>Modify a 2D Movie</h1></div>

            <select id="option">
                <?php
                while ($row2 = mysqli_fetch_assoc($result2)) 
                {
                    $number2 = $row2['number'];
                    $name2 = $row2['name'];
                    echo '<option value="' . $number2 . '">' . $name2 . '</option>';
                }
                ?>
            </select>

            <div class="result"><p>The movie was added</p></div>

            <div class="buttons">
                <button id="delete">Delete</button>
                <button id="update2">Update</button>
            </div>

            <script>
            let update = document.querySelector('#update2');
            let option = document.querySelector('#option');
            let del = document.querySelector('#delete');

            let url = "2dmodify2.php";
            let url2 = "2dmodify3.php";

            let variable;

            option.addEventListener('change', function(event) 
            {
                variable = option.value;
            });

            update.addEventListener('click', function(event) 
            {
                url += "?number=" + encodeURIComponent(variable);
                window.location.href = url;
            });

            del.addEventListener('click', function(event) 
            {
                url2 += "?number=" + encodeURIComponent(variable);
                window.location.href = url2;
            });

            let back = document.querySelector('#back');
            back.addEventListener('click', function(event)
            {
                window.location.href = "adminindex.php";
            });
            </script>
        </div>

    </div>

</body>
</html>