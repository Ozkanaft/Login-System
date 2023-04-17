<!-- Skript für die Nutzerdaten-Ausgabe durch einen Cookie -->
<?php
    // Keine automatisch generierte Fehlermeldungen auf der loaklen Website 
    ini_set("display_errors", 0);

    // Fortführung der Sitzung
    session_start();

    // Zeige die Sitzungs-Daten an
    echo "<p> Hallo, " . $_SESSION["session_benutzername"] . "!</p>";
    echo "Dies sind Ihre persönliche Daten:<br>";
    echo "<ul>";
    echo "<li> Vorname: " . $_SESSION["session_vorname"] . "</li>";
    echo "<li> Nachname: " . $_SESSION["session_nachname"] . "</li>";
    echo "<li> E-Mail: " . $_SESSION["session_email"] . "</li>";
    echo "</ul>";

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