<?php
			$servername = "localhost";
			$username = "root";
			$password = "root";
			$dbname = "hotel";
			try
			{
					$connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
					$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);					
			}
			catch(PDOException $e)
			{
				echo "<script>console.log('$e');</script>";
			}
?>