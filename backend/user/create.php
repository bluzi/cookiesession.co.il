<?php
	if (is_post()) {
		create_user($_POST['email'], $_POST['password'], $_POST['display_name'], $_POST['permission']);
		redirect_to_page('admin_users');
	}