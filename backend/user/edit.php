<?php
	if (is_post()) {
		update_user($_GET['id'], $_POST['email'], $_POST['display_name'], $_POST['permission']);
		
		if (array_key_exists("password", $_POST) && !empty($_POST['password'])) {
			update_user_password($_GET['id'], $_POST['password']);
		}
		
		$user_updated = true;
	}