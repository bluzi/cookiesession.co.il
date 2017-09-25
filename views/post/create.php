<!DOCTYPE html>
<html>
	<head>
		<title><?= assemble_title(t("create-post")) ?></title>
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
				<form method="post" enctype="multipart/form-data">
					<?= get_fraction("posts.form") ?>	
				</form>
			</div>
		</div>
		</main>
		<!-- End Post Edit -->
			
		<!-- Footer -->
		<?= get_fraction("blocks.footer") ?>
		<!-- End Footer -->
	</body>
</html>