<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tropical Garda Hotel</title>

    <!--main stylesheet-->
    <link rel="stylesheet" type="text/css" href="stylesheet-scss/main.css">
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kodchasan" rel="stylesheet">
    <!--bxslider-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
</head>

<body>

    <div class="wrapper">
        <header>
            <div class="header-title">
                <h1>Tropical Garda Hotel</h1>
            </div>

            <div class="header-nav">
                <ul>
                    <li><a href="#" class="openLogin">Log in</a></li>
                    <li><a href="#" class="openSignup">Sign up</a></li>
                </ul>
            </div>
        </header>

        <div class="is-hidden login-Moodle"> 
            <form method="post">
                <button class="close-button close-pos">X</button>
                <h1>Log In</h1>

                <p>
                    <label>Benutzername<br><input type="text" name="txt_userInput"></label><br>
                    <label>Passwort<br><input type="password" name="txt_pw"></label><br>

                    <button class="std-button login-pos" name="btc_login">Einloggen</button>
                </p>
                <p class="pw-forgot">
                    <a href="#">Passwort vergessen?</a>
                </p>
                <p>
                    Sie haben noch keinen Account. Dann Registrieren Sie sich jetzt.
                    <button class="std-button switch-pos" name="btc_pwForget">Sign up</button>
                </p>
            </form>     
            <?php
                include("script-php/login_script.php");
            ?>
        </div>

        <div class="is-hidden signUp-Moodle">
            <form method="post">
                <button class="close-button close-pos">X</button> 
                <h1>Sign up</h1>
                <p>
                    <label>Voller Name<br><input type="text" name="txt_fullname"></label><br>
                    <label>Benutzername<br><input type="text" name="txt_username"></label><br>
                    <label>e-mail<br><input type="email" name="txt_email"></label><br>

                    <label>Passwort<br><input type="password" name="txt_pw"></label><br>
                    <label>Passwort(Bestätigung)<br><input type="password" name="txt_pwC"></label><br>
                    <br>
                        <button class="std-button" name="btc_register">Registrieren</button><br>
                    <br>
                </p>
                <p>
                    Sie haben bereits einen Account. Dann Loggen Sie sich jetzt ein.
                    <button class="std-button" name="btc_refLogin">Log in</button>
                </p>
            </form>
            <?php
                include("script-php/register_script.php");
            ?>
        </div>

        <div class="slider" style="margin: 0;">
            <div><img src="pictures/slider/slider-pic-harbour.jpg"></div>
            <div><img src="pictures/slider/slider-pic-mountain.jpg"></div>
            <div><img src="pictures/slider/slider-pic-see.jpg"></div>
            <div><img src="pictures/slider/slider-pic-Villa.jpg"></div>
        </div>

        <nav>
            <ul>
                <li><a href="#">Link1</a></li>
                <li><a href="#">Link2</a></li>
                <li><a href="#">Link3</a></li>
                <li><a href="#">Link4</a></li>
            </ul>
        </nav>

        <main>

            <!--Penthouse-->
            <section>

                <div class="booking-text">
                    <img src="pictures/rooms/penthouse/thumbnail.jpg" width="350px" height="250px">


                    <h1>Penthouse</h1>
                    <p class="booking-descripton">lorem Ipsum lorem Ipsum lorem Ipsum lorem Ipsum lorem Ipsum lorem
                        Ipsum lorem Ipsum lorem Ipsum lorem Ipsum</p>
                    <a href="#">Mehr Infos</a>
                </div>

                <div class="buchen">
                    <p class="price">999,99</p>
                    <button class="booking">Buchen</button>
                </div>
            </section>

            <!--Appartment-->
            <section>
                <img width="250px" height="250px">

                <div class="booking-text">
                    <h1>Penthouse</h1>
                    <p class="booking-descripton">lorem Ipsum lorem Ipsum lorem Ipsum lorem Ipsum lorem Ipsum lorem
                        Ipsum lorem Ipsum lorem Ipsum lorem Ipsum</p>
                    <a href="#">Mehr Infos</a>
                </div>

                <div class="buchen">
                    <p class="price">999,99</p>
                    <button class="booking">Buchen</button>
                </div>
            </section>

            <!--Zweizimmer-->
            <section>
                <img width="250px" height="250px">

                <div class="booking-text">
                    <h1>Penthouse</h1>
                    <p class="booking-descripton">lorem Ipsum lorem Ipsum lorem Ipsum lorem Ipsum lorem Ipsum lorem
                        Ipsum lorem Ipsum lorem Ipsum lorem Ipsum</p>
                    <a href="#">Mehr Infos</a>
                </div>

                <div class="buchen">
                    <p class="price">999,99</p>
                    <button class="booking">Buchen</button>
                </div>
            </section>

            <!--Einzelzimmer-->
            <section>
                <img width="250px" height="250px">

                <div class="booking-text">
                    <h1>Penthouse</h1>
                    <p class="booking-descripton">lorem Ipsum lorem Ipsum lorem Ipsum lorem Ipsum lorem Ipsum lorem
                        Ipsum lorem Ipsum lorem Ipsum lorem Ipsum</p>
                    <a href="#">Mehr Infos</a>
                </div>

                <div class="buchen">
                    <p class="price">999,99</p>
                    <button class="booking">Buchen</button>
                </div>
            </section>

            <!--Bungalo-->
            <section>
                <img width="250px" height="250px">

                <div class="booking-text">
                    <h1>Penthouse</h1>
                    <p class="booking-descripton">lorem Ipsum lorem Ipsum lorem Ipsum lorem Ipsum lorem Ipsum lorem
                        Ipsum lorem Ipsum lorem Ipsum lorem Ipsum</p>
                    <a href="#">Mehr Infos</a>
                </div>

                <div class="buchen">
                    <p class="price">999,99</p>
                    <button class="booking">Buchen</button>
                </div>
            </section>

        </main>

        <footer>
            <!--Kommt später erst...-->
        </footer>
    </div>

    <script src="script-javascript/App.js"></script>

</body>

</html>