<?php
    // Database connection $con
    include(DBconnection.php);

    // TODO html two Inputfields / a confirmbutton
    
    if(isset($_POST['//ConfirmButton'],$_POST['//Inputfield(username)'],$_POST['//Inputfield(passwd)']))
    {
        // trimming the input
        $inp_username = trim($_POST['//Inputfield(username)']);
        $inp_password = trim($_POST['//Inputfield(passwd)']);
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
            }
            else
            {
                // TODO pop up for "wrong password", mby with echo 
            }
        }
    }
?>