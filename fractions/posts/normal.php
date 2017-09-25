<div class="card hoverable">
	<?php if (post_has_image($data['id'])) { ?>
	<div class="card-image">
		<a href="{{url}}" class="<?= $data['is_white_image'] ? 'blue-text' : 'white-text' ?>">
			<img src="<?= get_post_image_url($data['id']) ?>" alt="<?= t('cover-image-for', $data['title']) ?>" />
			<span class="card-title">
				{{title}}
			</span>
		</a>
	</div>
	<?php } ?>
	<div class="card-content">
		<?php if (post_has_image($data['id']) == false) { ?>
		<h2>
			<a href="{{url}}" class="black-text">
				{{title}}
			</a>
		</h2>
		<?php } ?>
		<?= post_until_read_more($data['content'], $data['url']) ?>
	</div> 
	<div class="card-action hide-on-med-and-down">							
		<a href="{{url}}#replies" class="blue-text"><?= t('num-replies', get_number_of_replies_by_post($data['id'])) ?></a>
		<a href="{{url}}#new-reply" class="blue-text">[[create-reply]]</a>
		<a href="{{url}}" class="blue-text">[[go-to-full-post]]</a>
		
		<?php $page = get_page_by_name('post_edit'); ?>
		<?php if (is_permitted($page['permission'])) { ?>
			<a href="%post_edit%?id={{id}}" class="blue-text">[[edit]]</a>
		<?php } ?>
		
		<span class="left">
			{{author}}, <?= date('d/m/Y', strtotime($data['datetime'])) ?>
		</span>	
	</div>
</div>