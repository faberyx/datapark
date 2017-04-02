<?php
include("connect.php");

$result = $dbh->query("SELECT count(*) as n,specie.nome as sn from fauna,specie where fauna.specie=specie.id and specie.nome='$animale' and fauna.annonascita='$anno'");
$stmt = $dbh->query("SELECT count(*) as n,specie.nome as sn from fauna,specie where fauna.specie=specie.id and specie.nome='$animale' and fauna.annonascita='$anno'");
echo '<table style="border: 1px solid black;">';
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

    echo "<tr>
    <td>".$row["n"]."</td>
    <td>".$row["sn"]."</td>
    </tr>";
}
echo '</table>';
 
 
?>