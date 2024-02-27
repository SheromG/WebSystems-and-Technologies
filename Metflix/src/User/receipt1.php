<?php
include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="../User/receipt1.css">

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
            <?php echo'<h1>' . $name1 . '</h1>' ?>
            <div>
            <h2> Time: <input type = "text" id = "time"></input></h2>
            <h2> No. of Tickets: <input type = "text" id = "ticket"></input></h2>
            <h2> Total Price: <input type = "text" id = "total"></input></h2>
            </div>
            <button id = "button"type="submit">Book</button>
        </div>
    </div>

    <div class="footer">
        <p class="copyright-text">&copy Dahan DelaPeña Dulay Granada Marasigan Mojica</p>
    </div>

    <script>
    
    let count = localStorage.getItem('count');
    let time = localStorage.getItem('time');

    document.querySelector('#ticket').value = count;
    document.querySelector('#total').value = count * 750;

    document.querySelector('#time').value = time;

    document.querySelector('#button').addEventListener('click', function() 
    {
        window.location.href = "../User/final1.php";
    });
    </script>
</body>
</html>