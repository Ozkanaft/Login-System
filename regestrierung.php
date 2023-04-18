<!-- Skript für die Regestrierung -->
<?php
    // Falls ein Formular unter dem Namen "regestrieren" abgeschickt worden ist
    if (isset($_POST["regestrieren"])) {

        require ("db_verbindung.php");

        // Initialisierung der Variablen mit den Formulardaten
        $vorname = $_POST["vorname"];
        $nachname = $_POST["nachname"];
        $email = $_POST["email"];
        $benutzername = $_POST["benutzername"];
        $passwort = $_POST["passwort"];

        // Bearbeitung der Eingabedaten für eine fehlerfreie SQL-Abfrage
        $vorname = mysqli_real_escape_string($verbindung, $_POST["vorname"]);
        $nachname = mysqli_real_escape_string($verbindung, $_POST["nachname"]);
        $email = mysqli_real_escape_string($verbindung, $_POST["email"]);
        $benutzername = mysqli_real_escape_string($verbindung, $_POST["benutzername"]);
        $passwort = mysqli_real_escape_string($verbindung, $_POST["passwort"]);

        // Passwort hashen mit dem SHA-512-Algorithmus
        $hashedPasswort = hash('sha512', $passwort);

        // Schreiben in die "Nutzer Daten" Tabelle
        $sql = "INSERT INTO `Nutzer Daten` (`ID`, `Vorname`, `Nachname`, `Email`, `Benutzername`, `Passwort`) 
        VALUES (NULL, '$vorname', '$nachname', '$email', '$benutzername', '$hashedPasswort')";

        // Falls eine SQL-Abfrage verschickt werden konnte
        if (mysqli_query($verbindung, $sql)) {
            echo "<h3> Regestrierung erfolgreich abgeschlossen! </h3>";
        }

        // Schließung der Verbindung zur Datenbank
        mysqli_close($verbindung);
    }

    // Falls ein Formular unter dem Namen "menü" abgeschickt worden ist
    if (isset($_POST["regestrieren_menü"])) {

        // Aufrufung des Skripts aus der "index.php" Datei
        require("index.php");

        // Verlassen des aktuellen Skripts
        exit();
    }

    // Aufrufung des Eingabeformular-Skripts fürs Regestrieren
    require("regestrierung.html");
?>