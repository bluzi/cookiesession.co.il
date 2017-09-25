<?php
	if (get_user($_GET['id'])) {
		delete_user($_GET['id']);
	}
	
	redirect_to_page('admin_users');