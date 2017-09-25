<?php
	define('ONLY_VARS', 1);

	function get_fraction($name, $data=false, $mode=false) {
		$name = str_replace('.', '/', $name);
		
		if (is_file("fractions/" . $name . ".html")) {
			$fraction = get_static_fraction($name, $data, $mode);
		}
		else if (is_file("fractions/" . $name . ".php")) {
			$fraction = get_dynamic_fraction($name, $data);
		}
		else {
			throw new Exception("Cannot find fraction " . $name);
		}
		
		$fraction = preg_replace_callback(
			"/\{\{(.*?)\}\}/", 
			function ($matches) use($data) {
				if ($data && is_array($data) && array_key_exists($matches[1], $data)) {
					return $data[$matches[1]];
				}
				
				return "";
			},
			$fraction
		);
		
		$fraction = preg_replace_callback(
			"/\[\[(.*?)\]\]/", 
			function ($matches) {
					return t($matches[1]);
			},
			$fraction
		);
		
		if ($mode != ONLY_VARS) {			
			$fraction = preg_replace_callback(
				"/\%(.*?)\%/", 
				function ($matches) {
					$page_key = $matches[1];
					return get_url_by_page($page_key);
				},
				$fraction
			);
		}
		
		echo $fraction;
	}
	
	function get_dynamic_fraction($name, $data) {
		global $page;
		ob_start();
		require("fractions/" . $name . ".php");
		$fraction = ob_get_clean();
		return $fraction;
	}
	
	function get_static_fraction($name, $data, $mode) {
		$fraction = file_get_contents("fractions/" . $name . ".html");
				
		return $fraction;
	}