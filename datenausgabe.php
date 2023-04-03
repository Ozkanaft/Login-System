<!doctype html>
<!-- Sprache der Website -->
<html lang="de"> 
    <head>
        <!-- Dekodierungstyp -->
        <meta charset="utf-8">

        <!-- Tab-Titel der Website -->
        <title>Persönliche Daten</title>

        <!-- Designerische Aspekte -->
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
        <!-- Die Ausgabe -->
        <div id="ausgabe">
            <?php
                // Falls ein Formular unter dem Namen "submit" abgeschickt worden ist
                if (isset($_POST["submit"]))
                {
                    // Initialisierung der Variablen durch die eingegebene Werte
                    $vorname = $_POST["vorname"];
                    $nachname = $_POST["nachname"];
                    $benutzername = $_POST["benutzername"];
                    $passwort = $_POST["passwort"];
                    
                    // Ausschreibung der Variablen (mithilfe von Punktbindungen)
                    echo "<p>";
                    echo "Hallo, ".$benutzername.".";
                    echo "</p>";              
                }   
            ?>
        </div> 
    </body>
</html>