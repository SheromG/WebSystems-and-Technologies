<?php
include('connection.php');
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
    <div class="header">
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
            <button id = "button" type="submit">Go Back to Home</button>
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