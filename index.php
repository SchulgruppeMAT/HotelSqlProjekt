<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    if(isset($_SESSION['user']))
    {
        try
        {
            $user = $_SESSION['user'];
            echo"<script>console.log('$user');</script>";
            //session_destroy();
        }
        catch(Exception $e)
        {
            echo"<script>console.log('$e');</script>";
        }
    }
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tropical Garda Hotel</title>

    <!--main stylesheet-->
    <link rel="stylesheet" type="text/css" href="stylesheet-scss/main.css">
    <!--Fonts-->

    <!--bxslider-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
</head>

<body>
    <div class="overlay is-hidden"></div>

    <aside class="left">

        <figure class="is-hidden" id="userDetail">
            <img src="bbop.gif">
            <figcaption>Arin Artz Lopez</figcaption>
        </figure>

        <!--Login Buttons-->
        <div class="login">
            <a href="#" class="openLogin">Login</a>
            <a href="#" class="openSignup">Sign up</a>
        </div>

        <!--Login Popup-->
        <div class="is-hidden login-Popup">
            <button class="close-button close-pos">X</button>
    
            <button class="toLogIn login-btn">Login</button>
            <button class="toSignUp signup-btn">Sign up</button>

                <div class="inputs">
                    <form method="post" class="login-form">
                        <p>
                            <label>Benutzername<br><input type="text" name="txt_userInput"></label><br>
                            <label>Passwort<br><input type="password" name="txt_pw"></label><br>

                            <button class="std-button login-pos" name="btc_login">Einloggen</button>
                        </p>
                        <p class="pw-forgot">
                            <a href="#">Passwort vergessen?</a>
                        </p>
                    </form>
                    <p class="no-acc">
                        Sie haben noch keinen Account. Dann Regestrieren Sie sich jetzt.
                        <button class="std-button toSignUp">Sign up</button>
                    </p>
                </div>
        </div>

        <?php
            include("script-php/login_script.php");
        ?>

        <!--Signup Popup-->
        <div class="is-hidden signUp-Popup">
            <button class="close-button close-pos">X</button>

            <button class="toLogIn login-btn">Login</button>
            <button class="toSignUp signup-btn">Sign up</button>

            <div class="inputs">
                <form method="post" class="signup-form">
                    <p>
                        <label>Vollername<br><input type="text" name="txt_fullname"></label><br>
                        <label>e-mail<br><input type="email" name="txt_email"></label><br>
                        <label>Username<br><input type="text" name="txt_username"></label><br>
                        <label>Passwort<br><input type="password" name="txt_pw"></label><br>
                        <label>Passwort Bestätigen<br><input type="password" name="txt_pwC"></label><br>
                        <br>
                        <button class="std-button" name="btn_register">Registrieren</button><br>
                        <br>
                    </p>
                </form>
                <p class="switchtoLogin">
                    Sie haben bereits einen Account. Dann Loggen Sie sich jetzt ein.<br>
                    <button class="std-button toLogIn">Log in</button>
                </p>
            </div>
        </div>

        <?php
            include("script-php/register_script.php");
        ?>

        <nav class="is-logged">
            <ul>
                <li class="is-hidden" id="profil"><a href="#">Profil</a></li>
                <li><a href="#">Unser Hotel</a></li>
                <li><a href="#">Unsere Angebote</a></li>
                <li class="is-hidden" id="bookings"><a href="#">Buchungen</a></li>
                <li class="is-hidden"><a href="#" id="logout">Logout</a></li>
            </ul>
        </nav>

    </aside>

    <main>
        <header>
            <h1>Tropical Garda Hotel</h1>
            <h2>Feel rested and real relaxation</h2>


            <div class="container">
                <section id="1">
                    <h1>Einzelzimmer</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consetetur
                        sadipscing elitr, sed diam nonumy eirmod
                        tempor invidunt ut labore et dolore magna
                        aliquyam erat, sed diam voluptua.
                    </p>
                    <button class="bookingPopup">Booking</button>
                </section>

                <div id="1-bookingPopup" class="bookingPopup is-hidden">
                <button class="close-button">X</button>
                
                <img>
                <div class="booking-info bookingPopup" id="1-bookingPopup">
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

                <section>
                    <h1>Doppelzimmer</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consetetur
                        sadipscing elitr, sed diam nonumy eirmod
                        tempor invidunt ut labore et dolore magna
                        aliquyam erat, sed diam voluptua.
                    </p>
                    <button class="bookingPopup">Buchen</button>
                </section>

                <div id="2-bookingPopup" class="bookingPopup is-hidden">
                <button class="close-button">X</button>
                2
            </div>

                <section>
                    <h1>Familienzimmer</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consetetur
                        sadipscing elitr, sed diam nonumy eirmod
                        tempor invidunt ut labore et dolore magna
                        aliquyam erat, sed diam voluptua.
                    </p>
                    <button class="bookingPopup">Buchen</button>
                </section>

                <div id="2-bookingPopup" class="bookingPopup is-hidden">
                <button class="close-button">X</button>
                2
            </div>

                <section>
                    <h1>Appartment</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consetetur
                        sadipscing elitr, sed diam nonumy eirmod
                        tempor invidunt ut labore et dolore magna
                        aliquyam erat, sed diam voluptua.
                    </p>
                    <button class="bookingPopup">Buchen</button>
                </section>

                <div id="2-bookingPopup" class="bookingPopup is-hidden">
                <button class="close-button">X</button>
                2
            </div>

            </div>

        </header>
    </main>

    <aside class="right">
        <div class="recommended">
            <span>Empfohlen von trip<font>advisor</font></span>
            <img src="pictures/tripadvisor-logo.png">
        </div>

        <div class="social-media">
            <span>Schauen Sie mal hier vorbei</span>
            <div class="img-container">
                <img src="pictures/facebook.png" class="icon">
                <img src="pictures/twitter.png" class="icon">
                <img src="pictures/snapchat.png" class="icon">
                <img src="pictures/insta.png" class="icon">
            </div>
        </div>

        <div class="footer">
            <a href="">Kontakt</a>
            <a href="">Impressum</a>
        </div>
    </aside>

    <script src="script-javascript/App.js"></script>
    <script src="script-javascript/signUpLogInPopup.js"></script>
</body>

</html>