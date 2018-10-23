<?php
    // Add Database connection
    include(DBconnection.php);
    // $con 
    // buttonnames are missing 

    // TODO add html buttons later on

    if(isset($_POST['//ConfirmButton'],$_POST['//Inputfield(username)'],$_POST['//Inputfield(passwd)']))
    {
        // variables get trimmed for php code 
        $inp_username = trim($_POST['//Inputfield(username)']);
        $inp_password = trim($_POST['//Inputfield(passwd)']);
        // crypting the Password
        $cryptedPW = password_hash($inp_password, PASSWORD_DEFAULT);
        // prepare stmt for the sql query
        $stmt = $con->prepare("INSERT INTO logindata (username,passwort)
         VALUES ($inp_username,$cryptedPW)");
        // run that shit
        $stmt->execute();
    }; 

?>