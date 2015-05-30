<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
 <head>
  <title>PiSwitch - Settings</title>
  <link rel="stylesheet" type="text/css" href="style.css.php" media="screen,projection">
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 </head>

<?php

 header("Content-Type: text/html; charset=UTF-8");
 header("Expires: Mon, 1 Jan 2000 07:00:00 GMT");
 header("Cache-Control: no-cache, no-store, must-revalidate");
 header("Cache-Control: post-check=0, pre-check=0", false);
 header("Pragma: no-cache");
 include 'config.php';
?>

<body>

 <h1>PiSwitch - Settings
  <img src="images/settings.png" width="40" height="40">
  <a href="index.php"><button class="settings">Startseite</button></a>
 </h1>

<p>

 <h2>Grundlegende Einstellung</h2>
 DIP-Schalter Code: <input name="code" type="text" class="textbox" maxlength="5" value=<?php echo $code; ?>><br><br>
 Pfad zu rcswitch-pi: <input name="path" type="text" class="textbox" value=<?php echo $path; ?>><br><br>
 Thermometer? <input type="radio" name="therm" value="1" checked> Ja <input type="radio" name="therm" value="0"> Nein <br><br>
 Lichterkette? <input type="radio" name="kette" value="1" checked> Ja <input type="radio" name="kette" value="0"> Nein <br><br>
 Farbe des Hintergrundes: <input name="background" type="color" value=<?php echo $background; ?>><br><br>
 <br>
 <br>
</p>

<p>
 <h2>Namen der Steckdosen</h2>
 Steckdose 1: <input name="name1" type="text" class="textbox" value=<?php echo $name1; ?>><br><br>
 Steckdose 2: <input name="name2" type="text" class="textbox" value=<?php echo $name2; ?>><br><br>
 Steckdose 3: <input name="name3" type="text" class="textbox" value=<?php echo $name3; ?>><br><br>
 <br>
 <br>
</p>

<p>
 <h2>Name der Lichterkette</h2>
 Lichterkette: <input name="name4" type="text" class="textbox" value=<?php echo $name4; ?>><br><br>
 <br>
 <br>
</p>

<p>
 <h2>Thermometer</h2>
 Name des Thermometers: <input name="name5" type="text" class="textbox" value=<?php echo $name5; ?>><br><br>

Anzahl der Nachkommastellen:

<?php

if ($rundung == '0'):
 echo '<input type="radio" name="rundung" value="0" checked>0 <input type="radio" name="rundung" value="1">1 <input type="radio" name="rundung" value="2">2 <input type="radio" name="rundung" value="3">3';

elseif ($rundung == '1'):
 echo '<input type="radio" name="rundung" value="0">0 <input type="radio" name="rundung" value="1" checked>1 <input type="radio" name="rundung" value="2">2 <input type="radio" name="rundung" value="3">3';

elseif ($rundung == '2'):
 echo '<input type="radio" name="rundung" value="0">0 <input type="radio" name="rundung" value="1">1 <input type="radio" name="rundung" value="2" checked>2 <input type="radio" name="rundung" value="3">3';

elseif ($rundung == '3'):
 echo '<input type="radio" name="rundung" value="0">0 <input type="radio" name="rundung" value="1">1 <input type="radio" name="rundung" value="2">2 <input type="radio" name="rundung" value="3" checked>3';

 else:
 echo "";
endif;
?>

 <br>
 <br>
</p>

<p>
 <form method="post" action="switch.php">
  <input type="submit" name="saveConfig" value="Speichern" class="saveConfig">

 <form method="post" action="switch.php">
  <input type="submit" name="cancelConfig" value="Abbrechen" class="cancelConfig">
 </form>
</p>

<div id="footer">
 <div>Version: 1.3 &#xa9 2015 <a href="https://twitter.com/piswitch_de" target="_blank">Twitter</a></div>
 <div>Fehler gefunden oder Fragen? <a href="mailto:piswitch@landei.pfweb.eu">piswitch@landei.pfweb.eu</div></a>
 <div>-Raspberry Pi is a trademark of the Raspberry Pi Foundation-</div>
</div>

</body>

</html>

