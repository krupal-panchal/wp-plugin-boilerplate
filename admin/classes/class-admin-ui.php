<?php
/**
 * Class to handles admin UI and functionalities.
 */

class Admin_UI {

    /**
     * Class constructor
     */
    public function __construct() {

        /**
         * Actions
         */
        add_action( 'admin_enqueue_scripts', [ $this, 'enqueue_assets' ] );

        /**
         * Filters
         */
    }

    /**
	 * Method to enqueue assets.
	 *
	 * @param string $hook_suffix The current admin page.
	 * 
	 * @return void
	 */
	public function enqueue_assets( string $hook_suffix ) : void {

		$allowed_hooks = [ 'index.php' ];

		// Enqueue style only for specific pages.
		if (
			in_array( $hook_suffix, $allowed_hooks, true )
		) {
			wp_enqueue_style(
				sprintf( '%s-admin', WP_PLUGIN_NAME ),
				sprintf( '%s/assets/dist/css/admin.css', untrailingslashit( WP_PLUGIN_ROOT ) ),
				[],
				WP_PLUGIN_VERSION
			);

            wp_enqueue_script(
                sprintf( '%s-public', WP_PLUGIN_NAME ),
                sprintf( '%s/assets/dist/js/admin.js', untrailingslashit( WP_PLUGIN_ROOT ) ),
                ['jquery'],
                WP_PLUGIN_VERSION,
                true
            );
		}
	}
}
