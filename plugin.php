<?php
/**
 * Plugin Name: AmericaneagleScaffold
 * Plugin URI:  https://www.americaneagle.com/
 * Description:
 * Version:     0.1.0
 * Author:      Americaneagle.com
 * Author URI:  https://www.americaneagle.com/
 * Text Domain: americaneagle-scaffold
 * Domain Path: /languages
 *
 * @package AmericaneagleScaffold
 */

// Useful global constants.
define( 'AMERICANEAGLE_SCAFFOLD_VERSION', '0.1.0' );
define( 'AMERICANEAGLE_SCAFFOLD_URL', plugin_dir_url( __FILE__ ) );
define( 'AMERICANEAGLE_SCAFFOLD_PATH', plugin_dir_path( __FILE__ ) );
define( 'AMERICANEAGLE_SCAFFOLD_INC', AMERICANEAGLE_SCAFFOLD_PATH . 'includes/' );

// Include files.
require_once AMERICANEAGLE_SCAFFOLD_INC . 'functions/core.php';

// Activation/Deactivation.
register_activation_hook( __FILE__, '\AmericaneagleScaffold\Core\activate' );
register_deactivation_hook( __FILE__, '\AmericaneagleScaffold\Core\deactivate' );

// Bootstrap.
AmericaneagleScaffold\Core\setup();

// Require Composer autoloader if it exists.
if ( file_exists( AMERICANEAGLE_SCAFFOLD_PATH . '/vendor/autoload.php' ) ) {
	require_once AMERICANEAGLE_SCAFFOLD_PATH . 'vendor/autoload.php';
}
