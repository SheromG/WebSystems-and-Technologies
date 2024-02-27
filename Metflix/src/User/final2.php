<?php
include('connection.php');

$number = $_GET['number'];

$result3 = mysqli_query($connection, "SELECT * FROM data where number = $number");
$row3 = $result3->fetch_assoc();

$number2 = $row3['number'];
$name2 = $row3['name'];
$description2 = $row3['description'];
$imagePath2 = $row3['path'];
$price2 = $row3['price'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="../User/final1.css">

    <link rel="shortcut icon" href="../Media/Icon.png" type="image/x-icon">

    <title>Metflix</title>
</head>
<body>
<div class="header" style = "background: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)), url('<?php echo $imagePath2; ?>');">
        <nav>
            <img class = "logo"  src = "../Media/Logo.png">
            <div>
                <button onclick="history.back()"> Go Back </button>
            </div>
        </nav>

        <div class="title">
            <h1>Please pay at the counter</h1>
            <h1>Purchase successfully done!</h1>
            <h1>Have a great day thank you</h1>
            <button id = "button"type="submit">Go Back to Home</button>
        </div>
    </div>

    <div class="footer">
        <p class="copyright-text">&copy Dahan DelaPeña Dulay Granada Marasigan Mojica</p>
    </div>

    <script>

    document.querySelector('#button').addEventListener('click', function() 
    {
        window.location.href = "../User/userbook.php";
    });
    </script>
</body>
</html>