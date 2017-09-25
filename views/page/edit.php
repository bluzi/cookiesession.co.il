<!DOCTYPE html>
<html>
	<head>
		<title><?= assemble_title(t("edit-page")) ?></title>
		<?= get_fraction("blocks.head") ?>	
	</head>
	<body>
	    <!-- Nav -->		
		<?= get_fraction("navigation.admin") ?>
		<!-- End Nav -->
		
		<!-- Page Edit -->
		<main>
			<div class="row">
				<div class="col s10 offset-s1">
					<div class="card hoverable">
						<div class="spacey">
							<h4 class="header"><?= t("edit-page") ?></h4>
							<form method="post">
								<?php
									if (isset($page_updated) && $page_updated) {
										get_fraction("alerts.success", array('message' => t("page-updated-successfully")));
									}
								?>
								<?= get_fraction("pages.form", get_page_by_name($_GET['name'])) ?>
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