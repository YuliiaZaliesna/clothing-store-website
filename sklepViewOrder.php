<!DOCTYPE html>
<html lang = "pl">
<head>
<?php include 'headPartHtml.php'; ?>
<?php include 'czyWpisOrder.php'; ?>
<?php include 'zrobWpisOrder.php'; ?>
<?php include 'resultOrderSet.php'; ?>
</head>
<body>
<header><?php include 'header.php'; ?></header>
<h2>Tutaj są wszystkie zamówienia</h2>
<h3>Tyle mamy zamówień: <?php echo $num?></h3>
<table>
    <tr><th>id</th><th>imię</th><th>nazwa</th><th>ilość</th><th>cena</th></tr>
    <?php include 'tableOrder.php'; ?>
</table>
<footer><?php include 'footer.php'; ?> </footer>
</body>
</html>