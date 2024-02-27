<?php
include('account.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $fullname = $_POST["fullname"];
    $password = $_POST["password"];

    $query = "SELECT * FROM accounts WHERE fullname = '$fullname' AND password = '$password'";

    $result = $connection->query($query);

    $number = "SELECT number FROM accounts WHERE fullname = '$fullname' AND password = '$password'";

    $variable = $connection->query($number);

    $row = $result->fetch_assoc();
    
    if ($result->num_rows > 0) 
    {
        sleep(1);
        $numberValue = $row['number'];
        header("Location: ../User/userindex.php?number=$numberValue");
        exit();
    } 
    elseif ($fullname == "admin" && $password == "admin") 
    {
        sleep(1);
        header("Location: ../Admin/adminindex.php");
        exit();
    }
    else 
    {
        $error_message = "Invalid full name or password";
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

    <link rel="stylesheet" href="../CSS/signin.css">

    <link rel="shortcut icon" href="../Media/Icon.png" type="image/x-icon">

    <title>Metflix</title>
</head>
<body>
    <div class="header">
        <nav>
            <a href="../../index2.php"><img class="logo" src="../Media/Logo.png"></a>
        </nav>
    </div>
    <div class="signinpage">
        <h1>Sign In</h1>
        <form action="" method="POST">
            <input class="input" type="text" placeholder="Full Name" name="fullname" id="fullname">
            <input class="input" type="password" placeholder="Password" name="password" id="password">
            <div class="result">
            <?php 
                if (isset($error_message)) 
                { ?>
                    <p><?php echo $error_message; ?></p>
            <?php 
                } 
                else
                { ?>
                    <p>Logging In</p>
                <?php 
                } ?>
            </div>
            <button id="button">Sign In</button>
            <input class="check" type="checkbox">
            <label>Remember Me</label>
        </form>
        <p1>New to Metflix? <a href="../Webpages/signup.php">Sign up now.</a></p1>
        <br>
        <br>
        <p2>This page is not protected by Google reCAPTCHA to ensure you're not a bot. <span>Learn more.</span></p2>
    </div>
    <div class="footer">
        <p class="copyright-text">&copy Dahan DelaPeña Dulay Granada Marasigan Mojica</p>
    </div>

    <script>
        let fullname = document.querySelector('#fullname');
        let password = document.querySelector('#password');
        let result = document.querySelector('.result');
        let button = document.querySelector('#button');

        button.addEventListener('click', function(event) 
        {
            event.preventDefault();
            if (fullname.value.trim() !== '' && password.value.trim() !== '') 
            {
                button.closest('form').submit();
                fullname.value = "";
                password.value = "";
                result.style.opacity = "1";
            } 
            else 
            {
                result.innerHTML = "The Name or Password is empty";
                result.style.opacity = "1";
                setTimeout(function(){window.location.reload();}, 1500);
            }
        });
    </script>
</body>
</html>
