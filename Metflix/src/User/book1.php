<?php
include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="../User/book1.css">

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
            <h2>Now showing in IMetflix</h2>
            <?php echo'<h2> Price: ' . $price1 . '</h2>' ?>
            <?php echo'<p>' . $longdescribe . '</p>' ?>
            <div class="container">
                <div class = "number">
                    <h3>How many tickets?</h3>
                    <div>
                        <button id = "add" onclick="buttonClick(1)">+</button>
                        <input type = "text" id = "ticketvalue">
                        <button id = "subtract" onclick="buttonClick(0)">-</button>
                    </div>
                </div>
                <div class = "number">
                    <h3>What Time?</h3>
                    <div>
                        <select id = "time" value = "00:00AM">
                            <option value = "10:00AM"> 10:00AM</option>
                            <option value = "12:30PM"> 12:30PM</option>
                            <option value = "3:00PM"> &nbsp;3:00PM</option>
                            <option value = "5:30PM"> &nbsp;5:30PM</option>
                            <option value = "8:00PM"> &nbsp;8:00PM</option>
                        </select>
                    </div>
                </div>
            </div>
            <button id = "button"type="submit">Book</button>
        </div>
    </div>

    <div class="footer">
        <p class="copyright-text">&copy Dahan DelaPeña Dulay Granada Marasigan Mojica</p>
    </div>

    <script>
    let count = 0;

    function buttonClick(choice) 
    {
        if(choice === 1)
        {
            count += 1;
        }
        else if(choice === 0 && count === 0)
        {
            count += 0;
        }
        else if(choice === 0 )
        {
            count += (-1);
        }

        document.querySelector('#ticketvalue').value = count;
        
    }

    document.querySelector('#ticketvalue').value = count;

    let time = document.querySelector('#time').value;

    document.querySelector('#button').addEventListener('click', function() 
    {
        time = document.querySelector('#time').value;
        localStorage.setItem('count', count);
        localStorage.setItem('time', time);
        window.location.href = "../User/receipt1.php";
    });
    </script>
</body>
</html>