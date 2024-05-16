<?php

namespace PluginStarterTemplate\Shortcode;

use Kucrut\Vite;

function register()
{
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
    enqueue_script();

    ob_start();
?>
    <div id="my-app" class="my-app">
        <h2>Hello from PluginStarterTemplate!</h2>
        <button type="button">Count is <span>0</span></button>
    </div>
<?php
    return ob_get_clean();
}
