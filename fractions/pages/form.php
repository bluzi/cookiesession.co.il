<div class="row">
	<div class="content col s12">
		<div class="row">
				<div class="input-field">
				<input id="name" type="text" class="validate left-align" name="name" value="{{name}}"
					<?= $data['is_permanent'] == 1 ? 'disabled' : '' ?>
				/>
				<label for="name">[[english-name]]</label>
			</div>
		</div>
		<div class="row">
				<div class="input-field">
				<input id="url" type="text" class="validate left-align" name="url" value="{{url}}" />
				<label for="url">[[path]]</label>
			</div>
		</div>
		<div class="row">
				<div class="input-field">
				<input id="physical_path" type="text" class="validate left-align" name="physical_path" value="{{physical_path}}"
					<?= $data['is_permanent'] == 1 ? 'disabled' : '' ?>
				 />
				<label for="physical_path">[[physical-path]]</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field">
				<?= get_fraction("controls.permissions_select", array('name' => 'permission', 'selected' => $data['permission'])) ?>
			</div>
		</div>
		<div class="row">
				<div class="input-field">
				<input id="model" type="text" class="validate left-align" name="model" value="{{model}}" 
					<?= $data['is_permanent'] == 1 ? 'disabled' : '' ?>
				/>
				<label for="model">[[model]]</label>
			</div>
		</div>
		<div class="row">
				<div class="input-field">
				<input id="title" type="text" class="validate" name="title" value="{{title}}" />
				<label for="title">[[title]]</label>
			</div>
		</div>
		<div class="row">
				<div class="input-field">
				<input id="description" type="text" class="validate" name="description" value="{{decsription}}" />
				<label for="description">[[description]]</label>
			</div>
		</div>
		<div class="row">
				<div class="input-field">
				<input id="keywords" type="text" class="validate" name="keywords" value="{{keywords}}" />
				<label for="keywords">[[keywords]]</label>
			</div>
		</div>
		<div class="row left">
			<button class="btn waves-effect waves-light" type="submit" name="action">Page</button>
		</div>
	</div>
</div>