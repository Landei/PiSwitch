<?php

header("charset=UTF-8");

/*
   Diese Datei kann von Hand bearbeitet werden,
   solange die settings.php noch nicht funktioniert.

   Bitte auch das Format der Einstellungen beachten.
   Bei fehlerhafter Konfiguration funktioniert PiSwitch
   evtl. nicht mehr.
*/


/* Konfiguration */

$code = "01001"; //Code der DIP-Schalter der Steckdosen
$path = "/home/pi/rcswitch-pi";  //Pfad zu rcswitch (Standart: /home/pi/rcswitch-pi; muss evtl. geaendert werden)
$therm = '1'; //Thermometer (1: an  0: aus)
$kette = '0'; //Lichterkette (1: an  0: aus)
$background = '#009EFF'; //Farbe des Hintergrundes
$version = '1.3'; //Version

/* Namen der Steckdosen */

$name1 = 'Schreibtischlampe';
$name2 = 'Lüfter';
$name3 = 'Lüfter 2';

/* Name der Lichterkette */

$name4 = 'Kette 1';

/* Konfiguration des Thermometers */

$name5 = 'Zimmer';
$rundung = '2'; //Zahl der Nachkommastellen für die Temperatur

?>
