<!-- Skript für das Menü -->
<?php
    // Falls ein Formular unter dem Namen "regestrierung" abgeschickt worden ist
    if (isset($_POST["regestrieren_index"])) {

        // Das Skript der "regestrierung.php" Datei wird aufgerufen
        require ("regestrierung.php");

        // Verlassen des aktuellen Skripts
        exit();
    }

    // Falls ein Formular unter dem Namen "login" abgeschickt worden ist
    if (isset($_POST["login_index"])) {

        // Das Skript der "login.php" Datei wird aufgerufen
        require ("login.php");

        // Verlassen des aktuellen Skripts
        exit();
    }
?>

<!doctype html>
<!-- Sprache der Website -->
<html lang="de"> 
    <head>
        <!-- Dekodierungstyp -->
        <meta charset="utf-8">

        <!-- Tab-Titel der Website -->
        <title>Menü</title>

        <!-- Einbindung des CSS Datei in das Projekt -->
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
        <h1>Menü</h1>
        <p>Hallo Nutzer! Bitte wählen Sie eine Option aus:</p>
        <form action="index.php" method="post">
            <input type="submit" name="regestrieren_index" value="Regestrieren" />
            <input type="submit" name="login_index" value="Einloggen" />
        </form>
    </body>
</html>