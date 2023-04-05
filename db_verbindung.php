<!-- Skript für die Datenbankverbindung -->
<?php    
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
        die("Verbindung konnte nicht hergestellt werden: " . mysqli_connect_error());
    }

    // Falls eine Verbindung aufgestellt wurde
    echo "Verbindung zur Datenbank wurde erfolgreich hergestellt!";
?>