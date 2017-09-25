<tr>
	<td>
		<input type="checkbox" id="post_{{id}}" />
      	<label for="post_{{id}}"></label>
	</td>
	<td>
		<a href="<?= assemble_url($data['url']) ?>">
			{{title}}
		</a>
	</td>
	<td>
		{{author}}
	</td>
	<td>
		{{datetime}}
	</td>
	<td>
		<a href="%post_edit%?id={{id}}">
			<i class="material-icons">settings</i>
		</a>
		
		<a href="%post_delete%?id={{id}}">
			<i class="material-icons">delete</i>
		</a>
	</td>
</tr>