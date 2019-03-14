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
            //session_destroy();
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
</head>
<body>
    <h1>Hello World</h1>
</body>
</html>