<!-- Skript für die Cookies -->
<?php
    // Keine automatisch generierte Fehlermeldungen auf der loaklen Website 
    ini_set("display_errors", 0);

    // Fortführung der laufenden Sitzung
    session_start();
    
    if (isset($_POST["cookies_ja"])) {

        // Der Cookie besitzt die ID des Datensatzes als Name
        $cookie_name = $_SESSION["session_id"];
        
        // Zuweisung der Session-Daten in einem Array (um ihn als den "Cookie-Wert" benutzen zu können)
        $cookie_wert = array(
            "cookie_vorname" => $_SESSION["session_vorname"],
            "cookie_nachname" => $_SESSION["session_nachname"],
            "cookie_email" => $_SESSION["session_email"],
            "cookie_benutzername" => $_SESSION["session_benutzername"],
            "cookie_passwort" => $_SESSION["session_passwort"]
        );

        // Erzeugung eines Cookies mit einer Lebensdauer von 1 Tag
        // (Die Cookie-Merkmale werden in ein JSON String umgewandelt, damit sie als Merkmale anerkannt werden können)
        setcookie($cookie_name, json_encode($cookie_wert), time() + (24 * 60 * 60), "/");

        // Dekodierung der Cookie-Daten von einem JSON Strings in ein array:
        $cookie_wert = json_decode($_COOKIE[$cookie_name], true);

        echo "<h3> Sie haben Cookies akzeptiert! </h3>";

        // Zeige den Datensatz der Sitzung an
        echo "<p> Hallo, " . $_SESSION["session_benutzername"] . "!</p>";
        echo "Dies sind Ihre persönliche Daten:<br>";
        echo "<ul>";
        echo "<li> Vorname: " . $_SESSION["session_vorname"] . "</li>";
        echo "<li> Nachname: " . $_SESSION["session_nachname"] . "</li>";
        echo "<li> E-Mail: " . $_SESSION["session_email"] . "</li>";
        echo "</ul>";

        // Die HTML-Klasse "cookies_anzeige" wird ausgeblendet
        echo "<style>.cookies_anzeige { display: none }</style>";
    }

    if (isset($_POST["cookies_nein"])) {

        echo "<h3> Sie haben Cookies abgelehnt! </h3>";

        // Zeige den Datensatz der Sitzung an
        echo "<p> Hallo, " . $_SESSION["session_benutzername"] . "!</p>";
        echo "Dies sind Ihre persönliche Daten:<br>";
        echo "<ul>";
        echo "<li> Vorname: " . $_SESSION["session_vorname"] . "</li>";
        echo "<li> Nachname: " . $_SESSION["session_nachname"] . "</li>";
        echo "<li> E-Mail: " . $_SESSION["session_email"] . "</li>";
        echo "</ul>";

        // Die HTML-Klasse "cookies_anzeige" wird ausgeblendet
        echo "<style>.cookies_anzeige { display: none }</style>";
    }

    if (isset($_POST["cookies_login"])) {

        // Die Session-Variablen werden auf ein leeren Array gesetzt, damit sie sicher gelöscht werden
        $_SESSION = array();

        // Beendung der Sitzung
        session_destroy();

        require ("login.php");
        exit();
    }

    if (isset($_POST["cookies_menü"])) {

        // Die Session-Variablen werden auf ein leeren Array gesetzt, damit sie sicher gelöscht werden
        $_SESSION = array();

        // Beendung der Sitzung
        session_destroy();

        require ("index.php");
        exit();
    }

    require("cookies.html");
?>