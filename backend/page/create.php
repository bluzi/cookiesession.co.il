<?php
	if (is_post() && is_valid($error)) {
		create_page(
			$_POST['name'], 
			$_POST['url'], 
			$_POST['physical_path'], 
			$_POST['permission'], 
			$_POST['model'],
			$_POST['title'],
			$_POST['description'],
			$_POST['keywords']
		);
		redirect_to_page('admin_pages');
	}