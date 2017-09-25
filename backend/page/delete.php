<?php
	if (get_page_by_name($_GET['name'])) {
		delete_page($_GET['name']);
	}
	
	redirect_to_page('admin_pages');