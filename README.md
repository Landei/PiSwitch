# PiSwitch

# Was macht PiSwitch?
Mit PiSwitch können Funksteckdosen über ein Webinterface gesteuert werden.
Dazu wird nur ein kleiner Sender benötigt und natürlich einen Raspberry Pi mit Webserver und PHP 5.
Aktuell ist das Projekt nur für 3 Steckdosen ausgelegt, später wird es aber mehr geben.

------------
# Was wird benötigt?
1. Ein 433MHz Funksender (http://goo.gl/0CpSmH)
2. Die Funksteckdosen (http://goo.gl/jtSpMM)
Wichtig: Der Steckdosen MÜSSEN über DIP-Schalter verfügen!
3. Ein Raspberry Pi (egal welches Model)
4. Jumpercable + evtl. Steckbrett

------------
# Welche Software wird benötigt?
1. Ein Webserver (z.B. nginx) mit PHP5 
(Hilfe (bis Schritt 8): http://jankarres.de/2012/08/raspberry-pi-webserver-nginx-installieren/)
2. rcswitch-pi + wiringpi

------------
# Hinweis!
Im Laufe der Installation werden dem Nutzer www-data Root-Rechte gegeben, damit die Script funktionieren.
Deswegen darf bei aktuellem Stand des Projektes KEINE Freigabe des Webports erfolgen.
Wenn im Router das Portforwarding eingeschalten ist (für den Raspberry Pi und dem Webport) ist es möglich ohne entsprechender Absicherung den Pi zu hacken.
Das ist ein sehr großes Sicherheitsrisiko.
Ist der Pi aber nur im eigenen Heimnetzwerk sollte dies kein Problem darstellen.

(Für evtl. Schäden übernehme ich keine Haftung)

------------
# Installation von rcswitch-pi und wiringpi

Daher das rcswitch-pi wiringpi benötigt, muss dies auch zu erst installiert werden!

wiringPi:

1. sudo apt-get update && sudo apt-get upgrade
2. sudo apt-get install git-core
3. git clone git://git.drogon.net/wiringPi
4. cd wiringPi
5. ./build

rcswitch-pi:

0. sudo apt-get update && sudo apt-get upgrade
1. git clone https://github.com/r10r/rcswitch-pi.git
2. cd rcswitch-pi
3. make

------------
# Anschluss der Hardware

1. Funksender anschließen
(ATAD -> GPIO 17; VCC -> 5V; GND -> Ground)
2. Code der DIP-Schalter an den Funksteckdosen ändern

------------

# Installation von PiSwitch

Wenn dann also die Hardware angeschlossen ist und der Webserver mit PHP 5 läuft, kann dann PiSwitch installiert werden.

1. Zwei Terminals öffnen, das eine mit dem Root-Nutzer versehen (wichtig) und im zwiten, mit "sudo visudo" öffnen
2. Folgenden Code am Ende der Datei hinzufügen:

   
* #Funksteckdosen
* www-data ALL=NOPASSWD: /home/pi/rcswitch-pi/send
* www-data ALL=NOPASSWD: /usr/share/nginx/www/piswitch/*


Achtung!: Mit "visudo" wird im Anschluss der Syntax überprüft. Wenn in der Datei ein Fehler ist, kann man sich später nicht mehr als root anmelden. Außerdem muss in der Datei am Ende IMMER eine freie Zeile sein! Evtl. muss auch der Pfad zu PiSwitch und rcswitch-pi geändert werden (auf Groß- u. Kleinschreibung achten!!!)

3. Mit "git clone https://github.com/Landei/PiSwitch.git" PiSwitch herunterladen
4. Danach mit "sudo cp -R PiSwitch/ /usr/share/nginx/www/piswitch" PiSwitch kopieren

Fertig!

------------
# Konfiguration von PiSwitch

1. Mit "sudo /usr/share/nginx/www/piswitch/config.php" den Code der DIP-Schalter ändern und evtl. den Pfad zu rcswitch-pi ändern
2. Die Namen der Steckdosen kann in der Datei "name.php" geändert werden

------------
Zum Schluss kann man dann am PC die Website aufrufen, indem man "[IP des Pi's]/piswitch" aufruft.
Anschließend kann auch gleich die Funktionalität geprüft werden.

------------

Viel Spaß mit PiSwitch

Florian

Bei Fragen oder Problemen einfach eine E-Mail an piswitch@landei.pfweb.eu :)
