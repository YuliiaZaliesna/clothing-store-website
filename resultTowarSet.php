<?php
include 'baza.php';
$conn = new mysqli($serwer, $username, $password, $database);
$query = "SELECT * FROM towar";
$rs = $conn->query($query);
$conn-> close();
$num = $rs->num_rows;
?>