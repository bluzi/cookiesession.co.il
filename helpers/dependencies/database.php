<?php
	$db = new mysqli('127.0.0.1', 'cookiesession', 's7590168', 'cookiese_blog');
	
	function db() {
		global $db;		
		return $db;
	}
	
	function result_to_assoc_array($result) {
		$arr = array();
		while ($row = $result->fetch_assoc()) {
			$arr[] = $row;
		}
		
		return $arr;
	}
	
	function escape($string) {
		return db()->real_escape_string($string);
	}
	
	function escape_by_ref(&$string) {
		$string = escape($string);
	}
?>