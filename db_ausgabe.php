<!-- Skript für die Datenbankausgabe -->
<?php
    // Keine automatisch generierte Fehlermeldungen auf der loaklen Website 
    ini_set('display_errors', 0);

    // Initialisierung der Variablen (die für das Einloggen relevant sind)
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
        die("<h3> Die Einloggung konnte nicht vorführt werden! </h3>" . mysqli_connect_error());
    }

    // Prüfung der Benutzereingaben in der Datenbank
    $sql = "SELECT * FROM `Nutzer Daten` WHERE Benutzername='$benutzername' AND Passwort='$passwort'";

    // Verschickung der SQL-Abfrage
    $result = mysqli_query($conn, $sql);

    // Überprüfung, ob die Abfrage erfolgreich war
    if (mysqli_num_rows($result) == 1) {

        // Benutzer gefunden
        $row = mysqli_fetch_assoc($result);

        $_SESSION['ID'] = $row['ID'];

        echo "<h3> Sie wurden erfolgreich eingeloggt! </h3>";

        // Zeige den Datensatz aus der Datenbank an
        echo "<p> Hallo, " . $row['Benutzername'] . "!</p>";
        echo "Dies sind Ihre persönliche Daten:<br>";
        echo "<ul>";
        echo "<li> Vorname:" . $row['Vorname'] . "</li>";
        echo "<li> Nachname:" . $row['Nachname'] . "</li>";
        echo "<li> E-Mail:" . $row['Email'] . "</li>";
        echo "</ul";
    }
?>