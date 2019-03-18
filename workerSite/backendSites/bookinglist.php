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

    $stmt = $conn->prepare("SELECT BuchungsNr, KundenNr, MitarbeiterNr FROM buchung");
    $stmt->execute();
?>

    <table>
<?php
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
    {
    $buchung = $row['BuchungsNr'];
    $kundenNr = $row['KundenNr'];
    $mitarbeiterNr = $row['MitarbeiterNr'];

    echo "<tr>";
	echo "<td>".$buchung."</td><td>".$kundenNr."</td><td>".$mitarbeiterNr"</td>";
	echo "</tr>"; 
    }
?>
    </table>
</html>