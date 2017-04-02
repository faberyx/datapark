<?php
include("connect.php");

 $result = $dbh->query("SELECT fauna.nome as fn,fauna.specie,specie.id,specie.rischioestinzione as sre,specie.nome as sn FROM fauna,specie WHERE fauna.specie=specie.id and specie.rischioestinzione=1");
$stmt = $dbh->query("SELECT fauna.nome as fn,fauna.specie,specie.id,specie.rischioestinzione as sre,specie.nome as sn FROM fauna,specie WHERE fauna.specie=specie.id and specie.rischioestinzione=1");

while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

    echo "<tr>
    <td>".$row["fn"]."</td>
    <td>".$row["sn"]."</td>
    <td>".$row["sre"]."</td>
    </tr>";
}
echo '</table>';
 
 
 
 
 
 
 
?>