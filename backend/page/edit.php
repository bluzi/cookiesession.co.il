<?php
	if (is_valid($error)) {
		if (is_post()) {
			$page = get_page_by_name($_GET['name']);
			
			if ($page['is_permanent'] == 1) {
				update_permanent_page(
					$_GET['name'], 
					$_POST['url'], 
					$_POST['permission'],
					$_POST['title'],
					$_POST['description'],
					$_POST['keywords']
				);
			}
			else {
				update_page(
					$_GET['name'], 
					$_POST['url'], 
					$_POST['physical_path'], 
					$_POST['model'], 
					$_POST['permission'],
					$_POST['title'],
					$_POST['description'],
					$_POST['keywords']
				);
			}
			
			$page_updated = true;
		}
	}