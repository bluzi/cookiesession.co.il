<!DOCTYPE html>
<html>
	<head>
		<title><?= assemble_title(t("edit-post")) ?></title>
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
						<?php
							if (isset($post_updated) && $post_updated) {
								get_fraction("alerts.success", array('message' => 'הפוסט התעדכן בהצלחה!'));
							}
						?>
						<?= get_fraction("posts.form", get_post($_GET['id'])) ?>	
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