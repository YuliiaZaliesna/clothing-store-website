<?php
include 'baza.php';
$conn = new mysqli($serwer, $username, $password, $database);
$query = "SELECT klient.klient_name, klient.klient_adress, towar.towar_nazwa, orders_id, quanity, price FROM orders
 LEFT JOIN (klient, towar) ON (orders.klient_id=klient.klient_id AND orders.towar_id=towar.towar_id)";
$rs = $conn->query($query);
$conn->close();
$num = $rs->num_rows;
?>