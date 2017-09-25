<!DOCTYPE html>
<html>
	<head>
		<title><?= assemble_title(t("login")) ?></title>
		<?= get_fraction("blocks.head") ?>	
	</head>
	<body>
	    <!-- Nav -->		
		<?= get_fraction("navigation.normal") ?>
		<!-- End Nav -->
		
		<!-- Login -->
		<main>
			<div class="row">
				<div class="col s10 offset-s1">
					<div class="card hoverable">
						<form method="post" class="spacey">
							<h4 class="header"><?= t("login") ?></h4>
							<div class="row">
								<div class="content col s12">
										<?php
											if (isset($error) && !empty($error)) {
												get_fraction("alerts.error", array('message' => $error));
											}
										?>
										<div class="row">
											<div class="input-field">
											<input id="email" type="email" class="validate" name="email" />
											<label for="email"><?= t("email") ?></label>
										</div>
									</div>
									<div class="row">
											<div class="input-field">
											<input id="password" type="password" class="validate" name="password" />
											<label for="password"><?= t("password") ?></label>
										</div>
									</div>
									<div class="row left">
										<button class="btn waves-effect waves-light" type="submit" name="action"><?= t("login") ?></button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</main>
		<!-- End Login -->
			
		<!-- Footer -->
		<?= get_fraction("blocks.footer") ?>
		<!-- End Footer -->
	</body>
</html>