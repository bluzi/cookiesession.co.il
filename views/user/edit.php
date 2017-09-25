<!DOCTYPE html>
<html>
	<head>
		<title><?= assemble_title(t("edit-user")) ?></title>
		<?= get_fraction("blocks.head") ?>	
	</head>
	<body>
	    <!-- Nav -->		
		<?= get_fraction("navigation.admin") ?>
		<!-- End Nav -->
		
		<!-- Update User -->
		<main>
			<div class="row">
				<div class="col s10 offset-s1">
					<div class="card hoverable">
						<form method="post" class="spacey">
							<h4 class="header"><?= t("edit-user") ?></h4>
							<?= get_fraction("users.form", get_user($_GET['id'])) ?>
						</form>
					</div>
				</div>
			</div>
		</main>
		<!-- End Update User -->
			
		<!-- Footer -->
		<?= get_fraction("blocks.footer") ?>
		<!-- End Footer -->
	</body>
</html>