<?php
include('../Webpages/account.php');

$number = $_GET['number'];

$result = $connection->query("SELECT fullname FROM accounts where number = $number");

$row = $result->fetch_assoc();

$fullname = $row['fullname'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="../User/userindex.css">

    <link rel="shortcut icon" href="../../src/Media/Icon.png" type="image/x-icon">

    <title>Metflix</title>
</head>
<body>
    <div class = "header">
        <div class = "indexpage">
            <h1>Welcome <br><?php echo $fullname; ?></h1>
            <div>
                <a href = "../User/userbook.php">
                    <div class = "profile">
                        <img src = "../Media/profile1.png">
                        <div>Book a ticket</div>
                    </div>
                </a>
                <a href = "../User/userrent.html">
                    <div class = "profile">
                        <img src = "../Media/profile2.png">
                        <div>Rent a movie</div>
                    </div>
                </a>
            </div>
            <button id = "back">Log Out</button>
        </div>
    </div>
    <div class="footer">
        <p class="copyright-text">&copy Dahan DelaPeña Dulay Granada Marasigan Mojica</p>
    </div>

    <script>
        let back = document.querySelector('#back');
        back.addEventListener('click', function(event)
        {
            window.location.href = "../Webpages/signin.php";
        });
    </script>
</body>
</html>