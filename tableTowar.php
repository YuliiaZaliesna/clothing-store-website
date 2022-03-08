<?php
$i=0;
while ($i< $num) {
    $rs->data_seek($i);
    $row = $rs->fetch_assoc();
    echo "<tr>";
    echo "<td>".$row["towar_id"]."</td>";
    echo "<td>".$row["towar_nazwa"]."</td>";
    echo "<td>".$row["towar_cena"]."</td>";
    echo "</tr>";
    $i++;
}
?>