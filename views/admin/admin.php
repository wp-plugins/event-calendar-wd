<?php

/**
 * Admin page
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $ecwd_settings;
global $ecwd_tabs;

?>

<div class="wrap">
	<div style="float: right; clear: both;">
		<a href="https://web-dorado.com/files/fromEventCalendarWD.php" target="_blank" style="text-decoration:none;">
			<img src="<?php echo plugins_url('../../assets/pro.png', __FILE__)?>" border="0" alt="https://web-dorado.com/files/fromEventCalendarWD.php" width="215">
		</a>
	</div>
	<?php settings_errors(); ?>
	<div id="ecwd-settings">

		<div id="ecwd-settings-content">
			<h2><?php echo esc_html( get_admin_page_title() ); ?></h2>

			<h2 class="nav-tab-wrapper">
				<?php
				$current_tab = isset( $_GET['tab'] ) ? $_GET['tab'] : 'general';
				foreach ($ecwd_settings as $key=>$ecwd_setting){
					$active = $current_tab == $key ? 'nav-tab-active' : '';
					echo '<a class="nav-tab ' . $active . '" href="?post_type=ecwd_calendar&page=ecwd_general_settings&tab=' . $key . '">' . $ecwd_tabs[$key] . '</a>';
				}
				?>

			</h2>

			<form method="post" action="options.php">
				<?php wp_nonce_field( 'update-options' ); ?>
				<?php
				settings_fields( ECWD_PLUGIN_PREFIX.'_settings_'.$current_tab );
				do_settings_sections( ECWD_PLUGIN_PREFIX.'_settings_'.$current_tab );

				?>

				<?php submit_button(); ?>

			</form>
		</div>
		<!-- #ecwd-settings-content -->
	</div>
	<!-- #ecwd-settings -->
</div><!-- .wrap -->