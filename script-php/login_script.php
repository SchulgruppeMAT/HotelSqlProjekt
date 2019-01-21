<?php
    // Database connection $connection
    include("DBconnection.php");


    if(isset($_POST['btc_login']) && trim($_POST['txt_userInput']) != '' && trim($_POST['txt_pw']) != '')
    {
        // trimming the input
        $inp_username = trim($_POST['txt_userInput']);
        $inp_password = trim($_POST['txt_pw']);
        // Select the pw for the username
        $stmt = $connection->prepare("SELECT passwort FROM logindata WHERE logindata.username = :txt_user LIMIT 1");
        $stmt->bindParam(':txt_user', $inp_username);
        $stmt->execute();

        // check if username exists
        if ($stmt->rowCount() == 0){
          echo "<script>alert('Ungültiger Username');</script>";
        }

        while($row = $stmt->fetch())    // everything gets stored in $row
        {
            $db_passw = $row['passwort'];   // the output from the hash defined in the array

            if(password_verify($inp_password, $db_passw))
            {
                // TODO ref link and session.start();
                echo "<script>alert('Angemeldet');</script>";
            }
            else
            {
                echo "<script>alert('Falsches PW');</script>";
            }
        }
    }
    else if (isset($_POST['btc_login'])){
      echo "<script>alert('Bitte alle Felder ausfüllen');</script>";
    }
?>