<!DOCTYPE html>
<html>
	<head>
		<title><?= assemble_title(t("alon-abadi")) ?></title>
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
							<div class="right" style="margin-left: 20px;">
								<img src="/cookiesession.com/images/alon.png" />
							</div>
							<h4 class="header"><?= t("alon-abadi") ?></h4>
							<?= t("alon-abadi-description") ?>
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