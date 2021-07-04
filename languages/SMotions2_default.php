<?php

$dictionary=array(
   'DEVICES_MOTION_NOTIME' => 'Disable changes to the "no one is home" status"',
   'DEVICES_LINK_SET_LEVEL_TIMER' => 'Set the brightness for a while',
   'DEVICES_LINK_SET_LEVEL_DESCRIPTION' => 'Set the brightness of the other device for a time, depending on the day/night',
   'DEVICES_LAMP_LEVEL' => 'Brightness',
   'DEVICES_LAMP_LEVEL_NIGHT' => 'Brightness at night',
   'DEVICES_NIGHTMODE_LEVEL' => 'Different brightness and time of day/night',
   'DEVICES_LINK_SWITCH_TIMER_PARAM_ACTION_DELAY_DAY' => 'Turn on for a time (seconds)',
   'DEVICES_LINK_SWITCH_TIMER_PARAM_ACTION_DELAY_NIGHT' => 'Turn on at night for a time (seconds)',
);

foreach ($dictionary as $k=>$v) {
 if (!defined('LANG_'.$k)) {
  define('LANG_'.$k, $v);
 }
}

?>
