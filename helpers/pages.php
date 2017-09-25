<?php
	function get_pages() {
		$result = db()->query("SELECT pages.*, permissions.description AS permission_description 
								FROM pages 
								LEFT JOIN permissions
								ON pages.permission = permissions.level
								WHERE pages.is_deleted = 0
								ORDER BY pages.is_permanent DESC;");
		
		if (!$result) {
			log_error(db()->error);
		}
								
		if ($result) {
			return result_to_assoc_array($result);
		}
		else {
			log_error(db()->error);
			return false;
		}
	}

	function get_page_by_url($url) {
		$url = escape($url);
		$result = db()->query(sprintf("SELECT pages.*, permissions.description AS permission_description  
										FROM pages 
										LEFT JOIN permissions
										ON pages.permission = permissions.level
										WHERE pages.url = '%s' and pages.is_deleted = 0
										LIMIT 1", $url));
										
		if (!$result) {
			log_error(db()->error);
		}
		
		if ($result->num_rows > 0) {
			return $result->fetch_assoc();
		}
		
		return false;
	}
	
	function create_page($name, $url, $physical_path, $model, $permission, $title, $description, $keywords) {
		// Escaping
		$name = escape($name);
		$url = escape($url);
		$physical_path = escape($physical_path);
		$model = escape($model);
		$permission = escape($permission);
		$description = escape($description);
		$keywords = escape($keywords);

		// Query
		$result = db()->query(sprintf('INSERT INTO pages (name, url, physical_path, model, permission, title, decsription, keywords)
								VALUES("%s", "%s", "%s", "%s", "%s", "%s", "%s", "%s")', 
			$name, $url, $physical_path, $model, $permission, $title, $description, $keywords));
			
		if (!$result) {
			log_error(db()->error);
		}
	}
	
	function update_page($name, $url, $physical_path, $model, $permission, $title, $description, $keywords) {
		// Escaping
		$name = escape($name);
		$url = escape($url);
		$physical_path = escape($physical_path);
		$model = escape($model);
		$permission = escape($permission);
		$description = escape($description);
		$keywords = escape($keywords);
		
		// Qurey
		$result = db()->query(sprintf('UPDATE pages 
										SET url = "%s", physical_path = "%s", model = "%s", permission = "%s", title = "%s", decsription = "%s" , keywords = "%s" 
										WHERE name = "%s" and is_permanent = 0', 
			$url, $physical_path, $model, $permission, $title, $description, $keywords, $name));
			
		if (!$result) {
			log_error(db()->error);
		}
	}
	
	function update_permanent_page($name, $url, $permission, $title, $description, $keywords) {
		// Escaping
		$name = escape($name);
		$url = escape($url);
		$permission = escape($permission);
		
		// Query
		$result = db()->query(sprintf('UPDATE pages 
										SET url = "%s", permission = "%s", title = "%s", decsription = "%s" , keywords = "%s" 
										WHERE name = "%s"', 
			$url, $permission, $title, $description, $keywords, $name));
			
		if (!$result) {
			log_error(db()->error);
		}
	}
	
	function delete_page($name) {
		// Escaping
		$name = escape($name);
		
		// Query
		$result = db()->query(sprintf('UPDATE pages SET is_deleted = 1 WHERE name = "%s" and is_permanent = 0', $name));
			
		if (!$result) {
			log_error(db()->error);
		}
	}
	
	function get_page_by_name($name) {
		// Escaping
		$name = escape($name);
		
		// Query
		$result = db()->query(sprintf("SELECT * FROM pages WHERE name = '%s' LIMIT 1", $name));
		if ($result->num_rows > 0) {
			return $result->fetch_assoc();
		}
		
		return false;
	}
	
	function get_url_by_page($pageName) {
		$page = get_page_by_name($pageName);
		return assemble_url($page['url']);
	}
	
	function assemble_url($url, $is_direct = false) {		
		if ($is_direct) {
			return to_url(sprintf(config()['direct_file_url'], $url));
		}
		else {
			return to_url(sprintf(config()['site_url'], $url));
		}
	}
	
	function to_url($url) {
		$url = str_replace(' ', '%20', $url);
		$url = str_replace('#', '%23', $url);
		return $url;
	}
	
	function redirect_to_page($page) {
		header('Location: ' . get_url_by_page($page));
		exit;
	}
	
	function get_number_of_pages() {
		$result = db()->query("SELECT pages.*, permissions.description AS permission_description 
								FROM pages 
								LEFT JOIN permissions
								ON pages.permission = permissions.level
								WHERE pages.is_deleted = 0
								ORDER BY pages.is_permanent DESC;");
		
		if (!$result) {
			log_error(db()->error);
		}
								
		return $result->num_rows;
	}