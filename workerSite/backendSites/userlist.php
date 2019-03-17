<?php
    include "dbConnect.php";

    while($data = $conn->fetch()){
        echo ($data['username']);
        echo ($data['email']);
    }
?>