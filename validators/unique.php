<?php
	function validator_unique($key, $value, $parameter) {
		$table = $parameter;
		$result = db()->query("SELECT `" . $key . "` FROM `" . $table . "` WHERE `" . $key . "` = '" . $value . "' LIMIT 1;");
		
		return $result->num_rows === 0;
	}