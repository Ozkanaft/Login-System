<!-- Skript für die Nutzerdaten-Ausgabe durch einen Cookie -->
<?php
    // Falls auf einen Link mit der URL "link_geklickt" geklickt wurde
    if (isset($_GET["cookie_name"])) {

        // Initialisierung des eingesendeten Cookie-Namen
        $cookie_name = $_GET["cookie_name"];

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

        if (isset($_POST["cookie_löschen"])) {
    
            require("db_verbindung.php");
    
            // Löschung des Datensatzes der jeweiligen ID
            $sql = "DELETE FROM `Nutzer Daten` WHERE `ID` = $cookie_name";
    
            // Falls eine SQL-Abfrage verschickt werden konnte
            if (mysqli_query($verbindung, $sql)) {
    
                echo "<h3> Nutzer wurde erfolgreich gelöscht! </h3>";
            }
    
            // Schließung der Verbindung zur Datenbank
            mysqli_close($verbindung);
    
            // Löschung des Cookies
            setcookie($cookie_name, json_encode($cookie_wert), time() - (30 * 24 * 60 * 60), "/");
        }    
    }

    if (isset($_POST["cookie_abmelden"])) {

        require("index.php");
        exit();
    }

    require("cookie.html");
?>