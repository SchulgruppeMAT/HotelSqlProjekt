<?php
    // Add Database connection
    include("DBconnection.php");
    // $connection 

    if(isset($_POST['btc_register'],$_POST['txt_fullname'],$_POST['txt_pw']
    ,$_POST['txt_pw'],$_POST['txt_fullname'],$_POST['txt_email']))
    {
        // variables get trimmed for php code 
        $inp_username = trim($_POST['txt_username']);
        $inp_password = trim($_POST['txt_pw']);
        $inp_passwordC = trim($_POST['txt_pwC']);
        $inp_fullname = trim($_POST['txt_fullname']);
        $inp_email = trim($_POST['txt_email']);
        echo "$inp_username";
        // crypting the Password
        $cryptedPW = password_hash($inp_password, PASSWORD_DEFAULT);
        if($inp_password == $inp_passwordC)
        {
        // prepare stmt for the sql query
        $stmt = $connection->prepare("INSERT INTO logindata (username,passwort,fullname,email)
         VALUES ($inp_username,$cryptedPW,$inp_fullname,$inp_email)");
        //$stmt = $connection->prepare("SELECT * FROM logindata");
        // run that shit
        $stmt->execute();
        while($ds=$stmt->fetch_object()){
            echo "<script>alert('$ds');</script>";
        }
        }
        else
        {
            echo "Passwort stimmt nicht überein!!";
        }

    }; 

?>