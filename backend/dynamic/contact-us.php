<?php
	require_once('externals/recaptcha/recaptchalib.php');

	if (is_post()) {
		$captcha = $_POST['g-recaptcha-response'];
		if(!$captcha){
		  echo '<h2>Please fill the captcha correctly.</h2>';
		  exit;
		}

		$response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LcBTykTAAAAAGWutfeqSIaXXFt3--m5RcI7DbBt&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);

		if ($response['success'] == true && !empty($_POST['content']) && !empty($_POST['author'])) {
			$content = wordwrap($_POST['content'], 70, "\r\n");
			mail('eliran013@gmail.com', 'A mssage in CookieSession from "' . $_POST['author'] . '"' , $content);

			create_contact_message($_POST['author'], $_POST['content']);

			$message_sent = true;
		}
	}
