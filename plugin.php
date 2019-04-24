<?php
/**
 * Plugin Name: PragmaticScaffold
 * Plugin URI:  https://pragmatic.agency
 * Description:
 * Version:     0.1.0
 * Author:      Pragmatic
 * Author URI:  https://pragmatic.agency
 * Text Domain: pragmatic-scaffold
 * Domain Path: /languages
 *
 * @package PragmaticScaffold
 */

// Useful global constants.
define( 'PRAGMATIC_SCAFFOLD_VERSION', '0.1.0' );
define( 'PRAGMATIC_SCAFFOLD_URL', plugin_dir_url( __FILE__ ) );
define( 'PRAGMATIC_SCAFFOLD_PATH', plugin_dir_path( __FILE__ ) );
define( 'PRAGMATIC_SCAFFOLD_INC', PRAGMATIC_SCAFFOLD_PATH . 'includes/' );

// Include files.
require_once PRAGMATIC_SCAFFOLD_INC . 'functions/core.php';

// Activation/Deactivation.
register_activation_hook( __FILE__, '\PragmaticScaffold\Core\activate' );
register_deactivation_hook( __FILE__, '\PragmaticScaffold\Core\deactivate' );

// Bootstrap.
PragmaticScaffold\Core\setup();

// Require Composer autoloader if it exists.
if ( file_exists( PRAGMATIC_SCAFFOLD_PATH . '/vendor/autoload.php' ) ) {
	require_once PRAGMATIC_SCAFFOLD_PATH . 'vendor/autoload.php';
}
