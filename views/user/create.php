<!DOCTYPE html>
<html>
	<head>
		<title><?= assemble_title(t("create-user")) ?></title>
		<?= get_fraction("blocks.head") ?>	
	</head>
	<body>
	    <!-- Nav -->		
		<?= get_fraction("navigation.admin") ?>
		<!-- End Nav -->
		
		<!-- New User -->
		<main>
			<div class="row">
				<div class="col s10 offset-s1">
					<div class="card hoverable">
						<form method="post" class="spacey">
							<h4 class="header"><?= t("create-user") ?></h4>
							<?= get_fraction("users.form") ?>
						</form>
					</div>
				</div>
			</div>
		</main>
		<!-- End New User -->
			
		<!-- Footer -->
		<?= get_fraction("blocks.footer") ?>
		<!-- End Footer -->
	</body>
</html>