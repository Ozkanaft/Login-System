<!doctype html>
<html lang="de"> <!-- Sprache der Website -->
  <head>
    <meta charset="utf-8"> <!-- Dekodierungstyp -->
    <title>Login-System</title>
    <style>
    </style>
  </head>
  <body>
    <h1>Login-System</h1>
    <p>Hallo Nutzer! Bitte regestrieren Sie sich:</p>
        <!--
        'form'-Tag: Damit erstellt man eine HTML-Formularseite.
        'action'-Attribut: Damit wird die URL des Zielorts angegeben, zu der die eingegebene Daten des Benutzers gesendet werden.
        'method'-Attribut: Damit wird die Methode festgelegt, mit der die Daten an den Server gesendet werden.
            -> "post": Anhaengung der Daten an den Body der Anfrage (besser).
            -> "get" : Anhaengung der Daten an die URL der Seite (schlechter).
        'target'-Attribut: Damit wird angegeben, wo das Ergebnis eines Formulars angezeigt werden soll.
        -->
        <form action="index.php" method="post" target="ausgabe">
        <!-- 
        'fieldset'-Tag: Damit werden verwandte Formularelemente gruppiert und visuel strukturiert.
        -->
        <fieldset>
            <!-- 
            'legend'-Tag: Damit definiert man eine Beschriftung für ein "fieldset"-Element.
            -->
            <legend>Persoenliche Daten:</legend>
            <p>
                <!-- 
                'label'-Tag: Damit wird ein Text mit einem Formularelement verknüpft.
                'for'-Attribut: Damit verbindet man ein "label"-Element mit einem Formularelement anhand seiner "id".
                -->
                <label for="vorname">Vorname: </label>
                <!-- 
                'input'-Tag: Damit erstellt man interaktive Formularelemente.
                'type'-Attribut: Damit definiert man den Typ eines Formularelements.
                'name'-Attribut: Damit definiert man den Namen eines Formularelements.
                'id'-Attribut: Damit werden Elemente eindeutig identifiziert und fuers zugreifen ermöglicht.
                -->
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
  </body>
</html>