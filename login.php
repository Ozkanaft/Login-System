<!-- Skript für die Regestrierung -->
<?php
    // Falls ein Formular unter dem Namen "login" abgeschickt worden ist
    if (isset($_POST["login"])) {

        // Aufrufung des Skripts aus der "db_ausgabe.php" Datei
        require ("db_ausgabe.php");
    }

    // Falls ein Formular unter dem Namen "menü" abgeschickt worden ist
    if (isset($_POST["menü_login"])) {

        // Aufrufung des Skripts aus der "index.php" Datei
        require("index.php");

        // Verlassen des aktuellen Skripts
        exit();
    }
?>

<!-- Das Einagbeformular fürs Einloggen -->
<!doctype html>
<html lang="de"> 
    <head>
        <meta charset="utf-8">
        <title>Login</title>
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
        <h1>Login</h1>
        <p>Hallo Nutzer! Bitte loggen Sie sich ein:</p>

        <div class="container">
            <!-- Erzeugung des Eingabeformulars -->
            <form action="login.php" method="post">
                <fieldset>
                    <!-- Steuerlemente für die Dateneingabe -->
                    <p>
                        <label for="benutzername">Benutzername: </label>
                        <input type="text" name="benutzername" id="benutzername" />
                    </p>
                    <p>
                        <label for="passwort">Passwort: </label>
                        <input type="password" name="passwort" id="passwort" />
                    </p>
                    <p>
                        <input type="submit" name="login" value="Einloggen" />

                        <!-- Button fürs Zurücksetzen der Daten -->
                        <input type="reset" value="Abbrechen" />

                        <input type="submit" name="menü_login" value="Zurück zum Menü" />
                    </p>
                </fieldset>
            </form>
        </div>  
    </body>
</html>