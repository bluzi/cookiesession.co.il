<!DOCTYPE html>
<html>
	<head>
		<title><?= assemble_title(t("pages-management")) ?></title>
		<?= get_fraction("blocks.head") ?>	
	</head>
	<body>
	    <!-- Nav -->		
		<?= get_fraction("navigation.admin") ?>
		<!-- End Nav -->
		
		<!-- Pages Management -->
		<main>
			<div class="row">
				<div class="col s10 offset-s1">
					<div class="card hoverable">
						<div class="spacey">
							<h4 class="header"><?= t("pages-management") ?></h4>						
							<table class="highlight">
								<thead>
									<tr>
										<th>
											<input type="checkbox" id="all_users" />
											<label for="all_pages"></label>
										</th>
										<th><?= t("name") ?></th>
										<th><?= t("path") ?></th>
										<th><?= t("permissions") ?></th>
										<th></th>
									</tr>
								</thead>
								
								<tbody>
									<?php
										foreach (get_pages() as $page) {
											get_fraction("pages.table_row", $page);
										}
									?>
								</tbody>
							</table>
						</div>
						
						<div class="card-action">						
							<a href="<?= get_url_by_page("page_create") ?>" class="blue-text"> 
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
		<!-- End Pages Management -->
			
		<!-- Footer -->
		<?= get_fraction("blocks.footer") ?>
		<!-- End Footer -->
	</body>
</html>