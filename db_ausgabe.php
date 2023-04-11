<!-- Skript für die Datenbankausgabe -->
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
        die("<h3> Die Einloggung konnte nicht vorführt werden! </h3>" . mysqli_connect_error());
    }

                        // Prüfung, ob der Benutzer bereits eingeloggt ist (Cookie vorhanden und noch nicht abgelaufen)
                        if (isset($_COOKIE['cookie_daten'])) {
                            $cookie_data = json_decode($_COOKIE['cookie_daten'], true);

                            // Prüfen, ob der Cookie noch gültig ist
                            if (time() - $cookie_data['login_time'] <= 300) { // 300 Sekunden = 5 Minuten
                                // Cookie ist noch gültig, initialisiere Sitzungsvariablen
                                session_start();
                                $_SESSION['benutzername'] = $cookie_data['Benutzername'];

                                // Zeige den Datensatz aus der Datenbank an
                                echo "<h3> Sie wurden erfolgreich eingeloggt! </h3>";
                                echo "<p> Hallo, " . $cookie_data['Benutzername'] . "!</p>";
                                echo "Dies sind Ihre persönliche Daten:<br>";
                                echo "<ul>";
                                echo "<li> Vorname: " . $cookie_data['Vorname'] . "</li>";
                                echo "<li> Nachname: " . $cookie_data['Nachname'] . "</li>";
                                echo "<li> E-Mail: " . $cookie_data['Email'] . "</li>";
                                echo "</ul>";
                                exit(); // Skript beenden, da der Benutzer bereits eingeloggt ist
                            }
                        }

    // Initialisierung der Variablen (die für das Einloggen relevant sind)
    $benutzername = $_POST["benutzername"];
    $passwort = $_POST["passwort"];

    // Bearbeitung der Eingabedaten für eine fehlerfreie SQL-Abfrage
    $benutzername = mysqli_real_escape_string($conn, $_POST["benutzername"]);
    $passwort = mysqli_real_escape_string($conn, $_POST["passwort"]);

    // Prüfung der Benutzereingaben in der Datenbank 
    // (Das eingegebene Passwort wird verschlüsselt, damit es mit dem verschlüsseltem Passwort in der Datenbank abgeglichen werden kann)
    $sql = "SELECT * FROM `Nutzer Daten` WHERE Benutzername='$benutzername' AND Passwort='".hash('sha512', $passwort)."'";

    // Verschickung der SQL-Abfrage
    $result = mysqli_query($conn, $sql);

    // Falls ein passender Benutzer gefunden wurde
    if (mysqli_num_rows($result) == 1) {

        // Wiedergebung des Datensatzes
        $row = mysqli_fetch_assoc($result);

                            // Startung einer Sitzung
                            session_start();

                            // Erzeugung eines Cookies mit einer Lebensdauer von 5 Minuten
                            // (Als "Cookie-Daten" wird der Datensatz gewählt, der zuvor anhand der Logindaten identifiziert wurde).
                            setcookie("cookie_daten", json_encode($row), time() + 300);

                            // Initialisierung der Cookie-Daten als Sitzungsvariable
                            $_SESSION['benutzername'] = $row['Benutzername'];

        echo "<h3> Sie wurden erfolgreich eingeloggt! </h3>";

        // Zeige den Datensatz aus der Datenbank an
        echo "<p> Hallo, " . $row['Benutzername'] . "!</p>";
        echo "Dies sind Ihre persönliche Daten:<br>";
        echo "<ul>";
        echo "<li> Vorname: " . $row['Vorname'] . "</li>";
        echo "<li> Nachname: " . $row['Nachname'] . "</li>";
        echo "<li> E-Mail: " . $row['Email'] . "</li>";
        echo "</ul";
    }

    else {
        echo "<h3> Falsche Logindaten! </h3>";
    }
?>