<?php
	foreach (scandir('validators') as $file) {
		if (is_file('validators/' . $file)) {
			require_once('validators/' . $file);
		}
	}

	function is_valid(&$message = null) {
		global $view_name;
		
		if (array_key_exists('validators', config()) == false) {
			return true;
		}
		
		$validators = config()['validators'];
		
		if (array_key_exists($view_name, $validators) == false) {
			return true;
		}
		
		$validators = $validators[$view_name];
		
		if (is_post()) {
			$parameters = array_merge($_POST, $_GET);
		}
		else {
			$parameters = $_GET;
		}
		
		foreach ($validators as $key => $value) {
			if (is_get_key($key) && array_key_exists(get_real_key($key), $_GET) == false) {
				$message = sprintf('"%s" is not a GET variable', get_real_key($key));
				severely_validation_error();
				return false;
			}
		}
		
		foreach ($parameters as $key => $value) {
			if (in_array($key, config()['validation_ignoreable_keys'])) {
				continue;
			}
			
			if (array_key_exists('get:' . $key, $validators)) {
				$validator_key = 'get:' . $key;
			}
			else if (array_key_exists($key, $validators) == false) {
				$message = sprintf('Unknown key "' . $key . '"');
				severely_validation_error();
				return false;
			}
			else {
				$validator_key = $key;
			}
			
			$current_validators = $validators[$validator_key];
			if (is_array($current_validators) == false) {
				$current_validators = array($current_validators);
			}
			
			foreach ($current_validators as $validator_key => $validator_value) {
				if (is_string($validator_key)) {
					$validator = $validator_key;
					$parameter = $validator_value;					
				}
				else {
					$validator = $validator_value;
					$parameter = null;
				}
				
				$validator_result = call_user_func("validator_" . $validator, $key, $value, $parameter);
				if ($validator_result == false) {
					$error_message_key = config()['validation_messages'][$validator];
					$message = t($error_message_key, $key, $value, $parameter);
					return false;
				}
			}
		}
		
		return true;
	}
	
	function is_get_key($key) {
		return starts_with($key, 'get:');
	}
	
	function is_post_key($key) {
		return !is_get_key($key);
	}
	
	function get_real_key($key) {
		if (($index = strpos($key, ':')) != null) {
			$key = substr($key, $index + 1);
		}
		
		return $key;
	}
	
	/*
		Contains the action that will be preformed whenever there's a major validation issue.
	*/
	function severely_validation_error() {
		//access_denied();
		exit;
	}