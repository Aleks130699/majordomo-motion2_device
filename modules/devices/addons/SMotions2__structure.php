<?php

//'DEVICES_MOTION_NOBODYS' => 'Отключить изменения статуса "никого нет дома"'

   $this->device_types['motion2'] = array(
        'TITLE'=>LANG_DEVICES_MOTION .' 2',
        'PARENT_CLASS'=>'SDevices',
        'CLASS'=>'SMotions2',
        'PROPERTIES'=>array(
            'ignoreNobodysHome'=>array('DESCRIPTION'=>LANG_DEVICES_MOTION_IGNORE,'_CONFIG_TYPE'=>'yesno','_CONFIG_HELP'=>'SdIgnoreNobodysHome'),
            'noTimeNobodysHome'=>array('DESCRIPTION'=>LANG_DEVICES_MOTION_NOTIME,'_CONFIG_TYPE'=>'yesno','_CONFIG_HELP'=>'SdnoTimeNobodysHome'),
            'resetNobodysHome'=>array('DESCRIPTION'=>LANG_DEVICES_MOTION_RESET,'_CONFIG_TYPE'=>'yesno','_CONFIG_HELP'=>'SdResetNobodysHome'),
            'timeout'=>array('DESCRIPTION'=>LANG_DEVICES_MOTION_TIMEOUT,'_CONFIG_TYPE'=>'num','_CONFIG_HELP'=>'SdMotionTimeout'),
            'blocked'=>array('DESCRIPTION'=>'Is blocked'),
			'motionDetected'=>array('DESCRIPTION'=>'Прием статуса с датчика движения'),
        ),
        'METHODS'=>array(
            'motionDetected'=>array('DESCRIPTION'=>'Motion Detected'),
            'blockSensor'=>array('DESCRIPTION'=>LANG_BLOCK_SENSOR,'_CONFIG_SHOW'=>1),
            'unblockSensor'=>array('DESCRIPTION'=>LANG_UNBLOCK_SENSOR,'_CONFIG_SHOW'=>1),
        )
    );

@include_once(ROOT.'languages/SMotions2_'.SETTINGS_SITE_LANGUAGE.'.php');
@include_once(ROOT.'languages/SMotions2_default'.'.php');