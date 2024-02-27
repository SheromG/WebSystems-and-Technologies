<?php
include('account.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "INSERT INTO accounts (fullname, email, password) VALUES ('$fullname', '$email', '$password')";

    if ($connection->query($sql) === TRUE) 
    {
        sleep(2);
        header("Location: ../Webpages/signin.php");
        exit();
    }
    else 
    {
        $error_message = "Error: " . $connection->error;
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

    <link rel="stylesheet" href="../CSS/signup.css">

    <link rel="shortcut icon" href="../Media/Icon.png" type="image/x-icon">

    <title>Metflix</title>
</head>
<body>
    <div class="header">
        <nav>
            <a href="../../index2.php"><img class="logo" src="../Media/Logo.png"></a>
        </nav>
    </div>
    <div class="signuppage">
        <h1>Sign Up</h1>
        <form action="" method="POST">
            <input class="input" type="text" placeholder="Enter your full name" name="fullname" id="fullname">
            <input class="input" type="text" placeholder="Enter your email" name="email" id="email">
            <input class="input" type="password" placeholder="Password" name="password" id="password">
            <div class = "result">
                <?php 
                    if (isset($error_message)) 
                    { ?>
                        <p><?php echo $error_message; ?></p>
                <?php 
                    } 
                    else
                    { ?>
                        <p>The Account is Registered</p>
                <?php 
                    } ?>
            </div>
            <button id="button">Sign Up</button>

            <input class="check" type="checkbox">
            <label>Remember Me</label>
        </form>  
        
        <p1>Already a subscriber? <a href="../Webpages/signin.php">Sign in now.</a></p1>
        <br>
        <br>
        <p2>This page is not protected by Google reCAPTCHA to ensure you're not a bot. <span>Learn more.</span></p2>
    </div>
    <div class="footer">
        <p class="copyright-text">&copy Dahan DelaPeña Dulay Granada Marasigan Mojica</p>
    </div>

    <script>
        let fullname = document.querySelector('#fullname');
        let email = document.querySelector('#email');
        let password = document.querySelector('#password');
        let result = document.querySelector('.result');
        let button = document.querySelector('#button');

        button.addEventListener('click', function(event) {
            event.preventDefault();
            if (fullname.value.trim() !== '' && email.value.trim() !== '' && password.value.trim() !== '') 
            {
                button.closest('form').submit();
                fullname.value = "";
                email.value = "";
                password.value = "";
                result.style.opacity = "1";
            }
            else 
            {
                result.innerHTML = "The Name or Email or Password is empty";
                result.style.opacity = "1";
                setTimeout(function(){window.location.reload();}, 1500);
            }
        });
    </script>
</body>
</html>
