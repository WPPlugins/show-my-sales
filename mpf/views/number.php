<tr>
	<th scope="row"><label for="mpf-plugin-field-<?php echo $option['id']; ?>"><?php echo $option['name']; ?></label></th>
	<td>
		<input type="number" min="<?php echo $option['min']; ?>" max="<?php echo $option['max']; ?>" value="<?php echo $settings[$option['id']]; ?>" name="<?php echo $option['id']; ?>" id="mpf-plugin-field-<?php echo $option['id']; ?>" class="regular-text" style="width:80px" /> <small class="mpf-plugin-units"><?php echo $option['units']; ?></small>
		<span class="description"><?php echo $option['desc']; ?></span>
	</td>
</tr>