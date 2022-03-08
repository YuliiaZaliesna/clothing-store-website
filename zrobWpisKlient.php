<?php
if($wpis){
include 'baza.php';
$conn = new mysqli($serwer, $username, $password, $database);
$query = "INSERT INTO klient(klient_password, klient_login, klient_name, klient_adress)";
$query .= "VALUES('".$klient_password."','".$klient_login."','".$klient_name."','".$klient_adress."')";
$conn->query($query);
$conn->close();
}
 ?>