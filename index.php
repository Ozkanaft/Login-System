<!-- Skript für das Menü -->
<?php
    // Falls ein Formular unter dem Namen "regestrierung" abgeschickt worden ist
    if (isset($_POST["menü_regestrieren"])) {

        // Das Skript der "regestrierung.php" Datei wird aufgerufen
        require ("regestrierung.php");

        // Verlassen des aktuellen Skripts
        exit();
    }

    // Falls ein Formular unter dem Namen "login" abgeschickt worden ist
    if (isset($_POST["menü_login"])) {

        // Das Skript der "login.php" Datei wird aufgerufen
        require ("login.php");

        // Verlassen des aktuellen Skripts
        exit();
    }

    require("index.html");
?>