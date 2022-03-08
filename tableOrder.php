<?php
$i=0;
while ($i< $num) {
    $rs->data_seek($i);
    $row = $rs->fetch_assoc();
    echo "<tr>";
    echo "<td>".$row["orders_id"]."</td>";
    echo "<td>".$row["klient_name"]."</td>";
    echo "<td>".$row["towar_nazwa"]."</td>";
    echo "<td>".$row["quanity"]."</td>";
    echo "<td>".$row["price"]."</td>";
    echo "</tr>";
    $i++;
}
?>