<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="src/CSS/style2.css">

    <link rel="shortcut icon" href="src/Media/Icon.png" type="image/x-icon">

    <script src = "src/JS/index2.js"></script>

    <title>Metflix</title>
</head>
<body>
    <div class = "header">
        <nav>
            <img class = "logo"  src = "src/Media/Logo.png">
            <div>
                <button class = "language">
                    <img class = "globe" src = "src/Media/Langauge.png">
                    <select class = "language-option">
                        <option selected>English</option> 
                        <option>Tagalog</option>
                        <option>Bisaya</option>
                    </select>
                </button>
                <button class = "sign" onclick = "signin()">Sign In</button>
            </div>
        </nav>
        <div class="tagline">
            <h1>Book movies easily.</h1>
            <h3>Watch anywhere. Cancel anytime.</h3>
            <p>Ready to watch? Enter your email to create or restart your membership.</p>
            <form action="#" class="email-signup">
                <input type="email" placeholder="Email address" required>
                <button type="submit">Get Started</button>
            </form>
        </div>
    </div>

    <div class="features">
        <div class="row">
            <div class="text-col">
                <h2>Enjoy on your TV.</h2>
                <p>Watch on smart TVs, PlayStation, Xbox, Chromecast, Apple TV, Blu-ray players and more.</p>
            </div>
            <div class="img-col">
                <img src="src/Media/Index21.png">
            </div>
        </div>
        <div class="row">
            <div class="img-col">
                <img src="src/Media/Index22.png">
            </div>
            <div class="text-col">
                <h2>Download your shows to watch offline.</h2>
                <p>Save your favourites easily and always have something to watch.</p>
            </div>
        </div>
        <div class="row">
            <div class="text-col">
                <h2>Watch everywhere.</h2>
                <p>Stream unlimited movies and TV shows on your phone, tablet, laptop, and TV.</p>
            </div>
            <div class="img-col">
                <img src="src/Media/Index23.png">
            </div>
        </div>
    </div>

    
    
    <div class="email">

        <small>Ready to watch? Enter your email to create or restart your membership.
        </small>
        <form action="#" class="email-signup">
            <input type="email" placeholder="Email address" required>
            <button type="submit">Get Started</button>
        </form>
    </div>

    <div class="footer">
        <p class="copyright-text">&copy Dahan DelaPeña Dulay Granada Marasigan Mojica</p>
    </div>
</body>
</html>