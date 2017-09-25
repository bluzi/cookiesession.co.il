<?php
	$language_array = array();
	
	function load_language_by_code($code) {
		global $language_array;
		$file = (array)get_language_file_by_code($code);
		
		if ($file == false)
			return false;
			
		$language_array = file_to_lang_array($file);
		return true;
	}
	
	function get_language_file_by_code($code) {
		foreach (get_available_languages() as $path => $language) {
			if ($language['code'] == $code)
				return simplexml_load_file($path);
		}
		
		return false;
	}
	
	function file_to_lang_array($file) {
		$arr = (array)$file;
		unset($arr['@attributes'], $arr['comment']);
		return $arr;
	}
	
	function get_available_languages() {
		$languages = array();
		
		foreach (scandir('language') as $path) {
			$path = 'language/' . $path;
			if (is_file($path)) {
				$xml = simplexml_load_file($path);
				$languages[$path] = $xml->attributes();
			}
		}
		
		return $languages;
	}

	function t_arr($key, $format_args) {
		global $language_array;
		
		if (array_key_exists($key, $language_array)) {
			return str_replace('\n', '<br />', trim(vsprintf($language_array[$key], $format_args)));
		}
		
		if (config()['debug']) {
			throw new Exception('Unknown language key "' . $key . '"');	
		}
		
		return false;
	}

	function t() {
		if (func_num_args() < 1) {
			return false;
		}
		
		$key = func_get_arg(0);	
		$format_args = array_slice(func_get_args(), 1);
		
		return t_arr($key, $format_args);
	}