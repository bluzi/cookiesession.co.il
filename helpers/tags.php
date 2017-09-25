<?php
	function get_tags() {
		$result = db()->query("SELECT *
								FROM tags
								WHERE is_deleted = 0
								ORDER BY `index` DESC, name ASC;");
								
		if ($result) {
			return result_to_assoc_array($result);
		}
		else {
			log_error(db()->error);
			return false;
		}
	}
	
	function get_tag($name) {
		$name = escape($name);
		$result = db()->query(sprintf("SELECT *
										FROM tags
										WHERE name = '%s' and is_deleted = 0
										LIMIT 1;", $name));
								
		return $result->fetch_assoc();
	}
	
	function get_tags_by_post($post_id) {
		$result = db()->query(sprintf("SELECT tags.*
										FROM post_tags
										LEFT JOIN tags
										ON post_tags.tag = tags.name
										WHERE post_tags.post = %d and tags.is_deleted = 0;", $post_id));
		
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
	
	function tag_exists($name) {
		$name = escape($name);
		$result = db()->query(sprintf("SELECT *
										FROM tags
										WHERE name = '%s' and is_deleted = 0;", $name));
		return $result->num_rows > 0;
	}
	
	function create_tag($name, $description) {
		$name = escape($name);
		$description = escape($description);
		
		$result = db()->query(sprintf('INSERT INTO tags (name, description)
								VALUES("%s", "%s")', 
			$name, $description));
			
		if (!$result) {
			log_error(db()->error);
		}
		
		return get_tag(db()->insert_id);
	}
	
	function is_valid_tag($tag) {
		return !empty($tag);
	}