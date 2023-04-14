<!-- Skript für die Anmeldung -->
<?php
    // Keine automatisch generierte Fehlermeldungen auf der loaklen Website 
    ini_set("display_errors", 0);

    // Falls es einen Cookie gibt
    if (isset($_COOKIE[$cookie_name])) {
    
        echo "<h4>Zuletzt angemeldete Konten:</h4>";
        echo '<a href="nutzer.php?link_geklickt=1">' . $cookie_wert["cookie_benutzername"] . '</a>';

        // Falls auf den Link geklickt wurde
        if (isset($_GET['link_geklickt']) && $_GET['link_geklickt'] == 1) {

            require("nutzer.php");
            exit();
        }
    }

    if (isset($_POST["login"])) {

        require("db_verbindung.php");

        // Initialisierung der Variablen (die für das Einloggen relevant sind)
        $benutzername = $_POST["benutzername"];
        $passwort = $_POST["passwort"];

        // Bearbeitung der Eingabedaten für eine fehlerfreie SQL-Abfrage
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

            // Initialisierung der Sitzungs-Daten
            $_SESSION["session_id"] = $datensatz["ID"];
            $_SESSION["session_vorname"] = $datensatz["Vorname"];
            $_SESSION["session_nachname"] = $datensatz["Nachname"];
            $_SESSION["session_email"] = $datensatz["Email"];
            $_SESSION["session_benutzername"] = $datensatz["Benutzername"];
            $_SESSION["session_passwort"] = $datensatz["Passwort"];        

            require("cookies.php");
            exit();
        }

        else {

            echo "<h3> Ungültige Login-Daten! </h3>";
        }

        // Schließung der Verbindung zur Datenbank
        mysqli_close($verbindung);
    }

    if (isset($_POST["login_menü"])) {

        require("index.php");
        exit();
    }

    require("login.html");
?>