<!-- Skript für die Anmeldung -->
<?php
    // Keine automatisch generierte Fehlermeldungen auf der loaklen Website 
    ini_set("display_errors", 0);

    if (isset($_POST["login"])) {

        require("db_verbindung.php");

        // Initialisierung und Bearbeitung der Eingabedaten für eine fehlerfreie und sichere SQL-Abfrage
        $benutzername = mysqli_real_escape_string($verbindung, $_POST["benutzername"]);
        $passwort = mysqli_real_escape_string($verbindung, $_POST["passwort"]);
                
        // Prüfung der Benutzereingaben in der Datenbank 
        // (Das eingegebene Passwort wird verschlüsselt, damit es mit dem verschlüsseltem Passwort in der Datenbank abgeglichen werden kann)
        $sql = "SELECT * FROM `Nutzer Daten` WHERE Benutzername='$benutzername' AND Passwort='".hash("sha512", $passwort)."'";

        // Verschickung der SQL-Abfrage
        $anfrage = mysqli_query($verbindung, $sql);

        // Falls ein passender Benutzer gefunden wurde
        if (mysqli_num_rows($anfrage) == 1) {

            // Start einer Sitzung
            session_start();

            // Wiedergebung des Datensatzes
            $datensatz = mysqli_fetch_assoc($anfrage);

            echo "<h3> Sie haben sich erfolgreich angemeldet! </h3>";

            // Zeige den Datensatz aus der Datenbank an
            echo "<p> Hallo, " . $datensatz["Benutzername"] . "!</p>";
            echo "Dies sind Ihre persönliche Daten:<br>";
            echo "<ul>";
            echo "<li> Vorname: " . $datensatz["Vorname"] . "</li>";
            echo "<li> Nachname: " . $datensatz["Nachname"] . "</li>";
            echo "<li> E-Mail: " . $datensatz["Email"] . "</li>";
            echo "</ul>";

            // Initialisierung der Sitzungs-Daten durch die Daten des gefundenen (bzw. passenden) Datensatzes
            $_SESSION["session_id"] = $datensatz["ID"];
            $_SESSION["session_vorname"] = $datensatz["Vorname"];
            $_SESSION["session_nachname"] = $datensatz["Nachname"];
            $_SESSION["session_email"] = $datensatz["Email"];
            $_SESSION["session_benutzername"] = $datensatz["Benutzername"];
            $_SESSION["session_passwort"] = $datensatz["Passwort"];        

            require("nutzer.php");
            exit();
        }

        else {

            echo "<h3> Ungültige Login-Daten! </h3>";
        }

        // Schließung der Verbindung zur Datenbank
        mysqli_close($verbindung);
    }

    if (isset($_POST["regestrieren1"])) {

        require("regestrierung.php");
        exit();
    }

    require("index.html");

    // Überprüfen, ob es Cookies gibt
    if (count($_COOKIE) > 0) {

        echo "<h4>Zuletzt angemeldete Konten:</h4>";
                
        // Auflistung jeder Cookies
        // (Der Operator "as" wird hier verwendet, um dem Element "COOKIE" einen Bezeichner und dessen Wert zuzuweisen)
        foreach ($_COOKIE as $cookie_name => $cookie_wert) {

            // Dekodierung der Cookie-Daten von einem JSON Strings in ein array:
            $cookie_wert = json_decode($_COOKIE[$cookie_name], true);

            // Hier wird ein Link zu der nutzer.php angegeben, der unter dem Benutzername des vorhandenen Cookies steht
            // (Hier wird außerdem ein Query-Parameter verwendet, mit dem spezifisch geprüft werden kann, welcher Link angeklickt wurde).
            echo '<a href="cookie.php?cookie_name=' . urlencode($cookie_name) . '">' . $cookie_wert["cookie_benutzername"] . '</a> <br>';
        }
        exit();
    }
?>