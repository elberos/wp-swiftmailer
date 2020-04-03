<?php
/**
 * Plugin Name: Wordpress SwiftMailer Plugin
 * Plugin URI:  https://github.com/elberos/wp-swiftmailer
 * Description: SwiftMailer
 * Version:     5.4.12
 * License:     MIT
 */
 
 
if ( !function_exists( 'wp_swiftmailer_load' ) ) 
{

function wp_swiftmailer_load()
{
	require_once __DIR__ . "/vendor/autoload.php";
}

}
