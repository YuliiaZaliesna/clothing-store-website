<?php
$i=0;
while ($i< $num) {
    $rs->data_seek($i);
    $row = $rs->fetch_assoc();
    echo "<tr>";
    echo "<td>".$row["klient_id"]."</td>";
    echo "<td>".$row["klient_password"]."</td>";
    echo "<td>".$row["klient_login"]."</td>";
    echo "<td>".$row["klient_name"]."</td>";
    echo "<td>".$row["klient_adress"]."</td>";
    echo "</tr>";
    $i++;
}
?>