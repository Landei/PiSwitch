<?php

/*
   Ueberpruefung der gewaehlten Steckdose
   und anschliessendes Senden des entsprechenden
   Befehles (Hier NICHTS veraendern!)
*/

include 'config.php';
header("Content-Type: text/html; charset=UTF-8");

if(isset($_POST['sent11'])){
 shell_exec('sudo '.$path.'/./send '.$code.' 1 1');
 shell_exec('sudo '.$path.'/./send '.$code.' 1 1');
 shell_exec('sudo script/11.sh');
 echo "<script type='text/javascript'>alert('$name1 angeschalten');</script>";
 echo "<script type='text/javascript'>window.location.href='index.php';</script>";
}

if(isset($_POST['sent10'])){
 shell_exec('sudo '.$path.'/./send '.$code.' 1 0');
 shell_exec('sudo '.$path.'/./send '.$code.' 1 0');
 shell_exec('sudo script/10.sh');
 echo "<script type='text/javascript'>alert('$name1 ausgeschalten');</script>";
 echo "<script type='text/javascript'>window.location.href='index.php';</script>";
}

if(isset($_POST['sent21'])){
 shell_exec('sudo '.$path.'/./send '.$code.' 2 1');
 shell_exec('sudo '.$path.'/./send '.$code.' 2 1');
 shell_exec('sudo script/21.sh');
 echo "<script type='text/javascript'>alert('$name2 angeschalten');</script>";
 echo "<script type='text/javascript'>window.location.href='index.php';</script>";
}

if(isset($_POST['sent20'])){
 shell_exec('sudo '.$path.'/./send '.$code.' 2 0');
 shell_exec('sudo '.$path.'/./send '.$code.' 2 0');
 shell_exec('sudo script/20.sh');
 echo "<script type='text/javascript'>alert('$name2  ausgeschalten');</script>";
 echo "<script type='text/javascript'>window.location.href='index.php';</script>";
}

if(isset($_POST['sent31'])){
 shell_exec('sudo '.$path.'/./send '.$code.' 3 1');
 shell_exec('sudo '.$path.'/./send '.$code.' 3 1');
 shell_exec('sudo script/31.sh');
 echo "<script type='text/javascript'>alert('$name3 angeschalten');</script>";
 echo "<script type='text/javascript'>window.location.href='index.php';</script>";
}

if(isset($_POST['sent30'])){
 shell_exec('sudo '.$path.'/./send '.$code.' 3 0');
 shell_exec('sudo '.$path.'/./send '.$code.' 3 0');
 shell_exec('sudo script/30.sh');
 echo "<script type='text/javascript'>alert('$name3 ausgeschalten');</script>";
 echo "<script type='text/javascript'>window.location.href='index.php';</script>";
}


if(isset($_POST['kette1'])){
 shell_exec('sudo script/kette1.sh');
 echo "<script type='text/javascript'>alert('$name4 angeschalten');</script>";
 echo "<script type='text/javascript'>window.location.href='index.php';</script>";
}

if(isset($_POST['kette0'])){
 shell_exec('sudo script/kette0.sh');
 echo "<script type='text/javascript'>alert('$name4 ausgeschalten');</script>";
 echo "<script type='text/javascript'>window.location.href='index.php';</script>";
}

if(isset($_POST['saveConfig'])){
 echo "<script type='text/javascript'>alert('Einstellungen erfolgreich gespeichert!');</script>";
 echo "<script type='text/javascript'>window.location.href='settings.php';</script>";
}

if(isset($_POST['cancelConfig'])){
 echo "<script type='text/javascript'>alert('Einstellungen wurden nicht gespeichert');</script>";
 echo "<script type='text/javascript'>window.location.href='settings.php';</script>";
}

?>
