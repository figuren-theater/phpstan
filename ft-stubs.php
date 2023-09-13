<?php
/**
 * Constants used on the figuren-theater/ft-platform
 */

//
// figuren-theater/ft-platform !
//

namespace Figuren_Theater {
	/**
	 * Get Version number of ft-platform
	 *
	 * Returns a string with the semver formatted version number, which gets set automatically on each Release (via github).
	 *
	 * @since 3.2 Deprecated former FT_PLATTFORM_VERSION constant in favor of this function.
	 *
	 * @return string String with the semver formatted version number.
	 */
	function get_platform_version() : string {}
}

namespace {
	//
	// figuren-theater/ft-platform !
	//

	// ./wp-config.php
	define( 'FT_ROOT_DIR', __DIR__ );
	define( 'FT_WP_DIR', '/wp' );

	// ./wp-config.default.php
	define( 'FT_VENDOR_DIR', FT_ROOT_DIR . '/vendor' );
	define( 'FT_VENDOR_URL', 'https://localhost/content/v' ); // Symlinked to DOCROOT/vendor.

	// ./wp-config.{{ENV}}.php
	define( 'FT_MAINTENANCE_MODE', false );

	//
	// figuren-theater/ft-maitenance !
	//

	// ./content/mu-plugins/FT/ft-maintenance/inc/mode/namespace.php
	// ./content/mu-plugins/FT/ft-maintenance/inc/mode/error-template.php
	// ./content/db-error.php
	// ./content/maintenance.php
	// ./content/php-error.php
	define( 'FT_ERROR_MAIL_TO', 'f.t web-Crew <ft@localhost.test>' );
	define( 'FT_ERROR_MAIL_FROM', 'ft@localhost.test' );
	define( 'FT_ERROR_MAIL_INTERVAL', 300 );
	define( 'FT_ERROR_SUPPRESS_EMAIL', true );

}
