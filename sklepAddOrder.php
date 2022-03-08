<!DOCTYPE html>
<html lang="pl">
<head>
    <?php include 'headPartHtml.php'; ?>
    <?php include 'resultOrderKlientTowarSet.php'; ?>
</head>
<body>
    <header><?php include 'header.php'; ?></header>
    <article>
        Dodawanie transakcji
    </article>
    <form action="sklepViewOrder.php" method="POST">
        <table>
            <tr><td>Klient</td><td>Towar</td><td>Ilość</td><td>Koszt</td></tr>
            <tr>
                <td><select name="klient_id"><?php include 'selectOrderKlient.php';?></select></td>
                <td><select name="towar_id"><?php include 'selectOrderTowar.php';?></select></td>
                <td><input type="number" name="quanity"></td>
                <td><input type="number" step="0.01" name="price"></td>
            </tr>
            <tr><td></td><td></td><td><input type="submit" value="Zapisz"></td><td></td></tr>
        </table>
    </form>
    <footer><?php include 'footer.php'; ?></footer>
</body>
</html>