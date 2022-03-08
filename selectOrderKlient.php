<?php
$i=0;
while ($i<$numKlient) {
    $rsKlient->data_seek($i);
    $row = $rsKlient->fetch_assoc();
    echo "<option value=".$row["klient_id"].">".$row["klient_name"]."</option>";
    $i++;
}
?>