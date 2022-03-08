<?php
include 'baza.php';
$conn = new mysqli($serwer, $username, $password, $database);
$query = "SELECT * FROM klient";
$rs = $conn->query($query);
$conn-> close();
$num = $rs->num_rows;
?>