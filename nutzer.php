<!-- Skript für die Nutzerdaten-Ausgabe durch einen Cookie -->
<?php
    // Keine automatisch generierte Fehlermeldungen auf der loaklen Website
    ini_set("display_errors", 0);

    // Falls auf einen Link mit der URL "link_geklickt" geklickt wurde
    if (isset($_GET['cookie_name'])) {

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
        
        // Die Session-Variablen werden auf ein leeren Array gesetzt, damit sie sicher gelöscht werden
        $_SESSION = array();

        // Beendung der Sitzung
        session_destroy();

        require ("login.php");
        exit();
    }
            
    if (isset($_POST["nutzer_menü"])) {

        // Die Session-Variablen werden auf ein leeren Array gesetzt, damit sie sicher gelöscht werden
        $_SESSION = array();

        // Beendung der Sitzung
        session_destroy();

        require ("index.php");
        exit();
    }

    require("nutzer.html");
?>