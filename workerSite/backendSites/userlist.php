<html>
<style>
table tr td{
    border: 1px solid white;
    padding: 2px;
    margin: .5%;
}
.delete-btn{
    border: none;
    border-radius: 10px;
    background-color: #E23636;
    color: white;
    padding: 5px;
    transition-property: background-color;
    transition-duration: .5s;
}
.delete-btn:hover{
    background-color: darkred;
}
</style>
<?php
    include "dbConnect.php";

    $stmt = $conn->prepare("SELECT username, email FROM logindata");
    $stmt->execute();
?>

    <table>
<?php
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
    {
    $name = $row['username'];
    $email = $row['email'];

    echo "<tr>";
	echo "<td>".$name."</td><td>".$email."</td><td><button class='delete-btn'>Delete</button></td>";
	echo "</tr>"; 
    }
?>
    </table>
</html>