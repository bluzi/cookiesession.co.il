<?php
	if (get_post($_GET['id'])) {
		delete_reply($_GET['id']);
	}
	
	redirect_to_page('admin_replies');