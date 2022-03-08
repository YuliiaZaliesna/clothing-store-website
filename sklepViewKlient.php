<!DOCTYPE html>
<html lang = "pl">
<head>
<?php include 'headPartHtml.php'; ?>
<?php include 'czyWpisKlient.php'; ?>
<?php include 'zrobWpisKlient.php'; ?>
<?php include 'resultKlientSet.php'; ?>
</head>
<body>
<header><?php include 'header.php'; ?></header>
<h2>Takich mamy klientów</h2>
<h3>Tyle mamy klientów: <?php echo $num?></h3>
<table>
    <tr><th>id</th><th>pass</th><th>login</th><th>name</th><th>miasto</th></tr>
    <?php include 'tableKlient.php'; ?>
</table>
<footer><?php include 'footer.php'; ?> </footer>
</body>
</html>