<select id="post" name="{{name}}">
	<?php
		foreach (get_posts() as $post) {
	?>
			<option 
				value="<?= $post['id'] ?>" 
				<?= $post['id'] == $data['selected'] ? 'selected' : '' ?>
			><?= $post['title'] ?> </option>
	<?php
		}
	?>
</select>
<label for="post"><?= t("post") ?></label>