<!-- Skript für die Cookies -->
<?php
    // Keine automatisch generierte Fehlermeldungen auf der loaklen Website 
    ini_set("display_errors", 0);

    // Fortführung der laufenden Sitzung
    session_start();
    
    if (isset($_POST["remember_me"])) {

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

        // Erzeugung eines Cookies mit einer Lebensdauer von 1 Monat
        // (Die Cookie-Merkmale werden in ein JSON String umgewandelt, damit sie als Merkmale anerkannt werden können)
        setcookie($cookie_name, json_encode($cookie_wert), time() + (30 * 24 * 60 * 60), "/");
    }

    if (isset($_POST["abmelden"])) {

        // Die Session-Variablen werden auf ein leeren Array gesetzt, damit sie sicher gelöscht werden
        $_SESSION = array();

        // Beendung der Sitzung
        session_destroy();

        require ("index.php");
        exit();
    }

    require("nutzer.html");
?>