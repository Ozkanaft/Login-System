<!-- Skript für die Cookies -->
<?php
    // Keine automatisch generierte Fehlermeldungen auf der loaklen Website 
    ini_set("display_errors", 0);

    if (isset($_POST["cookies_ja"])) {

        // Fortführung der laufenden Sitzung
        session_start();

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

        // Erzeugung eines Cookies mit einer Lebensdauer von 5 Minuten
        // (Die Cookie-Merkmale werden in ein JSON String umgewandelt, damit sie als Merkmale anerkannt werden können)
        setcookie($cookie_name, json_encode($cookie_wert), time() + 300, "/");

        // Dekodierung der Cookie-Daten von einem JSON Strings in ein array:
        $cookie_wert = json_decode($_COOKIE[$cookie_name], true);

        echo "<h3> Sie haben Cookies akzeptiert! </h3>";

        // Zeige den Datensatz vom Cookie an
        echo "<p> Hallo, " . $cookie_wert["cookie_benutzername"] . "!</p>";
        echo "Dies sind Ihre persönliche Daten:<br>";
        echo "<ul>";
        echo "<li> Vorname: " . $cookie_wert["cookie_vorname"] . "</li>";
        echo "<li> Nachname: " . $cookie_wert["cookie_nachname"] . "</li>";
        echo "<li> E-Mail: " . $cookie_wert["cookie_email"] . "</li>";
        echo "</ul>";
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