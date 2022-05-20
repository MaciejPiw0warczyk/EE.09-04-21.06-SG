<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styl4.css">
    <title>Panel administratora</title>
</head>
<body>
    <div id="baner">
        <h3>Portal Społecznościowy - panel administratora</h3>
    </div>
    <div id="container">
        <div id="lewy">
            <h4>Użytkownicy</h4>
            <?php
                echo"Skrypt 1";
            ?>
            <a href="settings.html">Inne ustawnienia</a>
        </div>
        <div id="prawy">
            <h4>Podaj ID użytkownika</h4>
            <form action="users.php" method="POST">
                <input type="number" name="id" id="">
                <input type="submit" value="zobacz" id="sub-button">
            </form>
            <hl>
            <?php
                echo "Skrypt 2";
            ?>
        </div>
    </div>
    <div id="stopka">
        Stronę wykonał: 01234567890
    </div>
</body>
</html>