<?php 
$wpis = TRUE;
if (isset($_POST['klient_password'])) {$klient_password = $_POST['klient_password'];} else {$wpis = FALSE;}
if (isset($_POST['klient_login'])) {$klient_login = $_POST['klient_login'];} else {$wpis = FALSE;}
if (isset($_POST['klient_name'])) {$klient_name = $_POST['klient_name'];} else {$wpis = FALSE;}
if (isset($_POST['klient_adress'])) {$klient_adress = $_POST['klient_adress'];} else {$wpis = FALSE;}
?>