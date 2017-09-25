<?php
	function get_replies() {
		$result = db()->query("SELECT replies.*, posts.title AS post_title , posts.url AS post_url
								FROM replies 
								INNER JOIN posts
								ON posts.id = replies.post_id
								WHERE replies.is_deleted = 0 and posts.is_deleted = 0;");
		if ($result) {
			return result_to_assoc_array($result);
		}
		else {
			log_error(db()->error);
			return false;
		}
	}
	
	function get_reply($id) {
		// Escaping
		$id = escape($id);
		
		// Query
		$result = db()->query(sprintf("SELECT replies.*, posts.title AS post_title , posts.url AS post_url
								FROM replies 
								INNER JOIN posts
								ON posts.id = replies.post_id
								WHERE replies.is_deleted = 0 and posts.is_deleted = 0 and replies.id = %s
								LIMIT 1;", $id));
		return $result->fetch_assoc();
	}
	
	function get_replies_by_post($post_id) {
		// Escaping
		$post_id = escape($post_id);
		
		// Query
		$result = db()->query("SELECT * FROM replies WHERE post_id = " . $post_id . " and is_deleted = 0;");
		if ($result) {
			return result_to_assoc_array($result);
		}
		else {
			log_error(db()->error);
			return false;
		}
	}
	
	function get_last_replies($limit) {
		$result = db()->query("SELECT * FROM replies LIMIT " . $limit . ";");
		if ($result) {
			return result_to_assoc_array($result);
		}
		else {
			log_error(db()->error);
			return false;
		}
	}
	
	function create_reply($post_id, $author, $website, $content) {
		// Escaping
		$post_id = escape($post_id);
		$author = escape($author);
		$website = escape($website);
		$content = escape($content);
		
		// Query
		$result = db()->query(sprintf('INSERT INTO replies (post_id, author, website, content)
								VALUES(%s, "%s", "%s", "%s")', 
			$post_id, $author, $website, $content));
			
		if (!$result) {
			log_error(db()->error);
		}
	}
	
	function update_reply($id, $post_id, $author, $website, $content) {
		// Escaping
		$id = escape($id);
		$post_id = escape($post_id);
		$author = escape($author);
		$website = escape($website);
		$content = escape($content);
		
		// Query
		$result = db()->query(sprintf('UPDATE replies SET post_id = %s, author = "%s", website = "%s", content = "%s" WHERE id = %s', 
			$post_id, $author, $website, $content, $id));
			
		if (!$result) {
			log_error(db()->error);
		}
	}
	
	function delete_reply($id) {
		// Escaping
		$id = escape($id);
		
		// Query
		$result = db()->query(sprintf('UPDATE replies SET is_deleted = 1 WHERE id = %s', $id));
			
		if (!$result) {
			log_error(db()->error);
		}
	}
	
	function get_number_of_replies() {
		$result = db()->query("SELECT * FROM replies;");
		
		if (!$result) {
			log_error(db()->error);
		}
								
		return $result->num_rows;
	}
	
	function get_number_of_replies_by_post_author($author_id) {
		// Escaping
		$author_id = escape($author_id);
		
		// Query
		$result = db()->query(sprintf("SELECT count(replies.id) AS number_of_replies, posts.*
								FROM replies
								RIGHT JOIN posts
								ON replies.post_id = posts.id
								WHERE posts.author_id = %s;", $author_id));
		
		if (!$result) {
			log_error(db()->error);
		}
		
		$replies_by_post_author = 0;
		
		while($post = $result->fetch_assoc()) {
			$replies_by_post_author += $post['number_of_replies'];
		}
		
		return $replies_by_post_author;
	}
	
	function get_number_of_replies_by_post($post_id) {
		// Escaping
		$post_id = escape($post_id);
		
		// Query
		$result = db()->query("SELECT * FROM replies WHERE post_id = " . $post_id . " and is_deleted = 0;");
		if ($result) {
			return $result->num_rows;
		}
		else {
			log_error(db()->error);
			return false;
		}
	}
	