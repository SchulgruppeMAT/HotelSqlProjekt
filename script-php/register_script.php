<?php
    // Add Database connection
    include("DBconnection.php");
    // $connection 
try
{
    if(isset($_POST['btn_register']) && trim($_POST['txt_forename']) != '' &&
    trim($_POST['txt_pw']) != '' && trim($_POST['txt_username']) != '' && trim($_POST['txt_surname']) != '' && trim($_POST['txt_email']) != '' && trim($_POST['txt_pwC']) != '')
    {
        // variables get trimmed for php code 
        $inp_username = trim($_POST['txt_username']);
        $inp_password = trim($_POST['txt_pw']);
        $inp_passwordC = trim($_POST['txt_pwC']);
        $inp_forename = trim($_POST['txt_forename']);
        $inp_surname = trim($_POST['txt_surname']);
        $inp_email = trim($_POST['txt_email']);
        

        // crypting the Password
        $cryptedPW = password_hash($inp_password, PASSWORD_DEFAULT);
        if($inp_password == $inp_passwordC)
        {                                  
                // prepare stmt for the sql query                
                $stmt = $connection->prepare("CALL Register('$inp_username','$cryptedPW','$inp_email')");  
                $stmt->execute();
                $stmt2 = $connection->prepare("CALL AddCustomer('$inp_forename','$inp_surname', '$inp_username')");     
                $stmt2->execute();                                                                         
        }
        else
        {
            echo "<script>alert('Die Passwörter stimmen nicht überein')</script>";  // Verbesserung: fill von textboxyen wenn eine falscheingabe gemacht worden ist 
        }
    }
    else if (isset($_POST['btn_register'])){
      echo "<script>alert('Alle Felder müssen ausgefüllt')</script>";
    }; 
}
catch(Exception $e)
{
    echo "<script>console.log('$e');</script>";
}
?>