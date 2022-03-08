<?php
$i=0;
while ($i<$numTowar) {
    $rsTowar->data_seek($i);
    $row = $rsTowar->fetch_assoc();
    echo "<option value=".$row["towar_id"].">".$row["towar_nazwa"]."</option>";
    $i++;
}
?>