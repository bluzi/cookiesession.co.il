<!DOCTYPE html>
<html>
	<head>
		<title><?= assemble_title(t("homepage")) ?></title>
		<?= get_fraction("blocks.head") ?>	
	</head>
	<body>
	    <!-- Nav -->
		<?= get_fraction("navigation.normal") ?>
		<!-- End Nav -->

		<!-- Posts -->
		<main>
			<div class="row hide-on-med-and-down">
				<div class="col s7 offset-s1">
					<?php
					foreach (get_posts() as $post) {
						$post['url'] = assemble_url($post['url']);
						get_fraction("posts.normal", $post);
					}
					?>
				</div>

				<!-- Other Content -->
				<?= get_fraction('tags.list') ?>
				<!-- End Other Content -->
			</div>

			<!-- Mobile -->
			<div class="row hide-on-large-only" style="margin: 0 20px;">
				<div class="col s12">
					<?php
					foreach (get_posts() as $post) {
						$post['url'] = assemble_url($post['url']);
						get_fraction("posts.normal", $post);
					}
					?>
				</div>
			</div>
		</main>
		<!-- End Posts -->

		<!-- Footer -->
		<?= get_fraction("blocks.footer") ?>
		<!-- End Footer -->
	</body>
</html>
