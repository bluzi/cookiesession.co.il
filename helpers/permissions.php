<?php
	function get_permissions() {
		$result = db()->query("SELECT * FROM permissions;");
		if ($result) {
			return result_to_assoc_array($result);
		}
		else {
			log_error(db()->error);
			return false;
		}
	}

	function is_permitted($permission) {
		if ($permission == 0) {
			// Permission level 0 means always permit.
			return true;
		}
		else if (($current_session = get_session()) == false) {
			// Permission level 1 and greater requires the user to be logged in.
			return false;
		}
		else if ($current_session['permission'] < $permission) {
			// The user's permission level is too low.
			return false;
		}
		else {
			// The user is logged in and it's permission level is greater than the one in $permission.
			// Therefore: permitted.
			return true;
		}
	}