<?php

include 'config.php';

if($therm == '1'):
 $temp1 = shell_exec('python script/therm.py');
 $temp1 = round($temp1, $rundung);

elseif($therm == '0'):
 $temp1 = '0';

else:
 $temp1 = 'Bitte die config.php prüfen!';

endif;

?>
