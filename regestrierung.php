<!-- Skript für die Regestrierung -->
<?php
    // Falls ein Formular unter dem Namen "regestrieren" abgeschickt worden ist
    if (isset($_POST["regestrieren"])) {

        // Aufrufung des Skripts aus der "db_eingabe.php" Datei
        require ("db_eingabe.php");
    }

    // Falls ein Formular unter dem Namen "menü" abgeschickt worden ist
    if (isset($_POST["menü_regestrieren"])) {

        // Aufrufung des Skripts aus der "index.php" Datei
        require("index.php");
    }
?>

<!-- Das Einagbeformular fürs Registrieren -->
<!doctype html>
<html lang="de"> 
    <head>
        <meta charset="utf-8">
        <title>Registrierung</title>
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
        <h1>Registrierung</h1>
        <p>Hallo Nutzer! Bitte registrieren Sie sich:</p>

        <div class="container">
            <!-- Erzeugung des Eingabeformulars -->
            <form action="regestrierung.php" method="post" target="ausgabe">
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
                        <input type="submit" name="regestrieren" value="Regestrieren" />

                        <!-- Button fürs Zurücksetzen der Daten -->
                        <input type="reset" value="Abbrechen" />

                        <input type="submit" name="menü_regestrieren" value="Zurück zum Menü" />
                    </p>
                </fieldset>
            </form>
        </div>  
    </body>
</html>