<?php
	function get_posts() {
		$result = db()->query("SELECT posts.*, users.display_name as author 
								FROM posts 
								LEFT JOIN users
								ON posts.author_id = users.id
								WHERE posts.is_deleted = 0
								ORDER BY posts.datetime DESC, posts.id DESC;");
								
		if ($result) {
			return result_to_assoc_array($result);
		}
		else {
			log_error(db()->error);
			return false;
		}
	}
	
	function get_post($id) {
		// Escaping
		$id = escape($id);
		
		// Query
		$result = db()->query("SELECT posts.*, users.display_name as author 
								FROM posts 
								LEFT JOIN users
								ON posts.author_id = users.id
								WHERE posts.id = " . $id . " and posts.is_deleted = 0 LIMIT 1;");								
		return $result->fetch_assoc();
	}
	
	function get_posts_by_tag($name) {
		// Escaping
		$name = escape($name);
		
		// Query
		$result = db()->query(sprintf("SELECT posts.*, users.display_name as author 
										FROM tags
										LEFT JOIN post_tags
										ON post_tags.tag = tags.name
										LEFT JOIN posts
										ON posts.id = post_tags.post
										LEFT JOIN users
										ON posts.author_id = users.id
										WHERE tags.name = '%s' and posts.is_deleted = 0
										ORDER BY posts.datetime ASC;", $name));
								
		if ($result) {
			return result_to_assoc_array($result);
		}
		else {
			log_error(db()->error);
			return false;
		}
	}
	
	function get_posts_by_author($author_id, $limit, $order="asc") {
		// Escaping
		$author_id = escape($author_id);
		
		// Query
		$result = db()->query(sprintf("SELECT posts.*, users.display_name as author 
										FROM posts 
										LEFT JOIN users
										ON posts.author_id = users.id
										WHERE posts.is_deleted = 0 and author_id = %s
										ORDER BY datetime %s
										LIMIT %s;",
			$author_id, $order, $limit
		));
								
		if ($result) {
			return result_to_assoc_array($result);
		}
		else {
			log_error(db()->error);
			return false;
		}
	}
	
	function get_post_by_url($url) {
		// Escaping
		$url = escape($url);
		
		// Query
		$result = db()->query(sprintf("SELECT * FROM posts WHERE url = '%s' LIMIT 1;", $url));
		
		if ($result->num_rows == 0) {
			return false;
		}
		
		return $result->fetch_assoc();
	}
	
	function create_post($title, $content, $author_id, $url, $datetime, $language, $keywords, $description) {
		// Escaping
		$title = escape($title);
		$content = escape($content);
		$author_id = escape($author_id);
		$url = escape($url);
		$language = escape($language);
		$keywords = escape($keywords);
		$description = escape($description);
		
		$result = db()->query(sprintf('INSERT INTO posts (author_id, content, title, url, datetime, language, keywords, description)
								VALUES(%s, "%s", "%s", "%s", "%s", "%s", "%s", "%s")', 
			$author_id, $content, $title, $url, $datetime, $language, $keywords, $description));
			
		if (!$result) {
			log_error(db()->error);
		}
		
		return get_post(db()->insert_id);
	}
	
	function update_post($id, $title, $content, $author_id, $url, $datetime, $language, $keywords, $description) {
		// Escaping
		$id = escape($id);
		$title = escape($title);
		$content = escape($content);
		$author_id = escape($author_id);
		$url = escape($url);
		$language = escape($language);
		$keywords = escape($keywords);
		$description = escape($description);
		
		$result = db()->query(sprintf('UPDATE posts SET title = "%s", content = "%s", author_id = %s, url = "%s", datetime = "%s", language = "%s", keywords = "%s", description = "%s" WHERE id = %d', 
			$title, $content, $author_id, $url, $datetime, $language, $keywords, $description, $id));
			
		if (!$result) {
			log_error(db()->error);
		}
	}
	
	function update_posts_tags($post_id, $tags) {
		$post_id = escape($post_id);
		$result = db()->query(sprintf("DELETE FROM post_tags WHERE post = %d", $post_id));
		
		if (!$result) {
			log_error(db()->error);
		}
		
		foreach ($tags as $tag) {
			if (is_valid_tag($tag)) {
				if (tag_exists($tag) == false) {
					create_tag($tag, "");
				}
				
				add_tag_to_post($post_id, $tag);
			}
		}
	}
	
	function add_tag_to_post($post_id, $tag) {
		$result = db()->query(sprintf("INSERT INTO post_tags (tag, post) VALUES('%s', %d)", $tag, $post_id));
	}
	
	function delete_post($id) {
		// Escaping
		$id = escape($id);
		
		// Query
		$result = db()->query(sprintf('UPDATE posts SET is_deleted = 1 WHERE id = %s', $id));
			
		if (!$result) {
			log_error(db()->error);
		}
	}
	
	function restore_post($id) {
		// Escaping
		$id = escape($id);
		
		// Query
		$result = db()->query(sprintf('UPDATE posts SET is_deleted = 0 WHERE id = %s', $id));
			
		if (!$result) {
			log_error(db()->error);
		}
	}
	
	function get_post_with_most_replies() {
		$posts = db()->query("SELECT posts.*, users.display_name as author 
								FROM posts 
								LEFT JOIN users
								ON posts.author_id = users.id
								WHERE posts.is_deleted = 0;");	
		$current_max = 0;
		$current_post = null;								
							
		while($post = $posts->fetch_assoc()){
			$replies = db()->query("SELECT *
									FROM replies 
									WHERE post_id = " . $post['id'] . ";");
									
			if ($replies->num_rows > $current_max) {
				$current_max = $replies->num_rows;
				$current_post = $post;
			}
		}
		
		return $current_post;
	}
	
	function get_number_of_posts() {
		$result = db()->query("SELECT posts.*, users.display_name as author 
								FROM posts 
								LEFT JOIN users
								ON posts.author_id = users.id
								WHERE posts.is_deleted = 0;");
		
		if (!$result) {
			log_error(db()->error);
		}
								
		return $result->num_rows;
	}
	
		function get_number_of_posts_by_author($author_id) {
		// Escaping
		$author_id = escape($author_id);
		
		// Query
		$result = db()->query(sprintf("SELECT posts.*, users.display_name as author 
								FROM posts 
								LEFT JOIN users
								ON posts.author_id = users.id
								WHERE posts.is_deleted = 0 and author_id = %s;", $author_id));
		
		if (!$result) {
			log_error(db()->error);
		}
								
		return $result->num_rows;
	}
	
	function post_has_image($post_id) {
		$image_local_url = sprintf("images/post_images/%s.png", $post_id);
		return is_file($image_local_url);
	}
	
	function get_post_image_url($post_id) {
		return assemble_url(sprintf("images/post_images/%s.png", $post_id), true);	
	}
	
	function post_until_read_more($content, $post_url) {
		if (strpos($content, '<hr class="read-more">') === false) {
			return $content;
		}
		
		else {
			$parts = explode('<hr class="read-more">', $content);
			return $parts[0] . '<div><a href="' . $post_url . '">' . t('read-more') . '</a></div>';
		}
	}
	
	function post_ignore_read_more($content) {
		return str_replace('<hr class="read-more">', '', $content);
	}