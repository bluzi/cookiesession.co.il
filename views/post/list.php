<!DOCTYPE html>
<html>
	<head>
		<title><?= assemble_title(t("posts-management")) ?></title>
		<?= get_fraction("blocks.head") ?>	
	</head>
	<body>
	    <!-- Nav -->		
		<?= get_fraction("navigation.admin") ?>
		<!-- End Nav -->
		
		<!-- Posts Management -->
		<main>
			<div class="row">
				<div class="col s10 offset-s1">
					<div class="card hoverable">
						<div class="spacey">
							<h4 class="header"><?php t("posts-management") ?></h4>						
							<table class="highlight">
								<thead>
									<tr>
										<th>
											<input type="checkbox" id="all_users" />
											<label for="all_users"></label>
										</th>
										<th><?= t("title") ?></th>
										<th><?= t("author") ?></th>
										<th><?= t("date") ?></th>
										<th></th>
									</tr>
								</thead>
								
								<tbody>
									<?php
										foreach (get_posts() as $post) {
											get_fraction("posts.table_row", $post);
										}
									?>
								</tbody>
							</table>
						</div>
						
						<div class="card-action">						
							<a href="<?= get_url_by_page("post_create") ?>" class="blue-text">
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
		<!-- End Posts Management -->
			
		<!-- Footer -->
		<?= get_fraction("blocks.footer") ?>
		<!-- End Footer -->
	</body>
</html>