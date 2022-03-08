<!DOCTYPE html>
<html lang="pl">
<head>
    <?php include 'headPartHtml.php'; ?>
</head>
<body>
    <header><?php include 'header.php'; ?></header>
    <article>
        Dodawanie klientów
    </article>
    <form action="sklepViewKlient.php" method="POST">
        <table>
            <tr><td></td><td>Wpisz</td></tr>
            <tr><td>hasło</td><td><input type="text" name="klient_password"></td></tr>
            <tr><td>login</td><td><input type="text" name="klient_login"></td></tr>
            <tr><td>imię</td><td><input type="text" name="klient_name"></td></tr>
            <tr><td>miasto</td><td><input type="text" name="klient_adress"></td></tr>
            <tr><td></td><td><input type="submit" value="Zapisz"></td></tr>
        </table>
    </form>
    <footer><?php include 'footer.php'; ?></footer>
</body>
</html>