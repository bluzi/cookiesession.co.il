<?php
	$view_name = "";
	
	function load_view($name, $model=null) {
		global $view_name;
		
		$view_name = str_replace('/', '.', $name);
		if (is_file('backend/' . $name . '.php')) {
			require_once('backend/' . $name . '.php');
		}
		
		if (is_file('views/' . $name . '.php')) { 
			require_once('views/' . $name . '.php');
		}
	}