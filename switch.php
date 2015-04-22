<?php

/*
   Ueberpruefung der gewaehlten Steckdose
   und anschliessendes Senden des entsprechenden
   Befehles (Hier NICHTS veraendern!)
*/

include 'config.php';
include 'name.php';
    
// I'm still wondering: How do you turn your switch off?
foreach($_GET as $key in $value) {
    if (substr($key, 0, 4) != "sent")
        continue;
    $num = substr($key, 3, 1);
    $state = substr($key, 4, 1);
    shell_exec($path . '/send ' . $code . ' ' . $num . ' ' . $state);
    shell_exec('./script/regenerate.sh ' . $num . $state);
    echo "<script type='text/javascript'>";
    echo "alert('$name1 angeschalten');";
    echo "window.location.href='index.php';";
    echo "</script>";
}

?>
