<?php

/**
 * Plugin Name: plugin-starter-template
 * Plugin URI: https://acerohernan.com/
 * Description: plugin-starter-template
 * Version: 0.0.1
 * Author: Hernan Acero
 * Author URI: https://acerohernan.com
 * Text Domain: plugin-starter-template
 * Domain Path: /i18n/languages/
 * Requires at least: 6.4
 * Requires PHP: 7.4
 *
 * @package plugin-starter-template
 */


namespace PluginStarterTemplate;

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/src/shortcode.php';
require_once __DIR__ . '/src/config.php';


/* HOOKS */

function handle_activation_hook()
{
}

function handle_deactivation_hook()
{
}


register_activation_hook(__FILE__, __NAMESPACE__ . "\\handle_activation_hook");
register_activation_hook(__FILE__, __NAMESPACE__ . "\\handle_deactivation_hook");

/* HOOKS */

/* SHORTCODE */

Shortcode\bootstrap();

/* SHORTCODE */