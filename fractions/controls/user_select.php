<div class="input-field col s12">
	<select name="{{name}}">
		<?php foreach (get_users() as $user) { ?>
		<option 
			value="<?= $user['id'] ?>"
			<?php if (array_key_exists('selected', $data) && (is_string($data['selected']) || is_int($data['selected']) ) && !empty($data['selected'])) { ?>
				<?= $user['id'] == $data['selected'] ? 'selected' : '' ?>
			<?php } else { ?>
				<?= get_session()['id'] == $user['id'] ? 'selected' : '' ?>
			<?php } ?>
		>
			<?= $user['display_name'] ?>
		</option>
		<?php } ?>
	</select>
	<label>{{label}}</label>
</div>