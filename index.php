<!doctype html>
<!-- Sprache der Website -->
<html lang="de"> 
    <head>
        <!-- Dekodierungstyp -->
        <meta charset="utf-8">

        <!-- Tab-Titel der Website -->
<<<<<<< HEAD
        <title>Login-System</title>
=======
        <title>Registrierung</title>
>>>>>>> main

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
<<<<<<< HEAD
<<<<<<< HEAD
        <h1>Login-System</h1>
        <p>Hallo Nutzer! Bitte regestrieren Sie sich:</p>
        
        <!-- Das Einagbe-Formular -->
        <div class="container">

            <!-- Formularerzeugung -->
            <form action="index.php" method="post" target="ausgabe">
                <fieldset>
                    <legend>Persönliche Daten:</legend>
=======
=======
        <!-- 
            Eventuell kan das 'Button'-Element für das 'Type' Attribut eine Lösung für die 
            Fehlerbehandlung sein!

            Bedienung: - Falls keins der Werte NULL ist, wird das Formular abgeschickt.
                       - Falls nein dann nein.
        -->

>>>>>>> funktion
        <h1>Registrierung:</h1>
        <p>Hallo Nutzer! Bitte registrieren Sie sich:</p>
        
        <!-- Das Einagbe-Formular fürs Registrieren -->
        <div class="container">

            <!-- Formularerzeugung -->
            <form action="ausgabe.php" method="post" target="ausgabe">
                <fieldset>
                    <!-- Steuerlemente für die Dateneingabe -->
>>>>>>> main
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

        <!-- Die Ausgabe -->
        <div id="ausgabe">
            <?php
                // Falls ein Formular unter dem Namen "submit" abgeschickt worden ist
                if (isset($_POST["submit"]))
                {
                    // Initialisierung der Variablen durch die eingegebene Werte
                    $vorname = $_POST["vorname"];
                    $nachname = $_POST["nachname"];
                    
                    // Ausschreibung der Variablen (mithilfe von Punktbindungen)
                    echo "<p>";            
                    echo "Hallo, ".$vorname." ".$nachname.".";
                    echo "</p>";
                }   
            ?>
        </div>    
    </body>
</html>