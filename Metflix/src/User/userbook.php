<?php
include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="userbook.css">

    <link rel="shortcut icon" href="../Media/Icon.png" type="image/x-icon">

    <script>
    function goback()
    {
        window.location.href = "userindex.php";
    }
    </script>
    
    <title>Metflix</title>
</head>
<body>
    <div class="header">
        <nav>
            <img class = "logo"  src = "../Media/Logo.png">
            <div>
                <button onclick="goback()"> Back </button>
            </div>
        </nav>

        <?php
        echo '
        <div class="title">
            <h1>' . $name1 . '</h1>
            <h3>Available in IMex</h3>
            <p>' . $description1 . '</p>
            <button id="button" type="submit">Book</button>
        </div>';
        ?>
        
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
                    <p class="moviedescription">' . $description2 . '</p>
                    <button class="moviebook" onclick = "moviebook(' . $number2 . ')">Book</button>
                </div>
            </div>';
    }

    echo '
    <script>
    function moviebook(number)
    {
        var url = "../User/book2.php";
        url += "?number=" +  encodeURIComponent(number);
        window.location.href = url;
    }
    
    </script>
    </div>';
    ?>

    </div>
    <div class="footer">
        <p class="copyright-text">&copy Dahan DelaPeña Dulay Granada Marasigan Mojica</p>
    </div>

    <script src = "../JS/userbook.js"></script>
    
</body>
</html>