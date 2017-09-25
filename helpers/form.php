<?php
	function is_post() {
		return count($_POST) > 0;
	}
	
	function is_file_upload($file_input_name) {
		return !empty($_FILES[$file_input_name]['name']);
	}
	
	function upload_image($file_input_name, $destination) {
		if (move_uploaded_file($_FILES[$file_input_name]['tmp_name'], $destination)) {
			return true;
		} else {
			return false;
		}
	}