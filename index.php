<?php
    header("Content-Type: text/html; charset=UTF-8");
    header("Expires: Mon, 1 Jan 2000 07:00:00 GMT");
    header("Cache-Control: no-cache, no-store, must-revalidate");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
 <head>
  <title>PiSwitch</title>
  <link href="style.css" media="screen" type="text/css" rel="stylesheet">
  <link rel="shotcut icon" type="image/x-icon" href="images/fav00icon.ico">
 </head>
<body>
<?php
    include 'status.php';
    include 'param.php';
    include 'name.php';
?>

 <h1>PiSwitch - Interface
  <a href="http://raspberrypi.org" target="_blank"><img src="images/pi.png" width="33" height="40"></a>
 </h1>

<p>
 <form method="post" action="switch.php">
  <input type="submit" name="sent11" value="<?php echo $name1; ?> an" class="switchon">

 <form method="post" action="switch.php">
  <input type="submit" name="sent10" value="<?php echo $name1; ?> aus" class="switchoff">
</form>

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
</form>

<div class="status">

<table border="1">
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

</table>

</div>

<div id="footer_container">
 <div id="footer">
  <div>Version: 1.2  &#xa9 2015 <a href="http://twitter.com/piswitch_de" target="_blank">Twitter</a></div>
  <div>Fehler gefunden oder Fragen? <a href="mailto:piswitch@landei.pfweb.eu">piswitch@landei.pfweb.eu</div></a>
  <div>-Raspberry Pi is a trademark of the Raspberry Pi Foundation-</div>
 </div>
</div>

</body>
</html>
