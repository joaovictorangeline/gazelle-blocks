<?php
/**
 * Core Plugin Orchestrator.
 *
 * @package GazelleBlocks
 */

declare(strict_types=1);

namespace GazelleBlocks;

/**
 * Main plugin bootstrap class.
 */
final class Plugin {

	/**
	 * Singleton instance.
	 *
	 * @var self|null
	 */
	private static ?self $instance = null;

	/**
	 * Private constructor to prevent direct instantiation.
	 */
	private function __construct() {}

	/**
	 * Retrieves the singleton instance.
	 *
	 * @return self
	 */
	public static function get_instance(): self {
		if ( null === self::$instance ) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	/**
	 * Bootstraps the plugin services and hooks.
	 */
	public function boot(): void {
		// Services registration will go here.
	}
}
