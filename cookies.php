<!-- Skript für die Cookies -->
<?php
    // Keine automatisch generierte Fehlermeldungen auf der loaklen Website 
    ini_set("display_errors", 0);

    if (isset($_POST["cookies_ja"])) {

        echo "<p> Sie haben Cookies akzeptiert. </p>";

        // Fortführung der laufenden Sitzung
        session_start();

        // Zuweisung der Session-Daten in einem Array (um ihn als den "Cookie-Wert" benutzen zu können)
        $cookie_daten = array(
            "cookie_vorname" => $_SESSION["session_vorname"],
            "cookie_nachname" => $_SESSION["session_nachname"],
            "cookie_email" => $_SESSION["session_email"],
            "cookie_benutzername" => $_SESSION["session_benutzername"],
            "cookie_passwort" => $_SESSION["session_passwort"]
        );

        // Erzeugung eines Cookies mit einer Lebensdauer von 5 Minuten
        // (Der Array wird in ein JSON String umgewandelt, damit er als ein Wert anerkannt werden kann)
        setcookie("nutzer", json_encode($cookie_daten), time() + 300, "/");

        /* 
        Folgendermaßen können Cookie-Daten ausgegeben werden:
        -----------------------------------------------------

        // Dekodierung der Cookie-Daten von einem JSON Strings in ein array:
        $cookie_daten = json_decode($_COOKIE["nutzer"], true);

        // Ausgabe:
        echo "Das Passwort lautet: - " . $cookie_daten["cookie_passwort"] . " -"; 
        */
    }

    if (isset($_POST["cookies_nein"])) {

        echo "<p> Sie haben Cookies abgelehnt. </p>";

        // Erzeugung eines Cookies mit einer Lebensdauer von 0 Sekunden und keinem Wert
        setcookie("nutzer", "", time() - 1, "/");
    }

    if (isset($_POST["cookies_login"])) {

        require ("login.php");
        exit();
    }

    if (isset($_POST["cookies_menü"])) {

        require ("index.php");
        exit();
    }

    require("cookies.html");
?>