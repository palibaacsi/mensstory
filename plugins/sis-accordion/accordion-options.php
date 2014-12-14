<div id="wpbody">
	<div class="wrap">
		<h2><?php _e('Accordion Settings') ?></h2>
		<form action="options.php" method="post">
			<?php settings_fields( 'sis_accordion_settings' ); ?>
			<?php $options = get_option( 'sis_accordion_settings' ); ?>
			<table class="form-table">
				<tbody>
					<tr valign="top">
						<th scope="row">
							<label for=""><?php _e('Collapsible') ?></label>
						</th>
						<td>
							<select name="sis_accordion_settings[collapsible]">
								<option value="false" <?php selected( $options['collapsible'], 'false' ); ?>>Keep one section open</option>
								<option value="true" <?php selected( $options['collapsible'], 'true' ); ?>>Make section collapsible</option>
							</select>
							<p class="description"><?php _e('By default, accordions always keep one section open. To allow for all sections to be be collapsible, select &ldquo; Make section collapsible &ldquo;') ?></p>
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<label for=""><?php _e('Active') ?></label>
						</th>
						<td>
							<input type="text" name="sis_accordion_settings[active]" id="active" value="<?php esc_attr_e($options['active']); ?>" >

							<p class="description"><?php _e('Which panel is currently open. Setting active to false will collapse all panels. This requires the collapsible option to be true. The zero-based index of the panel that is active (open). A negative value selects panels going backward from the last panel.') ?></p>
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<label for=""><?php _e('Event') ?></label>
						</th>
						<td>
							<select name="sis_accordion_settings[event]">
								<option value="click" <?php selected( $options['event'], 'click' ); ?>>click</option>
								<option value="mouseover" <?php selected( $options['event'], 'mouseover' ); ?>>mouseover</option>
							</select>

							<p class="description"><?php _e('The event that accordion headers will react to in order to activate the associated panel.') ?></p>
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<label for=""><?php _e('Height Style') ?></label>
						</th>
						<td>
							<select name="sis_accordion_settings[heightstyle]">
								<option value="content" <?php selected( $options['heightstyle'], 'content' ); ?>>content</option>
								<option value="fill" <?php selected( $options['heightstyle'], 'fill' ); ?>>fill</option>
								<option value="auto" <?php selected( $options['heightstyle'], 'auto' ); ?>>auto</option>
							</select>
							<p class="description"><?php _e('Controls the height of the accordion and each panel. "auto": All panels will be set to the height of the tallest panel. "fill": Expand to the available height based on the accordion&ldquo;s parent height. "content": Each panel will be only as tall as its content.') ?></p>
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<label for=""><?php _e('Header Icon') ?></label>
						</th>
						<td>
							<input type="text" name="sis_accordion_settings[headericon]" id="headericon" value="<?php esc_attr_e($options['headericon']); ?>" >

							<p class="description"><?php _e('Write jQuery UI Icons class name. To get jQuery UI class name <a target="_blank" href="http://api.jqueryui.com/theming/icons/">click here</a>') ?></p>
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<label for=""><?php _e('Active Header Icon') ?></label>
						</th>
						<td>
							<input type="text" name="sis_accordion_settings[activeheadericon]" id="activeheadericon" value="<?php esc_attr_e($options['activeheadericon']); ?>" >

							<p class="description"><?php _e('Write jQuery UI Icons class name. To get jQuery UI class name <a target="_blank" href="http://api.jqueryui.com/theming/icons/">click here</a>') ?></p>
						</td>
					</tr>
				</tbody>
			</table>
			<p class="submit"><input type="submit" value="<?php _e('Save Changes') ?>" class="button button-primary" id="submit" name="submit"></p>
		</form>
	</div>
	<div class="clear"></div>
</div>
<div class="clear"></div>