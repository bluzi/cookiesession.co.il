<tr>
	<td>
		<input type="checkbox" id="page_{{id}}" />
      	<label for="page_{{id}}"></label>
	</td>
	<td>
		<a href="%{{name}}%">
			{{name}}
		</a>
	</td>
	<td>
		{{url}}
	</td>
	<td>
		{{permission_description}}
	</td>
	<td>
		<a href="%page_edit%?name={{name}}">
			<i class="material-icons">settings</i>
		</a> 

		<?php if ($data['is_permanent'] != 1) { ?>
		<a href="%page_delete%?name={{name}}">
			<i class="material-icons">delete</i>
		</a> 
		<?php } ?>
	</td>
</tr>