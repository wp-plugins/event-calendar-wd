<?php
/**
 * Display for Calendar post metas
 */
global $post;


?>

<div class="wrap">
	<div style="float: right; clear: both;">
		<a href="https://web-dorado.com/files/fromEventCalendarWD.php" target="_blank" style="text-decoration:none;">
			<img src="<?php echo plugins_url( '../../assets/pro.png', __FILE__ ) ?>" border="0"
			     alt="https://web-dorado.com/files/fromEventCalendarWD.php" width="215">
		</a>
	</div>
	<div id="ecwd-settings">
		<div id="ecwd-settings-content">
			<h2 id="add_on_title"><?php echo esc_html( get_admin_page_title() ); ?></h2>
			<div id="ecwd-display-options-wrap">
				<br />
				<span style="font-size: 15px; font-weight: bold;">The calendar currently uses default theme. Upgrade to Pro version to modify theme options and get fancy 5 more themes.</span>
				<br/>
				<br/>
				<div class="ecwd-meta-control">
					<img width="100%" height="100%"
					     src="<?php echo plugins_url( '/assets/themes.jpg', ECWD_MAIN_FILE ); ?>">
				</div>
			</div>
		</div>
	</div>
</div>

