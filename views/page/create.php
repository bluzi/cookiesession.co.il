<!DOCTYPE html>
<html>
	<head>
		<title><?= assemble_title(t("create-page")) ?></title>
		<?= get_fraction("blocks.head") ?>	
	</head>
	<body>
	    <!-- Nav -->		
		<?= get_fraction("navigation.admin") ?>
		<!-- End Nav -->
		
		<!-- Page Create -->
		<main>
			<div class="row">
				<div class="col s10 offset-s1">
					<div class="card hoverable">
						<div class="spacey">
							<h4 class="header"><?= t("create-page") ?></h4>
							<?php
								if (isset($error) && !empty($error)) {
									get_fraction("alerts.error", array('message' => $error));
								}
							?>
							<form method="post">
								<?= get_fraction("pages.form") ?>
							</form>
						</div>
					</div>
				</div>
			</div>
		</main>
		<!-- End Page Create -->
			
		<!-- Footer -->
		<?= get_fraction("blocks.footer") ?>
		<!-- End Footer -->
	</body>
</html>