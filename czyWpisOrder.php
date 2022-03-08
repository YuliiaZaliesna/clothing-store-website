<?php 
$wpis = TRUE;
if (isset($_POST['klient_id'])) {$klient_id = $_POST['klient_id'];} else {$wpis = FALSE;}
if (isset($_POST['towar_id'])) {$towar_id = $_POST['towar_id'];} else {$wpis = FALSE;}
if (isset($_POST['quanity'])) {$quanity = $_POST['quanity'];} else {$wpis = FALSE;}
if (isset($_POST['price'])) {$price = $_POST['price'];} else {$wpis = FALSE;}
?>