<?php
    // Database connection $connection
    include("DBconnection.php");

    /*if(isset($_POST['btc_login']))
    {
        echo "es hat soweit geklappt";
    }
    */

    if(isset($_POST['btc_login'],$_POST['txt_userInput'],$_POST['txt_pw']))
    {
        // trimming the input
        $inp_username = trim($_POST['txt_userInput']);
        $inp_password = trim($_POST['txt_pw']);
        // Select the pw for the username
        $stmt = $connection->prepare("SELECT passwort FROM logindata WHERE logindata.username = :txt_user LIMIT 1");
        $stmt->bindParam(':txt_user', $inp_username);
        $stmt->execute();

        while($row = $stmt->fetch())    // everything gets stored in $row
        {
            $db_passw = $row['passwort'];   // the output from the hash defined in the array

            if(password_verify($inp_password, $db_passw))
            {
                // TODO ref link and session.start();
                echo "angemeldet";
            }
            else
            {
                // TODO pop up for "wrong password", mby with echo 
                echo "wrong pw";
            }
        }
    }
?>