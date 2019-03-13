<?php
          if (isset($_GET['DoLogout'])){
            //echo"<script>console.log($logout);</script>";
            session_destroy();      
            echo"<script>window.location.replace('index.php');</script>";
          }
        ?>