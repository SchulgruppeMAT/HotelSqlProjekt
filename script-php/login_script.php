<?php
    // Database connection $connection
    include("DBconnection.php");


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
                //echo "<script>alert('Angemeldet');</script>";
                //session_start();
                if ($inp_username=='admin'&&$db_passw=='$2y$10$71wW7CM7wqawoJnB9hCy5uK1RMXXSNgaXtzSMdt5IXfXbsHXN2qQ2')
                {
                    $_SESSION['user']=$inp_username;
                    header("Refresh:0");
                }
                else
                {
                    $_SESSION['user']=$inp_username;
                    header("Refresh:0");
                } 
            }
            else
            {
                echo "<script>alert('Falsches PW');</script>";
            }
        }
    }
?>