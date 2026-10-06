<?php
/**
 * Plugin Name:       Gazelle Blocks
 * Plugin URI:        https://github.com/your-username/gazelle-blocks
 * Description:       Precision-engineered, performance-first Gutenberg blocks inspired by Apple's minimalist aesthetic.
 * Version:           0.1.0
 * Requires at least: 6.4
 * Requires PHP:      8.0
 * Author:            Joao Victor Angeline
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       gazelle-blocks
 * Domain Path:       /languages
 */

declare(strict_types=1);

namespace GazelleBlocks;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'GAZELLE_BLOCKS_VERSION', '0.1.0' );
define( 'GAZELLE_BLOCKS_PATH', plugin_dir_path( __FILE__ ) );
define( 'GAZELLE_BLOCKS_URL', plugin_dir_url( __FILE__ ) );

// Autoloader.
if ( file_exists( GAZELLE_BLOCKS_PATH . 'vendor/autoload.php' ) ) {
	require_once GAZELLE_BLOCKS_PATH . 'vendor/autoload.php';
}

add_action( 'plugins_loaded', static function (): void {
	Plugin::get_instance()->boot();
} );