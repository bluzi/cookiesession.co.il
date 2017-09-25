<?php
	if (is_post()) {
		create_reply($_POST['post_id'], $_POST['author'], $_POST['website'], $_POST['content']);
		redirect_to_page('admin_replies');
	}