<!-- Skript für die Aufstellung der Datenbankverbindung -->
<?php
    // Verbindungsdaten
    $servername = "db";
    $username = "db";
    $password = "db";
    $dbname = "db";
    
    // Herstellung der Datenbankverbindung
    $verbindung = mysqli_connect($servername, $username, $password, $dbname);

    // Falls keine Verbindung aufgestellt wurde
    if (!$verbindung) {
        echo "<h3> Der Vorgang konnte nicht abgeschlossen werden! </h3>";

        // Fehlerausschreibung
        echo "<p> Fehler: " . mysqli_connect_error() . "<p>";

        // Inhalt der aktuellen Seite wird wiedergegeben
        echo file_get_contents($_SERVER['SCRIPT_FILENAME']);
        exit();
    }
?>