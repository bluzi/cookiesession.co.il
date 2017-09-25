<!DOCTYPE html>
<html>
	<head>
		<title><?= assemble_title($model['title']) ?></title>
		<?= get_fraction("blocks.head", array(
			'description' => $model['description'],
			'title' => $model['title'],
			'keywords' => $model['keywords'],
			'image' => get_post_image_url($model['id']),
		)) ?>	
	</head>
	<body>
	    <!-- Nav -->		
		<?= get_fraction("navigation.normal") ?>
		<!-- End Nav -->
		
		<main>
			<div class="row">
				<div class="col s10 offset-s1">
					<!-- Post -->
					<?= get_fraction("posts.huge", $model) ?>
					<!-- End Post -->
			
					<!-- Comments -->
					<h2 class="header" id="replies">תגובות</h2>
											
					<?php
						foreach (get_replies_by_post($model['id']) as $reply) {
							get_fraction("replies.normal", $reply);
						}
					?>						
					<!-- End Comments -->
							
					<!-- New Comment -->
						<?= get_fraction("replies.form", array("id" => $model['id'])) ?>
					<!-- End New Comment -->
				</div>
			</div>
		</main>
			
		<!-- Footer -->
		<?= get_fraction("blocks.footer") ?>
		<!-- End Footer -->
	</body>
</html>