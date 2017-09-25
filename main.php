<?php
	date_default_timezone_set('Africa/Lagos');

	/*
		Load dependency helpers
	*/
	foreach (scandir('helpers/dependencies') as $file) {
		if (is_file('helpers/dependencies/' . $file)) {
			require_once('helpers/dependencies/' . $file);
		}
	}

	/*
		Load configuration files
	*/
	foreach (scandir('config') as $file) {
		if (is_file('config/' . $file)) {
			require_once('config/' . $file);
		}
	}

	/*
		Load the rest of the helpers
	*/
	foreach (scandir('helpers') as $file) {
		if (is_file('helpers/' . $file)) {
			require_once('helpers/' . $file);
		}
	}

	/*
		Load language file
	*/
	load_language_by_code("he");

	/*
		Load the current view
	*/
	$page_name = trim($_GET['page'], '/');

	if (empty($page_name)) {
		// Url is empty. Homepage.
		load_view('index');
	}
	else if ($page = get_page_by_url($page_name)) {
		// There is a forced rule for this url in the database.
		global $page;
		if (is_permitted($page['permission'])) {
			load_view($page['physical_path'], json_decode($page['model'], true));
		}
		else {
			access_denied();
		}
	}
	else if ($post = get_post_by_url($page_name)) {
		load_view('post/view', $post);
	}
	else if ($tag = get_tag($page_name)) {
		load_view('tags/view', $tag);
	}
	else {
		not_found();
	}
