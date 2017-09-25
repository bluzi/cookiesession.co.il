<div class="card hoverable">
	<div class="spacey">
		<h4 class="header">[[create-post]]</h4>
		<div class="row">
			<div class="input-field">
				<input id="title" type="text" class="validate" name="title" value="{{title}}" />
				<label for="title">[[title]]</label>
			</div>
		</div>
		
		<div class="row">
			<div class="input-field">
				<?= get_fraction("controls.editors.ckeditor", array('name' => "content", 'content' => $data['content'])) ?>
			</div>
		</div>
	</div>
</div>

<div class="card hoverable">
	<div class="spacey">
		<h4>אפשרויות</h4>
		<div class="row">
			<div class="input-field">
				<input id="url" type="text" class="validate" name="url" value="{{url}}" />
				<label for="url">[[path]]</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field">
				<input type="date" class="datepicker" id="date" name="datetime" data-value="<?= $data ? date('Y-m-d', strtotime($data['datetime'])) : "today"; ?>" />
				<label for="date">[[date]]</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field">
				<?= get_fraction("controls.language_select", array('name' => "language", 'selected' => $data['language'])) ?>
			</div>
		</div>
		<div class="row">
			<div class="input-field">
				<?= get_fraction("controls.user_select", array('name' => "author_id", 'selected' => $data['author_id'], 'label' => t('author'))) ?>
			</div>
		</div>
		<div class="row">
			<div class="input-field">
				<input id="keywords" type="text" class="validate" name="keywords" value="{{keywords}}" />
				<label for="keywords">[[keywords]]</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field">
				<input id="description" type="text" class="validate" name="description" value="{{description}}" />
				<label for="description">[[description]]</label>
			</div>
		</div>
	</div>
</div>
<div class="card hoverable">
	<div class="spacey">
		<div class="row">
			<div class="input-field">
				<?= get_fraction("controls.tags_select", array('name' => "tags", 'selected' => get_tags_by_post($data['id']))) ?>
			</div>
		</div>
	</div>
</div>
<div class="card hoverable">
	<div class="spacey">
		<h4>[[cover-image]]</h4>
		<div class="row">
			<div class="file-field input-field">
				<div class="btn">
					<span>[[choose-image]]</span>
					<input type="file" id="cover_image" name="cover_image" accept="image/*" />
				</div>
				<div class="file-path-wrapper">
					<input class="file-path validate" type="text"/>
				</div>
				<?php if ($data && post_has_image($data['id'])) { ?>
				<div class="center">
					<img src="<?= get_post_image_url($data['id']) ?>" alt="<?= t('cover-image') ?>" />
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<div class="card hoverable">
	<div class="spacey">
		<div class="row left">
			<button class="btn waves-effect waves-light" type="submit" name="action">Post</button>
		</div>
	</div>
</div>

<script>
	$('.datepicker').pickadate({
		selectMonths: true, // Creates a dropdown to control month
		selectYears: 15, // Creates a dropdown of 15 years to control year
		format: 'yyyy-mm-dd',
		closeOnSelect: true,	
	});
</script>