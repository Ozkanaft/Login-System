<!-- Skript für die Nutzerdaten-Ausgabe durch einen Cookie -->
<?php
    // Falls auf einen Link mit der URL "link_geklickt" geklickt wurde
    if (isset($_GET['cookie_name'])) {

        // Initialisierung des eingesendeten Cookie-Namen
        $cookie_name = $_GET['cookie_name'];

        // Dekodierung der Cookie-Daten von einem JSON Strings in ein array:
        $cookie_wert = json_decode($_COOKIE[$cookie_name], true);

        // Zeige den Datensatz vom Cookie an
        echo "<p> Hallo, " . $cookie_wert["cookie_benutzername"] . "!</p>";
        echo "Dies sind Ihre persönliche Daten:<br>";
        echo "<ul>";
        echo "<li> Vorname: " . $cookie_wert["cookie_vorname"] . "</li>";
        echo "<li> Nachname: " . $cookie_wert["cookie_nachname"] . "</li>";
        echo "<li> E-Mail: " . $cookie_wert["cookie_email"] . "</li>";
        echo "</ul>";
    }

    if (isset($_POST["nutzer_login"])) {

        require ("login.php");
        exit();
    }
            
    if (isset($_POST["nutzer_menü"])) {

        require ("index.php");
        exit();
    }

    require("nutzer.html");
?>