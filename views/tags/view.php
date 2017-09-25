<?php
	if (isset($model) && is_array($model)) {
		$tag = $model;
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title><?= assemble_title($tag['name']) ?></title>
		<?= get_fraction("blocks.head") ?>	
	</head>
	<body>
	    <!-- Nav -->		
		<?= get_fraction("navigation.normal") ?>
		<!-- End Nav -->
		
		<main>
			<div class="row">
				<div class="col s10 offset-s1">	
					<?php
						foreach (get_posts_by_tag($tag['name']) as $post) {
							get_fraction("posts.normal", $post);
						}
					?>	
				</div>
			</div>
		</main>
			
		<!-- Footer -->
		<?= get_fraction("blocks.footer") ?>
		<!-- End Footer -->
	</body>
</html>