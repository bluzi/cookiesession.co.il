<div class="card hoverable">
	<?php if (post_has_image($data['id'])) { ?>
	<div class="card-image">
		<img src="<?= get_post_image_url($data['id']) ?>"  alt="<?= t('cover-image-for', $data['title']) ?>" />
		<span class="card-title <?= $data['is_white_image'] ? 'blue-text' : 'white-text' ?>">
			{{title}}
		</span>
	</div>
	<?php } ?>
	<div class="card-content">
		<?php if (post_has_image($data['id']) == false) { ?>
		<h2>
			{{title}}
		</h2>
		<?php } ?>
	</div> 
	<div class="card-content">
		<?= post_ignore_read_more($data['content']) ?>
	</div>
</div>