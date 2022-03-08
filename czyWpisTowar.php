<?php 
$wpis = TRUE;
if (isset($_POST['towar_nazwa'])) {$towar_nazwa = $_POST['towar_nazwa'];} else {$wpis = FALSE;}
if (isset($_POST['towar_cena'])) {$towar_cena = $_POST['towar_cena'];} else {$wpis = FALSE;}
?>