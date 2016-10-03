<?php
/**
 * Metabox "Custom Styles"
 *
 * @since  4.7.0
 *
 * Used in class-popup-admin.php
 * Available variables: $popup
 */

$demo_css = '#popup .wdpu-text {
	color: #333;
}';
?>
<div class="pro-only">

<div class="wpmui-grid-12">
	<label for="po-custom-css">
		<?php _e( 'Provide custom CSS rules to customize this PopUp', PO_LANG ); ?>
	</label>
</div>
<div class="wpmui-grid-12">
	<input type="hidden" name="po_custom_css" value="<?php echo esc_textarea( $popup->custom_css ); ?>" />
	<textarea name="demo_css" id="po-custom-css" style="display: none"><?php
	echo esc_textarea( $demo_css );
	?></textarea>
	<div class="po_css_editor"
		id="po-css-editor"
		data-input="#po-custom-css"
		style="width:100%; height: 20em;"
	><?php
	echo esc_textarea( $demo_css );
	?></div>
</div>
<div class="wpmui-grid-12">
	<?php _e( 'Note: To target this PopUp you need to prefix all rules with <code>#popup</code>, e.g. <code>#popup .wdpu-text { font-family: sans }</code>', PO_LANG ); ?>
</div>

<div class="pro-note">
	<div style="padding:150px 0 0;">
	<?php printf(
		__( 'Pro feature only. <a href="%1$s" target="_blank">Find out more &raquo;</a>', PO_LANG ),
		'http://premium.wpmudev.org/project/the-pop-over-plugin/'
	); ?>
	</div>
</div>
</div>