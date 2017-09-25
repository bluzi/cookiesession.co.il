<div class="row">
	<div class="content col s12">
			<div class="row">
				<div class="input-field">
				<input id="email" type="email" class="validate" name="email" value="{{email}}" />
				<label for="email">[[email]]</label>
			</div>
		</div>
		<div class="row">
				<div class="input-field">
				<input id="password" type="password" class="validate" name="password" />
				<label for="password">[[password]]</label>
			</div>
		</div>
		<div class="row">
				<div class="input-field">
				<input id="display_name" type="text" class="validate" name="display_name" value="{{display_name}}" />
				<label for="display_name">[[display-name]]</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field">
				<?= get_fraction("controls.permissions_select", array('name' => 'permission', 'selected' => $data['permission'])) ?>
			</div>
		</div>
		<div class="row left">
			<button class="btn waves-effect waves-light" type="submit" name="action">User</button>
		</div>
	</div>
</div>