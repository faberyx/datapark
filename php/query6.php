
<?php
include("connect.php");
 
$result = $dbh->query("SELECT fauna.*,parchi.*,specie.*,specie.nome as sn,parchi.nome as pn from parchi,fauna,specie,fauna.annanascita as an  where (parchi.id=fauna.parco) and (specie.id=fauna.specie) and (fauna.annonascita>=2016)");
$stmt = $dbh->query("SELECT fauna.*,parchi.*,specie.*,specie.nome as sn,parchi.nome as pn,fauna.annonascita as an from parchi,fauna,specie  where (parchi.id=fauna.parco) and (specie.id=fauna.specie) and (fauna.annonascita>=2016)");
echo '<table style="border: 1px solid black;">';
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

    echo "<tr>
    <td>".$row["sn"]."</td>
    <td>".$row["pn"]."</td>
    <td>".$row["an"]."</td>
    </tr>";
}
echo '</table>';
 
 
?>