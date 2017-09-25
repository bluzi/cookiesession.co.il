<?php
	function create_session($user) {
		setcookie("user", $user['id'], time()+config()['cookie_peroid']);
		setcookie("auth", $user['password'], time()+config()['cookie_peroid']);
	}
	
	function get_session() {
		if (array_key_exists('user', $_COOKIE) == false || array_key_exists('auth', $_COOKIE) == false) {
			return false;
		}
		
		$user = get_user($_COOKIE['user']);
		if ($user['password'] != $_COOKIE['auth']) {
			return false;
		}
		
		return $user;
	}