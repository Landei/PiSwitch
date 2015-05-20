<?php

/* Prueft die evtl. uebergebenen Parameter */

include 'config.php';
header("Content-Type: text/html; charset=UTF-8");

if(isset($_GET["sent11"])){
 shell_exec('sudo '.$path.'/./send '.$code.' 1 1');
 shell_exec('sudo '.$path.'/./send '.$code.' 1 1');
 shell_exec('sudo script/11.sh');
}

if(isset($_GET["sent10"])){
 shell_exec('sudo '.$path.'/./send '.$code.' 1 0');
 shell_exec('sudo '.$path.'/./send '.$code.' 1 0');
 shell_exec('sudo script/10.sh');
}

if(isset($_GET["sent21"])){
 shell_exec('sudo '.$path.'/./send '.$code.' 2 1');
 shell_exec('sudo '.$path.'/./send '.$code.' 2 1');
 shell_exec('sudo script/21.sh');
}

if(isset($_GET["sent20"])){
 shell_exec('sudo '.$path.'/./send '.$code.' 2 0');
 shell_exec('sudo '.$path.'/./send '.$code.' 2 0');
 shell_exec('sudo script/20.sh');
}

if(isset($_GET["sent31"])){
 shell_exec('sudo '.$path.'/./send '.$code.' 3 1');
 shell_exec('sudo '.$path.'/./send '.$code.' 3 1');
 shell_exec('sudo script/31.sh');
}

if(isset($_GET["sent30"])){
 shell_exec('sudo '.$path.'/./send '.$code.' 3 0');
 shell_exec('sudo '.$path.'/./send '.$code.' 3 0');
 shell_exec('sudo script/30.sh');
}

if($kette == '1')
{
if(isset($_GET["kette1"])){
 shell_exec('sudo script/kette1.sh');
}

if(isset($_GET["kette0"])){
 shell_exec('sudo script/kette0.sh');
}};

?>
