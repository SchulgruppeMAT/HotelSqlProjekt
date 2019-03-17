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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/backend.css">
</head>
<body>
    
    <header>
        <h1>Tropical Garda Hotel Backend</h1>
    </header>

    <nav>
        <ul>
            <li><a href="?page=Userlist">Userlist</a></li>
            <li><a href="?page=Bookinglist">Bookinglist</a></li>
            <li><a href="?page=Stonierlist">Stonierlist</a></li>
            <li><a href="?page=Zimmerverwaltung">Zimmerverwaltung</a></li>
            <li><a href="?page=Logout">Logout</a></li>
        </ul>
    </nav>

    <main>
        <?php
            switch($_GET['page']){
                case "Zimmerverwaltung":
                    echo "Zimmerverwaltung";
                    break;
                case "Bookinglist":
                    echo "Bookinglist";
                    break;
                case "Stonierlist":
                    echo "Stonierlist";
                    break;
                case "Userlist": 
                    include "backendSites/userlist.php";
                    break;
                default:
                    echo "Userlist";
                    break;
            }
        ?>
    </main>
</body>
</html>