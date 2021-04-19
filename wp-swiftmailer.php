<?php
/**
 * Plugin Name: Wordpress SwiftMailer Plugin
 * Description: SwiftMailer
 * Version:     5.4.12
 * License:     MIT
 */
 
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( !function_exists( 'wp_swiftmailer_load' ) ) 
{
	function wp_swiftmailer_load()
	{
		if (!class_exists(Swift_Message::class))
		{
			require_once __DIR__ . "/vendor/autoload.php";
		}
	}

	/* Remove plugin updates */
	add_filter( 'site_transient_update_plugins', 'wp_swiftmailer_filter_plugin_updates' );
	function wp_swiftmailer_filter_plugin_updates($value)
	{
		$name = plugin_basename(__FILE__);
		if (isset($value->response[$name]))
		{
			unset($value->response[$name]);
		}
		return $value;
	}
}
