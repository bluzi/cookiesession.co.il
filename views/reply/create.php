<!DOCTYPE html>
<html>
	<head>
		<title><?= assemble_title(t("create-reply")) ?></title>
		<?= get_fraction("blocks.head") ?>	
	</head>
	<body>
	    <!-- Nav -->		
		<?= get_fraction("navigation.admin") ?>
		<!-- End Nav -->
		
		<!-- Post Edit -->
		<main>
			<div class="row">
				<div class="col s10 offset-s1">
					<div class="card hoverable">
						<div class="spacey">
							<h4 class="header"><?= t("create-reply") ?></h4>
							<form method="post">
								<?= get_fraction("replies.form", array('mode' => "admin")) ?>
							</form>
						</div>
					</div>
				</div>
			</div>
		</main>
		<!-- End Post Edit -->
			
		<!-- Footer -->
		<?= get_fraction("blocks.footer") ?>
		<!-- End Footer -->
	</body>
</html>