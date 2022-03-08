<!DOCTYPE html>
<html lang = "pl">
<head>
<?php include 'headPartHtml.php'; ?>
<?php include 'czyWpisTowar.php'; ?>
<?php include 'zrobWpisTowar.php'; ?>
<?php include 'resultTowarSet.php'; ?>
</head>
<body>
<header><?php include 'header.php'; ?></header>
<h2>Takie mamy towary</h2>
<h3>Tyle mamy towarów: <?php echo $num?></h3>
<table>
    <tr><th>id</th><th>nazwa</th><th>cena</th></tr>
    <?php include 'tableTowar.php'; ?>
</table>
<footer><?php include 'footer.php'; ?> </footer>
</body>
</html>