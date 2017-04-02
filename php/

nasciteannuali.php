<?php
include("connect.php");
 
$sql = "SELECT fauna.*,parchi.*,specie.*,specie.nome as sn,parchi.nome as pn from parchi,fauna,specie,fauna.annanascita as an  where (parchi.id=fauna.parco) and (specie.id=fauna.specie) and (fauna.annonascita>=2016)");

echo '<table style="border: 1px solid black;">';
 
 $result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
             	<td>".$row["sn"]."</td>
			    <td>".$row["pn"]."</td>
			    <td>".$row["an"]."</td>
              </tr>";
    }
} 

else {
    echo "0 results";
}
$conn->close();

?>
