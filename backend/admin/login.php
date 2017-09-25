<?php
	if (get_session()) {
		redirect_to_page('admin_home');
	}

	if (is_post()) {		
		if (!is_valid($error)) {
			
		}
		else {
			$user = get_user_by_email($_POST['email']);
			if ($user) {
				if (to_password($_POST['password']) == $user['password']) {
					// Success!
					create_session($user);
					redirect_to_page('admin_home');
				}
				else {
					// Passwords mismatch.
					$error = t("wrong-password");
				}
			}
			else {
				$login_result = t("unknown-email");
			}
		}
	}