<!DOCTYPE html>
<html>
	<head>
		<title><?= assemble_title(t("site-mangement")) ?></title>
		<?= get_fraction("blocks.head") ?>	
	</head>
	<body>
	    <!-- Nav -->		
		<?= get_fraction("navigation.admin") ?>
		<!-- End Nav -->
		
		<!-- Admin Welcome -->
		<main>
			<div class="row">
				<div class="col s4 offset-s1">
					<div class="card hoverable">
						<div class="spacey">
							<h4 class="header"><?= t("x-last-replies", config()['admin_show_top_replies']) ?></h4>
							<?php
								foreach (get_last_replies(config()['admin_show_top_replies']) as $reply) {
									get_fraction("replies.inner", $reply);
								}
							?>
						</div>
						<div class="card-action left-align">						
							<a href="<?= get_url_by_page("admin_replies") ?>" class="blue-text">
								<?= t("watch-all-replies") ?>
							</a>
						</div>
					</div>
				</div>
				
				<div class="col s6">
					<div class="card hoverable">
						<div class="spacey">
							<h3><?= t("welcome", get_session()['display_name']) ?></h3>
							<h4 class="header"><?= t("x-authors-last-posts", config()['admin_show_top_posts']) ?></h4>
							<table class="striped responsive-table">
								<thead>
									<tr>
										<th><?= t("title") ?></th>
										<th><?= t("date") ?></th>
									</tr>
								</thead>
								<tbody>
									<?php
										foreach (get_posts_by_author(get_session()['id'], config()['admin_show_top_posts'], "desc") as $post) {
											get_fraction("posts.table_row_tiny", $post);
										}
									?>
								</tbody>
							</table>
						</div>
						<div class="card-action left-align">			
							<a href="<?= get_url_by_page("post_create") ?>" class="blue-text">
								<?= t("add-post") ?>
							</a>			
							<a href="<?= get_url_by_page("admin_posts") ?>" class="blue-text">
								<?= t("watch-all-posts") ?>
							</a>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col s6 offset-s1">
					<div class="card hoverable">
						<div class="spacey">
							<h4 class="header"><?= t("google-analytics") ?></h4>
							<?= get_fraction('admin.google_analytics') ?>
						</div>
						<div class="card-action left-align">						
							<a href="https://analytics.google.com/analytics/web/#report/visitors-overview/a23421052w104350502p108545103/" class="blue-text">
								<?= t("go-to-google-analytics-panel") ?>
							</a>
						</div>
					</div>
				</div>
				
				<div class="col s4">
					<div class="card">
						<div class="spacey">
							<h4 class="header">סטטיסטיקות</h4>
							<table class="striped responsive-table">
								<tbody>
									<tr>
										<td>פוסטים</td>
										<td class="bold left-align">
											<?= get_number_of_posts() ?>
										</td>
									</tr>
									<tr>
										<td>פוסטים שלך</td>
										<td class="bold left-align">
											<?= get_number_of_posts_by_author(get_session()['id']) ?>
										</td>
									</tr>
									<tr>
										<td>תגובות</td>
										<td class="bold left-align">
											<?= get_number_of_replies() ?>
										</td>
									</tr>
									<tr>
										<td>תגובות לפוסטים שלך</td>
										<td class="bold left-align">
											<?= get_number_of_replies_by_post_author(get_session()['id']) ?>
										</td>
									</tr>
									<tr>
										<td>עמודים</td>
										<td class="bold left-align">
											<?= get_number_of_pages() ?>
										</td>
									</tr>
									<tr>
										<td>הפוסט עם הכי הרבה תגובות</td>
										<td class="left-align">
											<?php
												$post = get_post_with_most_replies();
												if ($post == null) {
													echo "אין.";
												}
												else {
													echo '<a href="' . assemble_url($post['url']) . '">';
													echo $post['title'];
													echo "</a>";
												}
											?>
										</td>
									</tr>
									<tr>
										<td>המשתמש עם הכי הרבה פוסטים</td>
										<td class="left-align">
											<?php
												$user = get_user_with_most_posts();
												if ($user == null) {
													echo "אין.";
												}
												else {
													echo $user['display_name'];
												}
											?>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</main>
		<!-- End Admin Welcome -->
			
		<!-- Footer -->
		<?= get_fraction("blocks.footer") ?>
		<!-- End Footer -->
	</body>
</html>