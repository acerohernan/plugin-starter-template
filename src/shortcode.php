<?php

namespace PluginStarterTemplate\Shortcode;

use Kucrut\Vite;

function bootstrap()
{
    add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\enqueue_script');
    add_shortcode('plugin-starter-template2', __NAMESPACE__ . '\\render_shortcode');
}


/**
 * Enqueue script
 */
function enqueue_script(): void
{
    Vite\enqueue_asset(
        dirname(__DIR__) . '/assets/dist',
        'assets/js/index.js',
        [
            'handle' => 'vite-for-wp-vanilla',
            'in-footer' => true,
        ]
    );
}
/**
 * Render application's markup
 */
function render_shortcode()
{
    ob_start();
?>
    <div id="my-app" class="my-app">
        <h2>Hello from Vite!</h2>
        <button type="button">Count is <span>0</span></button>
    </div>
<?php
    return ob_get_clean();
}
