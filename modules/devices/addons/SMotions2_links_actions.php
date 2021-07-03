 <?php 

  if ($link_type == 'dimmer_timer') {
        $timer_name = $object . '_switch_timer';
        $action_string = '';
        if ($settings['darktime']) {
            $action_string .= 'if (gg("DarknessMode.active")) {';
        }
		if ($settings['darktime_level']) {
		if (gg("DarknessMode.active") && $settings['action_level_night'] > 0) {
			$action_string = 'callMethodSafe("' . $object . '.setLevel' . '",array("value"=>"' . $settings['action_level_night'] . '","link_source"=>"' . $device1['LINKED_OBJECT'] . '"));';
		}else{
		$action_string = 'callMethodSafe("' . $object . '.setLevel' . '",array("value"=>"' . $settings['action_level'] . '","link_source"=>"' . $device1['LINKED_OBJECT'] . '"));';
		}
		}else{
		$action_string = 'callMethodSafe("' . $object . '.setLevel' . '",array("value"=>"' . $settings['action_level'] . '","link_source"=>"' . $device1['LINKED_OBJECT'] . '"));';
		}
        if ($settings['action_delay'] != '') {
            $settings['action_delay'] = (int)processTitle($settings['action_delay']);
            if ($settings['action_delay'] > 0) {
                $action_string .= 'setTimeout(\'' . $timer_name . '\',\'' . 'callMethod("' . $object . '.turnOff' . '",array("link_source"=>"' . $device1['LINKED_OBJECT'] . '"));' . '\',' . (int)$settings['action_delay'] . ');';
            }
        }
        if ($settings['darktime']) {
            $action_string .= '}';
        }
    }