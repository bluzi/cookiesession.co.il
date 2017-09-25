<?php
	if (!isset($model) || !is_array($model)) {
		if (array_key_exists("name", $_GET) && !empty($_GET['name'])) {
			$tag = get_tag($_GET['name']);
			if (!$tag) {
				exit;
			}
		}
		else {
			exit;
		}
	}