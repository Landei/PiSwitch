<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
 <head>
  <title>PiSwitch - Interface</title>
  <link rel="stylesheet" type="text/css" href="style.css.php" /*media="screen,projection"*/>
  <link rel="shotcut icon" type="image/x-icon" href="images/favicon.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<?php
$start = microtime(true);
?>
</head>

<?php
 header("Content-Type: text/html; charset=UTF-8");
 header("Expires: Mon, 1 Jan 2000 07:00:00 GMT");
 header("Cache-Control: no-cache, no-store, must-revalidate");
 header("Cache-Control: post-check=0, pre-check=0", false);
 header("Pragma: no-cache");
 include 'status.php';
 include 'param.php';
 include 'therm.php';
?>

<body>

 <h1>PiSwitch - Interface
  <a href="http://raspberrypi.org" target="_blank"><img src="images/pi.png" width="33" height="40"></a>
  <a href="settings.php"><button class="settings">Einstellungen</button></a>
 </h1>

<p>
 <form method="post" action="switch.php">
  <input type="submit" name="sent11" value="<?php echo $name1; ?> an" class="switchon">

 <form method="post" action="switch.php">
  <input type="submit" name="sent10" value="<?php echo $name1; ?> aus" class="switchoff">

</p>

<p>
 <form method="post" action="switch.php">
  <input type="submit" name="sent21" value="<?php echo $name2; ?> an" class="switchon">

 <form method="post" action="switch.php">
  <input type="submit" name="sent20" value="<?php echo $name2; ?> aus" class="switchoff">
</form>
</p>

<p>
 <form method="post" action="switch.php">
  <input type="submit" name="sent31" value="<?php echo $name3; ?> an" class="switchon">

 <form method="post" action="switch.php">
  <input type="submit" name="sent30" value="<?php echo $name3; ?> aus" class="switchoff">
</p>

<?php

if($kette == '0'):
 echo "";

elseif($kette == '1'):
echo '
 <form method="post" action="switch.php">
  <input type="submit" name="kette1" value="'.$name4.' an" class="switchon">

 <form method="post" action="switch.php">
  <input type="submit" name="kette0" value="'.$name4.' aus" class="switchoff">
</form>';

else:
 echo "Bitte prüfen Sie die config.php!";

endif;
?>

<br>
<br>
<br>

<table class="status" border="1">
 <tr>
  <th>Bezeichnung</th>
  <th>Status</th>
 </tr>

 <tr>
  <td><?php echo $name1; ?></td>
  <td><?php echo $s1; ?></td>
 </tr>

 <tr>
  <td><?php echo $name2; ?></td>
  <td><?php echo $s2; ?></td>
 </tr>

 <tr>
  <td><?php echo $name3; ?></td>
  <td><?php echo $s3; ?></td>
 </tr>

<?php

if($kette == '0'):
 echo"";

elseif($kette == '1'):
echo '
 <tr>
  <td> '.$name4.' </td>
  <td> '.$s4.' </td>
 </tr>';

else:
 echo "Bitte prüfen Sie die config.php!";

endif;
?>

</table>

<br>
<br>
<br>

<?php

if($therm == '0'):
 echo "";

elseif($therm == '1'):
 echo '

<table class="status" border="1">
 <tr>
  <th>Thermometer</th>
  <th>Wert</th>
 </tr>
 <tr>
  <td> '.$name5.' </td>
  <td> '.$temp1.'°C </td>
 </tr>
</table>';

else:
 echo "$temp1";

endif;
?>

<br>
<br>
<br>

<div id="footer">
 <div>Version: <?php echo $version; ?>  &#xa9 2015 <a href="https://twitter.com/piswitch_de" target="_blank">Twitter</a></div>
 <div>Fehler gefunden oder Fragen? <a href="mailto:piswitch@landei.pfweb.eu">piswitch@landei.pfweb.eu</div></a>
 <div>-Raspberry Pi is a trademark of the Raspberry Pi Foundation-</div>
</div>

</body>
</html>
