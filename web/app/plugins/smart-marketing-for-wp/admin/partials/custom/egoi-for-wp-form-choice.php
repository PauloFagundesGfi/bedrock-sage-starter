<div>
	<h2><?php _e( 'Form Types', 'egoi-for-wp' ); ?></h2>
</div>

<hr />
<p>
<div class="wrap">

	<form method="get" action="">
		<table class="widefat striped">
			<input type="hidden" name="page" value="egoi-4-wp-form">
			<input type="hidden" name="form" value="<?php echo ($count_op+1);?>">
			<tr>
				<td colspan="2"><p> <b><?php _e('Select the Form Type you want', 'egoi-for-wp' ); ?></b>
					<select name="type" style="width: 250px;" id="form_choice">
						<option value="popup"><?php _e('E-goi Form Popup', 'egoi-for-wp' ); ?></option>
						<option value="html"><?php _e('E-goi Form HTML', 'egoi-for-wp' ); ?></option>
						<option value="iframe"><?php _e('E-goi Form IFRAME', 'egoi-for-wp' ); ?></option>
					</select>
				</p>
					<p class="help" id="help_popup"><?php _e( 'The Popup is ...', 'egoi-for-wp' ); ?></p>
					<p class="help" id="help_html" style="display:none;"><?php _e( 'The HTML is ...', 'egoi-for-wp' ); ?></p>
					<p class="help" id="help_iframe" style="display:none;"><?php _e( 'The iframe is ...', 'egoi-for-wp' ); ?></p>
				</td>
			</tr>
			<tr>
				<td><button style="margin-top: 12px;" type="submit" class="button button-primary"><?php _e( 'Create Form', 'egoi-for-wp' ); ?></button></td>
				<td><button style="margin-top: 12px;" type="button" class="button button-secondary" id="close_egoi"><?php _e( 'Close', 'egoi-for-wp' ); ?></button></td>
				<a id="TB_closeWindowButton" style="display:none;"></a>
			</tr>
		</table>
	</form>

</div>