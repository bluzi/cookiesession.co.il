<?php
	require_once('externals/recaptcha/recaptchalib.php');

	if (is_post()) {
		$captcha = $_POST['g-recaptcha-response'];
		if(!$captcha){
	      echo '<h2>Please fill the captcha correctly.</h2>';
	      exit;
	    }

		$response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LcBTykTAAAAAGWutfeqSIaXXFt3--m5RcI7DbBt&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);

		if ($response['success'] == true && array_key_exists('content', $_POST) && !empty($_POST['content'])
		&& array_key_exists('author', $_POST) && !empty($_POST['author'])) {
			create_reply($model['id'], $_POST['author'], $_POST['website'], $_POST['content']);
			$comment_been_added = true;
		}
	}
