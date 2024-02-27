<?php
include('connection.php');

$number = $_GET['number'];

$result2 = mysqli_query($connection, "SELECT * FROM data where number = $number");
$row2 = $result2->fetch_assoc();

$number2 = $row2['number'];
$name2 = $row2['name'];
$description2 = $row2['description'];
$imagePath2 = $row2['path'];
$price2 = $row2['price'];

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
    <div class="header" style = "background: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)), url('<?php echo $imagePath2; ?>');">
        <nav>
            <img class = "logo"  src = "../Media/Logo.png">
            <div>
                <button onclick="history.back()"> Go Back </button>
            </div>
        </nav>

        <div class="title">
            <?php echo'<h1>' . $name2 . '</h1>' ?>
            <h2>Now showing</h2>
            <?php echo'<h2> Price: ' . $price2 . '</h2>' ?>
            <?php echo'<p>' . $description2 . '</p>' ?>
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
                        <select id = "time">
                            <option> 10:00AM</option>
                            <option> 12:30AM</option>
                            <option> &nbsp;3:00AM</option>
                            <option> &nbsp;5:30AM</option>
                            <option> &nbsp;8:00AM</option>
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
        
        let url = "../User/receipt2.php";

        let variable = "<?php echo $number; ?>";

        url += "?number=" +  encodeURIComponent(variable);
        window.location.href = url;
    });
    </script>
</body>
</html>