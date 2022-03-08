<?php
include 'baza.php';
$conn = new mysqli($serwer, $username, $password, $database);
$queryKlient = "SELECT * FROM klient";
$rsKlient = $conn->query($queryKlient);
$numKlient = $rsKlient->num_rows;
$queryTowar = "SELECT * FROM towar";
$rsTowar = $conn->query($queryTowar);
$numTowar = $rsTowar->num_rows;
$conn->close();
?>