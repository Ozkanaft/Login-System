<?php
    // Falls ein Formular unter dem Namen "submit" abgeschickt worden ist
    if (isset($_POST["submit"])) {

        // Initialisierung der Variablen mit den Formulardaten
        $vorname = $_POST["vorname"];
        $nachname = $_POST["nachname"];
        $email = $_POST["email"];
        $benutzername = $_POST["benutzername"];
        $passwort = $_POST["passwort"];

        // Aufrufung des Skripts aus der "db_verbindung.php" und "db_eingabe.php" Datei
        require ("db_eingabe.php");
    }
?>

<!doctype html>
<!-- Sprache der Website -->
<html lang="de"> 
    <head>
        <!-- Dekodierungstyp -->
        <meta charset="utf-8">

        <!-- Tab-Titel der Website -->
        <title>Registrierung</title>

        <!-- Designerische Aspekte -->
        <style>
            body {      
                font-family: sans-serif; /* Schriftart */
                margin-left: 1em; /* Abstand von dem linken Element */
            }
            p {
                font-size: 1em; /* Schriftgröße */
            }
            .container {
                width: 20%; /* Breite des Elements */
                margin: left; /* Position des Elements */
                margin-top: 2em; /* Abstand von dem oberen Element */d
            }
        </style>
    </head>
    <body>
        <h1>Registrierung:</h1>
        <p>Hallo Nutzer! Bitte registrieren Sie sich:</p>
        
        <!-- Das Einagbe-Formular fürs Registrieren -->
        <div class="container">

            <!-- Formularerzeugung -->
            <form action="index.php" method="post" target="ausgabe">
                <fieldset>
                    <!-- Steuerlemente für die Dateneingabe -->
                    <p>
                        <label for="vorname">Vorname: </label>
                        <input type="text" name="vorname" id="vorname" />
                    </p>
                    <p>
                        <label for="nachname">Nachname: </label>
                        <input type="text" name="nachname" id="nachname" />
                    </p>
                    <p>
                        <label for="email">E-Mail: </label>
                        <input type="text" name="email" id="email" />
                    </p>
                    <p>
                        <label for="benutzername">Benutzername: </label>
                        <input type="text" name="benutzername" id="benutzername" />
                    </p>
                    <p>
                        <label for="passwort">Passwort: </label>
                        <input type="password" name="passwort" id="passwort" />
                    </p>
                    <p>
                        <!-- Button für die Formular-Absendung -->
                        <input type="submit" name="submit" value="Regestrieren" />

                        <!-- Button fürs Zurücksetzen -->
                        <input type="reset" value="Abbrechen" />
                    </p>
                </fieldset>
            </form>
        </div>  
    </body>
</html>