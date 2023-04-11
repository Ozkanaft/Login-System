<!-- Skript für die Datenbankeingabe -->
<?php
    // Keine automatisch generierte Fehlermeldungen auf der loaklen Website 
    ini_set('display_errors', 0);

    // Initialisierung der Variablen mit den Formulardaten
    $vorname = $_POST["vorname"];
    $nachname = $_POST["nachname"];
    $email = $_POST["email"];
    $benutzername = $_POST["benutzername"];
    $passwort = $_POST["passwort"];

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
        die("<h3> Regestrierung konnte nicht abgeschlossen werden! </h3>" . mysqli_connect_error());
    }

    // Falls eine Verbindung aufgestellt wurde
    echo "<h3> Regestrierung erfolgreich abgeschlossen! </h3>";

    // Bearbeitung der Eingabedaten für eine fehlerfreie SQL-Abfrage
    $vorname = mysqli_real_escape_string($conn, $_POST["vorname"]);
    $nachname = mysqli_real_escape_string($conn, $_POST["nachname"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $benutzername = mysqli_real_escape_string($conn, $_POST["benutzername"]);
    $passwort = mysqli_real_escape_string($conn, $_POST["passwort"]);

    // Passwort hashen mit dem SHA-512-Algorithmus
    $hashedPasswort = hash('sha512', $passwort);

    // Schreiben in die "Nutzer Daten" Tabelle
    $sql = "INSERT INTO `Nutzer Daten` (`ID`, `Vorname`, `Nachname`, `Email`, `Benutzername`, `Passwort`) 
    VALUES (NULL, '$vorname', '$nachname', '$email', '$benutzername', '$hashedPasswort')";

    // Verschickung der SQL-Abfrage
    mysqli_query($conn, $sql);

    // Schließung der Verbindung zur Datenbank
    mysqli_close($conn);
?>