<?php
	function get_users() {
		$result = db()->query("SELECT users.*, permissions.description AS permission_description
								FROM users
								INNER JOIN permissions
								ON users.permission=permissions.level
								WHERE is_deleted = 0;");
		
		if ($result) {
			return result_to_assoc_array($result);
		}
		else {
			log_error(db()->error);
			return false;
		}
	}

	function get_user($id) {
		// Escaping
		$id = escape($id);
		
		// Query
		$result = db()->query("SELECT users.*, permissions.description AS permission_description
								FROM users 
								LEFT JOIN permissions
								ON users.permission=permissions.level
								WHERE id = " . $id . " and is_deleted = 0 LIMIT 1;");
		return $result->fetch_assoc();
	}
	
	function create_user($email, $password, $display_name, $permission) {
		// Escaping
		$email = escape($email);
		$password = escape($password);
		$display_name = escape($display_name);
		$permission = escape($permission);
		
		// Query
		$reuslt = db()->query(sprintf('INSERT INTO users (email, password, display_name, permission)
								VALUES("%s", "%s", "%s", "%s")', 
			$email, to_password($password), $display_name, $permission));
			
		if (!$reuslt) {
			log_error(db()->error);
		}
	}
	
	function update_user($id, $email, $display_name, $permission) {
		// Escaping
		$id = escape($id);
		$email = escape($email);
		$password = escape($password);
		$display_name = escape($display_name);
		$permission = escape($permission);
		
		// Query
		$result = db()->query(sprintf('UPDATE users SET email = "%s", display_name = "%s", permission = "%s" WHERE id = %s', 
			$email, $display_name, $permission, $id));
			
		if (!$result) {
			log_error(db()->error);
		}
	}
	
	function update_user_password($id, $password) {
		// Escaping
		$id = escape($id);
		$password = escape($password);
		
		// Query
		$result = db()->query(sprintf('UPDATE users SET password = "%s" WHERE id = %s', 
			to_password($password), $id));
			
		if (!$result) {
			log_error(db()->error);
		}
	}
	
	function delete_user($id) {
		// Escaping
		$id = escape($id);
		
		// Query
		$result = db()->query(sprintf('UPDATE users SET is_deleted = 1 WHERE id = %s', $id));
			
		if (!$result) {
			log_error(db()->error);
		}
	}
	
	function restore_user($id) {
		// Escaping
		$id = escape($id);
		
		// Query
		$result = db()->query(sprintf('UPDATE users SET is_deleted = 0 WHERE id = %s', $id));
			
		if (!$result) {
			log_error(db()->error);
		}
	}
	
	function to_password($password) {
		return md5($password);
	}
	
	function get_user_by_email($email) {
		// Escaping
		$email = escape($email);
		
		// Query
		$result = db()->query(sprintf("SELECT * FROM users WHERE email = '%s' LIMIT 1;", $email));
		
		if ($result->num_rows == 0) {
			return false;
		}
		
		return $result->fetch_assoc();
	}
	
	function get_user_with_most_posts() {
		$result = db()->query("SELECT users.*
								FROM posts
								LEFT JOIN users
								ON posts.author_id = users.id
								WHERE posts.is_deleted = 0
								ORDER BY count(posts.id) DESC
								LIMIT 1;");
								
		return $result->fetch_assoc();
	}