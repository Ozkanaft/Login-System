<!-- Skript für die Datenbankeingabe -->
<?php
    // Keine automatisch generierte Fehlermeldungen auf der loaklen Website 
    ini_set('display_errors', 0);

    // Verbindungsdaten
    $servername = "db";
    $username = "db";
    $password = "db";
    $dbname = "db";

    // Herstellung der Datenbankverbindung
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Überprüfung der Verbindung
    if (!$conn) {

        // Falls keine Verbindung aufgestellt wurde
        die("<h3> Verbindung zur Datenbank konnte nicht hergestellt werden! </h3>" . mysqli_connect_error());
    }

    // Falls eine Verbindung aufgestellt wurde
    echo "Daten wurden erfolgreich übermittelt!";

    // Schreiben in die "Nutzer Daten" Tabelle
    $sql = "INSERT INTO `Nutzer Daten` (`ID`, `Vorname`, `Nachname`, `Email`, `Benutzername`, `Passwort`) 
    VALUES (NULL, '$vorname', '$nachname', '$email', '$benutzername', '$passwort')";

    // Verschickung der SQL-Abfrage
    mysqli_query($conn, $sql);

    // Schließung der Verbindung zur Datenbank
    mysqli_close($conn);
?>