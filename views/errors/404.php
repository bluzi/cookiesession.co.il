<!DOCTYPE html>
<html>
	<head>
		<title><?= assemble_title(t("error")) ?></title>
		<?= get_fraction("blocks.head") ?>	
	</head>
	<body>
	    <!-- Nav -->		
		<?= get_fraction("navigation.normal") ?>
		<!-- End Nav -->
		
		<!-- Main Card -->
		<main>
			<div class="row">
				<div class="col s10 offset-s1">
					<div class="card hoverable center">
						<div class="spacey">
							<h3 class="header"><?= t("error") ?></h3>
							<h5 class="header"><?= t("not-found") ?></h5>
							
							<div style="margin-top: 40px;">
								<img src="/images/404.jpg" />
							</div>
							
							<a href="/"><?= t("back-to-homepage") ?></a>
						</div>
					</div>
				</div>
			</div>
		</main>
		<!-- End Main Card -->
			
		<!-- Footer -->
		<?= get_fraction("blocks.footer") ?>
		<!-- End Footer -->
	</body>
</html>