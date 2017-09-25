<?php
	function not_found() {
		load_view('errors/404');
		require_once("/views/errors/404.php");
		exit;
	}
	
	function access_denied() {
		if (get_session()) {
			// User is logged in but not premitted
			header('HTTP/1.0 403 Forbidden');
			load_view('errors/403');
		}
		else {		
			// User is not logged in
			header('Location: ' . get_url_by_page('login'));
		}
		exit;
	}