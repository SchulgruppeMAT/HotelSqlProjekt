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
    <div class="overlay is-hidden"></div>
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

        <div class="is-hidden login-Popup"> 
                <button class="close-button close-pos">X</button>
                <h1>Log In</h1>
            <form method="post">
                <p>
                    <label>Benutzername<br><input type="text" name="txt_userInput"></label><br>
                    <label>Passwort<br><input type="password" name="txt_pw"></label><br>

                    <button class="std-button login-pos" name="btc_login">Einloggen</button>
                </p>
                <p class="pw-forgot">
                    <a href="#">Passwort vergessen?</a>
                </p>
            </form>
                <p>
                    Sie haben noch keinen Account. Dann Regestrieren Sie sich jetzt.
                    <button class="std-button toSignUp">Sign up</button>
                </p>

        </div>

        <?php
            include("script-php/login_script.php");
        ?>

        <div class="is-hidden signUp-Popup">             
                <button class="close-button close-pos">X</button> 
                <h1>Sign up</h1>
            <form method="post">   
                <p>
                    <label>Vollername<br><input type="text" name="txt_fullname"></label><br>
                    <label>Benutzername<br><input type="text" name="txt_username"></label><br>
                    <label>e-mail<br><input type="email" name="txt_email"></label><br>

                    <label>Passwort<br><input type="password" name="txt_pw"></label><br>
                    <label>Passwort Bestätigen<br><input type="password" name="txt_pwC"></label><br>
                    <br>
                        <button class="std-button" name="btn_register">Registrieren</button><br>
                    <br>
                </p>
            </form>
                <p>
                    Sie haben bereits einen Account. Dann Loggen Sie sich jetzt ein.
                    <button class="std-button toLogIn">Log in</button>
                </p>
        </div>
        <?php
            include("script-php/register_script.php");
        ?>

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
            <!--Einzelzimmer-->
            <section id="1">                
                <img src="pictures/rooms/penthouse/thumbnail.jpg">

                <div class="booking-info">
                    <h1 class="sectionTitle">Einzelzimmer</h1>
                    <p class="booking-descripton">
                            Buchen Sie jetzt unser beliebtes Einzelzimmer im Hotel, 
                            mit wunderschönen Ausblick auf den Gardasee. Zusätzlich bekommen Sie 20 % Rabat, 
                            wenn Sie all inklusiv dazu buchen.
                    </p>
                    <a href="#">Sie brauchen mehr Informationen?</a> 
                </div>
                
                <div class="booking">
                    <p class="price">240,00€</p>
                    <button class="booking-btn std-button">Buchen</button>
                </div>
            </section>
            <!--Booking Popup-->
            <div id="1-bookingPopup" class="bookingPopup ">
                <button class="close-button">X</button>
                
                <img>
                <div class="booking-info">
                    <h1>Einzelzimmer</h1>
                    <p>
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                     sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, 
                     sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
                      Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 
                      Lorem ipsum dolor sit amet, consetetur sadipscing elitr, 
                      sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, 
                      sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. 
                      Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                    </p>
                </div>
            </div>

            <!--Appartment-->
            <section id="2">
                <img src="pictures/rooms/penthouse/thumbnail.jpg">

                <div class="booking-info">
                    <h1 class="sectionTitle">Einzelzimmer</h1>
                    <p class="booking-descripton">
                            Buchen Sie jetzt unser beliebtes Einzelzimmer im Hotel, 
                            mit wunderschönen Ausblick auf den Gardasee. Zusätzlich bekommen Sie 20 % Rabat, 
                            wenn Sie all inklusiv dazu buchen.
                    </p>
                    <a href="#">Sie brauchen mehr Informationen?</a> 
                </div>
                
                <div class="booking">
                    <p class="price">240,00€</p>
                    <button class="booking-btn std-button">Buchen</button>
                </div>
            </section>
            <!--Booking Popup-->
            <div id="2-bookingPopup" class="bookingPopup is-hidden">
                <button class="close-button">X</button>
                2
            </div>

            <!--Zweizimmer-->
            <section id="3">
                <img src="pictures/rooms/penthouse/thumbnail.jpg">

                <div class="booking-info">
                    <h1 class="sectionTitle">Einzelzimmer</h1>
                    <p class="booking-descripton">
                            Buchen Sie jetzt unser beliebtes Einzelzimmer im Hotel, 
                            mit wunderschönen Ausblick auf den Gardasee. Zusätzlich bekommen Sie 20 % Rabat, 
                            wenn Sie all inklusiv dazu buchen.
                    </p>
                    <a href="#">Sie brauchen mehr Informationen?</a> 
                </div>
                
                <div class="booking">
                    <p class="price">240,00€</p>
                    <button class="booking-btn std-button">Buchen</button>
                </div>
            </section>
            <!--Booking Popup-->
            <div id="3-bookingPopup" class="bookingPopup is-hidden">
                <button class="close-button">X</button>
                3
            </div>
            
            <!--Einzelzimmer-->
            <section id="4">
                <img src="pictures/rooms/penthouse/thumbnail.jpg">

                <div class="booking-info">
                    <h1 class="sectionTitle">Einzelzimmer</h1>
                    <p class="booking-descripton">
                            Buchen Sie jetzt unser beliebtes Einzelzimmer im Hotel, 
                            mit wunderschönen Ausblick auf den Gardasee. Zusätzlich bekommen Sie 20 % Rabat, 
                            wenn Sie all inklusiv dazu buchen.
                    </p>
                    <a href="#">Sie brauchen mehr Informationen?</a> 
                </div>
                
                <div class="booking">
                    <p class="price">240,00€</p>
                    <button class="booking-btn std-button">Buchen</button>
                </div>
            </section>
            <!--Booking Popup-->
            <div id="4-bookingPopup" class="bookingPopup is-hidden">
                <button class="close-button">X</button>
                4
            </div>

            <!--Bungalo-->
            <section id="5">
                <img src="pictures/rooms/penthouse/thumbnail.jpg">

                <div class="booking-info">
                    <h1 class="sectionTitle">Einzelzimmer</h1>
                    <p class="booking-descripton">
                            Buchen Sie jetzt unser beliebtes Einzelzimmer im Hotel, 
                            mit wunderschönen Ausblick auf den Gardasee. Zusätzlich bekommen Sie 20 % Rabat, 
                            wenn Sie all inklusiv dazu buchen.
                    </p>
                    <a href="#">Sie brauchen mehr Informationen?</a> 
                </div>
                
                <div class="booking">
                    <p class="price">240,00€</p>
                    <button class="booking-btn std-button">Buchen</button>
                </div>
            </section>
            <!--Booking Popup-->
            <div id="5-bookingPopup" class="bookingPopup is-hidden">
                <button class="close-button">X</button>
                5
            </div>

        </main>

        <footer>
            <!--Kommt später erst...-->
        </footer>
    </div>

    <script src="script-javascript/App.js"></script>
    <script src="script-javascript/signUpLogInPopup.js"></script>

</body>

</html>