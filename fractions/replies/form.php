<script src='https://www.google.com/recaptcha/api.js'></script>

<div class="card hoverable" id="new-reply">
	<div class="card-content">
		<blockquote>
			<form method="post">
				<h4 class="header">[[create-reply]]</h4>
				<div class="row">
					<div class="content col s12">
						<?php if (is_array($data) && array_key_exists('mode', $data) && $data['mode'] == "admin") { ?>
						<div class="row">
							<div class="input-field">
								<?= get_fraction("controls.posts_select", array('name' => 'post_id', 'selected' => array_key_exists('post_id', $data) ? $data['post_id'] : null)) ?>
							</div>
						</div>
						<?php } ?>

						<div class="row">
							<div class="input-field">
								<input id="author" type="text" class="validate" name="author" value="{{author}}" required />
								<label for="author">[[author]]</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field">
								<input id="website" type="text" class="validate" name="website" value="{{website}}" />
								<label for="website">[[website]]</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field">
								<textarea id="icon_prefix2" class="materialize-textarea" name="content" required>{{content}}</textarea>
								<label for="icon_prefix2">[[content]]</label>
							</div>
						</div>

						<div class='row'>
							<div class="g-recaptcha" data-sitekey="6LcBTykTAAAAAPcgddj6mt2dc3qNApuTLiSwSKaI"></div>							
						</div>

						<div class="row">
								<button class="btn waves-effect waves-light" type="submit" name="action">[[create-reply]]
								<i class="material-icons right">send</i>
							</button>
						</div>
					</div>
				</div>
			</form>
		</blockquote>
	</div>
</div>
