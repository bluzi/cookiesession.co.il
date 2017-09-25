<?php
	if (get_post($_GET['id'])) {
		delete_post($_GET['id']);
	}
	
	redirect_to_page('admin_posts');