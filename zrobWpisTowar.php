<?php
if($wpis){
include 'baza.php';
$conn = new mysqli($serwer, $username, $password, $database);
$query = "INSERT INTO towar(towar_nazwa, towar_cena) VALUES('".$towar_nazwa."','".$towar_cena."')";
$conn->query($query);
$conn->close();
}
 ?>