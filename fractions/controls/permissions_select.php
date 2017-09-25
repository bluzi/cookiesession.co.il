<select id="permission" name="{{name}}">
	<?php foreach (get_permissions() as $permission) { ?>
			<?php if ($permission['level'] > 0) { ?>
			<option 
				value="<?= $permission['level'] ?>" 
				<?= $permission['level'] == $data['selected'] ? 'selected' : '' ?>
			><?= $permission['description'] ?> </option>
		<?php } ?>
	<?php } ?>
</select>
<label for="permission"><?= t("permissions") ?></label>