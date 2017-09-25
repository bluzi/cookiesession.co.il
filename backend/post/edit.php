<?php
	if (is_post()) {
		update_post(
			$_GET['id'], 
			$_POST['title'], 
			$_POST['content'], 
			$_POST['author_id'], 
			$_POST['url'], 
			$_POST['datetime'], 
			$_POST['language'], 
			$_POST['keywords'], 
			$_POST['description']
		);
		
		if (is_file_upload('cover_image')) {
			upload_image('cover_image', sprintf('images/post_images/%d.png', $_GET['id']));
		}
		
		if (array_key_exists('tags', $_POST)) {
			update_posts_tags($_GET['id'], $_POST['tags']);
		}
		
		$post_updated = true;		
	}