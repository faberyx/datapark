<?php
include("connect.php");
 
 
$result = $dbh->query("SELECT MIN(fauna.annonascita) as m,specie.*,parchi.* from specie,fauna,parchi where specie.id=fauna.specie and parchi.nome='adamello'  ");
$stmt = $dbh->query("SELECT MIN(fauna.annonascita) as m,specie.*,parchi.* from specie,fauna,parchi where specie.id=fauna.specie and parchi.nome='adamello'  ");
echo '<table style="border: 1px solid black;">';
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

    echo "<tr>
    <td>".$row["m"]."</td>
    </tr>";
}
echo '</table>';
 
 
 
?>