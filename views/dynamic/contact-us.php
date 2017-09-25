<!DOCTYPE html>
<html>
	<head>
		<title><?= assemble_title("צור קשר") ?></title>
		<?= get_fraction("blocks.head") ?>

		<script src='https://www.google.com/recaptcha/api.js'></script>
	</head>
	<body>
	    <!-- Nav -->
		<?= get_fraction("navigation.normal") ?>
		<!-- End Nav -->

		<!-- Page Edit -->
		<main>
			<div class="row">
				<div class="col s10 offset-s1">
					<div class="card hoverable">
						<div class="spacey">
							<?php
								if (isset($message_sent) && $message_sent) {
									get_fraction("alerts.success", array('message' => 'ההודעה נשלחה בהצלחה!'));
								}
							?>
							<h4 class="header">צור קשר</h4>
							<form method="post">
								<div class="row">
									ניתן ליצור איתנו קשר בעזרת טופס זה או בעזרת המייל הפרטי של אלירן: eliran013@gmail.com.
								</div>
								<div class="row">
									<div class="input-field">
										<input id="fullname" type="text" class="validate" name="author" required />
										<label for="fullname"><?= t('fullname') ?></label>
									</div>
								</div>
								<div class="row">
									<div class="input-field">
										<textarea name="content" id="content" class="materialize-textarea" required></textarea>
										<label for="content"><?= t('content') ?></label>
									</div>
								</div>
								<div class='row'>
									<div class="g-recaptcha" data-sitekey="6LcBTykTAAAAAPcgddj6mt2dc3qNApuTLiSwSKaI"></div>		
								</div>
								<div class="row left">
									<button class="btn waves-effect waves-light" type="submit" name="action">שלח</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</main>
		<!-- End Page Edit -->

		<!-- Footer -->
		<?= get_fraction("blocks.footer") ?>
		<!-- End Footer -->
	</body>
</html>
