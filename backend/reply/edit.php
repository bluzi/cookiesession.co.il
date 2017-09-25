<?php
	if (is_post()) {
		update_reply($_GET['id'], $_POST['post_id'], $_POST['author'], $_POST['website'], $_POST['content']);
		$reply_updated = true;
	}