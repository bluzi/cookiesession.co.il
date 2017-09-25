<!DOCTYPE html>
<html>
	<head>
		<title><?= assemble_title(t("ido-scapa")) ?></title>
		<?= get_fraction("blocks.head") ?>	
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
							<h4 class="header"><?= t("ido-scapa") ?></h4>
							<?= t("ido-scapa-description") ?>
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