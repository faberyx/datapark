<?php
include("connect.php");
 
$sql = "SELECT 
  parco.nome AS pn,
  parco.id AS pd,
  flora.nome AS fn
FROM
  parco,
  flora,
  tipo_pianta
WHERE
  (parco.id = flora.parco) AND (flora.tipo_pianta = tipo_pianta.id) AND( tipo_pianta.nome = 'margherita')";

$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
    			<td>".$row["pd"]."</td>
    			<td>".$row["pn"]."</td>
   			 	<td>".$row["fn"]."</td>
              </tr>";
    }
} 
?>
