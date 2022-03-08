<?php
if($wpis){
include 'baza.php';
$conn = new mysqli($serwer, $username, $password, $database);
$query = "INSERT INTO orders(klient_id, towar_id, quanity, price)";
$query .= "VALUES('".$klient_id."','".$towar_id."','".$quanity."','".$price."')";
$conn->query($query);
$conn->close();
}
 ?>