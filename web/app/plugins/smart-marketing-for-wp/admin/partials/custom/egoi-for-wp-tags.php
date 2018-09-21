<h2><?php _e( 'Add dynamic form variable', 'egoi-for-wp' ); ?></h2>
<p>
	<?php echo sprintf( __( 'The following list of variables can be used to <a href="%s">add some dynamic content to your form or success and error messages</a>.', 'egoi-for-wp' ), 'https://mc4wp.com/kb/using-variables-in-your-form-or-messages/' ) . ' ' . __( 'This allows you to personalise your form or response messages.', 'egoi-for-wp' ); ?>
</p>
<table class="widefat striped">
		<tr>
			<td>
				<input type="text" class="widefat" value="" readonly="readonly" onfocus="this.select();" />
				<p class="help" style="margin-bottom:0;"></p>
			</td>
		</tr>
</table>