<tr>
	<td>
		<input type="checkbox" id="reply_{{id}}" />
      	<label for="reply_{{id}}"></label>
	</td>
	<td>
		<em>
			"{{content}}"
		</em>
	</td>
	<td>
		{{author}}
	</td>
	<td>
		{{datetime}}
	</td>
	<td>
		<a href="<?= assemble_url($data['post_url']) ?>">
			{{post_title}}
		</a>
	</td>
	<td>
		<a href="%reply_edit%?id={{id}}">
			<i class="material-icons">settings</i>
		</a>
		
		<a href="%reply_delete%?id={{id}}">
			<i class="material-icons">delete</i>
		</a>
	</td>
</tr>