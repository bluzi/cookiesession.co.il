<div class="input-field col s12">
	<select name="{{name}}">
		<?php foreach (get_available_languages() as $language) { ?>
		<option 
			value="<?= $language['code'] ?>"
			<?php if (array_key_exists('selected', $data) && is_string($data['selected']) && !empty($data['selected'])) { ?>
			<?= $language['code'] == $data['selected'] ? 'selected' : '' ?>
			<?php } else { ?>
			<?= $language['default'] != null ? 'selected' : '' ?>
			<?php } ?>
			
		>
			<?= $language['display-name'] ?>
		</option>
		<?php } ?>
	</select>
	<label><?= t('language') ?></label>
</div>