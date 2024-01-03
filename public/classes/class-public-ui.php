<?php
/**
 * Class to handle public UI and functionalities.
 */

class Public_UI {

    /**
     * Class constructor
     */
    public function __construct() {

        /**
         * Actions
         */
        add_action( 'wp_enqueue_scripts', [ $this, 'enqueue_assets' ] );

        /**
         * Filters
         */
    }

    /**
	 * Method to register assets.
	 *
	 * @return void
	 */
	public function enqueue_assets() : void {

		wp_enqueue_style(
			sprintf( '%s-public', WP_PLUGIN_NAME ),
			sprintf( '%s/assets/dist/css/public.css', untrailingslashit( WP_PLUGIN_ROOT ) ),
			[],
			WP_PLUGIN_VERSION
		);

		wp_enqueue_script(
			sprintf( '%s-public', WP_PLUGIN_NAME ),
			sprintf( '%s/assets/dist/js/public.js', untrailingslashit( WP_PLUGIN_ROOT ) ),
			['jquery'],
			WP_PLUGIN_VERSION,
			true
		);
	}
}
