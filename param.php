<?php

/* Prueft die evtl. uebergebenen Parameter */

include 'config.php';
header("Content-Type: text/html; charset=UTF-8");

    foreach($_GET as $key in $value) {
        if (substr($key, 0, 4) != "sent")
            continue;
        $num = substr($key, 3, 1);
        $state = substr($key, 4, 1);
        shell_exec($path . '/send ' . $code . ' ' . $num . ' ' . $state);
        shell_exec('./script/regenerate.sh ' . $num . $state);
    }

if(isset($_GET["kette1"])){
 shell_exec('sudo script/kette1.sh'); // ???
}

if(isset($_GET["kette0"])){
 shell_exec('sudo script/kette0.sh'); // ???
}

?>
