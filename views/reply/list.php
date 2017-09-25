<!DOCTYPE html>
<html>
	<head>
		<title><?= assemble_title(t("replies-management")) ?></title>
		<?= get_fraction("blocks.head") ?>	
	</head>
	<body>
	    <!-- Nav -->		
		<?= get_fraction("navigation.admin") ?>
		<!-- End Nav -->
		
		<!-- Replies Management -->
		<main>
			<div class="row">
				<div class="col s10 offset-s1">
					<div class="card hoverable">
						<div class="spacey">
							<h4 class="header"><?= t("replies-management") ?></h4>						
							<table class="highlight">
								<thead>
									<tr>
										<th>
											<input type="checkbox" id="all_replies" />
											<label for="all_replies"></label>
										</th>
										<th><?= t("content") ?></th>
										<th><?= t("author") ?></th>
										<th><?= t("date") ?></th>
										<th><?= t("post") ?></th>
										<th></th>
									</tr>
								</thead>
								
								<tbody>
									<?php
										foreach (get_replies() as $reply) {
											get_fraction("replies.table_row", $reply);
										}
									?>
								</tbody>
							</table>
						</div>
						
						<div class="card-action">	
							<a href="<?= get_url_by_page("reply_create") ?>" class="blue-text">
								<i class="material-icons">note_add</i> 
							</a>
												
							<a href="#" class="blue-text">
								<i class="material-icons">delete</i> 
							</a>
						</div>
					</div>
				</div>
			</div>
		</main>
		<!-- End Replies Management -->
			
		<!-- Footer -->
		<?= get_fraction("blocks.footer") ?>
		<!-- End Footer -->
	</body>
</html>