<?php
include("connect.php");

$sql = "SELECT fauna.nome as fn,fauna.specie,specie.nome as sn,specie.id FROM fauna,specie WHERE fauna.specie=specie.id ORDER BY sn";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["fn"]."</td>
                <td>".$row["sn"]."</td>
              </tr>";
    }
} 

else {
    echo "0 results";
}
$conn->close();
?>
