<!DOCTYPE html>
<html lang="en">

<?php
    session_start();
    if(isset($_SESSION['username']) )
    {
        try
        {
            $user = $_SESSION['username'];
            echo"<script>console.log('$user');</script>";
        }
        catch(Exception $e)
        {
            echo"<script>console.log('$e');</script>";
        }
    }
?>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=w, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <main>
            <h1>Mitarbeiter Login</h1>
            <form method=post>
                <label>Username<br><input type="text" name="username"></label><br>
                <label>password<br><input type="password" name="password"></label><br>
                <button >Submit</button>
            </form>
        </main>

        <?php
            if(!empty($_POST['username']) && !empty($_POST['password'])){
                $admin = "admin";
                $admin_pw = 123;

                if($admin == trim($_POST['username']) && $admin_pw == trim($_POST['password'])){
                    $_SESSION['username']=$admin;
                    echo "<script>
                            window.location.replace('workerSpace.php'); 
                        </script>";
                exit();
                } else{
                    echo "<script>
                    alert('no');
                </script>";
                }
            }
        ?>
    </body>
</html>