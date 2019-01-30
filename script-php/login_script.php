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
                if ($inp_username=='admin'&&$db_passw=='$2y$10$71wW7CM7wqawoJnB9hCy5uK1RMXXSNgaXtzSMdt5IXfXbsHXN2qQ2')
                {
                    $_SESSION['user']=$inp_username;
                    header("Refresh:0");
                }
                else
                {
                    $stmt1 = $connection->prepare("CALL getCustID('$inp_username')");  
                    $stmt1->execute();          
                    while ($row = $stmt1->fetch()) {
                      $CustomID = $row['KundenNr'];                    
                  }                                                              
                    $_SESSION['user']=$inp_username;
                    $_SESSION['CustID']=$CustomID;                  
                    header("Refresh:0");
                } 
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