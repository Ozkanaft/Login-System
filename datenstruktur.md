# Datenstruktur
### Hier sind alle Programmierelemente aufgelistet, die in dem Projekt verwendet werden.
## HTML-Tags:
- div
###### Damit erstellt man eine Gruppierung von Inhalten.
- form
###### Damit erstellt man eine HTML-Formularseite.
- fieldset
###### Damit werden verwandte Formularelemente gruppiert und visuel strukturiert.
- legend
###### Damit definiert man eine Beschriftung für ein "fieldset"-Element.
- label
###### Damit wird ein Text mit einem Formularelement verknüpft.
- input
###### Damit erstellt man interaktive Formularelemente.
- link
###### Damit können Ressourcen (z.B. CSS-Dateien) verknüpft werden.
- button
###### Damit wird eine Schaltfläche erstellt.
## HTML Attribute:
- class
###### Damit gruppiert man ein Element in eine Klasse, um dessen Stil und Verhalten definieren zu können.
- action
###### Damit wird die URL des Zielorts angegeben, zu der die eingegebene Daten des Benutzers gesendet werden.
- method
###### Damit wird die Methode festgelegt, mit der die Daten an den Server gesendet werden.
- target
###### Damit wird angegeben, wo das Ergebnis eines Formulars angezeigt werden soll.
- for
###### Damit verbindet man ein "label"-Element mit einem Formularelement anhand seiner "id".
- type
###### Damit definiert man den Typ eines Formularelements.
- name
###### Damit definiert man den Namen eines Formularelements für die Formulardatenübermittlung.
- id
###### Damit werden Elemente eindeutig identifiziert und fürs zugreifen innerhalb eines Dokuments ermöglicht.
- value
###### Damit können Werte von Formularelementen festgelegt werden.
- rel
###### Damit wird das Verhältnis zwischen dem HTML-Dokument un der verknüpften Ressource definiert.
- href
###### Damit wird ein Link angegeben.
## PHP Befehle:
- echo
###### Damit lässt sich ein Text auf einer Website ausschreiben lassen.
- require
###### Damit wird der Inhalt der angegebenen Datei aufgerufen.
- die
###### Damit wird das aktuelle Skript beendet.
## PHP Funktionen:
- isset()
###### Damit kann geprüft werden, ob eine Variable definiert ist und ob sie einen Wert enthält.
- empty()
###### Damit kann geprüft werden, ob eine Variable einen leeren Wert enthält.
- header()
###### Damit kann der Nutzer zu einer bestimmten Seite weitergeleitet werden.
- exit()
###### Damit kann eine PHP-Ausführung (bzw. das aktuelle Skript) direkt beendet werden.
- ini_set()
###### Damit können die Einstellungen von Konfigurationsvariablen während eines laufenden Skripts geändert werden.
- mysqli_connect()
###### Damit wird eine Verbindung mit einer SQL-Datenbank aufgebaut.
- mysqli_connect_error()
###### Damit wird der Fehler (der in der letzten Verbindungsanfrage aufgetreten ist) ausgegeben.
- mysqli_query()
###### Damit wird eine SQL-Abfrage an eine Datenbank geschickt.
- mysqli_close()
###### Damit wird die Verbindung zu einer Datenbank geschlossen.
- mysqli_num_rows()
###### Damit kann die Anzahl der Zeilen einer Result Syntax angegeben werden, die von einer SQL-Abfrage abgerufen wurde.
- mysqli_fetch_assoc()
###### Damit wird eine Zeile einer Result Syntax aus einer SQL-Abfrage ausgegeben bzw. abgerufen.
- mysqli_real_escape_string()
###### Damit werden Eingabedaten für SQL-Abfragen bearbeitet. (Schutz vor SQL-Injections).
- session_start()
###### Damit wird eine Sitzung eines eindeutigen Benutzers gestartet.
- session_destroy()
###### Damit wird eine Sitzung beendet.
- hash()
###### Damit können Zeichenfolge mit einem kryptografischen Hash-Algorithmus umgewandelt werden.
- setcookie(name, value, expire, path, domain, secure, httponly)
###### Damit wird ein Cookie erstellt, welch für eine langfristige Speicherung von Daten genutzt werden kann.
- time()
###### Damit kann eine Zeit angegeben werden, um beispielsweise das Ablaufdatum eines Cookies festzulegen.
- json_encode()
###### Damit kann ein PHP-Arrays oder Objekt in ein JSON-formatiertes String umwandelt werden.
- json_decode()
###### Damit kann ein JSON-formatierter String zurpck in ein PHP-Array konvertiert werden
- array()
###### Damit kann eine Sammlung von Werten erstellt werden und über einen Index aufgerufen werden.
- file_get_contents()
###### Damit kann der Inhalt einer Datei wiedergegeben werden
## PHP Superglobalvariablen:
- $_POST
###### Ein Array in PHP, was die Daten enthält, die von einem HTML-Formular mit der POST-Methode versendet wurden.
- $_SESSION
###### Damit können Daten innerhalb einer laufenden Sitzung gespeichert werden.
- $_COOKIE
###### Damit kann der Wert eines Cookies aufgerufen werden.
- $_SERVER
###### Damit können Informationen über den Server und aktuellen Request aufgerufen werden.
## PHP Merkmalen:
- Unterschied zwischen (=) und (=>)
###### (=)  Damit werden Werte an Variablen zugewiesen.
###### (=>) Damit werden Werte an Schlüssel-Wert-Paare in Arrays zugewiesen.
- Unterschied zwischen ('') und ("")
###### ('') Damit werden Zeichenfolgen literal ausgewertet (sprich: Wie es im Quellcode steht).
###### ("") Damit werden Zeichenfolgen mit Variablen ausgewertet.