<!DOCTYPE html>
<html lang = "pl">
<head>
    <?php include 'headPartHtml.php'; ?>
</head>
<body>
    <header><?php include 'header.php'; ?></header>
    <article>
        Dodawanie towarów
    </article>
    <form action="sklepViewTowar.php" method="POST">
        <table>
            <tr><td></td><td>Wpisz</td></tr>
            <tr><td>Nazwa towaru</td><td><input type="text" name="towar_nazwa"></td></tr>
            <tr><td>Cena towaru</td><td><input type="number" step="0.01" name="towar_cena"></td></tr>
            <tr><td></td><td><input type="submit" value="Zapisz"></td></tr>
        </table>
    </form>
    <footer><?php include 'footer.php'; ?></footer>
</body>
</html>