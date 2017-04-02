<?php
include("connect.php");
 
$result = $dbh->query("SELECT  parchi.*,parchi.nome as pn,parchi.id as pd,flora_parchi.*,flora.*,tipi_pianta.*,flora.nome as fn from parchi,flora_parchi,flora,tipi_pianta where (parchi.id=flora_parchi.parco) and (flora_parchi.flora=flora.id) and (flora.tipo_pianta=tipi_pianta.id) and (tipi_pianta.nome='pino')");
$stmt = $dbh->query("SELECT  parchi.*,parchi.nome as pn,parchi.id as pd,flora_parchi.*,flora.*,tipi_pianta.*,flora.nome as fn from parchi,flora_parchi,flora,tipi_pianta where (parchi.id=flora_parchi.parco) and (flora_parchi.flora=flora.id) and (flora.tipo_pianta=tipi_pianta.id) and (tipi_pianta.nome='pino')");
echo '<table style="border: 1px solid black;">';
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

    echo "<tr>
    <td>".$row["pd"]."</td>
    <td>".$row["pn"]."</td>
    <td>".$row["fn"]."</td>
    </tr>";
}
echo '</table>';
 
 
?>