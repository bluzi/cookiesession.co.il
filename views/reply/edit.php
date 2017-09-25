<!DOCTYPE html>
<html>
	<head>
		<title><?= assemble_title(t("edit-reply")) ?></title>
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
							<h4 class="header"><?= t("edit-reply") ?></h4>
							<form method="post">
								<?php
									if (isset($reply_updated) && $reply_updated) {
										get_fraction("alerts.success", array('message' => t("reply-updated-successfully")));
									}
								?>
								<?= get_fraction("replies.form", array_push_pair(get_reply($_GET['id']), 'mode', "admin")) ?>
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