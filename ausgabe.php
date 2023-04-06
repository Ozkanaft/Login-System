<!-- Skript für die Ausgabe -->
<!doctype html>
<html lang="de"> 
    <head>
        <meta charset="utf-8">
        <title>Ausgabe</title>
        <style>
            body {      
                font-family: sans-serif; /* Schriftart */
                margin-left: 1em; /* Abstand von dem linken Element */
            }
            p {
                font-size: 1em; /* Schriftgröße */
            }
        </style>
    </head>
    <body>
        <div id="ausgabe">
            <?php          
                // Initialisierung der Variablen durch die eingesendete Formulardaten
                $vorname = $_POST["vorname"];
                $nachname = $_POST["nachname"];
                $email = $_POST["email"];
                $benutzername = $_POST["benutzername"];
                $passwort = $_POST["passwort"];  
                
                // Die Ausgabe
                echo "<h2>Hallo, " . $benutzername . "!</h2>";
                echo "<h3>Ihre persönliche Daten lauten folgendermaßen:</h3>";
                echo "<p>Vorname: " . $vorname . "</p>";
                echo "<p>Nachname: " . $nachname . "</p>";
                echo "<p>E-mail: " . $email . "</p>";
                echo "<p>Passwort: " . $passwort . "</p>";
            ?>
        </div> 
    </body>
</html>