<!doctype html>
<!-- Sprache der Website -->
<html lang="de"> 
    <head>
        <!-- Dekodierungstyp -->
        <meta charset="utf-8">

        <!-- Tab-Titel der Website -->
        <title>Login-System</title>

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
                margin-top: 2em; /* Abstand von dem oberen Element */
            }
        </style>
    </head>
    <body>
        <h1>Login-System</h1>
        <p>Hallo Nutzer! Bitte regestrieren Sie sich:</p>
        
        <!-- Das Einagbe-Formular -->
        <div class="container">

            <!-- Formularerzeugung -->
            <form action="index.php" method="post" target="ausgabe">
                <fieldset>
                    <legend>Persönliche Daten:</legend>
                    <p>
                        <label for="vorname">Vorname: </label>
                        <input type="text" name="vorname" id="vorname" />
                    </p>
                    <p>
                        <label for="nachname">Nachname: </label>
                        <input type="text" name="nachname" id="nachname" />
                    </p>
                    <p>
                        <input type="submit" name="submit" />
                        <input type="reset" />
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