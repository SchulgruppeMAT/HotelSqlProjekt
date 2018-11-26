<?php
    // Add Database connection
    include("DBconnection.php");
    // $connection 
try
{
    if(isset($_POST['btn_register'],$_POST['txt_fullname'],$_POST['txt_pw']
    ,$_POST['txt_pw'],$_POST['txt_fullname'],$_POST['txt_email']))
    {
        // variables get trimmed for php code 
        $inp_username = trim($_POST['txt_username']);
        $inp_password = trim($_POST['txt_pw']);
        $inp_passwordC = trim($_POST['txt_pwC']);
        $inp_fullname = trim($_POST['txt_fullname']);
        $inp_email = trim($_POST['txt_email']);
        // crypting the Password
        $cryptedPW = password_hash($inp_password, PASSWORD_DEFAULT);
        if($inp_password == $inp_passwordC)
        {                        
                // prepare stmt for the sql query                
                $stmt = $connection->prepare("CALL Register('$inp_username','$cryptedPW','$inp_fullname','$inp_email')");              
                $stmt->execute();                            
        }
        else
        {
            echo "<script>alert('Das Passwort ist falsch')</script>";
        }

    }; 
}
catch(Exception $e)
{
    echo "<script>console.log('$e');</script>";
}
?>