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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="../Admin/adminindex.css">

    <link rel="shortcut icon" href="../../src/Media/Icon.png" type="image/x-icon">

    <title>Metflix</title>
</head>
<body>
    <div class="header">
        <nav>
            <img class = "logo"  src = "../Media/Logo.png">
            <div>
                <button id = "logout"> Logout </button>
            </div>
        </nav>
        <div class = "titlebutton">
            <h1>IMex</h1>
            <button class = "modify" id = "imex">Modify</button>
        </div> 
        <?php
        echo   '<div class="list">
                    <div id="movie" style="background-image: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)), url(' . $imagePath1 . ');"> 
                        <div class="moviedetails">
                            <h3 class="moviename">' . $name1 . '</h3>
                        </div>
                    </div>
                </div>';
        ?>
        <div class = "titlebutton">
            <h1>2D Movies</h1>
            <div>
                <button class = "add" id = "add">Add</button>
                <button class = "modify" id = "modify">Modify</button>
            </div>
        </div> 
    
        <?php
        echo '<div class="list">';
        while($row2 = mysqli_fetch_assoc($result2))
        {
            $number2 = $row2['number'];
            $name2 = $row2['name'];
            $description2 = $row2['description'];
            $imagePath2 = $row2['path'];
            $price2 = $row2['price'];
            
            $name2 = str_replace("'", "", $name2);
            $description2 = str_replace("'", " ", $description2);
            $name2 = str_replace(":", " ", $name2);
            $name2 = str_replace("-", " ", $name2);

        echo '
            <div id="movie" style="background-image: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)), url(' . $imagePath2 . ');"> 
                <div class="moviedetails">
                    <h3 class="moviename">' . $name2 . '</h3>
                </div>
            </div>';
        }
        ?>
    </div>
    </div>

    <script>
        let buttonadd = document.querySelector('#add');
        let buttonmodify = document.querySelector('#modify');
        let buttonimex = document.querySelector('#imex');
        let logout = document.querySelector('#logout');

        buttonadd.addEventListener('click', function(event)
        {
            window.location.href = "2dadd.php";
        });
        buttonmodify.addEventListener('click', function(event)
        {
            window.location.href = "2dmodify.php";
        });
        buttonimex.addEventListener('click', function(event)
        {
            window.location.href = "imexmodify.php";
        });
        logout.addEventListener('click', function(event)
        {
            window.location.href = "../Webpages/signin.php";
        });

    </script>
</body>
</html>