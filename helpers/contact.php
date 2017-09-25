<?php
	function create_contact_message($author, $content) {
		// Escaping
		$author = escape($author);
		$content = escape($content);
		
		$result = db()->query(sprintf('INSERT INTO user_messages (author, content)
								VALUES("%s", "%s")', 
			$author, $content));
			
		if (!$result) {
			log_error(db()->error);
		}
	}