<?php
include("connect.php");
 
$result = $dbh->query("SELECT  count(flora_parchi.flora) as ft ,parchi.id,flora_parchi.*,tipi_pianta.*,famiglie.*,flora.* from parchi,flora_parchi,tipi_pianta,famiglie,flora where (parchi.id=flora_parchi.parco) and (flora_parchi.flora=flora.id) and (flora.tipo_pianta=tipi_pianta.id) and (tipi_pianta.famiglia=famiglie.id) and famiglie.nome='arbusti' ");
$stmt = $dbh->query("SELECT   count(flora_parchi.flora) as ft ,parchi.id,flora_parchi.*,tipi_pianta.*,famiglie.*,flora.* from parchi,flora_parchi,tipi_pianta,famiglie,flora where (parchi.id=flora_parchi.parco) and (flora_parchi.flora=flora.id) and (flora.tipo_pianta=tipi_pianta.id) and (tipi_pianta.famiglia=famiglie.id) and famiglie.nome='arbusti' ");
echo '<table style="border: 1px solid black;">';
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

    echo "<tr>
    <td>".$row["ft"]."</td>
    </tr>";
}
echo '</table>';
 
?>