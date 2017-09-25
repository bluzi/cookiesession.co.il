<?php
	if (is_post()) {
		$post = create_post(
			$_POST['title'], 
			$_POST['content'], 
			$_POST['author_id'], 
			$_POST['url'], 
			$_POST['datetime'], 
			$_POST['language'], 
			$_POST['keywords'], 
			$_POST['description']
		);
		
		if ($post) {
			if (is_file_upload('cover_image')) {
				upload_image('cover_image', sprintf('images/post_images/%d.png', $post['id']));
			}
			
			if (array_key_exists('tags', $_POST)) {
				update_posts_tags($post['id'], $_POST['tags']);
			}
		}
		
		redirect_to_page('admin_posts');
	}