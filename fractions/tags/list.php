<div class="col s3 hide-on-med-and-down">
	<h2 class="header no-mragin-top"><?= t("subjects") ?></h2>
	<div class="collection">
		<?php foreach (get_tags() as $tag) { ?>
			<?php if ($tag['is_hidden'] == false && count(get_posts_by_tag($tag['name'])) > 0) { ?>
				<a href="%%<?= to_url($tag['name']) ?>" class="collection-item blue-text"><?= !empty($tag['alias']) ? $tag['alias'] : $tag['name'] ?></a>
			<?php } ?>
		<?php } ?>
	</div>
</div>